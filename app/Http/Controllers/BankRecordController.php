<?php

namespace App\Http\Controllers;

use App\BankRecord;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Input;

class BankRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function data(Datatables $datatables,Request $request,$bank_id)
    {   
        
        $input = $request->all();

        $arrStart = explode("-", $input['from_date']);
        $arrEnd = explode("-", $input['to_date']);

        $from_date = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
        $to_date = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

        $bankrecords = BankRecord::where('bank_id', $bank_id)
            ->where('created_at','<=',$to_date)
            ->where('created_at','>=',$from_date)
            ->orderBy('id', 'DESC');

        return Datatables::of($bankrecords)
            ->addColumn('actions', function($bankrecord) {
                return view('admin.banks.records.action', compact('bankrecord'))->render();
            })
            ->editColumn('amount', function ($bankrecord) {
                if($bankrecord->record == 1)
                {
                    return '<span class="label label-success">'.$bankrecord->amount.'</span>';
                }
                else
                {
                    return '<span class="label label-danger">'.$bankrecord->amount.'</span>';
                }
            })
            ->editColumn('created_at', function ($bankrecord) {
                return $bankrecord->created_at ? with(new Carbon($bankrecord->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','amount'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\BankRecord  $bankRecord
     * @return \Illuminate\Http\Response
     */
    public function show(BankRecord $bankRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BankRecord  $bankRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(BankRecord $bankRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BankRecord  $bankRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankRecord $bankRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BankRecord  $bankRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankRecord $bankRecord)
    {
        //
    }
}
