<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class feedback_controller extends Controller
{
    public function submit(Request $request){

        $feedback = new feedback();
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');

        $feedback->save();

        return redirect()->route('main')->with('success', 'We got your request. Good Luck! =)');

    }
}
