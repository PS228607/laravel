<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liedjes = Song::select(['id', 'title'])->get();
        return view('LV2.Songs.Song', ['songs' => $liedjes], ['Idx' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('LV2.Songs.CreateSong');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // No mass assignment
        // $song = new SongModel;

        // $song->title = $request->title;
        // $song->singer = $request->singer;

        // $song->save();
        // SongModel::create([
        //     'title' => $request->title,
        //     'singer' => $request->singer
        // ]);

        $request->validate([
            'title' => 'required',
            'singer' => 'required'
        ]);

          

        Song::create($request->only(['title', 'singer']));
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::find($id);
        //dd($song);
        return view('LV2.Songs.Show', ['song' => $song]);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Song::find($id);
        return view('LV2.Songs.EditSong', ['song' => $edit], ['Id' => $id]);
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
        //Past de data aan 
        $request->validate([
            'title' => 'required',
            'singer' => 'required'
        ]);

        $song = Song::find($id);
        $song->title = $request->get('title');
        $song->singer = $request->get('singer');
        $song->save();
        return redirect('songs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Song::destroy($id);
        return redirect()->route('songs.index');
    }
}