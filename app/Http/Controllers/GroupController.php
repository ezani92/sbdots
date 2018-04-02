<?php

namespace App\Http\Controllers;

use App\Group;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.groups.index');
    }

    public function data(Datatables $datatables)
    {
        $groups = Group::All();
        return Datatables::of($groups)
            ->editColumn('total_user', function ($group) {
                return $group->user->count();
            })
            ->addColumn('actions', function($group) {
                return view('admin.groups.action', compact('group'))->render();
            })
            ->editColumn('created_at', function ($group) {
                return $group->created_at ? with(new Carbon($group->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create');
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

        $group = new Group;

        $group->name = $input['name'];
        $group->icon = $input['icon'];

        $group->save();

        Session::flash('message', 'New user group succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
