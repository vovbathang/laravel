<?php

namespace App\Http\Controllers\Frontend;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Trang chủ
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['products'] = Product::orderBy('id', 'desc')->limit(12)->get();
        $data['featured_products'] = Product::where('featured_product', 1)->orderBy('id', 'desc')->limit(12)->get();
        $data['recent_products'] = [];

//        Best Seller Products
        $time = time();
        $last7days = date('Y-m-d', time() - 86400 * 7);
        $now = date('Y-m-d', $time);
        $data['best_sellers'] = Product::
        select('id', 'name', 'code','sale_price', 'image')
            ->join(DB::raw('
            (SELECT product_id, SUM(quantity) sum_quantity FROM product_order 
            WHERE DATE(updated_at) BETWEEN ? AND ?
            GROUP BY product_id
            ORDER BY sum_quantity DESC
            LIMIT 7) best_sellers
            '), function($join) {
                $join->on('products.id','=', 'best_sellers.product_id');
            })
            ->addBinding([$last7days, $now])
            ->get();

        if (is_array($request->cookie('recent_products'))) {
            $data['recent_products'] = Product::whereIn('id', $request->cookie('recent_products'))->limit(6)->get();
        }
        return view('frontend.default.index', $data);
    }

    /**
     * Đây là trang hiển thị sản phẩm
     */
    public function show(Request $request, $slug, $id)
    {
        $data['product'] = Product::find($id);

        $recent_products = is_array($request->cookie('recent_products')) ? $request->cookie('recent_products') : [];
        if (!in_array($data['product']->id, $recent_products)) {
            array_unshift($recent_products, $data['product']->id);
            if (count($recent_products) > 6) {
                $recent_products = array_slice($recent_products, 0, 6);
            }
        }
        $cookie = cookie('recent_products', $recent_products, 1440);
        $data['recent_products'] = [];
        if (is_array($recent_products)) {
            $data['recent_products'] = Product::whereIn('id', $recent_products)->limit(6)->get();
        }

        return response()->view('frontend.default.single-product', $data)->cookie($cookie);
    }

    public function comment(Request $request, $slug, $id)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
            'score' => 'required|between:1,5'
        ], [
//            Required
            'name.required' => 'Yêu cầu nhập tên',
            'email.required' => 'Yêu cầu nhập Email',
            'content.required' => 'Yêu cầu nhập nội dung',
            'score.required' => 'Yêu cầu nhập vào điểm số',
//            Email
            'email.email' => 'Không đúng định dạng Email',
//            Between
            'score.between' => 'Vui lòng chỉ nhập từ :min tới :max khi chấm điểm'
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            Comment::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'content' => $request->input('content'),
                'rating' => $request->input('score'),
                'product_id' => $id,
            ]);

            return redirect()->back()->with('message', 'Bạn đã đánh giá thành công');
        }
    }
}
