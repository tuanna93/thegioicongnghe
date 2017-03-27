<section id="sp-hotsale-wrapper" class=" box-layout4">
    <div class="container">
        @include('block.message')
        <div class="row-fluid" id="hotsale">
            <div id="sp-hot-sale" class="span12">
                <div class="module vina_categories">
                    <div class="mod-wrapper clearfix">
                        <h3 class="header">
                            <span>Sản phẩm HOT &amp; Bán chạy nhất</span>			</h3> <span class="sp-badge vina_categories"></span>
                        <div class="mod-content clearfix">
                            <div class="mod-inner clearfix">
                                <div class="latest_products jshop">
                                    <div class="row-fluid">
                                        @foreach($product as  $pro)
                                        <div class="block_item span2">
                                            <div class="item_inner">
                                                <div class="image">
                                                    <div class="image_block">
                                                        <div class="product_label">{!! \App\Helpers\Helpers::check_image_sale($pro->status_sale) !!} </div>
                                                        <a class="images" href="/chi-tiet-san-pham/{{ $pro->slug }}.html"> <img class="jshop_img single-image" src="/images/images_pro/{{ $pro->image }}" alt="{{ $pro->name }}"> </a>
                                                    </div>
                                                </div>
                                                <div class="vina_content">
                                                    <div class="name"> <a href="/chi-tiet-san-pham/{{ $pro->slug }}.html">{{ $pro->name }}</a> </div>
                                                    <div class="vina_price">
                                                        <p class="jshop_price"> <span>{{ number_format($pro->price_new,0,",",".") }} Đ</span> </p>
                                                        @if($pro->price_old)<p class="old_price"><span>{{ number_format($pro->price_old,0,",",".") }} Đ</span></p>@endif
                                                    </div>
                                                </div>
                                                <div class="buttons vina_bottons">
                                                    <a class="button_buy" href="" title="" data-original-title="Add to Cart" idsp = "{{ $pro->id }}" nsp = {{ $pro->slug }}><i style="display: inline-block;" class="icon-shopping-cart"></i></a>
                                                    <a class="button_detail" href="/chi-tiet-san-pham/{{ $pro->slug }}.html" title="" data-original-title="View Detail"><i style="display: inline-block;" class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                            @endforeach
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
</section>