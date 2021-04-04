<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    //
    public function storeEmail(Request $request){
        $email=$request->email;
        $check=Newsletter::where('email',$email)->get();
        $count=count($check);
        if($count>0){
            $notification=array(
                'messege'=>'You are already subscribed',
                'alert-type'=>'warning'
                );
            return Redirect()->back()->with($notification);
        }
        else{
            $newsletter=new Newsletter();
            $newsletter->email=$email;
            $newsletter->save();
            $notification=array(
                'messege'=>'You are subscribed Successfullu ',
                'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }
    }
}
