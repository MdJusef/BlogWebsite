<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor(){
        return view('admin.author.add-author');
    }
    public function saveAuthor(Request $request){
        $author = new Author();
        $author->author_name = $request->author_name;
        $author->bio_data = $request->bio_data;
        $author->image = $this->saveImage($request);
        $author->save();
        return back()->with('message','successfully added author');
    }
    public function saveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = "adminAsset/author-image/";
        $imgUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function manageAuthor(){
        return view('admin.author.manage-author',[
            'authors'=>Author::all()
        ]);
    }
    public function editAuthor($id){
        return view('admin.author.edit-author',[
            'author'=>Author::find($id)
        ]);
    }
    public function updateAuthor(Request $request){
        $author = Author::find($request->author_id);
        $author->author_name = $request->author_name;
        $author->bio_data = $request->bio_data;
        if ($request->file('image')){
            if ($author->image){
                unlink($author->image);
            }
            $author->image = $this->saveImage($request);
        }
        $author->save();
        return redirect('manage-author')->with('message','Update');
    }
    public function deleteAuthor(Request $request){
        $author = Author::find($request->author_id);
        if ($author->image){
            unlink($author->image);
        }
        $author->delete();
        return redirect('manage-author')->with('message','Deleted');

    }

}
