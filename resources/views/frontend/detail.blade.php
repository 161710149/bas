<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>E-riil Store | Detail</title>
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
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/shop/shop-details.css') }}">

  <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="assets/frontend/js/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->


</head>


<body>



@include('partials.headers')

  
      
  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="product-details">

          <div class="post-navigation text-center">
            <a class="post-prev" href="shop-details-01.html"><i class="ti-arrow-left"></i></a>
            <a class="post-next" href="shop-details-01.html"><i class="ti-arrow-right"></i></a>
          </div><!-- /.post-navigation -->
       
          <div class="row">
            <div class="col-md-6">
              <div class="item-gallery vertical">                    
                <div class="tabs">
                  <div role="tabpanel" class="tabpanel">

                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane in active" id="item1">
                        <img src="{{asset('../assets/admin/images/product/'.$products->foto.'')}}" alt="Product Image"> 
                      </div>
                      <!-- <div role="tabpanel" class="tab-pane fade" id="item2">
                        <img src="/assets/frontend/images/shop/5.png" alt="Product Image"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item3">
                        <img src="/assets/frontend/images/shop/6.png" alt="Product Image"> 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="item4">
                        <img src="/assets/frontend/images/shop/7.png" alt="Product Image"> 
                      </div> -->
                    </div><!-- /.tab-content -->

                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#item1" aria-controls="item1" role="tab" data-toggle="tab" aria-expanded="true"><img src="/assets/frontend/images/shop/thumb/4.png" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item2" aria-controls="item2" role="tab" data-toggle="tab" aria-expanded="false"><img src="/assets/frontend/images/shop/thumb/5.png" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item3" aria-controls="item3" role="tab" data-toggle="tab" aria-expanded="true"><img src="/assets/frontend/images/shop/thumb/6.png" alt="Product Image"></a></li>
                      <li role="presentation" class=""><a href="#item4" aria-controls="item4" role="tab" data-toggle="tab" aria-expanded="true"><img src="/assets/frontend/images/shop/thumb/7.png" alt="Product Image"></a></li>
                    </ul><!-- /.nav-tabs -->

                  </div>
                </div><!-- /.item-gallery -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="about-product">
                <h3 class="item-title">{{$products->nama}}</h3>
                <div class="top-meta">
                  <a href="#">20 reviews</a>
                  <a href="#">Write a review</a>
                </div><!-- /.top-meta -->

                <div class="availability">
                  <button>Stock now : {{$products->stok}}<i class="ti-check-box"></i></button>
                </div><!-- /.availability -->

                <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                <div class="item-price">
                  <div class="current-price"><span class="currency">IDR : </span><span class="price">{{$products->harga}}</span></div><!-- /.current-price -->
                  </div><!-- /.item-price -->

                <div class="cart-counter">
                  <button id="item-plus" class="item-plus"><i class="ti-plus"></i></button>
                  <span id="count" class="count">0</span>
                  <button id="item-minus" class="item-minus"><i class="ti-minus"></i></button>
                </div><!-- /.cart-counter -->

                <select data-select-like-alignement="never" class="color drop-select">
                  <option value="">Color</option>
                  <option value="2">White</option>
                  <option value="3">Gray</option>
                  <option value="4">Red</option>
                  <option value="5">Blue</option>
                </select>

                <!-- <select data-select-like-alignement="never" class="size drop-select">
                  <option value="">Size</option>
                  <option value="2">S</option>
                  <option value="3">M</option>
                  <option value="4">L</option>
                  <option value="5">XL</option>
                  <option value="5">XXL</option>
                </select> -->

                <p class="description">
                  DESCRIPTION : <br> 
                  {!!$products->detail!!}
                </p><!-- /.short-description -->

                <div class="buttons">
                <a href="{{url('add-cart',$products->id)}}" class="add-to-cart">&nbsp&nbsp&nbspAdd to cart<i class="fa fa-shopping-cart"></i></button>
                  <button class="wish-list"><i class="fa fa-heart"></i></button>
                </div>

                <div class="product-meta">
                  <span class="meta-id">Product Name : <span class="meta-about">{{$products->nama}}</span></span>
                  <span class="meta-id">Category : <span class="meta-about"><a href="#">{{ $products->Kategori->kategori }}</a></span>
                </div><!-- /.product-meta -->

                <div class="product-social">
                  <a href="#"><i class="ti-twitter-alt"></i></a>
                  <a href="#"><i class="ti-facebook"></i></a>
                  <a href="#"><i class="ti-pinterest-alt"></i></a>
                  <a href="#"><i class="ti-google"></i></a>
                </div><!-- /.product-social -->
              </div><!-- /.about-product -->
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="product-tabs">
            <div class="tabs">
              <div role="tabpanel">

                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class=""><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">Descripton</a></li>
                  <li role="presentation" class="active"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" aria-expanded="false">Review (<span class="count">14</span>)</a></li>
                  <li role="presentation" class=""><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" aria-expanded="true">Tags (<span class="count">22</span>)</a></li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade" id="tab1">
                    <p class="description">
                      <strong>{{$products->detail}}</strong>
                      
                  </div><!-- /.tab-pane -->

                  <div role="tabpanel" class="tab-pane fade in active" id="tab2">
                    <div class="review parent media">
                      <div class="author-avatar media-left">
                        <img src="/assets/frontend/images/shop/avatar/1.jpg" alt="Author Avatar">
                      </div><!-- /.author-avatar -->

                      <div class="review-top media-body">
                        <h4 class="author-name">
                          <a href="#">Anna Ward</a>
                        </h4><!-- /.author-name -->

                        <div class="meta-info">
                          <span>
                            <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                          </span>
                          <span>
                            <a href="#" class="reply">Reply</a>
                          </span>
                        </div><!-- /.meta-info -->

                        <div class="rating">
                          <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                        </div><!-- /.rating -->
                      </div><!-- /.review-top -->
                      <p class="description">
                        In short, I scarcely could realise it more, and in real life I should scarcely realise it so well, the attention of each of us being too apt to concentrate itself upon some dynamic quality
                        Then what strength to his young men, and what gravity and power to his old! How quickly a race like this would possess itself of the earth, and brook no rivals but the forces of nature! Whatever they do simply because it is they is impressive and important, and every movement, every gesture, is world changing
                      </p> 

                      <div class="review children media">
                        <div class="author-avatar media-left">
                          <img src="/assets/frontend/images/shop/avatar/2.jpg" alt="Author Avatar">
                        </div><!-- /.author-avatar -->

                        <div class="review-top media-body">
                          <h4 class="author-name">
                            <a href="#">Melissa Ramirez</a>
                          </h4><!-- /.author-name -->

                          <div class="meta-info">
                            <span>
                              <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                            </span>
                            <span>
                              <a href="#" class="reply">Reply</a>
                            </span>
                          </div><!-- /.meta-info -->

                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->
                        </div><!-- /.review-top -->
                        <p class="description">
                          Then what strength to his young men, and what gravity and power to his old! How quickly a race like this would possess itself of the earth, and brook no rivals but the forces of nature! Whatever they do simply because it is they is impressive and important, and every movement, every gesture, is world changing
                        </p> 
                      </div><!-- /.review -->
                    </div><!-- /.review -->

                    <div class="review parent media">
                      <div class="author-avatar media-left">
                        <img src="/assets/frontend/images/shop/avatar/3.jpg" alt="Author Avatar">
                      </div><!-- /.author-avatar -->

                      <div class="review-top media-body">
                        <h4 class="author-name">
                          <a href="#">Sara Beck</a>
                        </h4><!-- /.author-name -->

                        <div class="meta-info">
                          <span>
                            <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                          </span>
                          <span>
                            <a href="#" class="reply">Reply</a>
                          </span>
                        </div><!-- /.meta-info -->

                        <div class="rating">
                          <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                        </div><!-- /.rating -->
                      </div><!-- /.review-top -->
                      <p class="description">
                        In short, I scarcely could realise it more, and in real life I should scarcely realise it so well, the attention of each of us being too apt to concentrate itself upon some dynamic quality
                        Then what strength to his young men, and what gravity and power to his old! How quickly a race like this would possess itself of the earth, and brook no rivals but the forces of nature! Whatever they do simply because it is they is impressive and important, and every movement, every gesture, is world changing
                      </p> 
                    </div><!-- /.review -->

                  </div><!-- /.tab-pane -->

                  <div role="tabpanel" class="tab-pane fade" id="tab3">

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.tab-panel -->
            </div><!-- /.tabs -->
          </div><!-- /.product-tabs --> 
        </div><!-- /.product-details -->

        <div class="add-review">
          <h3 class="title">Add a review</h3><!-- /.title -->

          <div class="review-form">
            <form action="#" method="post" class="wpcf7-form">
              <div class="review-input-fields">
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <label for="name">Your Name*</label>
                    <input type="text" id="name" name="name" value="" class="wpcf7-form-control" required/>
                  </span>
                </p>
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <label for="email">Your Email*</label>
                    <input type="email" id="email" name="email" value="" class="wpcf7-form-control" required/>
                  </span>
                </p>
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <label for="url">Your URL</label>
                    <input type="url" id="url" name="url" value="" class="wpcf7-form-control"/>
                  </span>
                </p>
              </div><!-- /.review-input-fields -->

              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="message">Your Review*</label>
                  <span class="rating">
                    <label>Your Rating</label>
                    <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                  </span><!-- /.rating -->
                  <textarea id="message" name="message" class="wpcf7-form-control" required ></textarea>
                </span>
              </p>

              <p class="choose-table-form"> 
                <input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit" /> 
              </p>
            </form>
          </div><!-- /.review-form -->
        </div><!-- /.add-review -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->




    @php 
		$products=App\Product::all();
    @endphp 
    
  <section class="related-products text-center">
    <div class="section-padding">
      <div class="container">
        <div class="section-top text-center">
          <h2 class="section-title">Related Products <span></span></h2>
        </div><!-- /.section-top -->

        <div id="related-slider" class="related-slider">
        @foreach($products as $data)
          <div class="item">
            <a class="fancybox" href="{{asset('../assets/admin/images/product/'.$data->foto.'')}}">
              <div class="item-thumbnail">
                <img src="{{asset('../assets/admin/images/product/'.$data->foto.'')}}" height="300" width="350" alt="Item Thumbnail">
                <span class="ribbon sale">Sale</span>
              </div>
            </a>

            <div class="item-details">
              <h3 class="item-title"><a href="/product/detail/{{$data->id}}">{{$data->nama}}</a></h3><!-- /.item-title -->
              <div class="item-price">
                <span class="currency">IDR : </span><!-- /.currency -->
                <span class="price">{{$data->harga}}</span><!-- /.price -->
              </div><!-- /.item-price -->
            </div>
          </div>
          @endforeach

        </div><!-- /#related-slider -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.related-products -->







  @include('partials.footers')



  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>    
  </div>



  <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/bootstrap-rating.min.js') }}"></script>

</body>
</html>