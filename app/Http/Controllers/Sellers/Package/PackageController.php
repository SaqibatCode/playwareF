<?php

namespace App\Http\Controllers\Sellers\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function getNewPackage(){
        return view('seller.pages.products.addNewPackage', [
            'title' => 'Create Package'
        ]);
    }
}
