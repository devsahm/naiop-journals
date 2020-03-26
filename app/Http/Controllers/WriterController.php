<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Auth;
use App\Writer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class WriterController extends Controller
{
     public function __construct()
    {
     
    $this->middleware("auth:writer");
    }

    
        public function submitarticle()
    {

    return view('naiop.submit-article');
    }




         public function profile()
    {

    $articles = Article::where('writer_id', Auth::guard('writer')->id())->paginate(6);
    $articlePublished = Article::where('writer_id', Auth::guard('writer')->id())->where('published', '=', '1')->paginate(4);

        return view('naiop.profile', compact(['articles', 'articlePublished']));
    }



    public function passwordupdate($id)
    {
    
    $writer=Writer::findorFail($id);
if(request('password') == request('passwordconfirm')){

if (Hash::check(request('oldpassword'),  $writer->password)){

    $writer->password=Hash::make(request('password'));
    $writer->save();
    session()->flash('successnew', 'You have successfully updated your password');
    return back();

}else{

session()->flash('customerror', 'Your password does not match our record');
return back();
}


}else{

session()->flash('customerror', 'The new password and confirm password does not match');

}



return redirect('/writer/profile');

    }



     public function profileupdate($id)
    {
        request()->validate([
            'photo'=>'required|image|mimes:jpeg,png,jpg|max:1048',
            'phone'=>'required|numeric|min:10'

        ]);
       
        $writer=Writer::findorFail($id);
       

 if($writer->image =='demo'){

  if(request()->hasFile('photo')){

     $file = Input::file('photo');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('profileimage'), $name);
        $writer->image= $name;
        $writer->save();
        
        };

    }else{

    if(Input::hasFile('photo')){

        $usersImage = public_path("profileimage/{$writer->image}"); // get previous image from folder
        if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }

         $file = Input::file('photo');
        $name = time() . '-' . $file->getClientOriginalName();
        $file = $file->move(('profileimage'), $name);
        $writer->image= $name;
        $writer->save();
        
        };

       

    } 
        $writer->name= Input::get('name');
        $writer->phone=Input::get('phone');
        // $writer->email=Input::get('email');


        $writer->save();

session()->flash('success', 'You have successfully updated you profile ');
return redirect('/writer/profile');
    }

}
