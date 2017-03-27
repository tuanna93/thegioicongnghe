<?php

namespace App\Http\Controllers;

use App\Category;
use App\OnePage;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function trangchu(){
        $product = Product::select('*')->orderBy('id','DESC')->get();
        $category = Category::select('*')->where('parent_id',0)->where('is_tab',1)->get();
        return view('pages.index',compact('product','category'));
    }
    public function Page($page){
        $namepage = OnePage::where('slug','like','%'.$page.'%')->first();
        if($namepage){
            $keywords = $namepage->keywords;
            $description = $namepage->description;
            return view('pages.onepage',compact('namepage','description','keywords'));
        }
        else{
            return view('pages.error');
        }
    }
    public function search(Request $request){
        $key = $request->search;
        $product = Product::where('name','like','%'.$key.'%')->paginate(12);
        return view('pages.search',compact('product','key'));
    }
    public function error(){
        return view('pages.error');
    }
}
