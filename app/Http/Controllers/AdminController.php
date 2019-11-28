<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Volume;
use App\Issue;
use App\Writer;
use App\Admin;
use App\Contact;
use App\User;
use App\Board;
use App\Editor;
use App\Foreword;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use App\Mail\AcceptanceOfPaper;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //


     public function __construct()
    {
     
    $this->middleware("auth:admin");
    }

    public function dashboard()
    {
        $users=User::all();
        $issues=Issue::all();
        $volumes=Volume::all();
        $articles=Article::all();
        $writers=Writer::all();
        $PublishedArticles=Article::where('published', '1')->get();
       return view('admcp.index', compact(['issues', 'volumes', 'articles', 'PublishedArticles', 'writers', 'users']));
    }


          public function submitted()
    {

   		$articles=Article::where('admin', '0')->paginate(5);
       	return view('admcp.submitted-article', compact('articles'));
    }


     public function volumecreate()
    {

       	return view('admcp.create-volume');
    }

   public function foreword()
    {
      $issues=Issue::all();

        return view('admcp.upload-foreword', compact('issues'));
    }


   public function editors()
    {
      $issues=Issue::all();

        return view('admcp.upload-editor', compact('issues'));
    }

    public function board()
    {
      $issues=Issue::all();

        return view('admcp.upload-board', compact('issues'));
    }

     public function viewboard()
    {
        $boards=Board::paginate(10);

        return view('admcp.view-board', compact('boards'));
    }

      public function viewforeword()
    {
        $forewords=Foreword::paginate(10);

        return view('admcp.view-foreword', compact('forewords'));
    }

       public function vieweditor()
    {
        $editors=Editor::paginate(10);

        return view('admcp.view-editor', compact('editors'));
    }
  

    public function downloadsuser($id)
    {
        $user=User::findorFail($id);
        $user->delete();
        session()->flash('success', 'You have successfully deleted the user record');
        return back();

    }

     public function publication()
    {



          $acceptedarticles=Article::where('confirmed','1')
         ->where('published','0')
         ->get();
         $volumes=Volume::all();
         return view('admcp.publication', compact('acceptedarticles'), compact('volumes'));

      
    }


       public function viewpublication()
    {
    	$volumes=Volume::paginate(5);
       	return view('admcp.publication-view', compact('volumes'));
    }

        public function security()
    {
      
        return view('admcp.settings');
    }


    public function downloadregistration()
    {
       
        $users=DB::table('users')->orderBy('id', 'desc')->paginate(10);
        return view('admcp.article-download', compact('users'));
    }



        public function published()
    {
    	  $articles=Article::where('published', '1')->paginate(5);
        return view('admcp.article-published', compact('articles'));
    }


        public function sendmail($id)
    {
          $writer=Article::findorFail($id);
          $writerid=$writer->writer_id;
          $WriterInstance=Writer::findorFail($writerid);
        return view('admcp.send-email', compact(['writer', 'WriterInstance']));
    }


         public function contact()
    {
    	  $contacts=Contact::where('removed', '0')->paginate(4);
        return view('admcp.contact', compact('contacts'));
    }

      public function contactread()
    {
        $contacts=Contact::where('removed', 'o')->paginate(4);
        return view('admcp.contact-read', compact('contacts'));
    }

        public function contacttrash()
    {
        $contacts=Contact::where('removed', '1')->paginate(4);
        return view('admcp.contact-trash', compact('contacts'));
    }


      public function updateforeword()
    {
      
        return view('admcp.contact-trash', compact('contacts'));
    }


        public function registered()
    {
        $writers=Writer::paginate(4);
        return view('admcp.registered-users', compact('writers'));
    }

    public function updatepassword($id)
    {
     
 $admin=Admin::findorFail($id);
if(request('password') == request('passwordconfirm')){

if (Hash::check(request('oldpassword'),  $admin->password)) {

    $admin->password=Hash::make(request('password'));
    $admin->save();
    session()->flash('successnew', 'You have successfully updated your password');
    return back();

}else{

session()->flash('customerror', 'Your password does not match our record');
return back();
}


}else{

session()->flash('customerror', 'The new password and confirm password does not match');
return back();

}
// return redirect('/admin/security');
    }


    

        public function manual()
    {

      $articles = Article::where('published', '=', '0')
      ->where('admin', '=', '1')->get();
      $volumes = Volume::all();
        return view('admcp.manual-publication', compact(['articles', 'volumes']));
    }

     public function emailconfirmation(Request $request)
    {  
     $email=$request->email;
    $subject=$request->subject;
    $name=$request->name;


    Mail::to($request->email)->send(new AcceptanceOfPaper($name));
session()->flash('success', 'Mail was successfully sent to '.$email);



return back();

    }

    public function storearticle(Request $request)
    {

 if ($request->markpay) {
      $validation=request()->validate([
            'title'=>'required|min:6',
            'author'=>'required|min:3',
            'keywords'=>'required|min:10',
            'pagenumber'=>'required',
            'abstract'=>'required|min:30',
            'price'=>'required|numeric',
            'uploadone'=> 'required|max:1000|mimes:doc,docx,pdf'
        ],
            ['uploadone.max' => 'The manuscript file size should not be more than 1mb',
             'pagenumber.required'=>'The page number is required'
        ]);

    }else{

           $validation=request()->validate([
            'title'=>'required|min:6',
            'author'=>'required|min:3',
            'keywords'=>'required|min:10',
            'pagenumber'=>'required',
            'abstract'=>'required|min:30',
            'uploadone'=> 'required|max:1000|mimes:doc,docx,pdf'
        ],
            ['uploadone.max' => 'The manuscript file size should not be more than 1mb',
             'pagenumber.required'=>'The page number is required'
        ]);
    }

  
       
  
   

     if(request()->hasFile('uploadone')){

     $file = Input::file('uploadone');
     $name = time() . '-' . $file->getClientOriginalName();
     $file = $file->move(('uploads'), $name);
    $validation['uploadone']= $name;
    };

    $validation['admin']= '1';
    Article::create($validation);
       
        return redirect('/admin/manual-publication')->with('successfast', 'Article successfully uploaded');
}

}
