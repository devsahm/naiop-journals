<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/archives', 'PagesController@archives');
Route::get('/membership', 'PagesController@membership');
Route::get('/executives', 'PagesController@executives');
Route::get('/editors-note/{id}', 'PagesController@editor');
Route::get('/editorial-board/{id}', 'PagesController@pubinfo');
Route::get('/note-to-contributors', 'PagesController@contributors');
Route::get('/foreword/{id}', 'PagesController@foreword');
// Route::get('/publication/article-detials/{id}', 'PagesController@viewarticle');
Route::get('/volume/volume-list', 'PagesController@volumelist');
Route::get('/issue/issue-list/{id}', 'PagesController@issuelist');
Route::get('issue/article-list/{id}', 'PagesController@articlelist');
Route::get('/search', 'PagesController@search');
Route::get('/home-search', 'PagesController@homesearch');
Route::get('/journal', 'PagesController@journal');
Route::get('/journal/volume-{volume_id}-issue-{issue}', 'PagesController@articlelist');
Route::get('/journal/article/{slug}', 'PagesController@viewarticle');
Route::get('/journal/article/download/{slug}', 'PagesController@downloadarticle');
Route::get('/about/objectives', 'PagesController@objectives');




Route::get('/writer/submit-article', 'WriterController@submitarticle');
Route::get('/writer/profile', 'WriterController@profile');
Route::patch('/writer/passwordupdate/{id}', 'WriterController@passwordupdate');
Route::patch('/writer/profileupdate/{id}', 'WriterController@profileupdate');

Route::post('/admin/confirmation', 'AdminController@emailconfirmation');
Route::get('/admin/send-email/{id}', 'AdminController@sendmail');
Route::get('/admin', 'AdminController@dashboard');
Route::get('/admin/submitted-article', 'AdminController@submitted');
Route::get('/admin/create-volume', 'AdminController@volumecreate');
Route::get('/admin/publication', 'AdminController@publication');
Route::get('/admin/publication-view', 'AdminController@viewpublication');
Route::get('/admin/article-published', 'AdminController@published');
Route::get('/admin/contact-mail', 'AdminController@contact');
Route::get('/admin/contact-read', 'AdminController@contactread');
Route::get('/admin/contact-trash', 'AdminController@contacttrash');
Route::get('/admin/registered-users', 'AdminController@registered');
Route::get('/admin/manual-publication', 'AdminController@manual');
Route::get('/admin/article-downloads-registration', 'AdminController@downloadregistration');
Route::delete('/downloadsuser/{id}', 'AdminController@downloadsuser');
Route::get('/admin/security', 'AdminController@security');
Route::patch('/admin/passwordupdate/{id}', 'AdminController@updatepassword');
Route::get('/admin/foreword', 'AdminController@showforeword');
Route::get('/admin/editors-note', 'AdminController@editors');
Route::get('/admin/foreword-view', 'AdminController@viewforeword');
Route::get('/admin/editor-view', 'AdminController@vieweditor');
Route::get('/admin/board-view', 'AdminController@viewboard');
Route::get('/admin/editorial-board', 'AdminController@board');
Route::get('/admin/foreword/action/{id}', 'AdminController@uploadforeword');
Route::get('/admin/editors-note/action/{id}', 'AdminController@uploadeditor');
Route::get('/admin/editorial-board/action/{id}', 'AdminController@uploadboard');
Route::patch('/admin/foreword/add/{id}', 'AdminController@saveforeword');
Route::patch('/admin/editors-note/add/{id}', 'AdminController@saveeditor');
Route::patch('/admin/editorial-board/add/{id}', 'AdminController@saveboard');


Route::post('/manual', 'AdminController@storearticle');


// Route::patch('/admin/message-control/{id}', 'AdminController@messagecontrol'); not working(Read Message)



Route::resource('article', 'ArticleController');
Route::resource('volume', 'VolumeController');
Route::resource('issue', 'IssueController');
Route::resource('contacts', 'ContactController');
Route::resource('info', 'JournalInformationController');
Route::resource('editor', 'EditorsNoteController');
Route::resource('board', 'EditorialBoardController');
Route::resource('foreword', 'ForewordController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/writer', 'Auth\RegisterController@createWriter');

    Route::view('/home', 'home')->middleware('auth');
    // Route::view('/admin', 'admin');
    // Route::view('/writer', 'writer');
