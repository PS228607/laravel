<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groep = Band::select(['id', 'name'])->get();
        return view('LV2.Bands.Band', ['bands' => $groep]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lv2.Bands.CreateBand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'founded' => 'required',
            'active_till' => 'required'
        ]);

        Band::create($request->only(['name', 'genre', 'founded', 'active_till']));
        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $band = Band::find($id);
        //dd($band);
        return view('LV2.Bands.Show', ['band' => $band]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Band::find($id);
        return view('LV2.Bands.EditBand', ['band' => $edit], ['Id' => $id]);
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
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'founded' => 'required',
            'active_till' => 'required'
        ]);

        $band = Band::find($id);
        $band->name = $request->get('name');
        $band->genre = $request->get('genre');
        $band->founded = $request->get('founded');
        $band->active_till = $request->get('active_till');
        $band->save();
        return redirect('bands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Band::destroy($id);
        return redirect()->route('bands.index');
    }
}
