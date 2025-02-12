<!-- header -->
<header id="header" class="header-default header-style-3">
    <div class="container-full px_15 lg-px_40">
        <div class="row wrapper-header align-items-center">
            <div class="col-md-4 col-3 tf-lg-hidden">
                <a href="home-giftcard.html#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                        <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
            <div class="col-xl-9 col-md-4 col-6">
                <div class="wrap-header-left">
                    <a href="{{url('/frontend')}}" class="logo-header">
                        <img src="{{asset('assets/frontend/images/logo/RaviPrintersLogo.png')}}" alt="logo" class="logo">
                    </a>
                    <nav class="box-navigation text-center">
                        <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-30">
                            <li class="menu-item">
                                <a href="{{url('/frontend')}}" class="item-link">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route ('frontend.cart.index')}}" class="item-link">Products</a>
                                <!-- <i class="icon icon-arrow-down"></i> -->
                                <!-- <div class="sub-menu mega-menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Product layouts</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-detail.html" class="menu-link-text link">Product default</a></li>
                                                        <li><a href="product-grid-1.html" class="menu-link-text link">Product grid 1</a></li>
                                                        <li><a href="product-grid-2.html" class="menu-link-text link">Product grid 2</a></li>
                                                        <li><a href="product-stacked.html" class="menu-link-text link">Product stacked</a></li>
                                                        <li><a href="product-right-thumbnails.html" class="menu-link-text link">Product right thumbnails</a></li>
                                                        <li><a href="product-bottom-thumbnails.html" class="menu-link-text link">Product bottom thumbnails</a></li>
                                                        <li><a href="product-drawer-sidebar.html" class="menu-link-text link">Product drawer sidebar</a></li>
                                                        <li><a href="product-description-accordion.html" class="menu-link-text link">Product description accordion</a></li>
                                                        <li><a href="product-description-list.html" class="menu-link-text link">Product description list</a></li>
                                                        <li><a href="product-description-vertical.html" class="menu-link-text link">Product description vertical</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Product details</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-inner-zoom.html" class="menu-link-text link">Product inner zoom</a></li>
                                                        <li><a href="product-zoom-magnifier.html" class="menu-link-text link">Product zoom magnifier</a></li>
                                                        <li><a href="product-no-zoom.html" class="menu-link-text link">Product no zoom</a></li>
                                                        <li><a href="product-photoswipe-popup.html" class="menu-link-text link">Product photoswipe popup</a></li>
                                                        <li><a href="product-zoom-popup.html" class="menu-link-text link">Product external zoom and photoswipe popup</a></li>
                                                        <li><a href="product-video.html" class="menu-link-text link">Product video</a></li>
                                                        <li><a href="product-3d.html" class="menu-link-text link">Product 3D, AR models</a></li>
                                                        <li><a href="product-options-customizer.html" class="menu-link-text link">Product options & customizer</a></li>
                                                        <li><a href="product-advanced-types.html" class="menu-link-text link">Advanced product types</a></li>
                                                        <li><a href="product-giftcard.html" class="menu-link-text link">Recipient information form for gift card products</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Product swatchs</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-color-swatch.html" class="menu-link-text link">Product color swatch</a></li>
                                                        <li><a href="product-rectangle.html" class="menu-link-text link">Product rectangle</a></li>
                                                        <li><a href="product-rectangle-color.html" class="menu-link-text link">Product rectangle color</a></li>
                                                        <li><a href="product-swatch-image.html" class="menu-link-text link">Product swatch image</a></li>
                                                        <li><a href="product-swatch-image-rounded.html" class="menu-link-text link">Product swatch image rounded</a></li>
                                                        <li><a href="product-swatch-dropdown.html" class="menu-link-text link">Product swatch dropdown</a></li>
                                                        <li><a href="product-swatch-dropdown-color.html" class="menu-link-text link">Product swatch dropdown color</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Product features</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-frequently-bought-together.html" class="menu-link-text link">Frequently bought together</a></li>
                                                        <li><a href="product-frequently-bought-together-2.html" class="menu-link-text link">Frequently bought together 2</a></li>
                                                        <li><a href="product-upsell-features.html" class="menu-link-text link">Product upsell features</a></li>
                                                        <li><a href="product-pre-orders.html" class="menu-link-text link">Product pre-orders</a></li>
                                                        <li><a href="product-notification.html" class="menu-link-text link">Back in stock notification</a></li>
                                                        <li><a href="product-pickup.html" class="menu-link-text link">Product pickup</a></li>
                                                        <li><a href="product-images-grouped.html" class="menu-link-text link">Variant images grouped</a></li>
                                                        <li><a href="product-complimentary.html" class="menu-link-text link">Complimentary products</a></li>
                                                        <li><a href="product-quick-order-list.html" class="menu-link-text link position-relative">Quick order list<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </li>
                            <li class="menu-item"><a href="https://themeforest.net/item/ecomus-ultimate-html5-template/53417990?s_rank=3" class="item-link">Buy Now</a></li>
                            <li class="menu-item position-relative">
                                <a href="home-giftcard.html#" class="item-link">About</a>
                            </li>
                            <li class="menu-item"><a href="https://themeforest.net/item/ecomus-ultimate-html5-template/53417990?s_rank=3" class="item-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-3">
                <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                    <li class="nav-search"><a href="home-giftcard.html#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>
                    <li class="nav-wishlist"><a href="wishlist.html" class="nav-icon-item"><i class="icon icon-heart"></i><span class="count-box">0</span></a></li>
                    <li class="nav-cart"><a href="home-giftcard.html#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box">0</span></a></li>
                    @auth
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon icon-logout"></i> 
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-account"><a href="home-giftcard.html#login" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                    @endauth
                    
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- /header -->

