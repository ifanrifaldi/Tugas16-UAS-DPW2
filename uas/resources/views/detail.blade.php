
@extends('template.base1')

@section('content')
<!-- BREADCRUMB AREA START -->
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

        <!-- product-details-start -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product__details-nav d-sm-flex align-items-start">
                            <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="thumbOne-tab" data-bs-toggle="tab" data-bs-target="#thumbOne" type="button" role="tab" aria-controls="thumbOne" aria-selected="true">
                                      <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" alt="">
                                  </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product__details-content">
                            <h6>{{$produk->nama}}</h6>
                            <div class="pd-rating mb-10">
                                <ul class="rating">
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                </ul>
                                <span>(01 review)</span>
                                <span><a href="#">Add your review</a></span>
                            </div>
                            <div class="price mb-10">
                                <span>{{$produk->harga}}</span>
                            </div>
                            <p>Stok : {{$produk->stok}} <br> Berat : {{$produk->berat}} gr. </p>
                           
                            <div class="cart-option mb-15">
                                <div class="product-quantity mr-20">
                                    <div class="cart-plus-minus p-relative"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                </div>
                                <a href="cart.html" class="cart-btn">Add to Cart</a>
                            </div>
                            <div class="details-meta">
                                <div class="d-meta-left">
                                    <div class="dm-item mr-20">
                                        <a href="#"><i class="fal fa-heart"></i>Add to wishlist</a>
                                    </div>
                                    <div class="dm-item">
                                        <a href="#"><i class="fal fa-layer-group"></i>Compare</a>
                                    </div>
                                </div>
                                <div class="d-meta-left">
                                    <div class="dm-item">
                                        <a href="#"><i class="fal fa-share-alt"></i>Share</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="product-tag-area mt-15">
                                <div class="product_info">
                                    <span class="sku_wrapper">
                                        <span class="title">SKU:</span>
                                        <span class="sku">DK1002</span>
                                    </span>
                                    <span class="posted_in">
                                        <span class="title">Categories:</span>
                                        <a href="#">iPhone</a>
                                        <a href="#">Tablets</a>
                                    </span>
                                    <span class="tagged_as">
                                        <span class="title">Tags:</span>
                                        <a href="#">Smartphone</a>, 
                                        <a href="#">Tablets</a>
                                    </span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details-end -->

        <!-- product-details-des-start -->
        <div class="product-details-des mt-40 mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product__details-des-tab">
                            <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Description </button>
                                </li>
                               
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="prodductDesTaContent">
                    <div class="tab-pane fade active show" id="des" role="tabpanel" aria-labelledby="des-tab">
                        <div class="product__details-des-wrapper">
                            <p class="des-text mb-35"><p>   {!! nl2br($produk->deskripsi) !!}</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- shop modal end -->

    </main>
<!-- SHOP DETAILS AREA END -->
@endsection('content')