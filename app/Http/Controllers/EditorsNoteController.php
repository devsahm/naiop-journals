<?php

namespace App\Http\Controllers;

use App\Editor;
use Illuminate\Http\Request;

class EditorsNoteController extends Controller
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
            'editor'=>'required|min:30',
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

        if (editor::where('issue_id', '=', $issue_id)->exists()) {

             session()->flash('customerror','Editors Note  for Volume '.$volume_number. ' No.'.$issue_number.' already exist in our record. Scroll down to the buttom of this page to edit it');

             return back();
        }
         

          $info= new Editor;
          $info->issue_id=$issue_id;
          $info->volume_number=$volume_number;
          $info->issue_number=$issue_number;
          $info->editors_note=request('editor');
          $info->save();

        return back()->with('success', 'Editors Note was successfully uploaded for Volume'.$volume_number. ' No.'. $issue_number);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function show(Editor $editor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function edit(Editor $editor)
    {
          return view('admcp.edit-editor', compact('editor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editor $editor)
    {
        $editor->update(request()->validate([    
            'editors_note'=>'required|min:30'
        ]));
     session()->flash('success', 'Editors Note Record was successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editor $editor)
    {
        $editor->delete();
        session()->flash('success', 'Record successfully deleted');
        return back();
    }
}
