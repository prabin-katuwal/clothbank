 	<header>
        		<!-- Start header top -->
        		<div class="header-top">
        			<div class="container">
        				<div class="row">
        					<div class="col-sm-5 col-md-6">
	                            <div class="top-social">
	                                <nav>
	                                	<ul>
		                                    <li><a href="#">Follow Us On:</a></li>
		                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		                                </ul>
	                                </nav>
	                            </div>
	                        </div>
	                        <div class="col-sm-7 col-md-6">
	                            <div class="call-to-action">
	                                <nav>
	                                	<ul>
		                                	<li><a href="mailto:ourmail@domain.com"><i class="fa fa-envelope" aria-hidden="true"></i> Email: ourmail@domain.com</a></li>
		                                	<li><a href="tel:+5881234567"><i class="fa fa-phone" aria-hidden="true"></i> Phone: +5(88) 123-4567</a></li>
		                                	<li><a href="">@if(Auth::check()){{Auth::user()->name}}<i class="fa fa-angle-down" aria-hidden="true"></i>@else <a href="{{route('login')}}">Login</a>@endif</a>
												<ul>
                                                @if(Auth::check()==true)
													<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                                                    @endif
												</ul>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
		                                	</li>
		                                </ul>
	                                </nav>
	                            </div>
	                        </div>
        				</div>
        			</div>
        		</div>
        		<!-- End header top -->
        		<!-- Start main menu area -->
        		<div class="main-menu-area" id="sticker">
        			<div class="container">
        				<div class="row">
        					<div class="col-sm-1 col-xs-12">
        						<div class="logo ptb-32">
        							<a href="index.html">
        								<img src="img/logo.png" alt="">
        							</a>
        						</div>
        					</div>
        					<div class="col-sm-11 col-xs-12">
        						<div class="main-menu">
        							<nav>
        								<ul>
        									<li><a href="index.html">Home</a> </li>
        									<li><a href="about.html">About</a></li>
        									<li class="mega-menu"><a href="gallery.html">Gallery</a></li>
        									<li><a href="events.html">Events</a></li>
        									<li><a href="blog.html">Blog</a>
                                                <ul class="drop-menu">
                                                    <!-- <li><a href="blog.html">Blog</a></li> -->
                                                   <!--  <li><a href="blog-sidebar-right.html">Blog sidebar Right</a></li>
                                                    <li><a href="blog-sidebar-left.html">Blog sidebar Left</a></li> -->
                                                    <li><a href="blog-details.html">Blog Details</a></li>

                                                </ul>
                                            </li>
        									<li  class="mega-menu"><a href="contact-us.html">Contact-us</a>

                                            <li  class="mega-menu"><a href="user dashboard/index.html">User Dashboard</a>

                                            </li>

                                              <li class="mega-menu " data-toggle="modal" data-target="#staticBackdrop1">Request Now</li>

                                                <li class="mega-menu" data-toggle="modal" onclick="donate();" data-target="#staticBackdrop">Donate Now </li>

                                            <!--   <li  class="mega-menu">

                                                 <button type="button"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop1"> Request Now</button>

                                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#staticBackdrop"> Donate Now</button>

                                               </li> -->

                                           <!--   <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#staticBackdrop1">
  Request Now
                                           </button> -->


        								</ul>

<div class="donate-button ptb-32">
                                    <!-- <a class="waves-effect waves-light" href="#">Donate</a> -->

<!-- Modal -->
@if(Auth::check())
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">Donate Cloth</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{route('donatenow.store')}}" method="post">
            @csrf

        <div class="container">

              <div class="row">
                <div class="col-lg-4">
                    <label>Full name:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="text"  name="fullname" value="@if(Auth::user()){{Auth::user()->name}}@endif" class="form-control" readonly>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <label>Email:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="email" name="email" value="{{Auth::user()->email}}"  placeholder="Email" class="form-control" readonly>
                </div>
            </div>
            <br>
 <input type="hidden" name="userid" value="{{Auth::user()->id}}">
               <div class="row">
                <div class="col-lg-4">
                    <label>Location:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="text"  name="location" placeholder="Location" class="form-control">
                </div>
            </div>
            <br>

               <div class="row">
                <div class="col-lg-4">
                    <label>Quantity:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="text" name="quantity" placeholder="Quantity" class="form-control">
                </div>
            </div>
            <br>

              <div class="row">
                <div class="col-lg-4">
                    <label>Bank:</label>
                </div>
                  <div class="col-lg-8">
                  <!-- <input type="text" name="" placeholder="lastname" class="form-control"> -->
                  <select name="bank" class="form-control" id="cars">
                     @foreach(App\Backend\Bank::all() as $b)
       <option value="{{$b->id}}">{{$b->fullname}}</option>
       @endforeach
                    </select>
                </div>
            </div>
        </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Donate</button>
      </div>
    </div>
  </div>
</div>
@else
<script>
    function donate(){
         alert('Please Login For Donate');

    }
</script>
@endif

</div>






<div class="donate-button ptb-32">
                                    <!-- <a class="waves-effect waves-light" href="#">Donate</a> -->


<!-- Modal -->
  <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
            @csrf
