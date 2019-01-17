@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="{{ route('admin.order.index') }}" class="btn btn-primary">Danh sách đơn hàng</a>
                </div>
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Thông tin khách hàng</div>
                    <div class="panel-body">
                        <div class="row">
                            <label class="col-md-2">Họ tên</label>
                            <div class="col-md-10">{{ $order->name }}</div>
                        </div>
                        <div class="row">
                            <label class="col-md-2">Số điện thoại</label>
                            <div class="col-md-10">{{ $order->phone }}</div>
                        </div>
                        <div class="row">
                            <label class="col-md-2">Email</label>
                            <div class="col-md-10">{{ $order->email }}</div>
                        </div>
                        <div class="row">
                            <label class="col-md-2">Địa chỉ</label>
                            <div class="col-md-10">{{ $order->address }}</div>
                        </div>
                        <div class="row">
                            <label class="col-md-2">Tài khoản</label>
                            <div class="col-md-10">
                                @if ($order->user !== null)
                                    {{ $order->user->name }} ({{ $order->user->email }})
                                @else
                                    Không
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span>Thông tin sản phẩm</span>
                        <span class="pull-right">{{ $order->updated_at }}</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá tiền</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $total = 0;
                                @endphp
                                @foreach($order->products as $product)
                                    @php
                                        $subtotal = $product->pivot->quantity * $product->sale_price;
                                        $total += $subtotal;
                                    @endphp
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->pivot->quantity }}</td>
                                        <th>{{ get_currency_vn($product->sale_price) }}</th>
                                        <th>{{ get_currency_vn($subtotal) }}</th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-right"><strong>Tổng tiền</strong>: {{ get_currency_vn($total) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection