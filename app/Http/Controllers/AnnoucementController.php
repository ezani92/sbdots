<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annoucement;
use Session;

class AnnoucementController extends Controller
{
    public function index()
    {
    	$annoucements = Annoucement::all();

    	return view('admin.annoucement.index',compact('annoucements'));
    }

    public function create()
    {
    	return view('admin.annoucement.create');
    }

    public function store(Request $request)
    {
    	$input = $request->all();

    	$annoucement = new Annoucement;
    	$annoucement->body = $input['body'];
    	$annoucement->save();

    	Session::flash('message', 'Annoucement succesfully created!'); 
        Session::flash('alert-class', 'alert-success');

    	return redirect('admin/annoucement');
    }

    public function destroy($annoucement_id)
    {
    	$annoucement = Annoucement::find($annoucement_id);
    	$annoucement->delete();

    	Session::flash('message', 'Annoucement succesfully Deleted!'); 
        Session::flash('alert-class', 'alert-success');

    	return redirect('admin/annoucement');
    }
}
