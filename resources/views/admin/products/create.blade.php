@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary">Danh sách sản phẩm</a>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">Thêm sản phẩm</div>
                    <div class="panel-body">
                        <form action="{{ route('admin.product.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm"
                                       value="{{ old('name') }}">
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('order') ? 'has-error' : '' }}">
                                <label for="order">Thứ tự ưu tiên</label>
                                <input type="text" class="form-control" id="order" name="order" placeholder="Thứ tự ưu tiên"
                                       value="{{ old('order') }}">
                                <span class="help-block">{{ $errors->first('order') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('parent') ? 'has-error' : '' }}">
                                <label for="parent">Sản phẩm cha</label>
                                <select name="parent" id="parent" class="form-control">
                                    <option value="0">Không</option>
                                    @if (count($products) > 0)
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ old('parent') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                        @endforeach
                                    @endif

                                </select>
                                <span class="help-block">{{ $errors->first('parent') }}</span>
                            </div>


                            <button type="submit" class="btn btn-success">Tạo sản phẩm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection