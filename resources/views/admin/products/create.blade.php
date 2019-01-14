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
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" target="_blank">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm"
                                       value="{{ old('name') }}">
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
                                <label for="code">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Mã sản phẩm"
                                       value="{{ old('code') }}">
                                <span class="help-block">{{ $errors->first('code') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                                <label for="content">Nội dung</label>
                                <textarea name="content" id="content" rows="5" class="form-control" placeholder="Nội dung">{{ old('content') }}</textarea>
                                <span class="help-block">{{ $errors->first('content') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('regular_price') ? 'has-error' : '' }}">
                                <label for="regular_price">Giá thị trường</label>
                                <input type="number" min="1" class="form-control" id="regular_price" name="regular_price" placeholder="Giá thị trường"
                                       value="{{ old('regular_price') }}">
                                <span class="help-block">{{ $errors->first('regular_price') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('sale_price') ? 'has-error' : '' }}">
                                <label for="sale_price">Giá bán</label>
                                <input type="number" min="0" class="form-control" id="sale_price" name="sale_price" placeholder="Giá bán"
                                       value="{{ old('sale_price') }}">
                                <span class="help-block">{{ $errors->first('sale_price') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('original_price') ? 'has-error' : '' }}">
                                <label for="original_price">Giá gốc</label>
                                <input type="number" min="0" class="form-control" id="original_price" name="original_price" placeholder="Giá gốc"
                                       value="{{ old('original_price') }}">
                                <span class="help-block">{{ $errors->first('original_price') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
                                <label for="quantity">Số lượng</label>
                                <input type="number" min="0" class="form-control" id="quantity" name="quantity" placeholder="Số lượng"
                                       value="{{ old('quantity') }}">
                                <span class="help-block">{{ $errors->first('quantity') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                                <label for="image">Hình sản phẩm</label>
                                <input type="file" class="form-control" id="image" name="image"
                                       value="{{ old('image') }}">
                                <span class="help-block">{{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                <label for="category_id">Chuyên mục cha</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @if (count($categories) > 0)
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    @endif

                                </select>
                                <span class="help-block">{{ $errors->first('category_id') }}</span>
                            </div>


                            <button type="submit" class="btn btn-success">Tạo sản phẩm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection