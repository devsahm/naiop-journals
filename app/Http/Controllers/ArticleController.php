<?php

namespace App\Http\Controllers;

use App\Article;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\ArticleReceived;
class ArticleController extends Controller
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
            'title'=>'required|min:6',
            'author'=>'required|min:3',
            'keywords'=>'required|min:10',
            'abstract'=>'required|min:30',
            'uploadone'=> 'required|max:1000|mimes:doc,docx,pdf'
        ],
            ['uploadone.max' => 'The manuscript file size should not be more than 1mb'
           
        ]);
       

          $validation['writer_id']=Auth::guard('writer')->id(); 
          $validation['email']=Auth::guard('writer')->user()->email;      
      $email=Auth::guard('writer')->user()->email;



        if(request()->hasFile('uploadone')){

     $file = Input::file('uploadone');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('uploads'), $name);
        $validation['uploadone']= $name;
        };
       
       
       
$article=Article::create($validation);

Mail::to($email)->send(new ArticleReceived($article));

session()->flash('success', 'Article was successfully submitted, thank you');



return redirect('/writer/submit-article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
         return view('admcp.article-display', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admcp.edit-article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

            $validation=request()->validate([

            'title'=>'required|min:6',
            'author'=>'required|min:6',
            'abstract'=>'required|min:20',
            'keywords'=>'required|min:30',
            'pagenumber'=>'required|min:3'

        ]);



        if(request()->hasFile('uploadone')){

        $usersImage = public_path("uploads/{$article->uploadone}"); 
        if (File::exists($usersImage)){ 
            unlink($usersImage);
        }
            $validation=request()->validate([
            'uploadone'=>'mimes:pdf'
          ],

          ['uploadone.mimes' => 'The article type format should be a pdf'       
        ]);

        $file = Input::file('uploadone');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('uploads'), $name);
        $validation['uploadone']= $name;
        };
        $validation['slug']=str_slug($request->title);
         $article->update($validation);

     session()->flash('success', 'Article was successfully updated');
     return back();

     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->id) {

        $usersImage = public_path("uploads/{$article->uploadone}"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }
        }

      $article->delete();
        session()->flash('success', 'You have successfully deleted an article record');
        return back();
    

    }
    
}
