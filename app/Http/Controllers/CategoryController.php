<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use Auth;
Use Str;
use Hash;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){

        $data['getRecord']=Category::getRecordCategory();
        return view ('backend.category.list',$data);
    }
     public function add_category(){
        return view ('backend.category.add');
     }
     public function insert_category(Request $request){
        $save=new Category ;
        $save->name=trim($request->name);
        $save->slug=trim($request->slug);
        $save->title=trim($request->title);
        $save->meta_title=trim($request->meta_title);
        $save->meta_description=trim($request->meta_description);
        $save->meta_keyword=trim($request->meta_keyword);
        $save->status=trim($request->status);
        $save->save();
        return redirect('panel/category/list')->with('success','category successfully created');

     }
     public function edit_category($id){
$data['getRecord']=Category::getSingle($id);
        return view('backend.category.edit',$data);

     }
     public function update_category($id,Request $request){
        $save= Category::getSingle($id);
        $save->name=trim($request->name);
        $save->slug=trim($request->slug);
        $save->title=trim($request->title);
        $save->meta_title=trim($request->meta_title);
        $save->meta_description=trim($request->meta_description);
        $save->meta_keyword=trim($request->meta_keyword);
        $save->status=trim($request->status);
        $save->save();
        return redirect('panel/category/list')->with('success','category successfully updated');

     }
     public function delete_category($id){
        $save= Category::getSingle($id);
        $save->is_delete=1;
$save->save();
return redirect()->back()->with('success','category successfully deleted');

     }
}
