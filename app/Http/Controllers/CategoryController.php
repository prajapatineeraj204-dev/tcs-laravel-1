<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categorylist = Category::get();
        return view('admin.category',compact('categorylist'));
    }


    public function addCategory(Request $request)
    {
        $category = new Category;
        $category->cat_name = $request->cat_name;
        $category->cat_des = $request->cat_des; 
        $category->status = $request->status;           
        $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  
        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();            
        $upload = $request->file->move(public_path('categoryimg'), $fileName);
        // $image =  url('categoryimg/'.$fileName);
        $category->cat_img = $fileName;
        $category->save();
        return redirect('admin/category'); 
    }

    public function editCategory(Request $Request,$id)
    {
       $newid = base64_decode($id);
       $categorydata =  Category::where('id',$newid)->get()->first();  
       return view('admin.editcategory',compact('categorydata'));
    }

    public function updateCategory(Request $request)
    {
        $catid = $request->post('catid');
        $category =  Category::where('id',$catid)->get()->first(); 
        $category->cat_name =  $request->post('cat_name');
        $category->cat_des =  $request->post('cat_des');
        $category->status =  $request->post('status');
        $category->save();
        return redirect('admin/category');  
   }

   public function catDelete(Request $request,$id){
       $newid = base64_decode($id);
       $category =  Category::where('id',$newid)->get()->first();
       $category->delete();
       return redirect('admin/category');  
  }

}
