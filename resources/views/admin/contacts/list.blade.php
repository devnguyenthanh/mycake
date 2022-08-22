@extends('admin.main')
@section('admin_content')
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:50px">ID</th>
                <th>Địa Chỉ Cửa Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th style="width:100px"> &nbsp; </th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact['id']}}</td>
                <td>{{$contact['address']}}</td>
                <td>{{$contact['phone']}}</td>
                <td>{{$contact['email']}}</td>
                <td>
                    <a href="{{asset('contacts')}}/{{$contact['id']}}" target="_blank">
                        <i class="fas fa-edit"></i>
                    </a> &nbsp;
                    
                    <a href="#" class="delete-shop" onclick="deleteContact({{$contact['id']}})">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
    
</div>
@endsection