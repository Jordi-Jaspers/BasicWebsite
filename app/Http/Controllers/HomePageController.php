<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomePageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        return view('pages.Home.home');
    }

    public function resume(){
        return view('pages.Home.resume');
    }

    public function getPDF(){
        $file = "/PDF/Resume_JORDI_JASPERS.pdf";
        return response()->download(public_path($file), 'Resume_JORDI_JASPERS.pdf');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('pages.Home.messages') -> with('messages', $messages);
    }

    public function delete($id){
        $message = Message::find($id);

        $message->delete();

        return redirect('/home/messages') -> with('deleted', 'Message deleted');
    }

    public function deleteAll(){
        $messages = Message::all();

        foreach ($messages as &$message) {
            $message->delete();
        } 
        
        return redirect('/home/messages') -> with('deleted', 'Messages deleted');
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
}
