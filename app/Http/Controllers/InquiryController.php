<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function sendInquiry(Request $req){
        $name=$req->name;
        $subject=$req->subject;
        $email=$req->email;
        $message=$req->message;

        Mail::to($email)
            ->send(new HelloMail($name, $subject));

            return redirect()->back(); //redirects the page back to the current page
    }
}
