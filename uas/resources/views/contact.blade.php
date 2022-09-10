@extends('template.base1')

@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 bg-overlay-theme-10--- bg-image mb-0" data-bg="{{url('public/assets')}}/img/bg3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-4 justify-content-between">
                        <div class="section-title-area">
                            <h1 class="section-title white-color">Contact</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- GOOGLE MAP AREA START -->
 
    <!-- GOOGLE MAP AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="ltn__form-box contact-form-box-2 mb-50 box-shadow--- white-bg--">
                        <form id="contact-form" action="mail.php" method="post">
                            <input type="text" name="name" placeholder="Enter your name">
                            <input type="email" name="email" placeholder="Enter email address">
                            <input type="text" name="phone" placeholder="Enter phone number">
                            <textarea name="message" placeholder="Enter message"></textarea>
                            <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Send</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="ltn__contact-address-area pl-70">
                        <div class="ltn__contact-address-item-4">
                            <h3>Address</h3>
                            <p>Jl. Rahadi Usman Desa Pesaguan Kiri  <br> Matan Hilir Selatan</p>
                        </div>
                        <div class="ltn__contact-address-item-4">
                            <h3>Email</h3>
                            <p>ifanrifaldi14@gmail.com</p>
                        </div>
                        <div class="ltn__contact-address-item-4">
                            <h3>Telephone</h3>
                            <p>0895-1258-1105</p>
                        </div>
                        <div class="ltn__social-media mt-15">
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Behance"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    <div class="ltn__banner-area pb-90 d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{url('public/assets')}}/img/banner/3.jpg" alt="Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{url('public/assets')}}/img/banner/4.jpg" alt="Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

    <!-- VIDEO AREA START -->
    <div class="ltn__video-area section-bg-1 pt-120 pb-120 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__video-img">
                        <img src="{{url('public/assets')}}/img/bg/8.jpg" alt="video popup bg image">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0"  data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')