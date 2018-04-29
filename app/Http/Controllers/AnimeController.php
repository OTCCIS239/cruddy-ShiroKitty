<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animeTable = Anime::all();
        return view('anime.index', compact('animeTable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'episodes'=>'required',
        ]);
        $animeTable = Anime::create($request->all());
        return redirect('/anime/' . $animeTable->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $animeTable)
    {
        return view('anime.show', compact('animeTable'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $animeTable)
    {
        return view('anime.edit', compact('animeTable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $animeTable)
    {
        $animeTable->update($request->all());
        return redirect('/anime/' . $animeTable->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $animeTable)
    {
        $animeTable->delete();

        return redirect('/anime'); 
    }
}
