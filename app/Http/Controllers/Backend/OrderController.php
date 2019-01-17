<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['orders'] = Order::orderBy('id', 'desc')->paginate(20);

        return view('admin.orders.index', $data);
    }

    public function show($id) {
        $data['order'] = Order::find($id);
        if ($data['order'] !== null) {
            return view('admin.orders.show', $data);
        }
        return redirect()->route('admin.order.index')->with('error', 'Không tìm thấy đơn hàng này');
    }
    
    public function delete($id) {
        $order = Order::find($id);
        if ($order !== null) {
            $order->delete();
            return redirect()->route('admin.order.index')->with('message', "Xóa đơn hàng $order->name thành công");
        }
        return redirect()->route('admin.order.index')->with('error', 'Không tìm thấy đơn hàng này');
    }
}
