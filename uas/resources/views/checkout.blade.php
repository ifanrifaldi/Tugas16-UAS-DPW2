@extends('template.base1')

@section('content')


<div class="body-wrapper">

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 bg-overlay-theme-10--- bg-image" data-bg="{{url('public/assets')}}/img/bg3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-4 justify-content-between">
                        <div class="section-title-area">
                            <h1 class="section-title white-color">Checkout</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    <div class="ltn__shop-details-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ltn__shop-details-inner mb-60">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                    <div class="single-large-img">
                                        <a href="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" data-rel="lightcase:myCollection">
                                            <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" alt="Image">
                                        </a>
                                    </div>

                                </div>
                                <!-- <div class="ltn__shop-details-small-img slick-arrow-2">

                                    <div class="single-small-img">
                                        <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid" alt="Image">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-info shop-details-info pl-0">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                    </ul>
                                </div>
                                <h3>{{$produk->nama}}</h3>
                                <div class="product-price">
                                    <span>{{$produk->harga}}</span>
                                    
                                </div>
                                <p>Stok : {{$produk->stok}} <br> Berat : {{$produk->berat}} gr. </p>
                                <div class="modal-product-meta ltn__product-details-menu-1">
                                    <ul>
                                        <li>
                                            <strong>Categories:</strong> 
                                            <span>
                                                <a href="#">Low</a>
                                                <a href="#">High</a>
                                                <a href="#">Casual</a>
                                                
                                            </span>
                                        </li>
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
    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                            <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn_coupon-code-form ltn__form-box">
                                    <form action="#" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__name" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" name="ltn__email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                        <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                        <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Billing Details</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="#" >
                                    <h6>Personal Information</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__name" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__lastname" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="ltn__email" placeholder="email address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" name="ltn__phone" placeholder="phone number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__company" placeholder="Company name (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__phone" placeholder="Company address (optional)">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Alamat</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="#" >
                                    <h6>Alamat Lengkap *</h6>
                                    <div class="row">
                                    <div class="col-md-12">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__name" placeholder="Alamat Tempat Tinggal">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <label for="" class="control-label">Provinsi</label>
                                                <select name="provinsi" class="form control" onchange="gantiProvinsi(this.value)">
                                                    <option value="">Pilih Provinsi</option>
                                                    @foreach ($list_provinsi as $provinsi)
                                                    <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <label for="" class="control-label">Kabupaten/Kota</label>
                                                <select name="kabupaten" class="form control kabupaten" id="kabupaten" onchange="gantiKabupaten(this.value)">
                                                    <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <label for="" class="control-label">Kecamatan</label>
                                                <select name="kecamatan" class="form control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                                    <option value="">Pilih Kabupaten Terlebih Dahulu</option>
                                                </select>  
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <label for="" class="control-label">Desa</label>
                                                <select name="desa"  class="form control" id="desa">
                                                    <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            <!-- card -->
                            <div class="card">
                                <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-1" aria-expanded="false">
                                    Check payments
                                </h5>
                                <div id="faq-item-2-1" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h5 class="ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-2" aria-expanded="true"> 
                                    Cash on delivery 
                                </h5>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>
                            </div>                          
                            <!-- card -->
                            <div class="card">
                                <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-3" aria-expanded="false" >
                                    PayPal <img src="{{url('public/assets')}}/img/icons/payment-3.png" alt="#">
                                </h5>
                                <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        </div>
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase float-right" type="submit">Place order</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
        function gantiProvinsi(id) {
            $.get("api/provinsi/" + id, function(result) {
                result = JSON.parse(result)
                option = '';
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                    console.log(item.nama)
                }
                $(".kabupaten").empty();
                $(".kabupaten").append(option);
            });
        }
        function gantiKabupaten(id) {
            $.get("api/kabupaten/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kecamatan").html(option)
            });
        }
        function gantiKecamatan(id) {
            $.get("api/kecamatan/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#desa").html(option)
            });
        }
</script>
@endpush
