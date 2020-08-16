 @extends('index')
 @section('content')
 <!--================Home Banner Area =================-->
 <section class="home_banner_area blog_banner">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="blog_b_text text-center">
                    <h2>Dude You’re Getting
                        <br /> a Telescope</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first</p>
                    <a class="white_bg_btn" href="#">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
	
	
	
	
	

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('front/img/blog/cat-post/cat-post-3.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Social Life</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('front/img/blog/cat-post/cat-post-2.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Politics</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{asset('front/img/blog/cat-post/cat-post-1.jpg')}}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Food</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
						@foreach($blogpost as $row)
                            <div class="col-md-3">
                                <div class="blog_info text-right">
								
                                   
                                    <ul class="blog_meta list">
                                        <li>
                                            <a href="#">Posted by
                                                <i class="lnr lnr-user"></i>{{$row->posted_by}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">12 Dec, 2020
                                                <i class="lnr lnr-calendar-full"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#">06 Comments
                                                <i class="lnr lnr-bubble"></i>
                                            </a>
                                        </li>
                                    </ul>
								
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
								
									<img src="{{URL::to($row->post_image)}}" style="height:280px;width:550px" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>{{($row->title)}}</h2>
                                        </a>
                                        <p>{{($row->post_description)}}</p>
                                        <a href="single-blog.html" class="white_bg_btn">View More</a>
                                    </div>
									
                                </div>
                            </div>
							@endforeach
                        </article>

					
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">01</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">02</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">03</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">04</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">09</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="lnr lnr-magnifier"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                            <h4>Charlie Barber</h4>
                            <p>Senior blog writer</p>
                            <div class="social_icon">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </div>
                            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should
                                have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits
                                detractors.
                            </p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
						
                            <h3 class="widget_title">Popular Posts</h3>
							@foreach($blogpost as $row)
                            <div class="media post_item">
						
                              
								<img src="{{URL::to($row->post_image)}}" style="height:50px;width:50px" alt="">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>{{($row->title)}}</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
							@endforeach
                            <div class="br"></div>
						
                        </aside>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
	@endsection