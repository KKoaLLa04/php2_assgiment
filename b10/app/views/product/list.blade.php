@extends('layout.main')

@section('content')
    <h1 class="text-center">Danh sách sản phẩm</h1>
   <a href="{{BASE_URL}}/add-product" class="btn btn-success">Them moi <i class="fa fa-plus"></i></a>
    <hr/>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tiêu đề</th>
                <th>Gía</th>
                <th>Số lượng</th>
                <th>Nội dung</th>
            </tr>
        </thead>

        <tbody>
            @if(!empty($data))
                @foreach($data as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->content}}</td>
                <td></td>
            </tr>
                @endforeach 
            @endif
        </tbody>
    </table>
@endsection