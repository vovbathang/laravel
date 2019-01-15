<?php

namespace App\Http\Controllers;

use App\Product;
use App\QHOnline\Facades\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['products'] = Product::with('user')->orderBy('id', 'desc')->paginate(20);

        return view('admin.products.index', $data);
    }


    public function create()
    {
        $data['categories'] = Product::orderBy('name', 'asc')->get();
        return view('admin.products.create', $data);
    }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'code' => 'required|unique:products,code',
            'content' => 'required',
            'regular_price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0',
            'original_price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'image' => 'image|max:2048',
            'category_id' => 'required|exists:categories,id'
        ], [
//            Required
            'name.required' => 'Vui lòng nhập Tên sản phẩm',
            'code.required' => 'Vui lòng nhập Mã sản phẩm',
            'content.required' => 'Vui lòng nhập Nội dung',
            'regular_price.required' => 'Vui lòng nhập Giá thị trường',
            'sale_price.required' => 'Vui lòng nhập Giá bán',
            'original_price.required' => 'Vui lòng nhập Giá gốc',
            'quantity.required' => 'Vui lòng nhập Số lượng',
            'category_id.required' => 'Vui lòng nhập CategoryID',
//            Unique
            'code.unique' => 'Mã sản phẩm đã trùng, vui lòng chọn mã khác',
//            Numeric
            'regular_price.numeric' => 'Vui lòng nhập số',
            'sale_price.numeric' => 'Vui lòng nhập số',
            'original_price.numeric' => 'Vui lòng nhập số',
            'quantity.numeric' => 'Vui lòng nhập số',
//            Min
            'regular_price.min' => 'Vui lòng nhập số và nhỏ nhất cho phép là :min',
            'sale_price.min' => 'Vui lòng nhập số và nhỏ nhất cho phép là :min',
            'original_price.min' => 'Vui lòng nhập số và nhỏ nhất cho phép là :min',
            'quantity.min' => 'Vui lòng nhập số và nhỏ nhất cho phép là :min',
//            Exists
            'category_id.exists' => 'Vui lòng nhập đúng CategoryID',
//              Image
            'image.image' => 'Không đúng chuẩn hình ảnh cho phép',
//            Size
            'image.max' => 'Dung lượng vượt quá giới hạn cho phép là :max KB'
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $imageName = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                if (file_exists(public_path('uploads'))) {
                    $folderName = date('Y-m');
                    $fileNameWithTimestamp = md5($image->getClientOriginalName() . time());
                    $fileName = $fileNameWithTimestamp . '.' . $image->getClientOriginalExtension();
                    $thumbnailFileName = $fileNameWithTimestamp . '_thumb' . '.' . $image->getClientOriginalExtension();
                    if (!file_exists(public_path('uploads/' . $folderName))) {
                        mkdir(public_path('uploads/' . $folderName), 0755);
                    }
//                    Di chuyển file vào folder Uploads
                    $imageName = "$folderName/$fileName";
                    $image->move(public_path('uploads/' . $folderName), $fileName);
                    Image::make(public_path("uploads/$folderName/$fileName"))
                        ->resize(200, 150)
                        ->save(public_path("uploads/$folderName/$thumbnailFileName"));
                }
            }

            $attributes = '';
            if ($request->has('attributes') && is_array($request->input('attributes')) && count($request->input('attributes')) > 0) {
                $attributes = $request->input('attributes');
                foreach ($attributes as $key => $attribute) {
                    if (!isset($attribute['name'])) {
                        unset($attributes[$key]);
                        continue;
                    }
                    if (!isset($attribute['value'])) {
                        unset($attributes[$key]);
                        continue;
                    }
                }
                $attributes = json_encode($attributes);
            }


            $product = Product::create([
                'name' => $request->input('name'),
                'code' => mb_strtoupper($request->input('code'), 'UTF-8'),
                'content' => $request->input('content'),
                'regular_price' => $request->input('regular_price'),
                'sale_price' => $request->input('sale_price'),
                'original_price' => $request->input('original_price'),
                'quantity' => $request->input('quantity'),
                'image' => $imageName,
                'attributes' => $attributes,
                'user_id' => auth()->id(),
                'category_id' => $request->input('category_id'),
            ]);
            return redirect()->route('admin.product.index')->with('message', "Thêm sản phẩm $product->name thành công");
        }
    }

    public function show($id)
    {
        $data['product'] = Product::find($id);
        dd($data['product']->tags);
        if ($data['product'] !== null) {
            return view('admin.products.show', $data);
        }
        return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm này');
    }

    public function update(Request $request, $id)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required|unique:products,name,' . $id,
            'parent' => 'required'
        ], [
            'name.required' => 'Vui lòng nhập Tên sản phẩm',
            'name.unique' => 'Sản phẩm đã trùng, vui lòng chọn tên khác',
            'parent.required' => 'Vui lòng nhập Parent ID',
            'parent.exists' => 'Parent ID không hợp lệ'
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $product = Product::find($id);
            if ($product !== null) {
                $order = 0;
                if ($request->input('order')) {
                    $order = $request->input('order');
                }
                $product->name = $request->input('name');
                $product->parent = $request->input('parent');
                $product->order = $order;
                $product->save();
                return redirect()->route('admin.product.index')->with('message', "Cập nhật sản phẩm $product->name thành công");
            }
            return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm này');
        }
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product !== null) {
            $product->delete();
            return redirect()->route('admin.product.index')->with('message', "Xóa sản phẩm $product->name thành công");
        }
        return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm này');
    }
}
