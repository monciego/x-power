<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('administrator')) {
            return view('administrator.dashboard.index');
        } elseif (Auth::user()->hasRole('user')) {
            return view('user.dashboard.index');
        }
    }
}
