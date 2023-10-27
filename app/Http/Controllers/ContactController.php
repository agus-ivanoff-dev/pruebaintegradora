<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
public function index(){
    return view("contact");

}

public function store(Request $request){
    Mail::to('agus.svp@gmail.com')->send(new ContactanosMailable($request->all()));

    session()->flash('info', 'Mensaje enviado correctamente');
    
    return redirect()->route('contact.index');


}

}