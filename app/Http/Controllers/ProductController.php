<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $product;

    public function __construct( Product $product ) {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      

        //$products = $this->product->paginate(20);
        $products = Product::with('categories')->paginate(20);
        $categories= Categories::all();
        
  
        return view('dashboard.product.index',compact('products','categories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =[];
        $categories['categories'] = Categories::all();
        return view('dashboard.product.create', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = [
            'status' => false,
            'message' => 'Errors.'
        ];

        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'unit' => 'required',
            'amount' => 'required',
            'standard_sell_price' => 'required',
        ]);
        $params = $request->input();
        unset($params['_token']);

        if ($request->hasFile('picture')) {
            $fileName = time() . 'picture.' . $request->file('picture')->extension();
            if (!$request->file('picture')->storeAs('products', $fileName)) {

                $response['message'] = 'อัพโหลดไฟล์ไม่ได้.';
                return redirect()->back()->with('message', $response);
            }

            $params['picture'] = $fileName;
        }
        $params['created_at'] = date('Y-m-d H:i:s');

        if ($this->product->insert($params)) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
