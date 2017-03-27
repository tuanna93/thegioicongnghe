<?php

namespace App\Http\Controllers;

use App\Category;
use App\Helpers\Helpers;
use App\Order;
use App\OrderProduct;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $product = Product::select('*')->paginate(12);
        return view('pages.product.index',compact('product'));
    }
    public function cate($slug){
        $cate = Category::where('slug',$slug)->first();
        if($cate->count()){
            $cate_id = $cate->id;
            $keywords = $cate->keywords;
            $description = $cate->description;
            $product = Product::select('*')->where('cate_id',$cate_id)->paginate(12);
            return view('pages.product.index',compact('product','description','keywords'));
        }else{
            return redirect('/')->with(['flash_level'=>'danger','flash_message'=>'Danh mục không tồn tại']);
        }
    }
    public function pro($pro){
        $detail = Product::where('slug','like','%'.$pro.'%')->first();
        if($detail){
            $keywords = $detail->keywords;
            $description = $detail->description;
            return view('pages.product.detail',compact('detail','keywords','description'));
        }else{
            return view('pages.error');
        }
    }
    public function cart_insert_product($id,$slug){
        $pro = Product::where('id',$id)->first();
        if(count($pro)){
             Cart::add(['id' => $id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->price_new, 'options' => ['id'=>$pro->id,'img' => $pro->image,'slug'=>$pro->slug]]);
        }
        Helpers::get_cart();
    }
    public function cart_delete_product($id){
        Cart::remove($id);
        Helpers::get_cart();
    }
    public function get_cart_count(){
        $count =  Cart::content()->count();
        return $count;
    }
    public function buy_detail(Request $request){
        if($request->quantity >0){
            $slug = $request->slug;
            $pro = Product::where('slug',$slug)->first();
            Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => $request->quantity, 'price' => $pro->price_new, 'options' => ['id'=>$pro->id,'img' => $pro->image,'slug'=>$pro->slug]]);
            return redirect('/gio-hang.html');
        }
        else{
            return redirect()->back();
        }
    }
    public function cart(){
        return view('pages.cart');
    }
    public function getcheckout(){
        if(Cart::content()->count() > 0){
            return view('pages.checkout');
        }
        else{
            return redirect('/');
        }
    }
    public function postcheckout(Request $request){
        $this->validate($request, [
            'f_name' => 'required',
            'email' => 'required|email',
            'street' => 'required',
            'city' => 'required',
            'phone' => 'required|min:11|numeric',
        ],[
            'f_name.required' => "Bạn phải nhập tên",
            'email.required' => "Bạn phải nhập Email",
            'email.email' => "Bạn phải nhập đúng định dạng email",
            'street.required' => "Bạn phải nhập địa chỉ",
            'city.required' => "Bạn phải nhập thành phố",
            'phone.required' => "Số điện thoại chưa hợp lệ",
            'phone.min' => "Số điện thoại chưa hợp lệ",
            'phone.numeric' => "Số điện thoại chưa hợp lệ",
        ]);
//        $user = isset(Auth::user()->id) ? 0 : Auth::user()->id;
        $cart = Cart::content();
        if($cart->count() >0 ){
            $order = new Order();
            $order->name = $request->f_name;
            $order->email = $request->email;
            $order->address = $request->street;
            $order->city = $request->city;
            $order->phone = $request->phone;
            $order->comment = $request->order_add_info;
            $order->id_user = 0;
            $order->save();
            $order_id = $order->id;
            foreach ($cart as $item_cart){
                $order_product = new OrderProduct();
                $order_product->id_order = $order_id;
                $order_product->qty = $item_cart->qty;
                $order_product->price = $item_cart->price;
                $order_product->id_product = $item_cart->id;
                $order_product->save();
            }
            Cart::destroy();
            return redirect('/')->with(['flash_level'=>'success','flash_message'=>'Bạn đã mua hàng thành công']);
        }

    }
}
