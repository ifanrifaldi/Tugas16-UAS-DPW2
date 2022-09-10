@section('content')
<div class="ltn__slider-area ltn__slider-6 mb-120">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner  ltn__slide-animation">
                                        <h4 class="slide-sub-title animated">Welcome to our shop</h4>
                                        <h1 class="slide-title animated">SEPATU ADIDAS<br>IMPOR !!!</h1>
                                        <div class="slide-brief animated">
                                            <p>Kami menjual berbagai macam sepatu terbaik dari brand ternama dengan low price High quality , 100% original
                                                merek Adidas</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="{{url('product')}}" class="theme-btn-1 btn btn-effect-1 text-uppercase">Belanja Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-5 align-self-center">
                                <div class="slide-item-img">
                                    <a href="shop.html"><img src="{{url('public/assets')}}/img/product/adidas2.png" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-5 align-self-center">
                                <div class="slide-item-img">
                                    <a href="shop.html"><img src="{{url('public/assets')}}/img/product/nike2.png" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h4 class="slide-sub-title animated">Welcome to our shop</h4>
                                        <h1 class="slide-title animated">SEPATU NIKE <br> KECE !!!</h1>
                                        <div class="slide-brief animated">
                                            <p>Kami menjual berbagai macam sepatu terbaik dari brand ternama dengan low price High quality , 100% original
                                                merek Nike</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Belanja Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    
    <!-- ABOUT US AREA END -->

    <!-- ABOUT US AREA START -->
   
    <!-- ABOUT US AREA END -->

    <!-- PRODUCT TAB AREA START (product-item-3) -->
    
    <!-- PRODUCT TAB AREA END -->

    <!-- CALL TO ACTION START (call-to-action-1) -->
    <div class="call-to-action-area call-to-action-1 bg-image section-bg-2 pt-220 pb-220 mb-110" data-bg="{{url('public/assets')}}/img/product/bg1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner beard-trimmer text-center">
                        <h5 class="text-uppercase">Best Seller And Most Popular</h5>
                        <h1>Diskon Setiap Hari Kualitas Ori</h1>
                        <div class="btn-wrapper">
                            <a class="theme-btn-1 btn btn-effect-1 text-uppercase" href="{{url('shop')}}">Belanja Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- PRODUCT AREA START -->
    
    <div class="ltn__product-area ltn__product-gutter pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title ">New Products</h1>
                        <p>Diskon Setiap Hari Kualitas Ori</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach($list_produk as $produk)
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{url('public/assets')}}/img/product/g1.jpg" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">New</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="{{url('client/detail', $produk->id)}}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="product-details.html">{{$produk->nama}}</a></h2>
                            <div class="product-price">
                                <span>Rp. {{number_format($produk->harga)}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    
    <!-- PRODUCT SLIDER AREA END -->

    <!-- TESTIMONIAL AREA START -->
    
    <!-- TESTIMONIAL AREA END -->

    <!-- BANNER AREA START -->
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
    <!-- VIDEO AREA END -->

    <!-- NEWSLETTER AREA START -->
    <div class="ltn__newsletter-area section-bg-1 bg-overlay-white-30 bg-image pt-110 pb-90" data-bg="{{url('public/assets')}}/img/product/bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="ltn__newsletter-inner text-center">
                        <h2>Subscribe Dan Kunjungi Channel Kami</h2>
                        <p>Untuk info terbaru mengenai product yang kami jual</p>
                        <form action="#" class="ltn__form-box">

                            <div class="btn-wrapper animated">
                                <a href="https://www.youtube.com/c/ifanrifaldi" class="theme-btn-1 btn btn-effect-1 text-uppercase">SUbscribe</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')