<section id="sp-component-wrapper">
    <div id="sp-component">
        <div id="system-message-container"> </div>
        <div class="jshop">
                <form action="/san-pham/cart/refresh.html" method="post" name="updateCart">
                    @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() >0)
                <table class="jshop cart">
                    <tbody>
                    <tr>
                        <th class="colWidth10"> Hình ảnh </th>
                        <th class="colWidth30"> Mục </th>
                        <th class="colWidth15"> Đơn giá </th>
                        <th class="colWidth15"> Số lượng </th>
                        <th class="colWidth15"> Tổng </th>
                        <th class="colWidth15"> Hủy bỏ </th>
                    </tr>
                    </tr>
                    @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart)
                    <tr class="jshop_prod_cart odd">
                        <td class="jshop_img_description_center">
                            <a href="/chi-tiet-san-pham/{{ $cart->options->slug }}.html">
                                <img src="/images/images_pro/{{ $cart->options->img }}" alt="{{ $cart->name }}" class="jshop_img">
                            </a>
                        </td>
                        <td class="product_name">
                            <a href="/chi-tiet-san-pham/{{ $cart->options->slug }}.html">
                                {{ $cart->name }}
                            </a>
                        </td>
                        <td>
                            <span class="jshop_price">
			                    <span>{{ number_format($cart->price,0,",",".") }} Đ</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" name="quantity[]" value="{{ $cart->qty }}" id="cart_quantity[]" class="inputbox" style="width: 25px">
                        </td>
                        <td>
                            <span class="jshop_price">
                                <span>{{ number_format($cart->price*$cart->qty,0,",",".") }} Đ</span>
                            </span>
                        </td>
                        <td>
                            <a href="/san-pham/cart/delete.html?number_id=0" onclick="return confirm('Hủy trả lời?')"><i style="display: inline-block; font-size: 18px; color: #ff1a1a;" class="icon-remove"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="cartdescr"></div>
                <br>
                <table class="jshop jshop_subtotal">
                    <tbody>
                    <tr class="total">
                        <td class="name"> Tổng </td>
                        <td class="value jshop_price"> <span>
			{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal(0,".",",") }} Đ</span> </td>
                    </tr>
                    </tbody>
                </table>
                    @else
                        <div class="cart_empty_text">Giỏ hàng rỗng</div>
                    @endif
                <table class="jshop" style="margin-top:10px">
                    <tbody>
                    <tr id="checkout">
                        <td class="colWidth50 td_1">
                            <a href="{{ URL('/') }}"> Tiếp tục mua hàng </a>
                        </td>
                    @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() > 0)
                        <td class="colWidth50 td_2"> <a href="/thanh-toan.html">Thanh toán</a> </td>
                    @endif
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>