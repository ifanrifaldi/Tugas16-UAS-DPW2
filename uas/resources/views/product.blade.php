
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
        <!-- breadcrumb__area-start -->
        <section class="breadcrumb__area box-plr-75">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb__area-end -->

        <!-- shop-area-start -->
        <div class="shop-area mb-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="shop-banner mb-30">
                            <div class="banner-image">
                                <img class="banner-l" src="{{url('public/assets')}}/img/bg/bg1.jpg">
                                <img class="banner-sm" src="{{url('public')}}/assets2/img/banner/sl-banner-sm.png" alt="">
                                <div class="banner-content text-center">
                                    <p class="banner-text mb-30">Hurry Up! <br> Free Shipping All Order Over $99</p>
                                    <a href="shop.html" class="st-btn-d b-radius">Discover now</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-lists-top">
                            <div class="product__filter-wrap">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="product__filter d-sm-flex align-items-center">
                                            <div class="product__col">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                      <button class="nav-link active" id="FourCol-tab" data-bs-toggle="tab" data-bs-target="#FourCol" type="button" role="tab" aria-controls="FourCol" aria-selected="true">
                                                        <i class="fal fa-th"></i>
                                                      </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                      <button class="nav-link" id="FiveCol-tab" data-bs-toggle="tab" data-bs-target="#FiveCol" type="button" role="tab" aria-controls="FiveCol" aria-selected="false">
                                                        <i class="fal fa-list"></i>
                                                      </button>
                                                    </li>
                                                  </ul>
                                            </div>
                                            <div class="product__result pl-60">
                                                <p>Showing 1-20 of 29 relults</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="product__filter-right d-flex align-items-center justify-content-md-end">
                                            <div class="product__sorting product__show-no">
                                                <select>
                                                    <option>10</option>
                                                    <option>20</option>
                                                    <option>30</option>
                                                    <option>40</option>
                                                </select>
                                            </div>
                                            <div class="product__sorting product__show-position ml-20">
                                                <select>
                                                    <option>Latest</option>
                                                    <option>New</option>
                                                    <option>Up comeing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                        <div class="tab-content" id="productGridTabContent">
                            <div class="tab-pane fade  show active" id="FourCol" role="tabpanel" aria-labelledby="FourCol-tab">
                                <div class="tp-wrapper">
                                    <div class="row g-0">
                                    @foreach($list_produk as $produk)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product__item product__item-d">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="product-details.html">
                                                        <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid">
                                                        </a>
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
                                                <div class="product__content-3">
                                                    <h6><a href="{{url('client/detail', $produk->id)}}">{{$produk->nama}}</a></h6>
                                                    <div class="rating mb-5">
                                                        
                                                        <span>{{ $produk->created_at->diffForHumans()  }}</span>
                                                    </div>
                                                    <div class="price mb-10">
                                                        <span>{{$produk->harga}}</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart-s text-center">
                                                    <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" href="{{url('client/detail', $produk->id)}}">
                                                        Quick View 
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="FiveCol" role="tabpanel" aria-labelledby="FiveCol-tab">
                                <div class="tp-wrapper-2">
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="product__offer">
                                                                    <span class="discount">-15%</span>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">Classic Leather Backpack Daypack 2022</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="product-stock mb-15">
                                                    <h5>Availability: <span> 940 in stock</span></h5>
                                                    <h6>$220.00 - <del> $240.00</del></h6>
                                                </div>
                                                <div class="stock-btn ">
                                                    <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-2.jpg" alt=""></a>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="product-stock mb-15">
                                                    <h5>Availability: <span> 940 in stock</span></h5>
                                                    <h6>$216.00</h6>
                                                </div>
                                                <div class="stock-btn ">
                                                    <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-3.jpg" alt=""></a>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">Coffee Maker AH240a Full Function</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="product-stock mb-15">
                                                    <h5>Availability: <span> 940 in stock</span></h5>
                                                    <h6>$125.00</h6>
                                                </div>
                                                <div class="stock-btn ">
                                                    <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-4.jpg" alt=""></a>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">Imported Wooden Felt Cushion Chair</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="product-stock mb-15">
                                                    <h5>Availability: <span> 940 in stock</span></h5>
                                                    <h6>$160.00</h6>
                                                </div>
                                                <div class="stock-btn ">
                                                    <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-5.jpg" alt=""></a>
                                                                </div>
                                                                <div class="product__offer">
                                                                    <span class="discount">-15%</span>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">Sunhouse Decorative Lights – Imported</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="product-stock mb-15">
                                                    <h5>Availability: <span> 940 in stock</span></h5>
                                                    <h6>$125.00</h6>
                                                </div>
                                                <div class="stock-btn ">
                                                    <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-6.jpg" alt=""></a>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">Korea Stainless Steel Pot Set 5 Piecs</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="product-stock mb-15">
                                                    <h5>Availability: <span> 940 in stock</span></h5>
                                                    <h6>$99</h6>
                                                </div>
                                                <div class="stock-btn ">
                                                    <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-7.jpg" alt=""></a>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">HP Stainless Steel Hot Water Bottle</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="product-stock mb-15">
                                                    <h5>Availability: <span> 940 in stock</span></h5>
                                                    <h6>$125.00</h6>
                                                </div>
                                                <div class="stock-btn ">
                                                    <button type="button" href="{{url('client/detail', $produk->id)}}">
                                                    Add to Cart
                                                    </button>
                                                    <button type="button" href="{{url('client/detail', $produk->id)}}">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item-pd">
                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="single-features-item single-features-item-df b-radius mb-20">
                                                    <div class="row  g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="features-thum">
                                                                <div class="features-product-image w-img">
                                                                    <a href="product-details.html"><img src="{{url('public')}}/assets2/img/product/sm-8.jpg" alt=""></a>
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
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product__content product__content-d">
                                                                <h6><a href="product-details.html">The North Face Womens Resolve 2 Jack</a></h6>
                                                                <div class="rating mb-5">
                                                                    <ul class="rating-d">
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    </ul>
                                                                    <span>(01 review)</span>
                                                                </div>
                                                                <div class="features-des">
                                                                    <ul>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                        <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                    </ul>
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
                        </div>

                        <br>
                        <div class="ltn__pagination-area text-center">
                         <div class="ltn__pagination">
                          {{$list_produk->links()}}
                    <!-- <ul>
                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        
                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul> -->
                         </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-area-end -->


    </main>
@endsection
