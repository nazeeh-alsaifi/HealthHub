<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminCreate($id,$subject)
    {
        return view('messages.admin-create', ['id' => $id, 'subject' => $subject]);
    }

    public function userCreate()
    {
        return view('messages.create');
    }

    public function sendMessage()
    {
        if (request()->hasAny('id')) {
            $data = request()->validate([
                'subject' => ['required', 'string'],
                'body' => ['required', 'string', 'min:10'],
                'id' => ['required']
            ]);
            auth()->user()->sendMessageTo($data['id'], $data['subject'], $data['body'], 1);

        } else {
            $data = request()->validate([
                'subject' => ['required', 'string'],
                'body' => ['required', 'string', 'min:10'],
                'captcha' => ['required', 'captcha'],
            ]);

            auth()->user()->sendMessageTo(1, $data['subject'], $data['body'], 1);
        }


        return redirect('/home');


    }
}
