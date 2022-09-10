<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Check Out</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('public') }}/assets1/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ url('public') }}/assets1/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="{{ url('public') }}/assets1/img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item">
                                <li> <a href="{{ url('home') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                                <li><a href="{{ url('shop') }}">Shop</a></li>
                                <li><a href="{{ url('login') }}">Login</a></li>
                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="{{ url('cart') }}"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Check Out Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="checkout-title">Isi Alamat Pengiriman</h2>

                    <label>Alamat Rumah *</label>
                    <input type="text" class="form-control" placeholder="Nama Jalan" required>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label">Provinsi</label>
                            <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($list_provinsi as $provinsi)
                                <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="control-label">Kabupaten/Kota</label>
                            <select name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
                                <option value="">Pilih Provinsi terlebih dahulu</option>
                            </select>
                        </div>

                        <div class=" col-md-6">
                            <label for="" class="control-label">Kecamatan</label>
                            <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                <option value="">Pilih Kabupaten terlebih dahulu</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="control-label">Desa</label>
                            <select name="" class="form-control" id="desa">
                                <option value="">Pilih Kecamatan terlebih dahulu</option>
                            </select>
                        </div>
                    </div><!-- End .row -->

                    <div class="row">
                        <div class="col-sm-12">
                            <label>KodePos*</label>
                            <input type="text" class="form-control" required>
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->
                    <br>
                    <a href="{{ url('home')}}" class="btn btn-outline-primary-2 btn-order float-right">Selesai</a>

    <!-- check out section -->
    <div class="checkout">

        <div class="checkout-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-accordion-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Billing Address
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="billing-address-form">
                                                <form action="index.html">
                                                    <p><input type="text" placeholder="Name"></p>
                                                    <p><input type="email" placeholder="Email"></p>
                                                    <p><input type="text" placeholder="Address">
                                                    </p>
                                                    <p><input type="tel" placeholder="Phone"></p>
                                                    <p>
                                                        <textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Shipping Address
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shipping-address-form">
                                                <p>Your shipping address form is here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Card Details
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="card-details">
                                                <p>Your card details goes here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="order-details-wrap">
                            <table class="order-details">
                                <thead>
                                    <tr>
                                        <th>Your order Details</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody class="order-details-body">
                                    <tr>
                                        <td>Product</td>
                                        <td>Total</td>
                                    </tr>
                                    <tr>
                                        <td>Strawberry</td>
                                        <td>$85.00</td>
                                    </tr>
                                    <tr>
                                        <td>Berry</td>
                                        <td>$70.00</td>
                                    </tr>
                                    <tr>
                                        <td>Lemon</td>
                                        <td>$35.00</td>
                                    </tr>
                                </tbody>
                                <tbody class="checkout-details">
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>$190</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>$240</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="boxed-btn">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end check out section -->

        <!-- logo carousel -->
        <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
                            <div class="single-logo-item">
                                <img src="{{ url('public') }}/assets1/img/company-logos/1.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ url('public') }}/assets1/img/company-logos/2.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ url('public') }}/assets1/img/company-logos/3.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ url('public') }}/assets1/img/company-logos/4.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{ url('public') }}/assets1/img/company-logos/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end logo carousel -->

        <!-- footer -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">About us</h2>
                            <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box get-in-touch">
                            <h2 class="widget-title">Get in Touch</h2>
                            <ul>
                                <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                                <li>support@fruitkha.com</li>
                                <li>+00 111 222 3333</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box pages">
                            <h2 class="widget-title">Pages</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box subscribe">
                            <h2 class="widget-title">Subscribe</h2>
                            <p>Subscribe to our mailing list to get the latest updates.</p>
                            <form action="index.html">
                                <input type="email" placeholder="Email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->

        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2022 - <a href="https://irsyadsdesign.com/">Irsyad husain
                                j</a>, All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-lg-6 text-right col-md-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end copyright -->

        <!-- jquery -->
        <script src="{{ url('public') }}/assets1/js/jquery-1.11.3.min.js"></script>
        <!-- bootstrap -->
        <script src="{{ url('public') }}/assets1/bootstrap/js/bootstrap.min.js"></script>
        <!-- count down -->
        <script src="{{ url('public') }}/assets1/js/jquery.countdown.js"></script>
        <!-- isotope -->
        <script src="{{ url('public') }}/assets1/js/jquery.isotope-3.0.6.min.js"></script>
        <!-- waypoints -->
        <script src="{{ url('public') }}/assets1/js/waypoints.js"></script>
        <!-- owl carousel -->
        <script src="{{ url('public') }}/assets1/js/owl.carousel.min.js"></script>
        <!-- magnific popup -->
        <script src="{{ url('public') }}/assets1/js/jquery.magnific-popup.min.js"></script>
        <!-- mean menu -->
        <script src="{{ url('public') }}/assets1/js/jquery.meanmenu.min.js"></script>
        <!-- sticker js -->
        <script src="{{ url('public') }}/assets1/js/sticker.js"></script>
        <!-- main js -->
        <script src="{{ url('public') }}/assets1/js/main.js"></script>

        <script>
            function gantiProvinsi(id) {
                $.get("api/provinsi/" + id, function(result) {
                    result = JSON.parse(result)
                    option = ""
                    for (item of result) {
                        option += `<option value="${item.id}">${item.nama}</option>`;
                    }
                    $("#kabupaten").html(option)
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
</body>

</html>
