<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SubCategory;
use App\Models\Category;
class SubCategoryController extends Controller
{
     public function index()
    {
        $categorylist = SubCategory::get();
        $maincat = Category::get();
        return view('admin.subcategory',compact('categorylist','maincat'));
    }

    

    public function addSubCategory(Request $request)
    {
        $subcategory = new SubCategory;
        $subcategory->catid = $request->catid;
        $subcategory->subcat_name = $request->subcat_name;
        $subcategory->subcat_des = $request->subcat_des; 
        $subcategory->status = $request->status;           
        $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  
        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();            
        $upload = $request->file->move(public_path('subcategoryimg'), $fileName);
        // $image =  url('categoryimg/'.$fileName);
        $subcategory->subcat_img = $fileName;
        $subcategory->save();
        return redirect('admin/subcategory'); 
    }

    public function editSubCategory(Request $Request,$id)
    {
       $newid = base64_decode($id);
        $maincat = Category::get();
       $categorydata =  SubCategory::where('id',$newid)->get()->first();  
       return view('admin.editsubcategory',compact('categorydata','maincat'));
    }

    public function updateSubCategory(Request $request)
    {
        $id = $request->post('id');
        $subcategory =  SubCategory::where('id',$id)->get()->first(); 
        $subcategory->subcat_name =  $request->post('subcat_name');
        $subcategory->subcat_des =  $request->post('subcat_des');
        $subcategory->status =  $request->post('status');
        $subcategory->catid = $request->post('catid');        
        $subcategory->save();
        return redirect('admin/subcategory');  
   }

     public function subCatDelete(Request $request,$id){
       $newid = base64_decode($id);
       $subcategory =  SubCategory::where('id',$newid)->get()->first();
       $subcategory->delete();
       return redirect('admin/subcategory');  
    }


}
