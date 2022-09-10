<header class="header d-blue-bg">
        <div class="header-top">
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info">
                                <div class="logo">
                                    <a href="index.html" class="logo-image"><img src="{{url('public/assets')}}/img/logo3.png" alt="Logo" style="height: 50px;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="header__search">
                                <form action="{{url('client/produk/filter2')}}" method="post">
                                    @csrf
                                    <div class="header__search-box">
                                        <input class="search-input" type="text" placeholder="I'm shopping for...">
                                        <button class="button" type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <div class="header__search-cat">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Best Seller Products</option>
                                            <option>Top 10 Offers</option>
                                            <option>New Arrivals</option>
                                            <option>Phones &amp; Tablets</option>
                                            <option>Electronics &amp; Digital</option>
                                            <option>Fashion &amp; Clothings</option>
                                            <option>Jewelry &amp; Watches</option>
                                            <option>Health &amp; Beauty</option>
                                            <option>Sound &amp; Speakers</option>
                                            <option>TV &amp; Audio</option>
                                            <option>Computers</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                            <div class="header-action">
                                
                                <div class="block-wishlist action">
                                    <a class="icon-link" href="wishlist.html">
                                    <i class="flaticon-shopping-bag"></i>
                                    <span class="count">0</span>
                                    <span class="text">
                                    <span class="sub">All</span>
                                    Product </span>
                                    </a>
                                </div>
                                <div class="block-cart action">
                                    <a class="icon-link" href="cart.html">
                                    <i class="nav-icon fas fa-shopping-cart"></i>
                                    <span class="count">1</span>
                                    <span class="text">
                                    <span class="sub">Shopping</span>
                                    Cart</span>
                                    </a>
                                    <div class="cart">
                                        <div class="cart__mini">
                                            <ul>
                                                <li>
                                                  <div class="cart__title">
                                                    <h4>Your Cart</h4>
                                                    <span>(1 Item in Cart)</span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="cart__item d-flex justify-content-between align-items-center">
                                                    <div class="cart__inner d-flex">
                                                      <div class="cart__thumb">
                                                        <a href="product-details.html">
                                                          <img src="{{url('public')}}/assets2/img/cart/20.jpg" alt="">
                                                        </a>
                                                      </div>
                                                      <div class="cart__details">
                                                        <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                        <div class="cart__price">
                                                          <span>$255.00</span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="cart__del">
                                                        <a href="#"><i class="fal fa-times"></i></a>
                                                    </div>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="cart__sub d-flex justify-content-between align-items-center">
                                                    <h6>Subtotal</h6>
                                                    <span class="cart__sub-total">$255.00</span>
                                                  </div>
                                                </li>
                                                <li>
                                                    <a href="cart.html" class="wc-cart mb-10">View cart</a>
                                                    <a href="checkout.html" class="wc-checkout">Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-userlink">
                                    <a class="icon-link" href="my-account.html">
                                    <i class="flaticon-user"></i>
                                    <span class="text">
                                    <span class="sub">Login </span>
                                    My Account </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>