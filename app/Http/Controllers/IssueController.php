<?php

namespace App\Http\Controllers;

use App\Issue;
use Illuminate\Http\Request;
use App\Article;
use App\Volume;
use Illuminate\Support\Facades\Input;
use DB;
class IssueController extends Controller
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
    
         $checkingid=DB::table('volumes')->where('volume', '=' , $request->volume_volume)->first();

        $year=$checkingid->year;

         $issue = new Issue;
         request()->validate([
            'volume_volume'=>'required|numeric',
            'issue'=>'required|numeric',
            'journal'=>'required',
            'month'=>'required',
            'accepted_id'=>'required'
        ],

        ['volume_id.required'=>'kindly select volume from the dropdown menu list',
        'accepted_id.required'=>'Click on the ADD ARTICLE button to add articles for this publication. Article must be added orderly, thanks',
         'issue.required'=>'kindly select the issue number from the dropdown menu'
     ]);

     
       if ($request->month == '0') {
          session()->flash('customerror','Issue month must be selected');
          return back();
       }


       if ($request->issue == '0') {
          session()->flash('customerror','Issue must be selected');
          return back();
       }

       if (Issue::where('volume_id', '=', Input::get('volume_volume'))->exists() && Issue::where('issue', '=', Input::get('issue'))->exists()) {
           session()->flash('customerror', 'Volume '.$request->volume_volume.' No. '.$request->issue.' already exist');
           return back();
       }

       if(request()->hasFile('cover')){
         request()->validate([
        'cover'=> 'required|max:1000|mimes:png,jpg,jpeg'
         ]);
        $file = Input::file('cover');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('coverimage'), $name);
        $cover= $name;
        };
       




        $issue->volume_id= $request->volume_volume;
        $issue->issue = $request->issue;
        $issue->month = $request->month;
        $issue->volume_year=$year;
        $issue->journal=$request->journal;
        if(request()->hasFile('cover')){
            $issue->cover=$cover;
          } 
        $issue->save();


$article_id=$request->accepted_id;
foreach ($article_id as $new_id) {
    Article::where('id',  $new_id)->update(array('published'=>'1'));
}

       $articles= $request->accepted_id;
       $issue->articles()->attach($articles);

session()->flash('success', 'VOLUME '.$request->volume_volume.' NO. '.$request->issue. ' was successfully Published');
      return redirect('/admin/manual-publication');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
      return view('admcp.article-lists', compact('issue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
    }
}
