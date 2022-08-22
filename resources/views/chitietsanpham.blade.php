@include('head')
<div class="content">

    <!-- Page content -->
<body>
<style>
body {
  background-color: #fdf1ec;
}

.wrapper {
  height: 420px;
  width: 654px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;
  /* VIA CSS MATIC https://goo.gl/cIbnS */
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
}

.product-img img {
  border-radius: 7px 0 0 7px;
  object-fit: contain;
}

.product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h4 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 20px;
  color: #474747;
}

.product-text h4,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-text h5 {
  margin: 0 0 47px 38px;
  font-size: 10px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #fe6787;
  letter-spacing: 0.2em;
}

.product-text p {
  height: 125px;
  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #605454;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 20px;
  font-weight: lighter;
  color: #fe6787;
}

span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 20px;
}

.product-price-btn button {
  float: right;
  display: inline-block;
  height: 40px;
  width: 130px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #3f3333;
  background-color: #fe6787;
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}
</style>


  <div class="wrapper">
    <div class="product-img">
      <img src="{{asset($product['image'])}}" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
         <h4>{{$product['name']}}</h4> 
        <h5>by Thanh Cake</h5>
        <p>Nếu muốn tư vấn xin liên hệ với chúng tôi<br> trước khi đặt hàng quý khách có thể gọi đến<br> hotline: 0961039842<br> Hoặc nhắn qua mail cửa hàng:<br> thanhcake@gmail.com </p>
      </div>
      <div class="product-price-btn">
        <p><span>{{number_format($product['price'],0,",",".").' '.'VND'}}</span></p>
        <button type="button">Đặt Mua</button>
      </div>
    </div>
  </div>

</body>
 <!-- End page content -->
</div>
    
@include('footer')


</div>