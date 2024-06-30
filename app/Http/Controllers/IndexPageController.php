<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function getIndexPage()
    {
        return view('user.Pages.Index');
    }

    public function getShopPage(){
        return view('user.Pages.shop');
    }

    public function getShopSinglePage(){
        return view('user.Pages.shop-single');
    }
    
    public function getCartPage(){
        return view('user.Pages.cart');
    }
    
    public function getFaqsPage(){
        return view('user.Pages.faqs');
    }
    
    public function getContactPage(){
        return view('user.Pages.contact');
    }
    
    public function getSuccessPage(){
        return view('user.Pages.success');
    }
    
    public function getSellerPortfolioPage(){
        return view('user.Pages.seller-portfolio');
    }
    
    public function getRegisterPage(){
        return view('user.Pages.register');
    }
    
    public function get404Page(){
        return view('user.Pages.404');
    }
    
    public function getTermsConditionsPage(){
        return view('user.Pages.terms-conditions');
    }
    
    public function getAboutPage(){
        return view('user.Pages.about');
    }
}
