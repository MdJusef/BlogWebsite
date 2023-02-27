<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;
use DB;
use App\Models\Author;

class NewsController extends Controller
{
    public function blogManage(){
        return view('admin.blog.add-blog',[
            'categories'=>Category::where('status',1)->orderby('id','desc')->get(),
            'authors'=>Author::where('status',1)->orderby('id','desc')->get()
        ]);
    }
    public function saveBlog(Request $request){
//        return $request->file('image');
        $blog = new Blog();
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->slug = $request->slug->makeSlug();
        $blog->description = $request->description;
        $blog->date = $request->date;
        $blog->image = $this->saveImage($request);
        $blog->save();
        return back();
    }
    private function saveImage($request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='assets/blog-image/';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    private function makeSlug($request){
        if($request->slugh){
            $str = $request->slug;

        }
    }
    public function manageBlog(){
        $blogs = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','author.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->orderby('id','desc')
            ->get();
        return view('admin.blog.manage-blog',[
            'blogs'=>$blogs
        ]);
    }
}
