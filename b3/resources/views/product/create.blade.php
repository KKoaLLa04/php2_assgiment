@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm sản phẩm</div>

                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            Vui lòng kiểm tra lại dữ liệu!
                        </div>
                    @endif

                    <form action="{{route('product.store')}}" method="POST">

                        <div class="row">
                            <div class="col-6">
                                <label for="">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" placeholder="Tiêu đề sản phẩm...">
                                @error('title')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Giá</label>
                                <input type="number" name="price" class="form-control" placeholder="Giá sản phẩm....">
                            </div>

                            <div class="col-6">
                                <label for="">Số lượng</label>
                                <input type="number" name="quantity" class="form-control" placeholder="Số lượng sản phẩm....">
                            </div>

                            <div class="col-6">
                                <label for="">Mô tả ngắn</label>
                                <textarea name="description" class="form-control" placeholder="Mô tả ngắn"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="">Nội dung</label>
                                <textarea name="content" cols="30" rows="10" placeholder="Nội dung mô tả..." class="form-control"></textarea>
                            </div>

                        </div>

                        @csrf 
                        <hr>
                        <button class="btn btn-primary" type="submit">Thêm mới</button>
                    </form>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
