<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EditorialBoardController extends Controller
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
            'board'=>'required|min:30',
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

        if (board::where('issue_id', '=', $issue_id)->exists()) {

             session()->flash('customerror','Editorial Board details for Volume '.$volume_number. ' No.'.$issue_number.' already exist in our record. Scroll down to the buttom of this page to edit it');

             return back();
        }
         

          $info= new Board;
          $info->issue_id=$issue_id;
          $info->volume_number=$volume_number;
          $info->issue_number= $issue_number;
          $info->editorial_board=request('board');
          $info->save();

        return back()->with('success', 'Editorial Board was successfully uploaded for Volume'.$volume_number. ' No.'. $issue_number);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
         return view('admcp.edit-board', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        // dd(request('editorial_board'));

            $board->update(request()->validate([    
            'editorial_board'=>'required|min:30'
        ]));
     session()->flash('success', 'Editorial Board Record was successfully updated');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
         $board->delete();
        session()->flash('success', 'Record successfully deleted');
        return back();
    }
}
