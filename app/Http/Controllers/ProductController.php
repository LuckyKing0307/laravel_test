<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
	//product view users
   public function user()
   {
   		$vat = config('vat.vat');
   		$productList = Product::all();
    	return view('product.productuser',compact('productList',));
   }
	//product view admin
    public function admin()
   {
   		$vat = config('vat.vat');
   		$productList = Product::all();
		//VAT count
   		foreach ($productList as $key => $node) {
   			$node->{"vat"} = ($node->quantly*$node->price)*(1+$vat);
   		}
    	return view('product.productadmin',compact('productList'));
   }
	//create product product.create
    public function create(Request $request)
   {
   		$product = Product::create([
    		'title' => $request->title,
    		'quantly' => $request->quantly,
    		'price' => $request->price,
    	]);
    	return $this->admin();
   }
	//edit show product product.edit
    public function edit($request)
   {
   		$product = Product::find($request);
    	return view('product.productedit',compact('product'));
   }
	//edit product product.editdata
    public function editData(Request $request)
   {
   		Product::where('id', '=', $request->id)->update(array('title' => $request->title,'quantly' => $request->quantly,'price' => $request->price));
    	return $this->admin();
   }
    
	//delete product product.delete
    public function delete(Request $request)
   {
	   	$product = Product::where('id', '=', $request->id)->delete();
    	return $this->admin();
   }

	//json product show from YEAR-MONTH-DAY to YEAR-MONTH-DAY example
	// getchanges/2023-08-18/2023-08-19
    public function getchanges($from,$to)
   {	
	   	$product = Product::whereRaw("updated_at > '$from' and updated_at < '$to'")->get();
	   	return json_encode($product);
   }
}