<!-- modal login -->
<div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Log in</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <!-- <form class="" action="my-account.html" accept-charset="utf-8">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" name="">
                        <label class="tf-field-label" for="">Email *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="password" name="">
                        <label class="tf-field-label" for="">Password *</label>
                    </div>
                    <div>
                        <a href="my-account-orders.html#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your password?</a>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Log in</span></button>
                        </div>
                        <div class="w-100">
                            <a href="my-account-orders.html#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                New customer? Create your account
                                <i class="icon icon-arrow1-top-left"></i>
                            </a>
                        </div>
                    </div>
                </form> -->

                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input @error('email') is-invalid @enderror" placeholder="" type="email" id="property3" name="email" value="{{ old('email') }}">
                    <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="tf-field style-1 mb_30">
                    <input class="tf-field-input tf-input @error('password') is-invalid @enderror" placeholder="" type="password" id="property4" name="password">
                    <label class="tf-field-label fw-4 text_black-2" for="property4">Password *</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="mb_20">
                    <p class="mb-1">
                      @if (Route::has('password.request'))
                      <a class="tf-btn btn-line" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                      </a>
                      @endif
                    </p>
                  </div>
                  <div class="">
                    <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">{{ __('Login') }}</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modalCentered fade form-sign-in modal-part-content" id="forgotPassword">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Reset your password</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div>
                        <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" name="">
                        <label class="tf-field-label" for="">Email *</label>
                    </div>
                    <div>
                        <a href="my-account-orders.html#login" data-bs-toggle="modal" class="btn-link link">Cancel</a>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Reset password</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modalCentered fade form-sign-in modal-part-content" id="register">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title">Register</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="">
                        <label class="tf-field-label" for="">First name</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" name="">
                        <label class="tf-field-label" for="">Last name</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" name="">
                        <label class="tf-field-label" for="">Email *</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" placeholder=" " type="password" name="">
                        <label class="tf-field-label" for="">Password *</label>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <a href="register.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Register</span></a>
                        </div>
                        <div class="w-100">
                            <a href="my-account-orders.html#login" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                Already have an account? Log in here
                                <i class="icon icon-arrow1-top-left"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal login -->

@include('layouts.frontend.script')