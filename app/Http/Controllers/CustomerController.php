<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $customer;

    public function __construct(
        Customer $customer
    ) {
        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = [];

        $customers = $this->customer->paginate(20);
        
        $response['customers'] = $customers;
  
        return view('dashboard.customer.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.customer.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'shopname' => 'required',
            'mobile_phone' => 'required',
            'line_id' => 'required',
            'facebook' => 'required',
        ]);

        $params = $request->input();
        $params['birth_date'] = date('Y-m-d', strtotime($params['birth_date']));
        unset($params['_token']);
        if ($request->hasFile('file')) {
            $fileName = time() . 'file.' . $request->file('file')->extension();
            if (!$request->file('file')->storeAs('customers', $fileName)) {

                $response['message'] = 'อัพโหลดไฟล์ไม่ได้.';
                return redirect()->back()->with('message', $response);
            }

            $params['file'] = $fileName;
        }

        $params['created_at'] = date('Y-m-d H:i:s');

        if ($this->customer->insert($params)) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('dashboard.customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('dashboard.customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customerId)
    {
        $response = [
            'status' => false,
            'message' => 'Errors.'
        ];

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'shopname' => 'required',
            'mobile_phone' => 'required',
            'line_id' => 'required',
            'facebook' => 'required',
        ]);

        $customer = $this->customer->find($customerId);

        if (!$customer) {

            abort(404);
        }
        
        $params = $request->input();
        $params['birth_date'] = date('Y-m-d', strtotime($params['birth_date']));
        unset($params['_token']);
        unset($params['_method']);
        if ($request->hasFile('file')) {
            $fileName = time() . 'file.' . $request->file('file')->extension();
            if (!$request->file('file')->storeAs('customers', $fileName)) {

                $response['message'] = 'อัพโหลดไฟล์ไม่ได้.';
                return redirect()->back()->with('message', $response);
            }

            $params['file'] = $fileName;
        }

        $params['updated_at'] = date('Y-m-d H:i:s');

        if ($this->customer->where('id', $customer->id)->update($params)) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($customerId)
    {
        $response = [
            'status' => false,
            'message' => 'Errors.'
        ];

        $customer = $this->customer->find($customerId);
        if (!$customer) {

            abort(404);
        }

        if ($customer->delete()) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);
    }
}
