<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getAdminDashboard()
    {
        return view('admin.pages.dashboard', ['title' => 'Admin Dashboard']);
    }

    public function getLoginPage()
    {
        return view('admin.pages.Login');
    }
}
