@extends('admin.main')
@section('admin_content')
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:50px">ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Tiền</th>
                <th>Ảnh</th>
                <th style="width:100px"> &nbsp; </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product['id']}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']}}</td>
                <td >
                    <img src="{{asset($product['image'])}}" alt="" style="max-width: 150px">
                </td>
                <td>
                    <a href="{{asset('products')}}/{{$product['id']}}" target="_blank">
                        <i class="fas fa-edit"></i>
                    </a> &nbsp;
                    
                    <a href="#" class="delete-shop" onclick="deleteProduct({{$product['id']}})">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
    
</div>
@endsection