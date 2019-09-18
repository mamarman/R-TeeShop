<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public $user;

    public function __construct( User $user) {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = [];

        $users = $this->user->paginate(20);
        
        $response['users'] = $users;
  
        return view('dashboard.user.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'personal_id' => 'required',
        ]);
        $params = $request->input();
        $params['birthdate'] = date('Y-m-d', strtotime($params['birthdate']));
        $params['password'] = Hash::make($params['password']);
        unset($params['_token']);
        $params['created_at'] = date('Y-m-d H:i:s');

        if ($this->user->insert($params)) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit',compact('user'));
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
        
        $response = [
            'status' => false,
            'message' => 'Errors.'
        ];

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'personal_id' => 'required',
        ]);

        $user = $this->user->find($id);
        if (!$user) {
            abort(404);
        }
        $params = $request->input();
        $params['birthdate'] = date('Y-m-d', strtotime($params['birthdate']));
        unset($params['_token']);
        unset($params['_method']);

        $params['updated_at'] = date('Y-m-d H:i:s');

        if ($this->user->where('id', $user->id)->update($params)) {

            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }

        return redirect()->back()->with('message', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = [
            'status' => false,
            'message' => 'Errors.'
        ];

        $user = $this->user->find($id);
        if (!$user) {
            abort(404);
        }

        if ($user->delete()) {
            $response['status'] = true;
            $response['message'] = 'success.';
            return redirect()->back()->with('message', $response);
        }
        return redirect()->back()->with('message', $response);
    }
}
