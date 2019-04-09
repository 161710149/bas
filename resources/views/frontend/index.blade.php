<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>E-riil Store</title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/et-line-icons.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/themes.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/home/home-01.css') }}">

  <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->


</head>


<body>


 @include('partials.headers')


  <section class="banner banner-01 text-center background-bg" data-image-src="{{ asset('assets/frontend/images/banner/bas.jpg') }}">
    <div class="section-padding">
      <div class="container">
        <div class="banner-content">
          <h4 class="top-title">Brand New</h4><!-- /.top-title -->
          <h2 class="main-title">Summer Collection</h2><!-- /.main-title -->
          <h3 class="sub-title">The Sun is out to shine your world</h3><!-- /.sub-title -->
          <p class="description">
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
          </p><!-- /.description -->
          <a href="{{ url ('shop')}}" class="btn">Shop Now</a><!-- /.btn -->
        </div><!-- /.banner-content -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.banner -->








		<!-- Tab panes -->

  <section class="discount">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 left-content">
            <div class="item">
              <a href="#">
                <div class="item-thumbnail text-right">
                  <img src="{{ asset('assets/frontend/images/home01/asa.jpg') }}" height="420" width="550" alt="Image">
                </div><!-- /.item-thumbnail -->

              </a>
            </div><!-- /.item -->
          </div>

          <div class="col-sm-6 right-content">
            <div class="item">
              <a href="#">
                <div class="item-thumbnail text-right">
                  <img src="{{ asset('assets/frontend/images/home01/2.png') }}" alt="Image">
                </div><!-- /.item-thumbnail -->
                <div class="item-details">
                  <h3 class="item-title text-left"><span>New</span> collection</h3><!-- /.item-title -->
                </div><!-- /.item-details -->
              </a>
            </div><!-- /.item -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.discount -->

  <section class="featured">
    <div class="section-padding">
      <div class="container">

        <!-- Nav tabs -->
        <div class="featured-navs">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">New Arrival</a></li>

          </ul><!-- /.nav-tabs -->
        </div><!-- /.featured-navs -->

		@php
                                $products = App\Product::orderBy('updated_at','nama')->take(6)->get();
                                @endphp


        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="featured">
            <div class="featured-slider">
			@foreach($products as $data)
              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <a href="/product/detail/{{$data->id}}">
                    <img src="{{asset('../assets/admin/images/product/'.$data->foto.'')}}" height="300" width="350" alt="Item Image">
                    <span class="ribbon sale">{{ $data->Kategori->kategori }}</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('../assets/admin/images/product/'.$data->foto.'')}}" height="200" width="150"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="/product/detail/{{$data->id}}"><center>{{ $data->nama }}</center></a></h3><!-- /.item-title -->



                </div><!-- /.item-bottom -->
			  </div><!-- /.item -->
			  &nbsp
			  &nbsp
			  @endforeach
            </div>
