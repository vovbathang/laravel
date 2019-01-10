<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 10/01/2019
 * Time: 17:21
 */
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


    public function create() {
        $data['products'] = Product::where([
            ['parent', '=', 0],
            ['id', '<>', 1],
        ])->get();
        return view('admin.products.create', $data);
    }

    public function store(Request $request) {
        $valid = Validator::make($request->all(), [
            'name' => 'required|unique:products,name',
            'parent' => 'required'
        ], [
            'name.required' => 'Vui lòng nhập Tên sản phẩm',
            'name.unique' => 'Sản phẩm đã trùng, vui lòng chọn tên khác',
            'parent.required' => 'Vui lòng nhập Parent ID',
            'parent.exists' => 'Parent ID không hợp lệ'
        ]);

        $valid->sometimes('parent', 'exists:products,id', function($input) {
            return $input->parent !== "0";
        });
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $order = 0;
            if ($request->input('order')) {
                $order = $request->input('order');
            }
            $product = Product::create([
                'name' => $request->input('name'),
                'slug' => str_slug($request->input('name')),
                'parent' => $request->input('parent'),
                'order' => $order
            ]);
            return redirect()->route('admin.product.index')->with('message', "Thêm sản phẩm $product->name thành công");
        }
    }

    public function show($id) {
        $data['product'] = Product::find($id);
        dd($data['product']->tags);
        if ($data['product'] !== null) {
            return view('admin.products.show', $data);
        }
        return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm này');
    }

    public function update(Request $request, $id) {
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

    public function delete($id) {
        $product = Product::find($id);
        if ($product !== null) {
            $product->delete();
            return redirect()->route('admin.product.index')->with('message', "Xóa sản phẩm $product->name thành công");
        }
        return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm này');
    }
}