<?php

namespace App\Http\Controllers;

use App\Volume;
use App\Issue;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class VolumeController extends Controller
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
        
             $validation=$request->validate([
            'volume'=>'required|numeric',
            'year'=>'required|numeric'

        ]);

     if (volume::where('volume', '=', Input::get('volume'))->exists()) {
 
        session()->flash('customerror','Volume '.$request->volume. ' already exist in our record. Note: a volume must have a unique year');
        return back();

        }elseif(volume::where('year', '=', Input::get('year'))->exists()){

        session()->flash('customerror','Year '.$request->year. ' already exist in our record. Note a volume must have a unique year ');
        return back();

        }else{

        Volume::create($validation);
        session()->flash('success', 'Volume '.$request->volume. ' was added successfully. Visit CREATE PUBLICATION page to publish article');

        return redirect('/admin/create-volume');

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function show(Volume $volume)
    {
        
        $issues=Issue::where('volume_id', $volume->volume)->get(); 
        return view('admcp.volume-view', compact('issues'), compact('volume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function edit(Volume $volume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volume $volume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volume $volume)
    {
        //
    }
}
