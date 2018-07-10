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

        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'storage/image';
            $file->move($destinationPath,$filename);

            $annoucement = new Annoucement;
            $annoucement->title = $input['title'];
            $annoucement->image = $filename;
            $annoucement->save();

            Session::flash('message', 'Annoucement succesfully created!'); 
            Session::flash('alert-class', 'alert-success');

            return redirect('admin/annoucement');
        }
        else
        {
            Session::flash('message', 'Image is required!'); 
            Session::flash('alert-class', 'alert-danger');

            return redirect('admin/annoucement/create');
        }

    	
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
