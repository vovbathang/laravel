@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Danh sách đơn hàng</div>
                    <div class="panel-body">
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Tài khoản</th>
                                    <th>Sản phẩm</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>
                                            @if ($order->user !== null)
                                                <i class="glyphicon glyphicon-ok text-success"></i>
                                            @else
                                                <i class="glyphicon glyphicon-remove text-danger"></i>
                                            @endif
                                        </td>
                                        <td>{{ $order->products()->count() }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.order.show', ['id' => $order->id]) }}"
                                               class="btn btn-primary">Xem</a>
                                            <a href="{{ route('admin.order.delete', ['id' => $order->id]) }}"
                                               class="btn btn-danger"
                                               onclick="event.preventDefault();
                                                        window.confirm('Bạn đã chắc chắn xóa chưa?') ?
                                                       document.getElementById('order-delete-{{ $order->id }}').submit() :
                                                       0;">Xóa</a>
                                            <form action="{{ route('admin.order.delete', ['id' => $order->id]) }}"
                                                  method="post" id="order-delete-{{ $order->id }}">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No data</td>
                                    </tr>
                                @endforelse


                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection