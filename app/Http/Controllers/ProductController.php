<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAllProduct()
    {
        $products = DB::table('products')->get();
        return view('product.index', compact('products'));
    }

    public function addProduct()
    {
        return view('product.add');
    }

    public function addProductSubmit(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'created_at' =>$request->created_at
        ]);
        return back()->with('product_added', 'Product has been added successfully!');
    }

    public function getProductById($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('product.view', compact('product'));
    }

    public function removeProduct($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return back()->with('remove_product', 'Product has been removed!');
    }

    public function editProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('product.edit', compact('product'));
    }

    public function updateProduct(Request $request)
    {
        DB::table('products')->where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'created_at' =>$request->created_at
        ]);
        return back()->with('product_updated', 'Product has been updated successfully!');
    }

}
