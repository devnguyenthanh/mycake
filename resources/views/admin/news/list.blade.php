@extends('admin.main')
@section('admin_content')
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:50px">ID</th>
                <th>Tên Bài Viết</th>
                <th>Tiêu Đề Phụ</th>
                <th>Nội Dung</th>
                <th>Ảnh</th>
                <th style="width:100px"> &nbsp; </th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $new)
            <tr>
                <td>{{$new['id']}}</td>
                <td>{{$new['title']}}</td>
                <td>{{$new['sub_title']}}</td>
                <td>{{$new['content']}}</td>
                <td >
                    <img src="{{asset($new['image'])}}" alt="" style="max-width: 150px">
                </td>
                <td>
                    <a href="{{asset('news')}}/{{$new['id']}}" target="_blank">
                        <i class="fas fa-edit"></i>
                    </a> &nbsp;
                    
                    <a href="#" class="delete-shop" onclick="deleteNew({{$new['id']}})">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
    
</div>
@endsection