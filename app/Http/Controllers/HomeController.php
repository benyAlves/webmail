<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\user_dest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $email = $request->email;

        $user_dest = User::where('email', $email)->first();
//        $user_dest = DB::table('users')->where('email', $request->email)->get();

        $user = Auth::user();

        $message = new Message;
        $message->email = $user->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->user_id =$user_dest->id;
        $message->save();

        return redirect('home')->with('message','Email enviado');

    }

    public function show($id)
    {
        $message = message::find($id);
        if(!$message){
            abort(503);
        }
        return view('message.detail')->with('message', $message);
    }

    public function edit($id)
    {
        $message = message::find($id);
        if(!$message){
            abort(503);
        }
        return view('message.reply')->with('message', $message);
    }

    public function create()
    {
        return view('message.create');
    }
}
