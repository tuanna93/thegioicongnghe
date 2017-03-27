<section id="sp-component-wrapper">
    <div id="sp-component">
        <div id="system-message-container"> </div>
        <div id="qc_error" style="display: none;"></div>
        @include('block.error')
        <div class="jshop">
            <table class="jshop cart">
                <tbody>
                <tr>
                    <th width="20%"> Hình ảnh </th>
                    <th> Mục </th>
                    <th width="15%"> Đơn giá </th>
                    <th width="15%"> Số lượng </th>
                    <th width="15%"> Tổng </th>
                </tr>
                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart)
                <tr class="jshop_prod_cart odd">
                    <td class="jshop_img_description_center">
                        <a href="/chi-tiet-san-pham/{{ $cart->options->slug }}.html"> <img src="/images/images_pro/{{ $cart->options->img }}" alt="{{ $cart->name }}" class="jshop_img"> </a>
                    </td>
                    <td class="product_name"> <a href="/chi-tiet-san-pham/{{ $cart->options->slug }}.html">{{ $cart->name }}</a> </td>
                    <td> {{ number_format($cart->price,0,",",".") }} Đ </td>
                    <td> {{ $cart->qty }} </td>
                    <td> {{ number_format($cart->price*$cart->qty,0,",",".") }} Đ </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <table class="jshop jshop_subtotal">
                <tbody>
                <tr class="total">
                    <td class="name"> Tổng </td>
                    <td class="value"> <span id="qc_total">{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal(0,",",".") }} Đ</span> </td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <table class="jshop">
            <tbody>
            <tr>
                <td> </td>
            </tr>
            </tbody>
        </table>
        <form action="/thanh-toan.html" method="post" id="payment_form" name="quickCheckout">
            {!! csrf_field() !!}
            <fieldset class="quick_checkout">
                <legend>Địa chỉ</legend>
                <div id="qc_address">
                    <div class="jshop address_block">
                        <div class="jshop_register">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="name">Tên <span>*</span>
                                    </td>
                                    <td>
                                        <input type="text" name="f_name" id="f_name" value="" class="inputbox">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name"> E-mail <span>*</span> </td>
                                    <td>
                                        <input type="text" name="email" id="email" value="" class="inputbox"></td>
                                </tr>
                                <tr>
                                    <td class="name"> ĐỊA CHỈ <span>*</span> </td>
                                    <td>
                                        <input type="text" name="street" id="street" value="" class="inputbox"></td>
                                </tr>
                                <tr>
                                    <td class="name"> Thành phố <span>*</span> </td>
                                    <td>
                                        <input type="text" name="city" id="city" value="" class="inputbox"> </td>
                                </tr>
                                <tr>
                                    <td class="name"> Điện thoại <span>*</span> </td>
                                    <td>
                                        <input type="text" name="phone" id="phone" value="" class="inputbox"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="padding-top:10px;">
                            <div class="requiredtext">* Yêu cầu</div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="jshop">
                <table class="jshop" align="center" style="width:auto;margin-left:auto;margin-right:auto;">
                    <tbody>
                    <tr>
                        <td> Ghi chú thêm dưới đây sẽ được thêm vào đơn đặt hàng của bạn:
                            <br>
                            <textarea class="inputbox" id="order_add_info" name="order_add_info"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 5px; text-align: center;">
                <input type="submit" name="save" value="Xác nhận đặt hàng" class="button">
            </div>
        </form>
    </div>
</section>