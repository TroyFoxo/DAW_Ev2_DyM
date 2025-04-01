<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;
use App\Models\OrderPhoto;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
