<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $cart = is_array($request->cookie('cart')) ? $request->cookie('cart') : [];
        $data['products'] = [];
        $data['total'] = 0;
        if (count($cart) > 0) {
            $products = Product::whereIn('id', array_keys($cart))->get();
            $total = 0;
            foreach ($products as $product) {
                if (array_key_exists($product->id, $cart)) {
                    $product->quantity = $cart[$product->id]['quantity'];
                    $product->subtotal = $product->quantity * $product->sale_price;
                    $total += $product->subtotal;

                    if ($cart[$product->id]['name'] != $product->name) {
                        $cart[$product->id]['name'] = $product->name;
                    }
                } else {
                    unset($cart[$product->id]);
                }
            }
            $data['products'] = $products;
            $data['total'] = $total;
        } else {
            return redirect()->route('frontend.home.index');
        }
        $cookie = cookie('cart', $cart, 720);
        return response()->view('frontend.default.checkout', $data)->withCookie($cookie);
    }

    public function placeOrder(Request $request)
    {
        $cart = is_array($request->cookie('cart')) ? $request->cookie('cart') : [];
        if (count($cart) > 0) {
            $valid = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'address' => 'required'
            ], [
//                Required
                'name.required' => 'Yêu cầu nhập họ tên',
                'email.required' => 'Yêu cầu nhập Email',
                'phone.required' => 'Yêu cầu nhập số điện thoại',
                'address.required' => 'Yêu cầu nhập địa chỉ',
//                Email
                'email.email' => 'Yêu cầu nhập đúng chuẩn Email',
//                Numeric
                'phone.numeric' => 'Vui lòng nhập số',
            ]);
            if ($valid->fails()) {
                return redirect()->back()->withErrors($valid)->withInput();
            } else {
                $products = Product::whereIn('id', array_keys($cart))->get();
                $productsID = [];
                foreach ($products as $product) {
                    if (array_key_exists($product->id, $cart)) {
                        $productsID[$product->id] = [
                            'quantity' => $cart[$product->id]['quantity']
                        ];
                    }
                }
                $order = Order::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'address' => $request->input('address'),
                    'user_id' => auth()->check() ? auth()->id() : null
                ]);
                $order->products()->sync($productsID);
                $cookie = cookie('cart', [], 720);
                return redirect()->route('frontend.checkout.thankyou')
                    ->with('orderID', $order->id)
                    ->withCookie($cookie);
            }
        } else {
            return redirect()->route('frontend.home.index');
        }
    }

    public function thankyou()
    {
        return view('frontend.default.thankyou');
    }
}
