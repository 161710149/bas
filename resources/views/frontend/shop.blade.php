<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js') }}" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>E-riil Store | Shop</title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="{{ asset('assets/frontend/apple-touch-icon.png') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/et-line-icons.css') }}">  

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}"> 
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/themes.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/shop/shop.css') }}">

  <!--[if lte IE 7]><script src="lte-ie7.js') }}"></script><![endif]-->
  <!--[if lt IE 9]><script src="{{ asset('assets/frontend/js/vendor/html5-3.6-respond-1.4.2.min.js') }}"></script><![endif]-->


</head>


<body>


  @include('partials.headers')
  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pull-right">

            <div class="product-filter">
              <div class="row">
                <div class="col-md-4">
                  <span class="filter-text">Showing 1-9 of 36 Products</span>
                </div>

                <div class="col-md-8 text-right">
                  <div class="category-select">
                    <span class="filter-title">Sort by:</span><!-- /.filter-title -->
                    <select data-select-like-alignement="never" class="category drop-select">
                      <option value="">Name</option>
                      <option value="2">Size</option>
                      <option value="3">Color</option>
                      <option value="4">Brand</option>
                    </select>
                  </div><!-- /.category-select -->
                  <div class="show-item">
                    <span class="filter-title">Show:</span><!-- /.filter-title -->
                    <select id="item-number" data-select-like-alignement="never" class="item-number drop-select">
                      <option value="">12</option>
                      <option value="2">16</option>
                      <option value="3">20</option>
                      <option value="4">24</option>
                    </select>
                  </div><!-- /.show-item -->

                  <div class="filter-view">
                    <span class="filter-title">View:</span><!-- /.filter-title -->
                    <ul role="tablist">
                      <li class="grid-view active" id="grid-top"><a href="#grid" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                      <li id="list-top" class="list-view"><a href="#list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                  </div><!-- /.filter-view -->
                </div><!-- /.col-md-8 -->
              </div>
			</div><!-- /.product-filter -->

      
			<!DOCTYPE html>
      <html >

            <div class="shop-products">
			
              <div class="row">
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in text-center" id="grid">
				            @foreach($result as $data)
                    <div class="col-sm-4">
					
                      <div class="item">
					  
                        <div class="item-thumbnail">
                          <a  href="/product/detail/{{$data->id}}">
                            <img src="{{asset('../assets/admin/images/product/'.$data->foto.'')}}" height="250" width="400" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="/product/detail/{{$data->id}}">{{ $data->nama}}</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">IDR :&nbsp</span>
                            <span class="price">{{ $data->harga}}</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
						              </div><!-- /.rating -->
                    	</div><!-- /.item-content -->
					        </div><!-- /.item -->
				    	</div>
					    @endforeach

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.row -->
            </div><!-- /.shop-products -->

            <div class="pagination pagination-02 text-center">
              <a href="#" class="prev"><i class="ti-angle-double-left"></i></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#" class="next"><i class="ti-angle-double-right"></i></a>
            </div><!-- /.pagination -->
		  </div>
		  
		  
		@php 
		$model=App\Kategori::all();
		@endphp 
          <div class="col-md-4">
            <aside class="sidebar right-sidebar pull-left">
              <h3 class="widget-title">Filter By <span></span></h3>
              <div class="widget widget_search_by_categories">

                <div class="heading">
                  <h3 class="heading-title">Categories</h3><!-- /.heading-title -->
				  @foreach($model as $data)
				  <div class="widget-details">
                    <ul class="category-menu">
                      <li class="menu-item">
                        <a href="{{ url('/kategori/'.$data->kategori) }}">{{ $data->kategori}} <span class="count pull-right">22</span></a>
                        
                  </div><!-- /.widget-details -->
					@endforeach
				</div><!-- /.heading -->
              </div><!-- /.widget -->
			  
              
              <div class="widget widget_filter_price">
                <h3 class="heading-title">Price</h3><!-- /.heading-title -->
                <div class="widget-details">
                  <div id="slider-range"></div> 
                  <div class="price-range">
                    <input type="text" id="amount" readonly>
                  </div> 
                  <button class="btn btn-xs filter-btn">Filter</button>
                </div><!-- /.widget-details -->                               
              </div><!-- /.widget -->

              <div class="widget widget_filter_sizes">
                <h3 class="heading-title">Size</h3><!-- /.heading-title -->
                <div class="widget-details">
                  <button>sm</button>
                  <button>s</button>
                  <button>m</button>
                  <button>l</button>
                  <button>xl</button>
                  <button>xxl</button>   
                </div><!-- /.widget-details -->                            
              </div><!-- /.widget --> 

              <div class="widget widget_filter_color">
                <h3 class="heading-title">Color</h3><!-- /.heading-title -->
                <div class="widget-details">
                  <button class="black"></button>
                  <button class="white"></button>
                  <button class="gray"></button>
                  <button class="lime-red"></button>
                  <button class="light-blue"></button>
                  <button class="yellow"></button>  
                </div><!-- /.widget-details -->                             
              </div><!-- /.widget -->              

            </aside><!-- /.sidebar -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->




  

  @include('partials.footers')



  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>    
  </div>



  <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/bootstrap-rating.min.js') }}"></script>


  <script type="text/javascript">

    jQuery(document).ready(function($) {
      "use strict";
      jQuery('.rating-tooltip-manual').rating({
        extendSymbol: function () {
          var title;
          $(this).tooltip({
            container: 'body',
            placement: 'bottom',
            trigger: 'manual',
            title: function () {
              return title;
            }
          });
          $(this).on('rating.rateenter', function (e, rate) {
            title = rate;
            $(this).tooltip('show');
          })
          .on('rating.rateleave', function () {
            $(this).tooltip('hide');
          });
        }
      });

      /*-------- Filter By Price -----------*/

      jQuery( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
          $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
      });
      jQuery( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    });


</script>



</body>
</html>