
@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="create" method="post"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1"> Địa Chỉ Cửa Hàng </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Địa Chỉ" name="address">
                </div>
                <div class="form-group">
                    <label for="editor1"> Số Điện Thoại</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Số Điện Thoại" name="phone">
                </div>
                <div class="form-group">
                    <label for="editor1"> Email Cửa Hàng</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email Cửa Hàng" name="email">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> Thêm Thông Tin Liên Hệ  </button>
                </div>
             </div>
        </form>
        <!-- /.card-body -->
@endsection