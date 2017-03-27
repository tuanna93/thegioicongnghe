<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function getAdd(){
        return view('admin.main.post.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:posts',
            'image' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tiêu đề tin tức',
            'name.unique' => 'Tiêu đề tin tức dã tồn tại',
            'image.unique' => 'Bạn chưa chọn hình ảnh'
        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->slug = str_slug($request->name);
        $post->intro = $request->intro;
        $post->content = $request->contents;
        $post->image = $request->image;
        $post->keywords = $request->keywords;
        $post->post_id = 1;
        $post->description = $request->description;
        if($request->status == 'on'){
            $post->status = 1;
        }
        else{
            $post->status = 0;
        }
        $post->save();
        return redirect('/admin/post/list.html')->with(['flash_message'=>'Bạn thêm tin tức thành công','flash_level'=>'success']);
    }
    public function getList(){
        $post = Post::get();
        return view('admin.main.post.list',compact('post'));
    }
    public function getView($slug){
        $post = Post::where('slug',$slug)->first();
        return view('admin.main.post.view',compact('post'));
    }
    public function getEdit($slug){
        $post = Post::where('slug',$slug)->first();
        return view('admin.main.post.edit',compact('post'));
    }
    public function postEdit(Request $request,$slug){
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tiêu đề tin tức',
            'image.unique' => 'Bạn chưa chọn hình ảnh'
        ]);
        $post = Post::where('slug',$slug)->first();
        $post->name = $request->name;
        $post->slug = str_slug($request->name);
        $post->intro = $request->intro;
        $post->content = $request->contents;
        $post->image = $request->image;
        $post->keywords = $request->keywords;
        $post->post_id = 1;
        $post->description = $request->description;
        if($request->status == 'on'){
            $post->status = 1;
        }
        else{
            $post->status = 0;
        }
        $post->save();
        return redirect('/admin/post/list.html')->with(['flash_message'=>'Bạn cập nhật tin tức thành công','flash_level'=>'success']);
    }
    public function getDelete($slug){
        $post = Post::where('slug',$slug)->first();
        $post->delete();
        return redirect('/admin/post/list.html')->with(['flash_message'=>'Bạn xóa tin tức thành công','flash_level'=>'success']);
    }
}
