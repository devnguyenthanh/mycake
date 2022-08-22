@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="create" method="post"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1"> Tên Bài Viết </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên Bài Viết" name="title">
                </div>

                <div class="form-group">
                    <label for="nameauthor"> Tiêu Đề Phụ </label>
                    <input type="text" class="form-control" id="nameauthor" placeholder="Tiêu Đề Phụ" name="sub_title">
                </div>

                <div class="form-group">
                    <label for="editor1"> Nội Dung Bài Viết </label>
                    <textarea class="form-control" id="editor1" name="content"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="nameauthor">chọn ảnh </label>
                    <input type="file" class="form-control" id="image" placeholder="chọn ảnh" name="image">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> Tạo Bài Viết </button>
                </div>
             </div>
        </form>
        <!-- /.card-body -->
@endsection