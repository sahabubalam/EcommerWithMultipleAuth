@extends('index')
@section('content')
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Shopping Cart</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="cart.html">Cart</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
				<div class="table-responsive">
					<table class="table">
                   
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
                        <h1 hidden>{{$sum=0}}</h1>
                        @foreach($contents as $content)
							<tr>
								<td>
									<div class="media">
										<div class="d-flex">
											<img src="{{URL::to($content->options->image)}}" style="height:60px;width:60px" alt="">
										</div>
										<div class="media-body">
											<p>{{$content->name}}</p>
										</div>
									</div>
								</td>
								<td>
									<h5>${{$content->price}}</h5>
								</td>
								<td>
									<div class="product_count">
										<input type="text" name="qty" id="sst" maxlength="12" value="{{$content->qty}}" title="Quantity:" class="input-text qty">
										<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button>
									</div>
								</td>
								<td>
									<h5>${{$content->subtotal}}</h5>
								</td>
							</tr>

                            <h1 hidden>{{$sum =$sum+$content->subtotal}}</h1>
                            @endforeach
							@php
							Session::put(['total'=>$sum]);
							@endphp
							
							<tr class="bottom_button">
								<td>
									<a class="gray_btn" href="#">Update Cart</a>
								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="cupon_text">
										<input type="text" placeholder="Coupon Code">
										<a class="main_btn" href="#">Apply</a>
										<a class="gray_btn" href="#">Close Coupon</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
									<h5>${{$sum}}</h5>
								</td>
							</tr>
							
							<tr class="out_button_area">
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="checkout_btn_inner">
										<a class="gray_btn" href="#">Continue Shopping</a>
										<a class="main_btn" href="{{route('shipping_info')}}">Proceed to checkout</a>
									</div>
								</td>
                               
							</tr>
                           
                            
						</tbody>
                       
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->

	<!--================ Subscription Area ================-->
	<section class="subscription-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Subscribe for Our Newsletter</h2>
						<span>We won’t send any kind of spam</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div id="mc_embed_signup">
						<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
						 method="get" class="subscription relative">
							<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
							 required="">
							<!-- <div style="position: absolute; left: -5000px;">
									<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
								</div> -->
							<button type="submit" class="newsl-btn">Get Started</button>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->

	
    @endsection