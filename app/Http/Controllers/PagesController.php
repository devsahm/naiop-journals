<?php

namespace App\Http\Controllers;

use App\Article;
use App\Mail\ArticleSubmitted;
use Illuminate\Http\Request;
use App\Volume;
use App\Issue;
use App\Writer;
use App\Editor;
use App\Board;
use App\Foreword;
// use DB;
use Carbon\Carbon;

class PagesController extends Controller
{
   public function __construct()
    {
     
    $this->middleware("auth")->only(['downloadarticle']);
    }



    public function index()
    {
$volumes=Volume::all();
        if($volumes->count()){
            
         $issue=Issue::latest()->first();
        }else{
        
         $issue=Issue::all();
        }

        $Articles=Article::where('published', '1')->get();
        
        $Articlefooters=Article::where('published', '1')->limit(4)->get();
        $PublishedArticles=Article::where('published', '1')->get();
        $volumes=Volume::all();
        $writer=Writer::all();
        $AllArticles=Article::all();


      return view("naiop.index", compact(['issue', 'volumes', 'Articles', 'Articlefooters','PublishedArticles', 'volumes', 'writer', 'AllArticles']));
    	
    }


    public function about()
    {

    	return view('naiop.about');
    }

      public function editor($id)
    {
  $editor=Editor::findorFail($id);
      return view('naiop.editors-note', compact('editor'));
    }


       public function contact()
    {

    	return view('naiop.contact');
    }

       public function membership()
    {

      return view('naiop.membership');
    }

        public function executives()
    {

    return view('naiop.executives');
    }

    public function objectives()
    {

    return view('naiop.objectives');
    }

      public function pubinfo($id)
     {
      $board=Board::findorFail($id);
    return view('naiop.information-journal', compact('board'));
    }


    

       public function archives()
    {

    	return view('naiop.archives');
    }

     public function journal()
    {
    // $volumes=Volume::all();
    // $submittedarticles=Article::where('admin', '0')->get();
    // $ArticleCount=Article::where('published', '1')->get();
    $issues=Issue::all();

    return view('naiop.journal', compact('issues'));
   
    }

        public function submitarticle()
    {

        return view('naiop.submit-article');
    }

        public function contributors()
    {

        return view('naiop.note-to-contributors');
    }



        public function foreword($id)
    {
       $issue=Issue::where('id','=', $id);
       $forewords=Foreword::where('issue_id', '=', $id)->get();
   $boards=Board::where('issue_id', '=', $id)->get();
   $editors=Editor::where('issue_id', '=', $id)->get();
      $info=Foreword::findorFail($id);
        return view('naiop.foreword', compact('info', 'forewords', 'boards', 'editors', 'issue'));
    }

    public function viewarticle($id)
    {

    $volumes=Volume::all();
    $ArticleCount=Article::where('published', '1')->count();
    $article=Article::findorFail($id);


    return view('naiop.article-content', compact(['article', 'volumes', 'ArticleCount']));

    }

      public function downloadarticle($id)
    {

    $volumes=Volume::all();
    $ArticleCount=Article::where('published', '1')->count();
    $article=Article::findorFail($id);


    return view('naiop.article-download', compact(['article', 'volumes', 'ArticleCount']));

    }


      public function volumelist()
    {

    $volumes=Volume::all();
   

    return view('naiop.volume-list', compact('volumes'));

    }

    public function issuelist($id)
    {

    $volumes=Volume::all();
   $issues=Issue::findorFail($id);
    return view('naiop.issue-list', compact(['volumes', 'issues']));

    }

   //   public function articlelist($id)
   //  {
   //      $volumes=Volume::all();
   //  $ArticleCount=Article::where('published', '1')->count();
   //  // $article=Article::findorFail($id);

   // $issues=Issue::findorFail($id);
   //  return view('naiop.article-list', compact(['volumes','issues', 'ArticleCount']));

   //  }


     public function articlelist($id)
    {

      

   $issue=Issue::findorFail($id);
   $forewords=Foreword::where('issue_id', '=', $id)->get();
   $boards=Board::where('issue_id', '=', $id)->get();
   $editors=Editor::where('issue_id', '=', $id)->get();
    return view('naiop.article-list', compact(['issue', 'forewords', 'boards', 'editors']));

    }



    public function search()
    {

      
          $volumes=Volume::all();
        $ArticleCount=Article::where('published', '1')->count();
         $searchTerm=request('search');

        $articles=Article::query()
   ->where('title', 'LIKE', "%{$searchTerm}%") 
   ->orWhere('author', 'LIKE', "%{$searchTerm}%") 
   ->get();
      

        return view('naiop.search-list', compact(['articles', 'volumes', 'ArticleCount']));
    }


      public function homesearch()
    {

      
          $volumes=Volume::all();
        $ArticleCount=Article::where('published', '1')->count();
         $searchIssue=request('issue');
         $searchVolume=request('volume');
// dd('working');
        $issues=Issue::where([
    ['issue', '=', $searchIssue],
    ['volume_id', '=', $searchVolume ]  

            ])->get();
      

        return view('naiop.home-search', compact(['issues', 'volumes', 'ArticleCount']));
    }




}
