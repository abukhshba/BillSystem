<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products =  Product::all();
        return view('admin.Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $products =  Product::all();
        return view('admin.Product.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Product::create($request->all());
        return redirect("admin/product");
    }

    public function destroy($id): RedirectResponse
    {
        $product =  Product::find($id);
        $product->delete();
        return redirect('admin/product');
    }
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id): View
    // {

    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request): RedirectResponse
    // {


    // }

    /**
     * Remove the specified resource from storage.
     */

}