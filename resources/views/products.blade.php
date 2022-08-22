
@include('head')
<div class="content">

    <!-- Page content -->
<body>
      <!-- Menu Section -->

      <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
        * {
            padding: 0;
            margin: 0;
        }
        body {
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            line-height: 1.15;
            /* color: #fe6787; */

        }

        #wrapper {
            max-width: 1170px;
            margin: 0 auto;
        }
        .headline {
            text-align: center;
            margin: 40px 0;
        }

        h3 {
            font-size: 18px;
            color:#fe6787;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid #fe6787;
            display: inline-block;
            font-weight: 600;
        }

        ul.products{
            display: flex;
             flex-wrap: wrap;         /*xuống hàng */
             justify-content: space-between;     /*dàn khung hiển thị theo hàng ngang */
            list-style: none;       /* làm mất dấu chấm*/
            }

        ul.products li {
            flex-basis: 25%;       /*thuộc tính xác định độ rộng của item*/
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }

        ul.products li img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

       

        .product-info {
            padding: 10px 0px;
        }

        .product-info a {
            display: block;
            text-decoration: none;
        }

        .product-info a.product-name{
            color:#fe6787;
            padding: 3px 0px;

        }

        .product-info .product-price{
            color: #c86d22;
            padding: 2px 0px;
            font-weight: 600;
        }
        .product-top{
            width: 250px;
            height: 250px;
            position: relative;
            overflow: hidden;
        }

        ul.products li:hover .product-top .product-thumb img{
            filter: opacity(80%);
        }



        ul.products li:hover a.buy-now {
            bottom: 0px;
        }

        .product-top a.buy-now{
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color: #fe6787;
            color: #111;
            padding: 10px 0px;
            position: absolute;
            width: 100%;
            bottom: -36px;
            transition: 0.25s ease-in-out;
            opacity: 0.70;
        }

        
      </style>


    <div id="wrapper">
         <div class="headline">
            <h3>Sản Phẩm Nổi Bật</h3>
         </div>
         <ul class="products">
            @foreach($products as $product)
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="{{asset('chitietsanpham')}}/{{$product['id']}}" class="product-thumb">
                            <img src="{{asset($product['image'])}}" alt="ảnh">
                        </a>
                        <a href="{{asset('chitietsanpham')}}/{{$product['id']}}" class="buy-now">mua ngay</a>
                    </div>
                    <div class="product-info">
                        <a href="{{asset('chitietsanpham')}}/{{$product['id']}}" class="product-name">{{$product['name']}}</a>
                        <div class="product-price">{{number_format($product['price'],0,",",".").' '.'VND'}}</div>
                    </div>
                </div>
            </li>
            @endforeach    
         </ul>
         {!! $products->links() !!}
    </div>



</body>

    <!-- End page content -->
    </div>
    
    @include('footer')
    
    
</div>
