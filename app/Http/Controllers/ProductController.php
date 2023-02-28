<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class ProductController extends Controller
{
    public function index()
    {
        $productlist = Product::get();
        $catlist = Category::get();        
        return view('admin.product',compact('productlist','catlist'));
    }

    public function getsubcategory(Request $request){
        $catid = $request->get('id');
        $subcatlist = SubCategory::where('catid',$catid)->get();        
        $html = "";
        foreach($subcatlist as $value){ 
        $html .= "<option value='$value->id'>$value->subcat_name</option>";
        }
        return $html;
    }
    
}
