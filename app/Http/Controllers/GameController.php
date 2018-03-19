<?php

namespace App\Http\Controllers;

use App\Game;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('admin.games.index');
    }

    public function data(Datatables $datatables)
    {
        $games = Game::All();
        return Datatables::of($games)
            ->addColumn('actions', function($game) {
                return view('admin.games.action', compact('game'))->render();
            })
            ->editColumn('logo', function ($game) {
                return '<img width="100%" src="'.url('storage/games/'.$game->logo).'">';
            })
            ->editColumn('created_at', function ($game) {
                return $game->created_at ? with(new Carbon($game->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','logo'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
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

        $path = $request->file('logo')->store('public/games');
        $logo_name = $request->file('logo')->hashName(); //file name

        $game = new Game;

        $game->name = $input['name'];
        $game->category = $input['category'];
        $game->logo = $logo_name;

        $game->save();

        Session::flash('message', 'New game succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/games');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $input = $request->all();

        if ($request->hasFile('logo'))
        {
            $path = $request->file('logo')->store('public/games');
            $logo_name = $request->file('logo')->hashName();

            $game->logo = $logo_name;
        }

        $game->name = $input['name'];
        $game->category = $input['category'];

        $game->save();

        Session::flash('message', 'Game succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/games/'.$game->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        Session::flash('message', 'Game succesfully deleted!'); 
        Session::flash('alert-class', 'alert-danger');

        return redirect('admin/games');
    }
}
