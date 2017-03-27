<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    public function getCateList(){
        $cate = Category::get();
        return view('admin.main.cate.list',compact('cate'));
    }
    public function getCateAdd(){
        $cate = Category::get();
        return view('admin.main.cate.add',compact('cate'));
    }
    public function postCateAdd(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:categories',
        ],[
            'name.required' => 'Bạn chưa nhập tên danh mục',
            'name.unique' => 'Tên danh mục đã tồn tại',
        ]);
        $cate = new Category();
        $cate->name =$request->name;
        $cate->slug =str_slug($request->name, '-');
        $cate->icon = $request->icon;
        $cate->order = 0;
        $cate->parent_id =$request->parent_id;
        $cate->keywords =$request->keywords;
        $cate->description =$request->description;
        if($request->is_tab == 'on'){
            $cate->is_tab = 1;
        }else{
            $cate->is_tab = 0;
        }
        if($request->status == 'on'){
            $cate->status = 1;
        }else{
            $cate->status = 0;
        }
        $cate->save();
        return redirect('/admin/cate/list.html')->with(['flash_message'=>'Thêm danh mục thành công','flash_level'=>'success']);
    }
    public function getView($slug){
        $cate = Category::where('slug',$slug)->first();
        return view('admin.main.cate.view',compact('cate'));
    }
    public function getEdit($slug){
        $cate = Category::where('slug',$slug)->first();
        $parent = Category::get();
        return view('admin.main.cate.edit',compact('cate','parent'));
    }
    public function postEdit(Request $request,$slug){
        $this->validate($request,[
            'name' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên danh mục',
        ]);
        $cate = Category::where('slug',$slug)->first();
        $cate->name =$request->name;
        $cate->slug =str_slug($request->name, '-');
        if($request->icon != ''){
            $cate->icon = $request->icon;
        }
        $cate->order = 0;
        $cate->parent_id =$request->parent_id;
        $cate->keywords =$request->keywords;
        $cate->description =$request->description;
        if($request->is_tab == 'on'){
            $cate->is_tab = 1;
        }else{
            $cate->is_tab = 0;
        }
        if($request->status == 'on'){
            $cate->status = 1;
        }else{
            $cate->status = 0;
        }
        $cate->save();
        return redirect('/admin/cate/list.html')->with(['flash_message'=>'Sửa danh mục thành công','flash_level'=>'success']);
    }
    public function postDelete($slug){
        $cate = Category::where('slug',$slug)->first();
        $parent = Category::where('parent_id',$cate->id)->get();
        if($parent->count()){
            return redirect()->back()->with(['flash_message'=>'Bạn không được phép xóa danh mục cha','flash_level'=>'danger']);
        }
        else{
            $cate->delete();
            return redirect()->back()->with(['flash_message'=>'Xóa danh mục thành công','flash_level'=>'success']);
        }
    }
}
