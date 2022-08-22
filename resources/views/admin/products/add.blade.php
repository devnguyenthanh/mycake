
@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="create" method="post"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1"> Tên Sản Phẩm </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên Sản Phẩm" name="name">
                </div>

                <div class="form-group">
                    <label for="editor1"> Giá Tiền Sản Phẩm</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Giá Tiền Sản Phẩm" name="price">
                </div>
                
                <div class="form-group">
                    <label for="nameauthor">chọn ảnh </label>
                    <input type="file" class="form-control" id="image" placeholder="chọn ảnh" name="image">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> Tạo Sản Phẩm </button>
                </div>
             </div>
        </form>
        <!-- /.card-body -->
@endsection