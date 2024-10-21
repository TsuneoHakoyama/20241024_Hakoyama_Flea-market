<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use App\Mail\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function index()
    {
        $users = User::with('profile')
                       ->get();

        return view('admin.send-email', compact('users'));
    }
    
    public function send(SendEmailRequest $request)
    {
           $inputs = $request->all();

        Mail::to($inputs['to'])
              ->send(new SendEmail($inputs));


        if(count(Mail::failures()) > 0) {
            return back()->with(['send_fail_msg' => 'メール送信に失敗しました']);
        }

        return back()->with(['email_msg' => 'メールを送信しました']);
    }
}
