<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $auth = Auth::user();
        $user = User::with('role')->latest()->get();
        $count = User::count();
        
        return view('dashboard.index', compact('title', 'user', 'count', 'auth'))->with('i');
    }

    public function indexe()
    {
        dd(\App\Models\User::with('role')->get());
    }
}
