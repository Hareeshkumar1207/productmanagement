<?php

namespace App\Http\Controllers;

use App\Http\Libraries\ProfileLibraries\ProfileImageStorage;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getAllProduct = Product::withTrashed()->get();;
        return view('admin_home', compact('getAllProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create_product");
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
        $product = new Product;
        if ($request->hasFile('product_image')) {
            $request->validate([
                'product_image' => 'dimensions:max_width=200,max_height=200',
            ]);
            $profileImageStorage = new ProfileImageStorage;
            $product->product_image = $profileImageStorage->setProfileImage($request->product_image)->setStorageDiskName('productImage')->store();
        } else {
            $product->product_image = null;
        }
        // 
        $productName = $request->product_name;
        $productPrice = $request->product_price;
        $productDiscount = $request->product_discount;
        $productDescription = $request->product_description;
        // 
        $product->product_name = $productName;
        $product->product_price = $productPrice;
        $product->product_discount = $productDiscount;
        $product->product_description = $productDescription;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $post = Post::find($id)->with('category')->select('name')->get();
        // return view('view_name', compact('$post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $allCategory = Category::get();
        $product = Product::find($id);
        return view('edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);

        if ($request->hasFile('product_image')) {
            $request->validate([
                'product_image' => 'dimensions:max_width=200,max_height=200',
            ]);
            $profileImageStorage = new ProfileImageStorage;
            $product->product_image = $profileImageStorage->setProfileImage($request->product_image)->setStorageDiskName('productImage')->store();
        }

        $productName = $request->product_name;
        $productPrice = $request->product_price;
        $productDiscount = $request->product_discount;
        $productDescription = $request->product_description;

        $product->product_name = $productName;
        $product->product_price = $productPrice;
        $product->product_discount = $productDiscount;
        $product->product_description = $productDescription;
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Product::find($id);
        $post->forceDelete();
        return redirect()->route('product.index');
    }

    public function disable($id)
    {
        $post = Product::find($id);
        $post->delete();
        return redirect()->route('product.index');
    }

    public function enable($id){
        $result = Product::withTrashed()->find($id)->restore();
        return redirect()->route('product.index');
    }
}
