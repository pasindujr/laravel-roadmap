<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $milestones = null;

        if (auth()->user()) {

            $user = User::find(auth()->id());
            $milestones = $user->milestones()->get();
        }

        $milestoneIds = $milestones->pluck('pivot.milestone_id')->toArray();


        return view('home', compact('milestoneIds'));
    }
}
