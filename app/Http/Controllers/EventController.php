<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
use App\EventRegister;

class EventController extends Controller
{
    //
    public function index(){
        $date=Carbon::now()->format('y-m-d');
        
        $events=Event::whereDate('date','>',$date)->paginate(10);
        // dd($events);
        
        return view('pages.event',compact('events'));
    }
    public function register(Request $request){
        // (dd($request->all()));
    
        $eventname=Event::where('id',$request->event_id)->first();
        

        $id=$request->event_id;
        $email=$request->email;
        $check=EventRegister::where('email',$email)->where('event_id',$id)->get();
        $count=count($check);
        
        if($count>0){
            
            $notification=array(
                'messege'=>'You are already Registered to Event '.$eventname->name,
                'alert-type'=>'warning'
                );
            return Redirect()->back()->with($notification);
        }
        else{
        
            $event=new EventRegister();
            $event->event_id=$request->event_id;
            $event->name=$request->name;
            $event->email=$request->email;
            $event->contactno=$request->contactno;
            $event->nic=$request->nic;
            $event->address=$request->address;
            // $event->save();
            if($event->save()){
                $notification=array(
                    'messege'=>'You are succesfully Registered to Event '.$eventname->name,
                    'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
            }
        }

        
        
    }
    public function formregister(){
        
        $date=Carbon::now()->format('y-m-d');
        
        $events=Event::whereDate('date','>',$date)->get();
        // dd($events);
        return view('pages.registerevent',compact('events'));
    }
    public function registerevent(Request $request){
        $eventname=Event::where('id',$request->eventname)->first();
        // dd($ec);
        $id=$request->eventname;
        $email=$request->email;
        $check=EventRegister::where('email',$email)->where('event_id',$id)->get();
        $count=count($check);
        if($count>0){
            $notification=array(
                'messege'=>'You are already Registered to Event '.$eventname->name,
                'alert-type'=>'danger'
                );
            return Redirect()->back()->with($notification);
        }
        else{
            $event=new EventRegister();
        
            $event->name=$request->name;
            $event->email=$request->email;
            $event->contactno=$request->contactno;
            $event->nic=$request->nic;
            $event->address=$request->address;
            $event->event_id=$request->eventname;
            // $event->save();
            if($event->save()){
                $notification=array(
                    'messege'=>'You are succesfully Registered to Event '.$eventname->name,
                    'alert-type'=>'warning'
                    );
                return Redirect()->back()->with($notification);
            }
        }
        
        
    }
}
