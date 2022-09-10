@extends('template.base1')

@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 bg-overlay-theme-10--- bg-image" data-bg="{{url('public/assets')}}/img/bg3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-4 justify-content-between">
                        <div class="section-title-area">
                            <h1 class="section-title white-color">Shop</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="ltn__gallery-area mb-120  mt--10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title ">Our Products</h1>
                        <p>Diskon Setiap Hari Kualitas Ori</p>
                    </div>
                    <div class="ltn__gallery-menu">
                        <div class="ltn__gallery-filter-menu portfolio-filter text-uppercase text-center mb-50">
                            <button data-filter="*" class="active">All</button>
                            <button data-filter=".filter_category_1">New</button>
                            <button data-filter=".filter_category_2">Best Seller</button>
                            <button data-filter=".filter_category_3">Most Popular</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Wrapper Start -->
            <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
            <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide---">
                <div class="ltn__gallery-sizer col-1"></div>

                <!-- gallery-item -->
                @foreach($list_produk as $produk)
                <div class="ltn__gallery-item filter_category_1 col-lg-3 col-md-4 col-sm-6 col-12">
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
                <!-- gallery-item -->

                <!-- gallery-item -->
             
            </div>
            <div class="ltn__pagination-area text-center">
                <div class="ltn__pagination">
                    <ul>
                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        
                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection