<section id="sp-component-area-wrapper" class=" "><div class="row-fluid" id="component-area">
        <div id="sp-component-area" class="span12">
            <section id="sp-component-wrapper">
                <div id="sp-component">
                        <form name="product" method="post" action="/cart/mua-hang.html" enctype="multipart/form-data" autocomplete="off">
                        {!! csrf_field() !!}
                            <input type="hidden" value="{{ $detail->slug }}" name="slug">
                            <div class="row-fluid jshop">
                                <div class="span5">
                                    <div class="detailsLeft">

                                        <div class="product_image_middle">
                                            <!-- Image label -->
                                            <div class="product_label">
                                               {!! \App\Helpers\Helpers::check_image_sale($detail->status_sale) !!}
                                            </div>

                                            <!-- Image Middle -->
                                            <div id="list_product_image_middle">

                                                <a class="lightbox" id="main_image_full_1559" href="{{ $detail->slug }}.html" title="{{ $detail->name }}">
                                                    <div class="main_image thumbnail">
                                                        <img id="main_image_1559" class="jshop_thumbnail" src="/images/images_pro/{{ $detail->image }}" alt="{{ $detail->name }}" title="{{ $detail->name }}" data-zoom-image="{{ $detail->image }}">
                                                    </div>
                                                    {{--<div class="text_zoom">--}}
                                                        {{--<img src="../components/com_jshopping/images/search.png" alt="zoom">--}}
                                                        {{--<span class="jshop_zoom">Zoom ảnh</span>--}}
                                                    {{--</div>--}}
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Image Thumb -->
                                        <div class="jshop_img_description">
												<span id="list_product_image_thumb">
													</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="span7">
                                    <div class="detailsRight">
                                        <!-- Product name -->
                                        <div class="name">
                                            <h1>{{ $detail->name }}</h1>
                                        </div>

                                        <!-- Review -->
                                        {{--<div class="vina_stars">--}}
                                            {{--<div class="reviews">--}}
                                                {{--0 Đánh giá / <a href="#vinaTab">Thêm đánh giá</a>						</div>--}}
                                        {{--</div>--}}
                                        <div class="clearfix"></div>




                                        <!-- Availability -->


                                        <!-- Short Description -->
                                        <div class="jshop_short_description">
                                            {!! $detail->intro !!}
                                        </div>


                                    </div>
                                    <div class="buy_block">
                                        <!-- Price -->
                                        <div class="vina_price">
                                            <p class="old_price">
                                                <span id="old_price">{{ number_format($detail->price_old,0,",",".") }} Đ</span>
                                            </p>
                                            <p class="prod_price jshop_price">
                                                <span id="block_price">{{ number_format($detail->price_new,0,",",".") }} Đ</span>
                                            </p>

                                        </div>
                                        <!-- Buttons Quantity + Add to cart -->
                                        <div class="prod_buttons" style="">
                                            <span class="prod_qty">Số lượng:&nbsp;</span>
                                            <span class="prod_qty_input">
									            <input type="text" name="quantity" id="quantity" class="inputbox" value="{{ \App\Helpers\Helpers::get_qty_cart($detail->id) }}">
                                            </span>
                                            <span class="btn_add">
									<input type="submit" class="btn btn-primary button button_wishlist" value="MUA NGAY">
								</span>
                                            <!-- Wishlist -->

                                            <span id="jshop_image_loading" style="display:none"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form></div>


                    <div id="list_product_demofiles"></div>

                    <!-- Tabs Full Description + Review + comment -->
                    <div class="tab-block">
                        <ul class="nav nav-pills" id="vinaTab">
                            <li class="active">
                                <a data-toggle="tab" href="#">Mô tả sản phẩm</a>
                            </li>
                        </ul>
                        <div id="vinaTabContent" class="tab-content">
                            <div id="vina-description" class="tab-pane product-description active">
                                {!! $detail->content !!}
                            </div>

                            <div id="vina-reviews" class="tab-pane product-review">
                            </div>
                        </div>

                        <div class="related_header">
                            <h3 class="header">
                                <span>Sản phẩm liên quan</span>
                            </h3>
                        </div>
                        <div class="jshop list_related">
                            <div class="flexslider_related">
                                    <ul class="slides">
                                        @foreach(\App\Helpers\Helpers::get_product_involve($detail->cate_id) as $pro)
                                        <li class="block_item jshop_related">
                                            <div class="product item_inner shadow-radial productitem_423">
                                                <div class="image">
                                                    <div class="image_block">
                                                        <div class="product_label">
                                                            {!! \App\Helpers\Helpers::check_image_sale($pro->status_sale) !!}
                                                        </div>
                                                        <a class="images" href="{{ $pro->slug }}.html">
                                                            <img class="jshop_img single-image" src="/images/images_pro/{{ $pro->image }}" alt="{{ $pro->name }}" title="{{ $pro->name }}" draggable="false">

                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="vina_content">
                                                    <!-- Title Block -->
                                                    <div class="name">
                                                        <a href="{{ $pro->slug }}">{{ $pro->name }}</a>
                                                    </div>

                                                    <!-- Review Mark -->

                                                    <!-- Price and Old Price -->
                                                    <div class="vina_price">
                                                        <div class="old_price">
                                                            <span>{{ number_format($detail->price_old,0,",",".") }} Đ</span>
                                                        </div>
                                                        <div class="jshop_price">
                                                            <span>{{ number_format($detail->price_new,0,",",".") }} Đ</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </li>
                                            @endforeach

                                    </ul>
                                </div>
                        </div>
                    </div>
        </div>
</section>
</div>
    </div>
</section>