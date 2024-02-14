<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Auth;
use Str;
class BlogController extends Controller
{
public function blog(){
    $getRecord = Blog::all(); // Assuming Blog is your model representing the 'blogs' table
    return view('backend.blog.list', compact('getRecord'));
}
public function add_blog(){
$data['getBlog']=Category::getBlog();
    return view ('backend.blog.add',$data);
 }
 public function insert_blog(Request $request){
    $save=new Blog;
$save->user_id=Auth::user()->id;

  $save->title=trim($request->title);
    $save->category=trim($request->category);
    $save->description=trim($request->description);
    $save->tags=trim($request->tags);
    $save->meta_description=trim($request->meta_description);
    $save->meta_keyword=trim($request->meta_keyword);
    $save->status=trim($request->status);
    $save->publish=trim($request->publish);

    $save->save();
    $slug=Str::slug($request->title);
$checkSlug=Blog::where('slug','=',$slug)->first();
if(!empty($checkSlug)){

}

    return redirect('panel/blog/list')->with('success','blog successfully created');

 }
}
