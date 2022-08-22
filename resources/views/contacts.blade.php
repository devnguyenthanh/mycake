@include('head')

<style>
  h2, hr {
    color: #e03a53;
  }

 .headline {
            text-align: center;
            margin: 40px 0;
        }     

</style>

 <!-- Menu Section -->
 <hr>
 <div class="w3-row w3-padding-64" id="menu">
  <div class="headline">
    <h2>Hệ Thống Cửa Hàng</h2>
  </div>
  @foreach($contacts as $contact)
    <div class="w3-col l6 w3-padding-large">
      {{-- <h3 class="w3-center">Chuỗi Cửa Hàng Thanh Cake </h3><br> --}}
      <h5>Địa chỉ cửa hàng: {{$contact['address']}}</h5>
      <p class="w3-text-grey">Thanh Cake cung cấp các loại bánh mì tươi, bánh mì ngọt, bánh mì mặn, bánh mì kẹp</p><br>

      <h5>Số điện thoại: {{$contact['phone']}}</h5>
      <p class="w3-text-grey">Thanh Cake cung cấp các loại bánh mì tươi, bánh mì ngọt, bánh mì mặn, bánh mì kẹp</p><br>

      <h5>Email cửa hàng: {{$contact['email']}}</h5>
      <p class="w3-text-grey">Thanh Cake cung cấp các loại bánh mì tươi, bánh mì ngọt, bánh mì mặn, bánh mì kẹp</p><br>

    <div class="w3-col l6 w3-padding-large">
      <img src="{{asset('template/w3images/3.jpg')}}" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>
  @endforeach
  </div>
  <hr>
  <!-- End page content -->
  
  @include('footer')