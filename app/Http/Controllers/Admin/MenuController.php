<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Menu;
use App\OnePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function getList(){
        $menu = Menu::paginate(20);
        return view('admin.main.menu.list',compact('menu'));
    }
    public function getAdd(){
        $parent = Menu::get();
        return view('admin.main.menu.add',compact('parent'));
    }
    public function postAdd(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:menus',
        ],[
            'name.required' => 'Bạn chưa nhập tên menu',
            'name.unique' => 'Tên menu đã tồn tại',
        ]);
        $menu_slug = '';
        $menu_cate = '';
//        if($request->kieutrang == 0){
//            return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Bạn chưa chọn kiểu trang']);
//        }
        if($request->kieutrang == 2){
            $id_menu_kieutrang = $request->loadkieutrang;
            $cate = Category::where('id',$id_menu_kieutrang)->first();
            if($cate->count() ){
                $menu_slug = 'loai-san-pham/'.$cate->slug;
                $menu_cate = $cate->id;
            }
        }
        elseif($request->kieutrang == 5){
            $id_menu_kieutrang = $request->loadkieutrang;
            $onepage = OnePage::where('id',$id_menu_kieutrang)->first();
            if($onepage->count() ){
                $menu_slug = $onepage->slug;
            }
        }
        elseif($request->kieutrang ==1){
            $menu_slug = 'trang-chu';
        }
        elseif($request->kieutrang ==3){
            $menu_slug = 'san-pham';
        }
        elseif($request->kieutrang ==4){
            $menu_slug = 'tin-tuc';
        }
        elseif($request->kieutrang ==6){
            $menu_slug = 'gio-hang';
        }
        else{
            $menu_slug = '';
        }
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->slug = $menu_slug;
        $menu->content = $request->contents;
        $menu->icon = $request->icon;
        $menu->sort_order = $request->sort_order;
        $menu->parent_id = $request->parent_id;
        $menu->position = $request->position;
        if($menu_cate){
            $menu->cate_id = $menu_cate;
        }
        $menu->type_page = $request->kieutrang;
        if($request->status == 'on'){
            $menu->status = 1;
        }
        else{
            $menu->status = 0;
        }
        $menu->save();
        return redirect('/admin/menu/list.html')->with(['flash_level'=>'success','flash_message'=>'Thêm menu thành công']);
    }
    public function getEdit($id){
        $parent = Menu::get();
        $cate = Category::get();
        $menu = Menu::where('id',$id)->first();
        return view('admin.main.menu.edit',compact('menu','parent','cate'));
    }
    public function postEdit($id, Request $request){
        $this->validate($request,[
            'name' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên menu'
        ]);
        $menu_slug = '';
        $menu_cate = '';
//        if($request->kieutrang == 0){
//            return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Bạn chưa chọn kiểu trang']);
//        }
        if($request->kieutrang == 2){
            $id_menu_kieutrang = $request->loadkieutrang;
            $cate = Category::where('id',$id_menu_kieutrang)->first();
            if($cate->count() ){
                $menu_slug = 'loai-san-pham/'.$cate->slug;
                $menu_cate = $cate->id;
            }
        }
        elseif($request->kieutrang == 5){
            $id_menu_kieutrang = $request->loadkieutrang;
            $onepage = OnePage::where('id',$id_menu_kieutrang)->first();
            if($onepage->count() ){
                $menu_slug = $onepage->slug;
            }
        }
        elseif($request->kieutrang ==1){
            $menu_slug = 'trang-chu';
        }
        elseif($request->kieutrang ==3){
            $menu_slug = 'san-pham';
        }
        elseif($request->kieutrang ==4){
            $menu_slug = 'tin-tuc';
        }
        elseif($request->kieutrang ==6){
            $menu_slug = 'gio-hang';
        }
        else{
            $menu_slug = '';
        }
        $menu = Menu::where('id',$id)->first();
        $menu->name = $request->name;
        $menu->slug = $menu_slug;
        $menu->content = $request->contents;
        $menu->icon = $request->icon;
        $menu->sort_order = $request->sort_order;
        $menu->parent_id = $request->parent_id;
        $menu->position = $request->position;
        if($menu_cate){
            $menu->cate_id = $menu_cate;
        }
        $menu->type_page = $request->kieutrang;
        if($request->status == 'on'){
            $menu->status = 1;
        }
        else{
            $menu->status = 0;
        }
        $menu->save();
        return redirect('/admin/menu/list.html')->with(['flash_level'=>'success','flash_message'=>'Sửa menu thành công']);
    }
    public function getDelete($id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/admin/menu/list.html')->with(['flash_level'=>'success','flash_message'=>'Xóa menu thành công']);
    }
    public function loadkieutrang($id){
        if($id == 2){
            $data = Category::get();
            $name = 'Nhóm sản phẩm';
            return view('block.loadkieutrang',compact('name','id','data'));
        }
        elseif($id == 5){
            $data = OnePage::get();
            $name = 'Nhóm trang Onepage';
            return view('block.loadkieutrang',compact('name','id','data'));
        }elseif($id == 7){
            $name = 'URL';
            return view('block.url',compact('name'));
        }
    }
}
