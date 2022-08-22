@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="{{asset('products')}}/edit/{{$product['id']}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group" >
                    <label for="exampleInputEmail1"> Chỉnh Sửa Tên Sản Phẩm </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $product->name }}" name="name">
                </div>

                <div class="form-group">
                    <label for="nameauthor"> Chỉnh Sửa Giá </label>
                    <input type="number" class="form-control" id="nameauthor" value="{{ $product->price }}" name="price">
                </div>

                <div class="form-group">
                    <label for="nameauthor">Chọn ảnh </label>
                    <input type="file" class="form-control" id="image" name="image" >
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa Sản Phẩm </button>
            </div>
        </form>
        <!-- /.card-body -->
@endsection

