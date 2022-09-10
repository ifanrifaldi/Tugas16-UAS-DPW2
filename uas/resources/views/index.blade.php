
@extends('template.base1')

@section('content')
<div class="offcanvas__area">
        <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="index.html">
                <img src="{{url('public')}}/assets2/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <form action="#">
                    <input type="text" placeholder="What are you searching for?">
                    <button type="submit" ><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="offcanvas__action">

            </div>
        </div>
        </div>
    </div>
    <!-- offcanvas area end -->      
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->
    <main>
        <!-- slider-area-start -->
        <div class="slider-area">
            <div class="swiper-container slider__active">
                <div class="slider-wrapper swiper-wrapper">
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center" data-background="{{url('public/assets')}}/img/product/bgg.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="slider-content">
                                        <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1.5s">
                                            <a href="product-details.html" class="st-btn b-radius">HOT DEALS</a>
                                        </div>
                                        <h2 data-animation="fadeInLeft" data-delay="1.7s" class="pt-15 slider-title pb-5">SALE 30% OFF <br> FUTURE FOOTBALL BOOTS</h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.9s">Discount 30% On Products & Free Shipping</p>
                                        <div class="slider-bottom-btn mt-75">
                                            <a data-animation="fadeInUp" data-delay="1.15s" href="shop.html" class="st-btn-b b-radius">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div>
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center" data-background="{{url('public')}}/assets2/img/slider/01-slide-2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="slider-content">
                                        <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1s">
                                            <a href="product-details.html" class="st-btn b-radius">New Arraivels</a>
                                        </div>
                                        <h2 data-animation="fadeInLeft" data-delay="1.5s" class="pt-15 slider-title pb-5">SALE 20% OFF<br> SAMSUNG GALAXY BUDS </h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.7s">Discount 30% On Products & Free Shipping</p>
                                        <div class="slider-bottom-btn mt-75">
                                            <a data-animation="fadeInUp" data-delay="1.9s" href="shop.html" class="st-btn-b b-radius">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center" data-background="{{url('public')}}/assets2/img/slider/01-slide-3.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="slider-content">
                                        <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1s">
                                            <a href="product-details.html" class="st-btn b-radius">New DEALS</a>
                                        </div>
                                        <h2 data-animation="fadeInLeft" data-delay="1.5s" class="pt-15 slider-title pb-5">SALE 30% OFF <br> FUTURE FOOTBALL BOOTS</h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.8s">Discount 30% On Products & Free Shipping</p>
                                        <div class="slider-bottom-btn mt-75">
                                            <a data-animation="fadeInUp" data-delay="1.10s" href="shop.html" class="st-btn-b b-radius">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-paginations"></div> -->
                </div>
            </div>
        </div>
        <!-- slider-area-end -->

        <!-- features__area-start -->
        <section class="features__area pt-20">
            <div class="container">
                <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-truck"></i>
                            </div>
                            <div class="features__content">
                                <h6>FREE DELIVERY</h6>
                                <p>For all orders over $120</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-money-check"></i>
                            </div>
                            <div class="features__content">
                                <h6>SAFE PAYMENT</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-comments-alt"></i>
                            </div>
                            <div class="features__content">
                                <h6>24/7 HELP CENTER</h6>
                                <p>Delicated 24/7 support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item features__item-last d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fad fa-user-headset"></i>
                            </div>
                            <div class="features__content">
                                <h6>FRIENDLY SERVICES</h6>
                                <p>30 day satisfaction guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features__area-end -->

        <!-- topsell__area-end -->

        <!-- banner__area-start -->

        <!-- banner__area-end -->

        <!-- topsell__area-start -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">New Product</h5>
                            </div>
                            <div class="button-wrap">
                                <a href="shop.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                @foreach($list_produk as $produk)
                  <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-img">
                        <div class="container">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="product-details.html">
                                                <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product_ ">
                                        <span class="discount"></span>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-heart"></i>
                                                <i class="fal fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="product-details.html">{{$produk->nama}}</a></h6>
                                        <div class="rating mb-5">
                                            <span>{{ $produk->created_at->diffForHumans()  }}</span>
                                        </div>
                                        <div class="price">
                                            <span>{{$produk->harga}}</span>
                                        </div>
                                    </div>
                                    <div class="product__add-cart text-center">
                                        <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center">
                                        Add to Cart
                                        </button>
                                    </div>
                                
                            </div>
                        </div>
                    </div> 
                  @endforeach
                  </div>
                </div>
            </div>
    


@endsection('content')