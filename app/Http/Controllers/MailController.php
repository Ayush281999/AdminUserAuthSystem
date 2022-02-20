<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
   public function sendEmail()
   {
       $details = [
           'tittle' => 'Mail from Ayush',
           'body'  =>  'This is for testing'
       ];

       Mail::to("ayushk.itpath@gmail.com")->send(new TestMail($details));
       return"Email Sent";
   }
}
