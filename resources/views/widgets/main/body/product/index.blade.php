<section id="sp-component-area-wrapper" class=" ">
    <div class="row-fluid" id="component-area">
        <div id="sp-component-area" class="span12">
            <section id="sp-component-wrapper">
                <div id="sp-component">
                    <div id="system-message-container"> </div>
                    <div class="jshop">
                        <div class="jshop_list_product">
                            <form action="http://tainghe365.com/san-pham.html" method="post" name="sort_count" id="sort_count">
                                {{--<div class="row-fluid block_sorting_count_to_page">--}}
                                    {{--<div class="span3 box_products_sorting">--}}
                                        {{--<div class="jshop_sort_by"> <span>Sắp xếp :</span>--}}
                                            {{--<select id="order" name="order" class="inputbox" onchange="submitListProductFilters()">--}}
                                                {{--<option value="1">Tên</option>--}}
                                                {{--<option value="2">Giá</option>--}}
                                                {{--<option value="3">Ngày</option>--}}
                                                {{--<option value="6" selected="selected">Phổ biến</option>--}}
                                            {{--</select> <img src="/images/arrow_up.gif" alt="orderby" onclick="submitListProductFilterSortDirection()"> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="span3 box_products_count_to_page pull-right">--}}
                                        {{--<div class="jshop_show"> <span>Hiển thị</span>--}}
                                            {{--<select id="limit" name="limit" class="inputbox" onchange="submitListProductFilters()">--}}
                                                {{--<option value="5">5</option>--}}
                                                {{--<option value="10">10</option>--}}
                                                {{--<option value="12" selected="selected">12</option>--}}
                                                {{--<option value="15">15</option>--}}
                                                {{--<option value="20">20</option>--}}
                                                {{--<option value="25">25</option>--}}
                                                {{--<option value="50">50</option>--}}
                                                {{--<option value="99999">Tất cả</option>--}}
                                            {{--</select> <span>/ Trang</span> </div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <input type="hidden" name="orderby" id="orderby" value="0">
                                <input type="hidden" name="limitstart" value="0"> </form>
                            <div class="jshop list_product">
                                <div class="row-fluid">
                                    @if(count($product)>0)
                                    @foreach($product as $pro)
                                    <div class="span3 block_item">
                                        <div class="product item_inner shadow-radial productitem_511">
                                            <div class="image">
                                                <div class="image_block">
                                                    <div class="product_label"> {!! \App\Helpers\Helpers::check_image_sale($pro->status_sale) !!} </div>
                                                    <a class="images" href="/chi-tiet-san-pham/{{ $pro->slug }}.html">
                                                        <img class="jshop_img single-image" src="/images/images_pro/{{ $pro->image }}" alt="{{ $pro->name }}" title="{{ $pro->name }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="vina_content">
                                                <!-- Title Block -->
                                                <div class="name"> <a href="/chi-tiet-san-pham/{{ $pro->slug }}.html">{{ $pro->name }}</a> </div>
                                                <!-- Review Mark -->
                                                <!-- Price and Old Price -->
                                                <div class="vina_price">
                                                    <div class="old_price"> <span>{{ number_format($pro->price_old,0,",",".") }} Đ</span></div>
                                                    <div class="jshop_price"> <span>{{ number_format($pro->price_new,0,",",".") }} Đ</span> </div>
                                                </div>
                                            </div>
                                            <div class="buttons vina_bottons">
                                                <a class="button_buy" href="" title="" data-original-title="Add to Cart" idsp = "{{ $pro->id }}" nsp = {{ $pro->slug }}><i style="display: inline-block;" class="icon-shopping-cart"></i></a>
                                                <a class="button_detail" href="/chi-tiet-san-pham/{{ $pro->slug }}.html" title="" data-original-title="View Detail"><i style="display: inline-block;" class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                        Không tìm thấy sản phẩm
                                    @endif
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="row-fluid block_sorting_count_to_page">
                                <div class="span12 box_pagination pagination_bottom">
                                    <div class="jshop_pagination">
                                        {!! $product->links('block.pagination') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>