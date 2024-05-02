<?php

namespace App\Http\Controllers\Sellers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboardPage(){
        return view('seller.pages.dashboard', ['title' => 'Dashboard']);
    }
}
