<footer class="site-footer">
    <div class="footer-top">
      <div class="section-padding">
        <div class="container">
          <div class="row">

            <div class="col-md-4 col-sm-6">
              <div class="widget widget_about_us">
                <a class="footer-logo" href="#"><img src="{{ asset('assets/frontend/images/logo2.png') }}" alt="Logo"></a>
                <div class="widget-details">
                  <p class="description">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  </p><!-- /.description -->
                  <address>
                    121 King Street, Melbourne VIC 3000, Australia
                  </address>
                  <span>+61 3 8376 6284</span>
                  <span><a href="#">support@shopaholic.com</a></span>
                </div><!-- /.widget-details -->
              </div><!-- /.widget -->
            </div>

            <div class="col-md-2 col-sm-6">
              <div class="widget widget_useful_links">
                <h4 class="widget-title">Useful links</h4>
                <div class="widget-details">
                  <span><i class="ti-control-record"></i><a href="#">About us</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Customer service</a></span>
                  <span><i class="ti-control-record"></i><a href="#">New Collection</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Best Sellers</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Manufacturers</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Privacy policy</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Terms & condition</a></span>
                </div><!-- /.widget-details -->
              </div><!-- /.widget -->
            </div>

            <div class="col-md-2 col-sm-6">
              <div class="widget widget_shop_links">
                <h4 class="widget-title">Shops</h4>
                <div class="widget-details">
                  <span><i class="ti-control-record"></i><a href="#">Trending Now</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Women</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Men</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Kids</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Accessories</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Top brands</a></span>
                  <span><i class="ti-control-record"></i><a href="#">Shoes</a></span>                  
                </div><!-- /.widget-details -->
              </div><!-- /.widget -->
            </div>


            @php 
	        	$mediaparts=App\Mediapart::all();
	        	@endphp
            <div class="col-md-4 col-sm-6">
              <div class="widget widget_instagram_feed">
                <h4 class="widget-title">Media Partner  :</h4>
                <div class="widget-details">
                  @foreach($mediaparts as $data)
                  <img src="{{asset('../assets/admin/images/mediapart/'.$data->foto.'')}}" height="90" width="75" alt="Instagram Image"></a>
                  @endforeach
                </div><!-- /.widget-details -->
              </div><!-- /.widget -->
            </div>

          </div>
        </div>
      </div>
    </div><!-- /.footer-top -->

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 text-left">
            <div class="copyright">
              © <a href="https://demos.jeweltheme.com/shopaholic">Shopaholic</a> 2016 | Develpoed With Love by <a href="https://jeweltheme.com">Jewel Theme</a>
            </div><!-- /.copyright -->
          </div>

          <div class="col-sm-5 text-right">
            <div class="payment-list">
              <a href="#"><img src="{{ asset('assets/frontend/images/payment/1.png') }}" alt="Payment Logo"></a>
              <a href="#"><img src="{{ asset('assets/frontend/images/payment/2.png') }}" alt="Payment Logo"></a>
              <a href="#"><img src="{{ asset('assets/frontend/images/payment/3.png') }}" alt="Payment Logo"></a>
              <a href="#"><img src="{{ asset('assets/frontend/images/payment/4.png') }}" alt="Payment Logo"></a>
              <a href="#"><img src="{{ asset('assets/frontend/images/payment/5.png') }}" alt="Payment Logo"></a>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
  </footer>