</div>
      <center><a href="{{ url('shop') }}" class="btn">Go Shopping..</a></center><!-- /.btn -->
            </div>
          </div>
        </div><!-- /.tab-content -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.featured -->

    @php
		$products=App\Product::all();
		@endphp


  <section class="trending bg-gray">
    <div class="section-padding">
      <div class="container">
        <div class="section-top">
          <h2 class="section-title">Trending <span></span></h2><!-- /.section-title -->
        </div><!-- /.section-top -->


        <div class="row">

          <div class="trending-slider owl-carousel owl-theme">
          @foreach($products as $data)
            <div class="item">
              <div class="col-md-6">
                <div class="item-thumbnail">
                  <a href="/product/detail/{{$data->id}}">
                  <img src="{{asset('../assets/admin/images/product/'.$data->foto.'')}}" alt="Item Thumbnail">
                </div>
                <div class="item-inner">
                  <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                  <a href="/product/detail/{{$data->id}}" class="fancybox" href="{{ asset('assets/frontend/images/home01/trend/1.png') }}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                </div><!-- /.item-inner -->
              </div>

              <div class="col-md-6">
                <div class="item-details">
                  <h3 class="item-title"><a href="/product/detail/{{$data->id}}">{{ $data->nama }}</a></h3><!-- /.item-title -->
                  <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                  <div class="item-price">
                            <span class="currency">IDR :&nbsp</span>
                            <span class="price"><center>{{ $data->harga}}</center></span>
                          </div><!-- /.item-price -->
                  <p class="description">
                  {{ $data->detail }}
                  </p><!-- /.description -->
                  <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                </div>
              </div>
            </div>
            @endforeach


          </div><!-- /.trending-slider -->

        </div><!-- /.row -->


      </div><!-- /.container -->

    </div><!-- /.section-padding -->
  </section><!-- /.trending -->



  {{-- <section class="blog blog-01 text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="section-top">
            <h2 class="section-title">Recent Posts<span></span></h2>
          </div><!-- /.section-top -->

          <div class="section-details text-left">
            <div class="col-md-6">
              <article class="post type-post">
                <div class="entry-thumbnail">
                  <img src="{{ asset('assets/frontend/images/blog/01/1.jpg') }}" alt="Post Thumbnail">
                </div><!-- .entry-thumbnail -->
                <div class="post-content">
                  <h3 class="entry-title"><a href="blog-single.html">The Milkman Sets Out on his Travels</a></h3><!-- /.entry-title -->
                  <div class="entry-meta">
                    <ul class="meta-list">
                      <li><i class="ti-user"></i> <a href="#">Anthony Doe</a></li>
                      <li><i class="ti-calendar"></i> on <time datetime="2016-05-28">28 May, 2016</time></li>
                      <li><i class="ti-comment"></i> <a href="#">22 Comments</a></li>
                    </ul><!-- /.meta-list -->
                  </div><!-- /.entry-meta -->

                  <p class="description">
                    Ghirlandaio was born to far more science and cunning in painting than was current in Benozzo’s early years, and all that industry
                  </p><!-- /.description -->
                  <a href="3column.html" class="btn">Read More</a>
                </div><!-- /.post-content -->
              </article><!-- /.post -->
            </div>

            <div class="col-md-6">
              <article class="post type-post">
                <div class="entry-thumbnail">
                  <img src="{{ asset('assets/frontend/images/blog/01/2.jpg') }}" alt="Post Thumbnail">
                </div><!-- .entry-thumbnail -->
                <div class="post-content">
                  <h3 class="entry-title"><a href="blog-single.html">The Adventure of the Literary Innkeeper</a></h3><!-- /.entry-title -->
                  <div class="entry-meta">
                    <ul class="meta-list">
                      <li><i class="ti-user"></i> <a href="#">Anthony Doe</a></li>
                      <li><i class="ti-calendar"></i> on <time datetime="2016-05-28">28 May, 2016</time></li>
                      <li><i class="ti-comment"></i> <a href="#">22 Comments</a></li>
                    </ul><!-- /.meta-list -->
                  </div><!-- /.entry-meta -->

                  <p class="description">
                    Ghirlandaio was born to far more science and cunning in painting than was current in Benozzo’s early years, and all that industry
                  </p><!-- /.description -->
                  <a href="3column.html" class="btn">Read More</a>
                </div><!-- /.post-content -->
              </article><!-- /.post -->
            </div>
          </div><!-- /.section-details -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.blog --> --}}





    {{-- @php
		$products=App\Product::paginate(8);
		@endphp


  <section class="categories">
    <div class="section-padding">

      <div class="container">
      <div class="section-top">
            <h2 class="section-title">Our Product<span></span></h2>
          </div><!-- /.section-top -->



        <div class="row">
        @foreach($products as $data)
          <div class="col-md-3 col-sm-6">

            <div class="item">



              <div class="item-details media">
                <div class="item-thumbnail media-left">
                  <a href="/product/detail/{{$data->id}}">
                  <img src="{{asset('../assets/admin/images/product/'.$data->foto.'')}}" alt="Item Thumbnail">
                </div><!-- /.item-thumbnail -->
                <div class="item-content media-body">
                  <h4 class="item-title"><a href="/product/detail/{{$data->id}}">{{ $data->nama }}</a></h4><!-- /.item-title -->
                  <div class="rating">
                    <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                  </div><!-- /.rating -->
                  <div class="item-price">
                    <span class="currency">IDR :&nbsp</span><!-- /.currency -->
                    <span class="price"> {{ $data->harga }}</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-content -->
              </div><!-- /.item-details -->

            </div><!-- /.item -->
            @endforeach

          </div>

          </div>


        </div><!-- /.row -->


      </div><!-- /.container -->

    </div><!-- /.section-padding -->
  </section><!-- /.categories --> --}}


   @php
		$mediaparts=App\Mediapart::paginate(8);
		@endphp

  <section class="clients-logo bg-gray text-center">
    <div class="section-padding">
    <div class="section-top">
            <h2 class="section-title">Media Partner<span></span></h2>
          </div><!-- /.section-top -->
      <div class="container">
        <div class="row">
         @foreach($mediaparts as $data)

          <div class="col-sm-3">
            <div class="item"><img src="{{asset('../assets/admin/images/mediapart/'.$data->foto.'')}}" alt="Brand Logo"></a></div><!-- /.item -->
          </div>
          @endforeach
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.clients-logo -->



  @include('partials.footers')



  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>
  </div>


  <script src="{{ asset ('assets/frontend/js/plugins.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/main.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/bootstrap-rating.min.js') }}"></script>



</body>
</html>
