<?php
//
//if(!function_exists('page_get_option')){
//    function page_get_option($option){
//        $data = \App\Option::where('name',$option)->first();
//        return  $data->value;
//    }
//}
//if(!function_exists('check_menu')){
//    function check_menu($id,$class=''){
//        $sub_menu = \App\Menu::where('parent_id',$id)->get();
//        if(count($sub_menu) >0 ){
//            return $class;
//        }
//        else{
//            return '';
//        }
//    }
//}
//if(!function_exists('check_categories')){
//    function check_categories($id,$class=''){
//        $sub_category = \App\Category::where('parent_id',$id)->get();
//        if(count($sub_category) >0 ){
//            return $class;
//        }
//        else{
//            return '';
//        }
//    }
//}
//if(!function_exists('check_type_menu')){
//    function check_type_menu($slug){
//        if($slug == 'san-pham') {
//            return '/loai-san-pham';
//        }
//        elseif ($slug == 'tin-tuc'){
//            return '/tin-tuc';
//        }
//        else{
//            return '';
//        }
//    }
//}
//if(!function_exists('check_image_sale')){
//    function check_image_sale($status_sale){
//        if($status_sale == 1 ){
//            return '<img src="/images/label/best.png" alt="Best">';
//        }
//        elseif($status_sale == 2 ){
//            return '';
//            return '<img src="/images/label/new.png" alt="NEW">';
//        }
//        elseif($status_sale == 3 ){
//            return '<img src="/images/label/hot.png" alt="HOT">';
//        }
//        elseif($status_sale == 1 ){
//            return '<img src="/images/label/sale.png" alt="SALE">';
//        }
//        else{
//            return '';
//        }
//    }
//}
//if(!function_exists('check_key_sale')){
//    function check_key_sale($status_sale){
//        if($status_sale == 1 ){
//            return 'BEST';
//        }
//        elseif($status_sale == 2 ){
//            return 'NEW';
//        }
//        elseif($status_sale == 3 ){
//            return 'HOT';
//        }
//        elseif($status_sale == 1 ){
//            return 'SALE';
//        }
//        else{
//            return '';
//        }
//    }
//}
//if(!function_exists('check_label_product')) {
//    function check_label_product($status_sale){
//        if($status_sale == 1){
//            return "<span class=\"label label-primary\">BEST</span>";
//        }
//        elseif($status_sale == 2){
//            return "<span class=\"label label-success\">NEW</span>";
//        }
//        elseif($status_sale == 3){
//            return "<span class=\"label label-danger\">HOT</span>";
//        }
//        elseif($status_sale == 4){
//            return "<span class=\"label label-warning\">SALE</span>";
//        }
//        else{
//            return "<span class=\"label label-info\">NONE</span>";
//        }
//    }
//}
//if(!function_exists('check_status_active')) {
//    function check_status_active($status){
//        if($status == 1){
//            return "<span class=\"label label-success\">Đã kích hoạt</span>";
//        }
//        else{
//            return "<span class=\"label label-danger\">Chưa kích hoạt</span>";
//        }
//    }
//}
//if(!function_exists('check_status_cart')) {
//    function check_status_cart($status){
//        if($status == 1){
//            return "<span class=\"label label-success\">Đã duyệt</span>";
//        }
//        else{
//            return "<span class=\"label label-danger\">Chưa duyệt</span>";
//        }
//    }
//}
//if(!function_exists('get_product_involve')){
//    function get_product_involve($cate){
//        $product = \App\Product::where('cate_id','like','%'.$cate.'%')->get();
//        return $product;
//    }
//}
//if(!function_exists('get_product_name')) {
//    function get_product_name($id)
//    {
//        $product=\App\Product::find($id);
//        return $product->name;
//    }
//}
//if(!function_exists('get_cart_total')){
//    function get_cart_total(){
//        $total_price = \Gloudemans\Shoppingcart\Facades\Cart::subtotal(0,",",".");
//        return $total_price;
//    }
//}
//if(!function_exists('get_cart_count')){
//    function get_cart_count(){
//        $count = \Gloudemans\Shoppingcart\Facades\Cart::count();
//        return $count;
//    }
//}
//if(!function_exists('get_cart')){
//    function get_cart(){
//        echo '<ol id="top-cart-sidebar" class="cart-products-list">';
//        foreach (\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart)
//        {
//            echo '<li class="item even">
//            <a href="/chi-tiet-san-pham/'.$cart->options->slug.'.html" title="'.$cart->name.'" class="product-image">
//                <img src="/images/images_pro/'.$cart->options->img.'" width="50" height="50" alt="'.$cart->name.'">
//            </a>
//            <div class="product-details">
//                <a id="delete_cart" idsp = "'.$cart->rowId.'" href="#" title="Remove This Item" class="btn-remove">Remove This Item</a>
//                <p class="product-name name"><a href="/chi-tiet-san-pham/'.$cart->options->slug.'.html">'.$cart->name.'</a></p>
//                <strong class="qtty">'.$cart->qty.'</strong> x <span class="price summ">'.number_format($cart->price,0,",",".").' Đ</span>
//            </div>
//        </li>';
//        }
//        echo '</ol>
//        <div id="jshop_quantity_products" class="top-subtotal">
//				<strong>Tổng giá tiền:</strong>
//				<span id="jshop_summ_product" class="price">
//					'.\Gloudemans\Shoppingcart\Facades\Cart::subtotal(0,".",",").' Đ				</span>
//        </div>
//        <div class="actions goto_cart">
//				<a href="/gio-hang.html">Xem giỏ hàng</a>
//        </div>';
//    }
//}
//if(!function_exists('get_qty_cart')){
//    function get_qty_cart($id){
//        $qty = 0;
//        if(\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
//        foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart){
//            if($cart->options->id == $id){
//                $qty = $cart->qty;
//            }
//        }
//        return $qty;
//    }
//}
//if(!function_exists('check_error_first')){
//    function check_error_first($errors){
//        if($errors){
//            echo '<div class="alert alert-danger" style="display:inline">';
//            echo $errors;
//            echo '</div>';
//        }
//    }
//}
//if(!function_exists('cate_parent')){
//    function cate_parent($data,$parent=0,$str='--',$select=0){
//        foreach($data as $cate){
//            $id = $cate->id;
//            $name = $cate->name;
//            if($cate->parent_id == $parent){
//                if($select != 0 && $id == $select){
//                    echo "<option value='$id' selected='selected'>$str $name</option>";
//                }else{
//                    echo "<option value='$id'>$str $name</option>";
//                }
//                cate_parent($data,$id,$str."--",$select);
//            }
//
//        }
//    }
//}
//if(!function_exists('cate_parent_name')){
//    function cate_parent_name($parent){
//        if($parent==0){
//            echo "NONE";
//        }
//        else{
//            echo \App\Category::where('id',$parent)->get()->first()->name;
//        }
//    }
//}
//if(!function_exists('get_cate_product')) {
//    function get_cate_product($id)
//    {
//        $cate = \App\Category::where('id',$id)->first();
//        if($cate){
//            return $cate->name;
//        }else{
//            return "Danh mục không tồn tại";
//        }
//    }
//}
//if(!function_exists('get_time')) {
//    function get_time($timestamps){
//        return Carbon\Carbon::parse($timestamps)->format('d/m/Y');
//    }
//}
//if(!function_exists('get_price_product')) {
//    function get_price_product($price)
//    {
//        if($price){
//            return number_format($price,0,',','.');
//        }else{
//            return 0;
//        }
//    }
//}
//if(!function_exists('get_menu_admin')) {
//    function get_menu_admin($data,$parent=0,$str=""){
//        $stt = 0;
//        foreach($data as $menu){
//            if($menu->parent_id == $parent){
//                echo "<tr>";
//                echo "<td>".$str.check_parent_sub($parent)." ".$menu->name."</td>";
//                echo check_icon_menu($menu);
//                echo "<td>".get_parent_menu($menu->parent_id)."</td>";
//                echo "<td>".get_position_menu($menu->position)."</td>";
//                echo "<td>".$menu->sort_order."</td>";
//                echo "<td>".check_status_active($menu->status)."</td>";
//                echo "<td>";
//                echo "<a href='/admin/menu/edit/".$menu->id."' class='btn btn-primary btn-xs'><i class='fa fa-folder'></i> Sửa</a>";
//                echo "<a href='/admin/menu/delete/".$menu->id."' class='btn btn-warning btn-xs'><i class='fa fa-trash'></i> Xóa</a>";
//                echo "</td>";
//                echo "</tr>";
//                get_menu_admin($data,$menu->id,'--'.$str);
//
//            }
//        }
//    }
//}
//if(!function_exists('get_parent_menu')) {
//    function get_parent_menu($parent){
//        $parent_name = \App\Menu::where('id',$parent)->first();
//        if($parent_name){
//            return $parent_name->name;
//        }
//        else{
//            return "NONE";
//        }
//    }
//}
//if(!function_exists('get_position_menu')) {
//    function get_position_menu($position){
//        if($position == 1){
//            return "Menu trên";
//        }
//        if($position == 2){
//            return "Menu dưới";
//        }
//    }
//}
//if(!function_exists('check_parent_sub')) {
//    function check_parent_sub($parent){
//        if($parent == 0){
//            return "<img src='/images/images_icon/Speerio_folderopen_edit.gif'>";
//        }
//        else{
//            return "<img src='/images/images_icon/sub.gif'>";
//        }
//    }
//}
//if(!function_exists('check_icon_menu')) {
//    function check_icon_menu($menu){
//        if($menu->icon){
//            return "<td><img src='".$menu->icon."' alt='".$menu->name."' class='img_pro'/></td>";
//        }else{
//            return "<td><span class=\"label label-danger\">Không có icon</span></td>";
//        }
//    }
//}
//if(!function_exists('menu_parent')){
//    function menu_parent($data,$parent=0,$str='--',$select=0){
//        foreach($data as $menu){
//            $id = $menu->id;
//            $name = $menu->name;
//            if($menu->parent_id == $parent){
//                if($select != 0 && $id == $select){
//                    echo "<option value='$id' selected='selected'>$str $name</option>";
//                }else{
//                    echo "<option value='$id'>$str $name</option>";
//                }
//                menu_parent($data,$id,$str."--");
//            }
//
//        }
//    }
//}
//if(!function_exists('get_menu_bottom')){
//    function get_menu_bottom(){
//        $menu_bottom = \App\Menu::where('position',2)->where('parent_id',0)->where('status',1)->orderBy('sort_order','ASC')->get();
//        return $menu_bottom;
//    }
//}
//if(!function_exists('get_menu_bottom_sub')){
//    function get_menu_bottom_sub($parent_id){
//        $menu_bottom_sub = \App\Menu::where('parent_id',$parent_id)->get();
//        return $menu_bottom_sub;
//    }
//}
//if(!function_exists('check_position_adv')){
//    function check_position_adv($position){
//        if($position == 1){
//            return "<span class=\"label label-info\">Banner</span>";
//        }
//        elseif($position == 2){
//            return "<span class=\"label label-info\">Quảng cáo trên</span>";
//        }
//        elseif($position == 3){
//            return "<span class=\"label label-info\">Quảng cáo dưới</span>";
//        }
//    }
//}