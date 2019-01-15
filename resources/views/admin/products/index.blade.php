@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Tạo sản phẩm</a>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">Danh sách sản phẩm</div>
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
                                    <th>Tên</th>
                                    <th>Code</th>
                                    <th>Giá bán</th>
                                    <th>Số lượng</th>
                                    <th>Hình ảnh</th>
                                    <th>Người đăng</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                                                <img src="{{ asset(get_thumbnail("uploads/$product->image")) }}" alt="Image" class="img-responsive img-thumbnail">
                                            @else
                                                <img src="{{ asset('images/no_image.jpg') }}" alt="No Image" class="img-responsive img-thumbnail">
                                            @endif
                                        </td>
                                        <td>{{ $product->user->name }}</td>
                                        <td>{{ $product->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.product.show', ['id' => $product->id]) }}"
                                               class="btn btn-primary">Sửa</a>
                                            <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}"
                                               class="btn btn-danger"
                                               onclick="event.preventDefault();
                                                       window.confirm('Bạn đã chắc chắn xóa chưa?') ?
                                                       document.getElementById('product-delete-{{ $product->id }}').submit() :
                                                       0;">Xóa</a>
                                            <form action="{{ route('admin.product.delete', ['id' => $product->id]) }}"
                                                  method="post" id="product-delete-{{ $product->id }}">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">Không có dữ liệu nào</td>
                                    </tr>
                                @endforelse


                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection