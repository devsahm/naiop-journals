<?php

namespace App\Http\Controllers;

use App\Foreword;
use Illuminate\Http\Request;

class ForewordController extends Controller
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
        $validation=request()->validate([
            'foreword'=>'required|min:30',
            'issue_id'=>'required'
        ]);

       if ($request->issue_id == '0') {
          session()->flash('customerror','Kindly select from the publication dropdown menu');
          return back();
       }

         $values=$request->issue_id;
         $combined=explode(" ", $values);
         $issue_id=$combined[0];
         $volume_number=$combined[1];
         $issue_number=$combined[2];

        if (foreword::where('issue_id', '=', $issue_id)->exists()) {

             session()->flash('customerror','Foreword for Volume '.$volume_number. ' No.'.$issue_number.' already exist in our record. Scroll down to the buttom of this page to edit it');

             return back();
        }
         

          $info= new Foreword;
          $info->issue_id=$issue_id;
          $info->volume_number=$volume_number;
          $info->issue_number= $issue_number;
          $info->foreword=request('foreword');
          $info->save();

        return back()->with('success', 'Foreword was successfully uploaded for Volume'.$volume_number. ' No.'. $issue_number);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foreword  $foreword
     * @return \Illuminate\Http\Response
     */
    public function show(Foreword $foreword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foreword  $foreword
     * @return \Illuminate\Http\Response
     */
    public function edit(Foreword $foreword)
    {
          return view('admcp.edit-foreword', compact('foreword'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foreword  $foreword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foreword $foreword)
    {
           $foreword->update(request()->validate([    
            'foreword'=>'required|min:30'
        ]));
     session()->flash('success', 'Foreword Record was successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foreword  $foreword
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foreword $foreword)
    {
        $foreword->delete();
        session()->flash('success', 'Record successfully deleted');
        return back();
    }
}
