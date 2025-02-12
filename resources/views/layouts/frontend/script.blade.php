<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/swiper-bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/count-down.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/lazysize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/drift.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/multiple-modal.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/main.js')}}"></script>
<script type="module" src="https://themesflat.co/html/ecomus/js/model-viewer.min.js"></script>
<script type="module" src="{{asset('assets/frontend/js/zoom.js')}}"></script>
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

