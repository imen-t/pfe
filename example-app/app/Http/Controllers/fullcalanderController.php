<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Action;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class fullcalanderController extends Controller
{
    
    public function getEvent(){
        $user = Auth::user();
        $actions = Action::where('user_id', $user->id)->get();
    
        $events = [];
        //foreach (Auth::user()->actions as $action)
        foreach ($actions as $action) {
            $events[] = [
                'title' => $action->title,
                'due_date' => $action->due_date,
                // Add any other necessary properties to the event
            ];
        }
    
        return view('calander.calendar',compact('events'));
    }
}
