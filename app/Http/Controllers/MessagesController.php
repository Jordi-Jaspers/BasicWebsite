<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('Messages.home');
    }
    
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //Create new message.
        $message = new Message;
       
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //Save message and submit to the database.
        $message->save();

        //Redirect
        return redirect('/home#contact') -> with('success', 'Message sent');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('Messages.messages') -> with('messages', $messages);
    }
}