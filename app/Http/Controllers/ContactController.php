<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'number'=>'required|numeric|min:11',
            'message'=>'required'

        ],

        [ 'number.required' => 'The phone number is required',
          'number.numeric' => 'The phone number must be a valid phone'
    ]
);


        Contact::create($validation);
        session()->flash('success', 'Message was sent successfully');

        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
   
    return view('admcp.contact-inner', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {

        $contact->update([
         'removed'=>'1'
         
        ]);
        
       session()->flash('success', 'Message was successfully deleted');
       return redirect('/admin/contact-mail');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
     
      $contact->delete();
        session()->flash('success', 'You have successfully deleted the message permanently');
        return redirect('/admin/contact-trash');
    }
}
