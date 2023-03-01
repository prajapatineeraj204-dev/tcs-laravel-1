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
        $subcatlist = SubCategory::get();        
        return view('admin.product',compact('productlist','catlist','subcatlist'));
    }

    public function store(Request $request)
    {
        $Product = new Product;
        $Product->catid = $request->catid;
        $Product->subcatid = $request->subcatid;
        $Product->product_name = $request->product_name;
        $Product->product_des = $request->product_des;
        $Product->regprice = $request->regprice;
        $Product->saleprice = $request->saleprice;
        $Product->stock = $request->stock;
        $Product->status = $request->status;
        $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  
        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();            
        $upload = $request->file->move(public_path('productimg'), $fileName);
        $Product->product_img = $fileName;
        $Product->save();
        return redirect('admin/product'); 
    }

    public function show(Request $request)
    {
        
    }

     public function edit(Request $request,$id){
        $newid = base64_decode($id);
        $productlist = Product::where('id',$newid)->get()->first();
        $catlist = Category::get();  
        $subcatlist = SubCategory::get();   
        return view('admin.productedit',compact('productlist','catlist','subcatlist'));   
    }

    public function update(Request $request, $id)
    {
        $newid = base64_decode($id);
        $Product = Product::where('id',$newid)->get()->first();
        $Product->catid = $request->post('catid');
        $Product->subcatid = $request->post('subcatid');
        $Product->product_name = $request->post('product_name');
        $Product->product_des = $request->post('product_des');
        $Product->regprice = $request->post('regprice');
        $Product->saleprice = $request->post('saleprice');
        $Product->stock = $request->post('stock');
        $Product->status = $request->post('status');
        if(isset($request->file)){
            $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  
            $type = $request->file->getClientMimeType();
            $size = $request->file->getSize();            
            $upload = $request->file->move(public_path('productimg'), $fileName);
            unlink(public_path('productimg/').$Product->product_img);
            $Product->product_img = $fileName;
        }
        $Product->save();
        return redirect('admin/product'); 

    }

     public function destroy(Request $request ,$id)
    {
        $newid = base64_decode($id);
        $Product = Product::where('id',$newid)->get()->first(); 
        $Product->delete();
        return redirect('admin/product');  
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
