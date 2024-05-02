<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function getIndexPage()
    {
        return view('user.Pages.Index');
    }
}
