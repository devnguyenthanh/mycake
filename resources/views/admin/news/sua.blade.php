@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="{{asset('news')}}/edit/{{$new['id']}}" method="post">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group"  enctype="multipart/form-data">
                    <label for="exampleInputEmail1"> Chỉnh Sửa Tên Bài Viết </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $new->title }}" name="title">
                </div>

                <div class="form-group">
                    <label for="nameauthor"> Chỉnh Sửa Tiêu Đề Phụ </label>
                    <input type="text" class="form-control" id="nameauthor" value="{{ $new->sub_title }}" name="sub_title">
                </div>

                <div class="form-group">
                    <label for="editor1">Chỉnh Sửa Nội Dung Bài Viết</label>
                    <textarea class="form-control" id="editor1" name="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="nameauthor">chọn ảnh </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa Bài Viết </button>
            </div>
        </form>
        <!-- /.card-body -->
@endsection