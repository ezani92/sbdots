<?php

namespace App\Http\Controllers;

use App\Bonus;
use DataTables;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bonuses = Bonus::all();

        return view('admin.bonuses.index');
    }

    public function dataActive(Datatables $datatables)
    {
        $bonuses = Bonus::latest()->get();
        return Datatables::of($bonuses)
            ->addColumn('actions', function($bonus) {
                return view('admin.bonuses.action', compact('bonus'))->render();
            })
            ->editColumn('created_at', function ($bonus) {
                return $bonus->created_at ? with(new Carbon($bonus->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function dataDeactive(Datatables $datatables)
    {
        $bonuses = Bonus::onlyTrashed()->get();
        return Datatables::of($bonuses)
            ->addColumn('actions', function($bonus) {
                return view('admin.bonuses.restore', compact('bonus'))->render();
            })
            ->editColumn('deleted_at', function ($bonus) {
                return $bonus->deleted_at ? with(new Carbon($bonus->deleted_at))->format('d M Y, h:i A') : '';
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
        return view('admin.bonuses.create');
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

        $bonus = new Bonus;

        $bonus->bonus_code = $input['code'];
        $bonus->name = $input['name'];
        $bonus->description = $input['description'];
        $bonus->type = $input['bonus_type'];
        $bonus->value = $input['value'];
        $bonus->allow_multiple = $input['multi_used'];
        $bonus->min_deposit = $input['min_deposit'];

        $bonus->save();

        Session::flash('message', 'New Bonus succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/bonuses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function show(Bonus $bonus)
    {
        return view('admin.bonuses.show',compact('bonus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bonus $bonus)
    {
        return view('admin.bonuses.edit',compact('bonus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bonus $bonus)
    {
        $input = $request->all();

        $bonus->bonus_code = $input['bonus_code'];
        $bonus->name = $input['name'];
        $bonus->description = $input['description'];
        $bonus->type = $input['bonus_type'];
        $bonus->value = $input['bonus_value'];
        $bonus->min_deposit = $input['min_deposit'];
        $bonus->allow_multiple = $input['allow_multiple'];

        $bonus->save();

        Session::flash('message', 'Bonus succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/bonuses/'.$bonus->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bonus $bonus)
    {
        $bonus->delete();

        Session::flash('message', 'Bonus succesfully deactivated!'); 
        Session::flash('alert-class', 'alert-danger');

        return redirect('admin/bonuses');
    }

    public function restore($bonus_id)
    {
        $bonus = Bonus::onlyTrashed()->where('id', $bonus_id)->firstOrFail();

        $bonus->restore();

        Session::flash('message', 'Bonus succesfully Activated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/bonuses');
    }
}
