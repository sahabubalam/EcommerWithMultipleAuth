@extends('index')
@section('content')
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Single Product Page</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="category.html">Category</a>
						<a href="single-product.html">Product Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="card">
            <div class="card-header mb-3 text-center text-warning">
                Dear <strong class="text-dark">{{ Auth::user()->first_name }}</strong>
                .You have to give us product shipping info to complete your valuable
                order.If your billing info are samethen just press on Order confirm button.
            </div>
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mb-5">
            <form method="post" action="{{route('confirm.order')}}">
            @csrf
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Cash on delevery</label>
                        </th>
                        <td>
                            <div class="form-check">
                            <input class="form-check-input" name="payment_type"  type="radio" value="cash">
                            <label>Cash on Delevery</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Paypal</label>
                        </th>
                        <td>
                            <div class="form-check">
                            <input class="form-check-input" name="payment_type"  type="radio" value="paypal">
                            <label>Paypal</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Bkash</label>
                        </th>
                        <td>
                            <div class="form-check">
                            <input class="form-check-input" name="payment_type"  type="radio" value="bkash">
                            <label>Bkash</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-warning">Shipping Edit</a></td>
                        <td><input class="btn btn-success" type="submit" name="btn" value="Confirm order"></td>
                    
                    </tr>
                
                </table>
            </form>

        </div>
    </div>    
</div>

<!--footer section-->
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                   <div class="single-footer-caption mb-50">
                     <div class="single-footer-caption mb-30">
                          <!-- logo -->
                         <div class="footer-logo">
                             <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                         </div>
                         <div class="footer-tittle">
                             <div class="footer-pera">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                         </div>
                     </div>
                   </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Offers & Discounts</a></li>
                                <li><a href="#"> Get Coupon</a></li>
                                <li><a href="#">  Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>New Products</h4>
                            <ul>
                                <li><a href="#">Woman Cloth</a></li>
                                <li><a href="#">Fashion Accessories</a></li>
                                <li><a href="#"> Man Accessories</a></li>
                                <li><a href="#"> Rubber made Toys</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Support</h4>
                            <ul>
                             <li><a href="#">Frequently Asked Questions</a></li>
                             <li><a href="#">Terms & Conditions</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Report a Payment Issue</a></li>
                         </ul>
                        </div>
                    </div>
                </div>
            </div>
         	<!--================End Product Description Area =================-->

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