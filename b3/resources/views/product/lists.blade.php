@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh sách sản phẩm</div>

                <div class="card-body">

                    <a href="{{route('product.create')}}" class="btn btn-success">Thêm sản phẩm mới <i class="fa fa-plus"></i></a>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                           <tr>
                                <th>#</th>
                                <th>Tiêu đề</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Nội dung</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                           </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
