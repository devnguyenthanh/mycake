@extends('admin.main')
@section('admin_content')
    <!-- form start -->
        <form action="{{asset('contacts')}}/edit/{{$contact['id']}}" method="post">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group"  enctype="multipart/form-data">
                    <label for="exampleInputEmail1"> Chỉnh Sửa Địa Chỉ Cửa Hàng </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{  $contact->address }}" name="address">
                </div>

                <div class="form-group">
                    <label for="nameauthor"> Chỉnh Sửa Số Điện Thoại </label>
                    <input type="text" class="form-control" id="nameauthor" placeholder="{{ $contact->phone }}" name="phone">
                </div>

                <div class="form-group">
                    <label for="nameauthor"> Chỉnh Sửa Email </label>
                    <input type="text" class="form-control" id="nameauthor" placeholder="{{ $contact->email }}" name="email">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Chỉnh Sửa Thông Tin </button>
            </div>
        </form>
        <!-- /.card-body -->
@endsection

