<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    public function data(Datatables $datatables)
    {
        $users = User::All();
        return Datatables::of($users)
            ->addColumn('actions', function($user) {
                return view('admin.users.action', compact('user'))->render();
            })
            ->editColumn('role', function ($user) {
                if($user->role == 1)
                {
                    return 'Administrator';
                }
                else if($user->role == 2)
                {
                    return 'Staff';
                }
                else if($user->role == 3)
                {
                    return 'User';
                }
            })
            ->editColumn('phone_verification', function ($user) {
                if($user->phone_verification == 1)
                {
                    return '<span class="label label-success">Verified</span>';
                }
                else
                {
                    return '<span class="label label-warning">Pending Verification</span>';
                }
            })
            ->editColumn('created_at', function ($user) {
                return $user->created_at ? with(new Carbon($user->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','phone_verification'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $user = new User;
        $user->name = $input['name'];
        $user->password = bcrypt($input['password']);
        $user->email = $input['email'];
        $user->role = $input['role'];
        $user->phone_verification = $input['phone_verification'];
        $user->phone = $input['phone'];

        $user->save();

        Session::flash('message', 'User created succesfully!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit',compact('user'));
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
        $input = $request->all();

        $user = User::find($id);

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->role = $input['role'];
        $user->phone = $input['phone'];
        $user->phone_verification = $input['phone_verification'];
        $user->bank_name = $input['bank_name'];
        $user->bank_account_no = $input['bank_account_no'];

        $user->save();

        Session::flash('message', 'User succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);


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
    }

    public function ban($id)
    {
        $user = User::find($id);
        $user->is_ban = 1;
        $user->save();

        Session::flash('message', 'User succesfully Banned!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }

    public function unban($id)
    {
        $user = User::find($id);
        $user->is_ban = 0;
        $user->save();

        Session::flash('message', 'User succesfully Unbanned!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }
}
