<header id="masthead" class="masthead">
	<script src="{{ asset('js/app.js') }}"></script>
	<div class="header-top">
		<div class="container">
		<div class="row">
			<div class="col-sm-5 top-left text-left">
			<p class="top-contact">
				<i class="ti-email"></i><span><a href="#">eriilstore@gmail.com</a></span>
				<i class="ti-mobile"></i><span>+6857 919 115 33 </span>
			</p><!-- /.top-contact -->

			</div><!-- /.top-left -->

			<div class="col-sm-7 top-right text-right">

			@guest
			<div class="checkout"><a href="{{ url ('loginregist') }}"><i class="fa fa-sign-in"></i>&nbsp LOGIN  | </a></div><!-- /.checkout -->
			<div class="checkout"><a href="{{ url ('loginregist') }}"></i>Register </a></div><!-- /.checkout -->
			@else
			<div class=""><a href="{{ route('logout') }}"></i>Logout </a></div><!-- /.checkout -->
			@endguest



			<!-- <div class="menu-social pull-right">
			<a href="{{ url ('layouts.admin') }}"><i class="fa fa-sign-in">&nbsp&nbspLogin </i></a>
			<a href="{{ url ('layouts.admin') }}"><i class="">&nbsp&nbspRegister </i></a>

		</div>/.menu-social -->

			</div><!-- /.top-right -->
		</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.header-top -->

	<div class="header-middle">
		<div class="container">
		<div class="row">
			<div class="col-sm-3">
			<h1><a class="navbar-brand hidden-xs" href="./"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Site Logo"></a></h1>
			</div>
			<div class="col-sm-7">
			<div class="top-search-form">
				<form action="#" method="post" class="menu-form">
				<fieldset>
					<select name="category" id="category">
					<option selected="selected">All Categories</option>
					<option>Men's Wear</option>
					<option>Women's Wear</option>
					<option>Kid's Wear</option>
					<option>Men's Fashion</option>
					<option>Women's Fashion</option>
					<option>Kid's Fashion</option>
					<option>Home Applience</option>
					<option>Electronics</option>
					<option>Gadgets</option>
					<option>Mobile</option>
					<option>Laptop</option>
					<option>Others</option>
					</select>
				</fieldset>

				<input type="text" placeholder="Keywords ..." class="form-control">
				<button type="submit" class="btn"><i class="fa fa-search"></i></button>
				</form>
			</div><!-- /.top-search-form -->
			</div>

			<div class="col-sm-2">
			<div class="shop-cart">
				<a class="cart-control" href="{{ url ('cart')}}" title="View your shopping cart">
				<i class="ti-bag"></i>@php
                if(\Auth::check()){
            $cart = \App\Cart::where('user_id', \Auth::user()->id);
                }
            @endphp
            @if(Auth::check() && $cart->count() > 0)
                <span class="count">{{$cart->count()}}</span>

				<span>Cart - </span>
				<span class="currency">$</span>
				<span class="amount">345.00</span>
				</a><!-- /.cart-control -->

				 <div class="cart-items">
					<div class="widget_shopping_cart_content">
					  <div class="cart-top">

								@if(Auth::check())
								@php
								$total_all = 0;
								@endphp
						<div class="item media">
							<button class="btn"><i class="fa fa-close"></i></button>
							 @foreach(\App\Cart::with('Product')->get() as $data)
						  <div class="item-thumbnail media-left">
							<img src="{{asset('/assets/admin/images/product/'.$data->Product->foto)}}" height="50" width="50" alt="Item Thimbnail">
						  </div><!-- /.item-thumbnail -->
						  <div class="item-details media-body">

							<h4 class="item-title"><a href="#">{{$data->Product->nama}}</a></h4><!-- /.item-title -->
							<div class="item-price">
							  <div class="item-price">
								<span class="currency">IDR : </span>
								<span class="price">&nbsp{{$data->Product->harga}}</span>
							  </div><!-- /.item-price -->
							</div><!-- /.item-price -->
				    		</div><!-- /.item-details -->
					    	<br>
						@endforeach
					</div><!-- /.item -->
				</div>

					  <div class="cart-middle">
						<button class="btn pull-left"><i class="ti-trash"></i> Empty Cart</button>
						<div class="price-total pull-right">
						  <span>Sub total:</span>
						  <span class="currency"></span><span class="price">{{$data->jumlah_brg}} x Rp. {{ number_format($data->Product->harga,2,',','.')}}
									@php
										$t_s = $data->jumlah_brg * $data->product->harga;
										$total_all = $total_all + $t_s;
									@endphp</span>
						</div><!-- /.price-total -->
					  </div><!-- /.cart-middle -->

					  {{-- <div class="cart-bottom">
						<a href="cart.html" class="btn pull-left"><i class="icons icon-basket-loaded"></i> View Cart</a>
						<a href="checkout.html" class="btn pull-right">Checkout</a>
						</div><!-- /.cart-bottom --> --}}

					</div><!-- /.widget_shopping_cart_content -->
				  </div><!-- /.scart-items -->
                  @endif
                </div>
			  </div>
			</div><!-- /.row -->
		  </div><!-- /.container -->
		</div><!-- /.header-middle -->

	<div class="header-bottom">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
			<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand visible-xs" href="./">
			<img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Site Logo">
			</a><!-- /.navbar-brand -->
		</div>

		<nav id="main-menu" class="menu collapse navbar-collapse pull-left">
			<ul class="nav navbar-nav">
			<li class="menu-item menu-item-has-children active">
				<a href="{{ url('/') }}">Home</a>
			</li>

			<li class="menu-item menu-item-has-children menu-item-has-mega-menu">
				<a href="{{ url('shop') }}">Shop</a>
				<ul class="mega-menu sub-menu">
			</ul>
			</li>

			{{-- <li class="menu-item menu-item-has-children">
				<a href="#">Features</a>
				<ul class="sub-menu">
				</ul>
			</li>

			<li class="menu-item menu-item-has-children menu-item-has-mega-menu">
				<a href="#">Pages</a>
				<ul class="mega-menu sub-menu">
				<li>
					<div class="container">
					<div class="menu-item col-sm-3">
						<ul class="menu-list">
						<li><a href="404.html">404</a></li>
						<li><a href="about-01.html">About</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="menu-item col-sm-3">
						<ul class="menu-list">
						<li><a href="coming-soon.html">Coming Soon</a></li>
						<li><a href="faq.html">Faq</a></li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="register.html">Register / Login</a></li>
						</ul>
					</div>

					<div class="menu-item col-sm-3">
						<ul class="menu-list">
						<li><a href="service-01.html">Service</a></li>
						<li><a href="cart.html">Shopping Cart</a></li>
						<li><a href="shop-3column.html">Shop 3 Column</a></li>
						<li><a href="shop-4column.html">Shop 4 Column</a></li>
						</ul>
					</div>

					<div class="menu-item col-sm-3">
						<ul class="menu-list">
						<li><a href="shop-list.html">Shop List 01</a></li>
						<li><a href="shop-list-no-sidebar.html">Shop List 02</a></li>
						<li><a href="shop-details-01.html">Shop Details 01</a></li>
						<li><a href="shop-details-02.html">Shop Details 02</a></li>
						</ul>
					</div>
					</div>
				</li>
				</ul>
			</li>

			<li class="menu-item menu-item-has-children menu-item-has-mega-menu">
				<a href="#">Shortcodes</a>
				<ul class="mega-menu sub-menu">
				<li>
					<div class="container">
					<div class="menu-item col-sm-3">
						<ul class="menu-list with-icon">
						<li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
						<li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
						<li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
						<li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
						<li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
						<li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
						<li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
						</ul>
					</div>

					<div class="menu-item col-sm-3">
						<ul class="menu-list with-icon">
						<li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
						<li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
						<li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
						<li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
						<li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
						<li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
						<li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
						</ul>
					</div>

					<div class="menu-item col-sm-3">
						<ul class="menu-list with-icon">
						<li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
						<li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
						<li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
						<li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
						<li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
						<li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
						<li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
						</ul>
					</div>

					<div class="menu-item col-sm-3">
						<ul class="menu-list with-icon">
						<li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
						<li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
						<li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
						<li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
						<li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
						<li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
						<li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
						</ul>
					</div>
					</div>
				</li>
				</ul>
			</li>

			<li class="menu-item menu-item-has-children">
				<a href="#">Blog</a>
				<ul class="sub-menu">
				<li class="menu-item menu-item-has-children">
					<a href="#">Classic</a>
					<ul class="sub-menu">
					<li><a href="classic-01.html">Right Sidebar</a></li>
					<li><a href="classic-02.html">Left Sidebar</a></li>
					<li><a href="classic-03.html">No Sidebar</a></li>
					</ul>
				</li>
				<li class="menu-item menu-item-has-children">
					<a href="#">Grid</a>
					<ul class="sub-menu">
					<li><a href="grid-2column-01.html">2 Column 01</a></li>
					<li><a href="grid-2column-02.html">2 Column 02</a></li>
					<li><a href="grid-3column-01.html">3 Column 01</a></li>
					<li><a href="grid-3column-02.html">3 Column 02</a></li>
					</ul>
				</li>
				<li class="menu-item menu-item-has-children">
					<a href="#">Masonary</a>
					<ul class="sub-menu">
					<li><a href="masonry-2column-01.html">2 Column 01</a></li>
					<li><a href="masonry-2column-02.html">2 Column 02</a></li>
					<li><a href="masonry-3column-01.html">3 Column 01</a></li>
					<li><a href="masonry-3column-02.html">3 Column 02</a></li>
					</ul>
				</li>
				<li class="menu-item menu-item-has-children">
					<a href="#">Blog Single</a>
					<ul class="sub-menu">
					<li><a href="blog-single-classic.html">Single Classic</a></li>
					<li><a href="blog-single-no-sidebar.html">Single Fullwidth</a></li>
					<li><a href="blog-single-left-sidebar.html">Left Sidebar</a></li>
					<li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
					</ul>
				</li>
				</ul>
			</li>

			<li class="menu-item menu-item-has-children">
				<a href="#">Portfolio</a>
				<ul class="sub-menu">
				<li class="menu-item menu-item-has-children">
					<a href="#">Grid 2 Column</a>
					<ul class="sub-menu">
					<li><a href="portfolio-grid-2column-01.html">2 Column 01</a></li>
					<li><a href="portfolio-grid-2column-02.html">2 Column 02</a></li>
					</ul>
				</li>

				<li class="menu-item menu-item-has-children">
					<a href="#">Grid 3 Column</a>
					<ul class="sub-menu">
					<li><a href="portfolio-grid-3column.html">3 Column 01</a></li>
					<li><a href="portfolio-grid-3column-02.html">3 Column 02</a></li>
					</ul>
				</li>

				<li class="menu-item menu-item-has-children">
					<a href="#">Grid 4 Column</a>
					<ul class="sub-menu">
					<li><a href="portfolio-grid-4column.html">4 Column 01</a></li>
					<li><a href="portfolio-grid-4column-02.html">4 Column 02</a></li>
					</ul>
				</li>

				<li class="menu-item menu-item-has-children">
					<a href="#">Masonry 3 Column</a>
					<ul class="sub-menu">
					<li><a href="portfolio-masonry-3column.html">3 Column 01</a></li>
					<li><a href="portfolio-masonry-3column-02.html">3 Column 02</a></li>
					</ul>
				</li>


				<li><a href="portfolio-list.html">List Style</a></li>

				<li class="menu-item menu-item-has-children">
					<a href="#">Portfolio Detail</a>
					<ul class="sub-menu">
					<li><a href="portfolio-details.html">Details 01</a></li>
					<li><a href="portfolio-details-02.html">Details 02</a></li>
					</ul>
				</li>
				</ul>
			</li>

			<li class="menu-item"><a href="#">Buy</a></li> --}}

			</ul><!-- /.navbar-nav -->
		</nav><!-- /.navbar-collapse -->


		</div><!-- /.container -->
	</div><!-- /.header-bottom -->
@endif
	</header><!-- /#masthead -->
