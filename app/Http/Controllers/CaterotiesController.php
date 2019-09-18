<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CaterotiesController extends Controller
{
    public $categories;

    public function __construct(Categories $categories){
        $this->categories = $categories;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = [];

        $categories = $this->categories->paginate(20);
        
        $response['categories'] = $categories;
  
        return view('dashboard.categories.index', $response)-> with('i', (request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
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
            'typename' => 'required',
        ]);
        $params = $request->input();
        unset($params['_token']);
        
        $params['created_at'] = date('Y-m-d H:i:s');

        if ($this->categories->insert($params)) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        return view('dashboard.categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoriesId)
    {
        $response = [
            'status' => false,
            'message' => 'Errors.'
        ];
        $request->validate([
            'typename' => 'required',
        ]);

        $categories = $this->categories->find($categoriesId);

        if (!$categories) {

            abort(404);
        }

        $params = $request->input();
        unset($params['_token']);
        unset($params['_method']);

        $params['updated_at'] = date('Y-m-d H:i:s');

        if ($this->categories->where('id', $categories->id)->update($params)) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoriesid)
    {
        $response = [
            'status' => false,
            'message' => 'Errors.'
        ];

        $categories = $this->categories->find($categoriesid);
        if (!$categories) {

            abort(404);
        }

        if ($categories->delete()) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);
    }
}
