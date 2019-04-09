<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>E-riil Store | Cart</title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/et-line-icons.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/themes.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/shop/cart.css') }}">

  <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="assetjs/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->


</head>


<body>


  @include('partials.headers')




  <section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Shopping Cart</h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
              Duis sed odio sit amet nibh vulputate cursus a sit amet.
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Shop</a></li>
              <li class="active">Cart</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->




  <section class="cart-section">
      <div class="section-padding">
        <div class="container">
          <div class="per-order-items">
              <form method="post" action="{{url('cart/delete/'.Auth::user()->id)}}">

                {{csrf_field()}}
            <table class="cart-table">
              <tbody>
                <tr class="order-head">
                  <th>PRODUCTS</th>
                  <th>UNIT PRICE</th>
                  <th>QUANTITY</th>
                  <th>SUBTOTAL</th>

                </tr>

                @php
				$total_all = 0;
				@endphp

				@foreach($cart as $data)
                <input type="hidden" name="id[]" value="{{$data->id}}">

                <tr>

                  <td class="order-item">
                    <button class="del"><i class="ti-trash"></i></button>
                    <div class="item-thumbnail">
                      <img src="{{asset('/assets/admin/images/product/'.$data->Product->foto)}}" alt="images">
                    </div><!-- /.item-thumbnail -->

                    <div class="item-details">
                      <h3 class="item-title">{{$data->Product->nama}}</h3>
                      {{-- <div class="product-meta">
                        <span class="meta-id"> Color: <span class="meta-about">Black</span></span>
                        <span class="meta-id"> Size: <span class="meta-about">XL</span></span>
                      </div><!-- /.product-meta --> --}}
                    </div><!-- /.item-details -->
                  </td>
                  <td class="unit-price"><span class="currency">$</span><span class="price">{{number_format($data->Product->harga,2,',','.')}}</span></td>

                  <td class="order-count">
                    <div class="cart-counter">
                      <button class="item-minus"><i class="ti-minus"></i></button>
                      <span class="item-count">1</span>
                      <button class="item-plus"><i class="ti-plus"></i></button>
                    </div><!-- /.cart-counter -->
                  </td>

                  <td class="total-price"><span class="currency">$</span><span class="price">{{number_format($data->Product->harga,2,',','.')}}</span></td>

                  <td class="edit"><button><i class="ti-pencil"></i></button></td>
                </tr>
               @endforeach

              </tbody>
            </table><!-- /.cart-table -->

            <div class="cart-buttons">
              <button class="clear-cart">Clear shopping cart</button>
              <button class="update-cart">Update shopping cart</button>
              <button class="continue pull-right">Continue shopping</button>
            </div><!-- /.cart-buttons -->
          </div><!-- /.per-order-items -->

          <div class="billing-table">
            <div class="row">
              <div class="discount-details col-md-4 col-sm-6">
                <h3 class="title">Have a cupon?</h3>
                <form action="#">
                  <input class="form-input" type="text" placeholder="Cupon Code">
                  <button type="submit" class="btn submit-code">Apply Code</button>
                </form>
              </div><!-- /.discount-details -->

              <div class="shipping-details col-md-4 col-sm-6">
                <h3 class="title">Calculating Shipping</h3>
                <form action="#">
                    <select name="country" id="Country-name" class="form-input">
                      <option value="">Country*</option>
                      <option value="1">USA</option>
                      <option value="2">Franch</option>
                      <option value="3">Germany</option>
                      <option value="4">Russia</option>
                    </select>

                    <select name="country" id="state-province" class="form-input">
                      <option value="">State/Province*</option>
                      <option value="1">Florida</option>
                      <option value="2">NY</option>
                      <option value="3">LA</option>
                      <option value="4">PH</option>
                    </select>

                    <input id="zip-code" class="form-input" type="text" placeholder="Post/Zip Code" required="">

                    <button class="btn btn-xs" type="submit">Estimate</button>

                </form>
              </div><!-- /.shipping-details -->

              <div class="billing-order col-md-4 col-sm-6">
                <div class="order-cost">
                  <ul>
                    <li>
                      <div class="bill-name">Sub-total</div>
                      <div class="amount"><span class="currency">$</span><span class="count">@php
                        $t_s = $data->Product->jumlah_brg * $data->Product->harga;
                        $total_all = $total_all + $t_s;
                      @endphp</span></span></div>
                    </li>
                    <li>
                      <div class="bill-name">Shipping</div>
                      <div class="amount"><span class="currency">$</span><span class="count">25.00</span></div>
                    </li>
                    <li>
                      <div class="bill-name total">Order Total</div>
                      <div class="amount total"><span class="currency">$</span><span class="count">370.00</span></div>
                    </li>
                  </ul>
                  <button class="btn">Proceed to checkout</button>
                </div><!-- /.order-cost -->
              </div><!-- /.billing-order -->
            </div><!-- /.row -->
          </div><!-- /.billing-table -->
        </div><!-- /.contaier -->
      </div><!-- /.section-padding -->
    </section><!-- /.cart-section -->






@include('partials.footers')



  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>
  </div>



  <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>



</body>
</html>
