<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
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
        $cart = is_array($request->cookie('cart')) ? $request->cookie('cart') : [];
        if (count($cart) > 0) {
            //            Tính tổng số tiền
            $sumPrice = 0;
            foreach ($cart as $value) {
                $sumPrice += $value['quantity'] * $value['price'];
            }
            $data = [
                'total' => count($cart),
                'sumPrice' => number_format($sumPrice, 0, ',', '.'),
                'cart' => $cart
            ];
            return view('frontend.default.cart', $data);
        }
        return redirect()->route('frontend.home.index');
    }

    public function updateCart(Request $request) {
        $cart = is_array($request->cookie('cart')) ? $request->cookie('cart') : [];
        foreach ($request->input('cart') as $key => $quantity) {
            if (isset($cart[$key]) && $quantity > 0) {
                $cart[$key]['quantity'] = $quantity;
            } elseif (isset($cart[$key])) {
                unset($cart[$key]);
            }
        }
        $cookie = cookie('cart', $cart, 720);
        return redirect()->route('frontend.cart.index')->withCookie($cookie);
    }

    public function deleteCart(Request $request, $id) {
        $cart = is_array($request->cookie('cart')) ? $request->cookie('cart') : [];
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        $cookie = cookie('cart', $cart, 720);
        return redirect()->route('frontend.cart.index')->withCookie($cookie);
    }

    public function deleteAll(Request $request) {
        $cookie = cookie('cart', [], 720);
        return redirect()->route('frontend.cart.index')->withCookie($cookie);
    }


//    AJAX
    public function addToCart(Request $request)
    {
        $id = $request->input('id');
        if ($request->ajax() && is_numeric($id)) {
            $product = Product::find($id);
            if ($product !== null) {
                $cart = is_array($request->cookie('cart')) ? $request->cookie('cart') : [];
                if (!array_key_exists($id, $cart)) {
                    $cart[$id] = [
                        'name' => $product->name,
                        'code' => $product->code,
                        'price' => $product->sale_price,
                        'image' => $product->image ? asset("uploads/$product->image") : asset('images/no_image_thumb.jpg'),
                        'quantity' => is_numeric($request->input('quantity')) && $request->input('quantity') > 0 ? $request->input('quantity') : 1
                    ];
                } else {
                    $cart[$id]['quantity'] += is_numeric($request->input('quantity')) && $request->input('quantity') > 0 ? $request->input('quantity') : 1;
                }

//            Tính tổng số tiền
                $sumPrice = 0;
                $cartTemp = $cart;
                foreach ($cart as $key => $value) {
                    $sumPrice += $value['quantity'] * $value['price'];
                    $cart[$key]['price'] = number_format($cart[$key]['price'], 0, ',', '.');
                }
                $cookie = cookie('cart', $cartTemp, 720);
                return response()->json([
                    'message' => 'Đã thêm vào giỏ hàng thành công',
                    'total' => count($cart),
                    'sumPrice' => number_format($sumPrice, 0, ',', '.'),
                    'cart' => $cart
                ])->withCookie($cookie);
            }
        }
    }

    public function getCart(Request $request)
    {
        $cart = is_array($request->cookie('cart')) ? $request->cookie('cart') : [];
        //            Tính tổng số tiền
        $sumPrice = 0;
        foreach ($cart as $key => $value) {
            $sumPrice += $value['quantity'] * $value['price'];
            $cart[$key]['price'] = number_format($cart[$key]['price'], 0, ',', '.');
        }
        return response()->json([
            'message' => 'Đã thêm vào giỏ hàng thành công',
            'total' => count($cart),
            'sumPrice' => number_format($sumPrice, 0, ',', '.'),
            'cart' => $cart
        ]);
    }
}
