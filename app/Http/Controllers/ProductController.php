<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Products";
        $products = [1,2,3,4,5,6,7,8,9,10,11,12];
        return view('products',compact('products'))->with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Product";
        return view('admin/product/add_product')->with('title',$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Product Name and  Detail';
        $slid1 = [3,2,1];
        $slid2 = [1,2,3];
        $slid3 = [3,1,2];
        $detail = [1,3,4,2];
        $compProfile = [2,1,4,3];
        $tags = [3,4,1,2];
        $recomended = [1,3,2];
        return view('product_detail',compact('slid1','slid2','slid3','detail','compProfile','tags','recomended'))->with('title',$title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function checkOut(){
        $title = "Product CheckOut";
        return view('checkout')->with('title',$title);
    }

    public function cart(){
        $title = "Cart";
        return view('cart')->with('title',$title);
    }
}
