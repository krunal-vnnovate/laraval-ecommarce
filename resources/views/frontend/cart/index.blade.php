@extends('layouts.frontend.master')
@section('content')

<!-- featured -->
<section class="flat-spacing-9">
    <div class="container">
        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
            <span class="title fw-6">Products</span>
        </div>
        <div class="wrap-carousel">
            <div class="swiper tf-sw-product-sell" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    @foreach($showProduct as $key => $value)
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product radius-10 style-giftcard">
                            <div class="card-product-wrapper">
                                <a href="product-giftcard.html" class="">
                                    <img class="lazyload img-product" data-src="/{{$value->product_img}}" src="/{{$value->product_img}}" alt="image-product" height="100px">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <!-- <a href="home-giftcard.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip ">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a> -->
                                    <a href="home-giftcard.html#quick_view" data-bs-toggle="modal" class="quick-view box-icon bg_white quickview tf-btn-loading" data-id="{{$value->id}}">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip quick-view">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-giftcard.html" class="title link fw-6">{{$value->category->name}}</a>
                                <span class="price">{{$value->product_name}}</span>
                                <span>{{$value->product_description}}</span>
                                <span class="text-danger">₹{{$value->product_price}}</span>
                                <div class="tf-product-btns">
                                    <a href="home-giftcard.html#quick_add" data-bs-toggle="modal" class="fw-7 fs-12 text_primary w-100 d-flex justify-content-center view-product" data-id="{{ $value->id }}">Quick add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /featured -->
<!-- modal quick_add -->
<div class="modal fade modalDemo" id="quick_add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap">
                <div class="tf-product-info-item">
                    <div class="image">
                        <img id="productImage" src="/" alt="">
                    </div>
                    <div class="content">
                        <span class="price" id="productName"></span>
                        <span class="text-danger" id="productPrice">₹</span>
                    </div>
                </div>
                <div class="tf-product-info-buy-button">
                    <form class="">
                        <a href="{{ url('/fronternd/cart/add/').$value->id }}" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>Add to cart &nbsp;</span></a>
                        <div class="tf-product-btn-wishlist btn-icon-action">
                            <i class="icon-heart"></i>
                            <i class="icon-delete"></i>
                        </div>
                        <a href="home-giftcard.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                            <span class="icon icon-compare"></span>
                            <span class="icon icon-check"></span>
                        </a>
                        <div class="w-100">
                            <a href="home-giftcard.html#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal quick_add -->

<!-- modal quick_view -->
<div class="modal fade modalDemo" id="quick_view">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap" style="height: 350px;">
                <div class="tf-product-media-wrap">
                    <div class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <img id="productImage1" alt="" src="/" height="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-product-info-wrap position-relative">
                    <div class="tf-product-info-list">
                        <div class="tf-product-info-title">
                            <h5 id="productName1"></h5>
                        </div>
                        <div class="tf-product-info-price">
                            <div class="text-danger" id="productPrice1">₹</div>
                        </div>
                        <div class="tf-product-description">
                            <p id="productDescription1"></p>
                        </div>
                        <div class="tf-product-info-buy-button">
                            <form class="">
                                <a href="{{ url('/fronternd/cart/add/').$value->id }}" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn "><span>Add to cart &nbsp;</span></a>
                                <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                                <a href="home-giftcard.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <div class="w-100">
                                    <a href="home-giftcard.html#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                                    <a href="home-giftcard.html#" class="payment-more-option">More payment options</a>
                                </div>
                            </form>
                        </div>
                        <div>
                            <a href="product-detail.html" class="tf-btn fw-6 btn-line">View full details<i class="icon icon-arrow1-top-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal quick_view -->




<!-- gotop -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
    </svg>
</div>
<!-- /gotop -->
@endsection

<script>
    // For quick add
    $(document).ready(function() {
        $(".view-product").click(function() {
            var productId = $(this).data("id");

            $.ajax({
                url: "/product/" + productId,
                type: "GET",
                success: function(data) {
                    // $("#productDescription").text(data.product_description);
                    $("#productName").text(data.product_name);
                    $("#productImage").attr("src", data.product_img);
                    $("#productPrice").text("₹" + data.product_price);
                    $("#quick_add").modal("show");
                }
            });
        });
        $(".quick-view").click(function() {

            var productId = $(this).data("id");
            // alert('ddwwd');
            $.ajax({
                url: "/product/" + productId,
                type: "GET",
                success: function(data) {
                    $("#productDescription1").text(data.product_description);
                    $("#productName1").text(data.product_name);
                    $("#productImage1").attr("src", data.product_img);
                    $("#productPrice1").text("₹" + data.product_price);
                    $("#quick_view").modal("show");
                }
            });
        });
    });
</script>