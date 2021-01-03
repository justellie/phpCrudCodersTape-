<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\New_;

class ContactFormController extends Controller
{
    private function validateRequest()
    {
        return request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
            ]);

    } 
    public function create()
    {
        return view('contact.create');
    }
    public function store()
    {
        //dd($this->validateRequest());
        $data=$this->validateRequest();
        Mail::to('test@test.com')->send(New ContactForm($data));
        session()->flash('message','Thanks for your message. We\'ll be in touch');
        return redirect('/contact');
    }
    
}
