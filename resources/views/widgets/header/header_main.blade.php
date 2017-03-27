<header id="sp-header-wrapper" class=" box-layout4 ">
    <div class="container">
        <div class="row-fluid" id="header">
            <div id="sp-logo" class="span4">
                <div class="logo-wrapper">
                    <a href="index.html"><img alt="" class="image-logo" src="images/banners/logo/logo_NEW-ok-final_1-01.png">
                    </a>
                </div>
            </div>
            <div id="sp-advanced-search" class="span5">
                <div class="jshop_ajaxsearch">
                    <form name="searchForm" method="get" action="/tim-kiem">
                        <input type="text" class="inputbox" name="search" id="jshop_search" value="">
                        <input class="button" type="submit" value="Tìm kiếm"> </form>
                    <div id="search-result"></div>
                </div>
                <!--Sitelinks Search Box-->
            </div>
            <div id="sp-mini-cart" class="span3 visible-desktop">
                <div class="module  mod_jshopping_cart_ext">
                    <div class="mod-wrapper clearfix">
                        <div class="mod-content clearfix">
                            <div class="mod-inner clearfix">
                                <div id="jshop_module_cart">
                                    <span class="jshop_quantity_products top-cart-title">
                                    <span class="my_cart">Giỏ Hàng:</span>
                                    <span class="count_products_cart">
                                        <span id="count_products_cart">{{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }}</span> item
                                    </span>
                                    </span>
                                    <div class="top-cart-content" style="display: none;">
                                        @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() >0)
                                        <ol id="top-cart-sidebar" class="cart-products-list">
                                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart)
                                            <li class="item even">
                                                <a href="/chi-tiet-san-pham/{{ $cart->options->slug }}.html" title="{{ $cart->name }}" class="product-image">
                                                    <img src="/images/images_pro/{{ $cart->options->img }}" width="50" height="50" alt="{{ $cart->name }}">
                                                </a>
                                                <div class="product-details">
                                                    <a id="delete_cart" idsp = {{ $cart->rowId }} href="#" title="Remove This Item"  class="btn-remove">Remove This Item</a>
                                                    <p class="product-name name"><a href="/chi-tiet-san-pham/{{ $cart->options->slug }}.html">{{ $cart->name }}</a></p>
                                                    <strong class="qtty">{{ $cart->qty }}</strong> x <span class="price summ">{{ number_format($cart->price,0,",",".") }} Đ</span>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ol>
                                        @else
                                        <p class="empty">Bạn không có sản phẩm nào trong giỏ hàng của bạn.</p>
                                        @endif

                                        <div id="jshop_quantity_products" class="top-subtotal">
                                            <strong id="total_price">Tổng giá tiền: {{ \App\Helpers\Helpers::get_cart_total() }}</strong>
                                            <span id="jshop_summ_product" class="price"> Đ</span>
                                        </div>
                                        <div class="actions goto_cart">
                                            <a href="/gio-hang.html">Xem giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
        </div>
    </div>
</header>