<div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="container">

              <div class="row">
                <div class="col-lg-4">
                    <label>Bank Name:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="text" name="fullname" placeholder="Bannkname" class="form-control">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <label>Member:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="text" name="member" placeholder="Member" class="form-control">
                </div>
            </div>
            <br>
             <div class="row">
                <div class="col-lg-4">
                    <label>Location:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="text" name="location" placeholder="Location" class="form-control">
                </div>
            </div>
            <br>

               <div class="row">
                <div class="col-lg-4">
                    <label>:Email</label>
                </div>
                  <div class="col-lg-8">
                  <input type="email"  name="email" placeholder="email" class="form-control">
                </div>
            </div>
            <br>

               <div class="row">
                <div class="col-lg-4">
                    <label>Phone number:</label>
                </div>
                  <div class="col-lg-8">
                  <input type="text" name="phone" placeholder="Phone number" class="form-control">
                </div>
            </div>
            <br>

              <div class="row">
                <div class="col-lg-4">
                    <label>Image</label>
                </div>
                  <div class="col-lg-8">
                  <!-- <input type="text" name="" placeholder="lastname" class="form-control"> -->
                 <input type="file" name="image" class="form-control">
                </div>
            </div>
            <br>
              <div class="row">
                <div class="col-lg-4">
                    <label>Password</label>
                </div>
                  <div class="col-lg-8">
                  <!-- <input type="text" name="" placeholder="lastname" class="form-control"> -->
                 <input type="password" placeholder="Password"  name="password" class="form-control">
                </div>
            </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-primary">Request</button>
      </div>
    </div>
  </div>
</div>
 </form>

 </div>

        							</nav>
        						</div>

                                <!-- Button trigger modal -->
        					</div>
        				</div>
        			</div>
        		</div>
        		<!-- End main menu area -->
                <!-- Start mobile menu -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="nav">
                                        <li><a class="home" href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul>
                                              <!--   <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-sidebar-right.html">Blog sidebar Right</a></li>
                                                <li><a href="blog-sidebar-left.html">Blog sidebar Left</a></li> -->
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <!-- <li><a href="blog-details-sidebar-right.html">Blog Details Sidebar Right</a></li>
                                                <li><a href="blog-details-sidebar-left.html">Blog Details Sidebar Left</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="events.html">Events</a></li>


                                        <li><a href="contact-us.html">Contact-us</a>
                                           <!--  <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact us</a></li>
                                                <li><a href="couses.html">Couses</a></li>
                                                <li><a href="couses-sidebar-right.html">Couses Sidebar Right</a></li>
                                                <li><a href="couses-sidebar-left.html">Couses Sidebar Left</a></li>
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="events-sidebar-right.html">Events Sidebar Right</a></li>
                                                <li><a href="events-sidebar-left.html">Events Sidebar Left</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-sidebar-right.html">Blog sidebar Right</a></li>
                                                <li><a href="blog-sidebar-left.html">Blog sidebar Left</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="blog-details-sidebar-right.html">Blog Details Sidebar Right</a></li>
                                                <li><a href="blog-details-sidebar-left.html">Blog Details Sidebar Left</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul> -->
                                        </li>
                                     <!--    <li><a href="#">Shortcodes</a>
                                            <ul>
                                                <li><a href="elements-causes.html">Causes</a></li>
                                                <li><a href="elements-contact-form.html">Contact Form</a></li>
                                                <li><a href="elements-hero-static.html">Hero Static</a></li>
                                                <li><a href="elements-hero-static-left.html">Hero Static Left</a></li>
                                                <li><a href="elements-hero-static-right.html">Hero Static Right</a></li>
                                                <li><a href="elements-keep-in-touch.html">Keep In Touch</a></li>
                                                <li><a href="elements-latest-blog.html">Latest Blog</a></li>
                                                <li><a href="elements-map.html">Google Map</a></li>
                                                <li><a href="elements-our-gallery.html">Our Gallery</a></li>
                                                <li><a href="elements-our-sponsors.html">Our Sponsors</a></li>
                                                <li><a href="elements-our-volunteers.html">Our Volunteers</a></li>
                                                <li><a href="elements-page-breadcumb-right.html">Page Breadcumb Right</a></li>
                                                <li><a href="elements-page-title-center.html">Page Title Center</a></li>
                                                <li><a href="elements-page-title-left.html">Page Title Left</a></li>
                                                <li><a href="elements-page-title-right.html">Page Title Right</a></li>
                                                <li><a href="elements-pagination.html">Pagination</a></li>
                                                <li><a href="elements-services.html">Services</a></li>
                                                <li><a href="elements-testimonials.html">Testimonials</a></li>
                                                <li><a href="elements-up-comming-events.html">Up Comming Events</a></li>
                                                <li><a href="elements-video-gallery-2col.html">Video Gallery col 2</a></li>
                                                <li><a href="elements-video-gallery-3col.html">Video Gallery col 3</a></li>
                                                <li><a href="elements-video-gallery-4col.html">Video Gallery col 4</a></li>
                                                <li><a href="elements-what-we-do.html">What we do</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End mobile menu -->
        	</header>
