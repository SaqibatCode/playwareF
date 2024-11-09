<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function getIndexPage()
    {
        $recentProducts = Products::where('approved', 1)
        ->with(['brand', 'category', 'users'])
        ->where('productQuantity', '!=', 0)
        ->latest()
        ->take(5)
        ->get();
        $mouse = 'mouse';
        $mouseCat = Products::where('approved', 1)
        ->with(['brand', 'category', 'users'])
        ->whereHas('category', function ($query) use ($mouse) {
            $query->where('name', $mouse);
        })
        ->get();

        $keyboard = 'keyboard';
        $keyboardCat = Products::where('approved', 1)
        ->with(['brand', 'category', 'users'])
        ->whereHas('category', function ($query) use ($keyboard) {
            $query->where('name', $keyboard);
        })
        ->get();

        $graphic = 'Graphics Card';
        $graphicCat = Products::where('approved', 1)
        ->with(['brand', 'category', 'users'])
        ->whereHas('category', function ($query) use ($graphic) {
            $query->where('name', $graphic);
        })
        ->get();
        $category = Categories::all();
        return view('user.Pages.Index', compact('recentProducts', 'mouseCat', 'keyboardCat', 'graphicCat'));
    }

    public function getShopPage()
    {
        $products = Products::where('approved', 1)
            ->with(['brand', 'category', 'users']) // Eager load brand and category
            ->where('productQuantity', '!=' , 0)
            ->get();
        return view('user.Pages.shop', compact('products'));
    }

    public function getShopSinglePage($id)
    {
        $product = Products::where('id', $id)
        ->with(['brand', 'category']) // Eager load brand and category
        ->first();
        // dd($product);
        return view('user.Pages.shop-single', compact('product'));
    }

    public function getCartPage()
    {
        return view('user.Pages.cart');
    }

    public function getFaqsPage()
    {
        return view('user.Pages.faqs');
    }

    public function getContactPage()
    {
        return view('user.Pages.contact');
    }

    public function getSuccessPage()
    {
        $success = session()->get('success', '');
        $parentOrderId = session('parentOrderId');
        $order = Order::where('parent_order_id', $parentOrderId)->with('all_products')->get();
        // return response()->json($order);
        // return response()->json($order);
        return view('user.Pages.success', compact('success', 'order'));
    }

    public function getSellerPortfolioPage()
    {
        return view('user.Pages.seller-portfolio');
    }

    public function getRegisterPage()
    {
        return view('user.Pages.register');
    }

    public function getLoginPage(){
        return view ('user.Pages.Login');
    }
    public function get404Page()
    {
        return view('user.Pages.404');
    }

    public function getTermsConditionsPage()
    {
        return view('user.Pages.terms-conditions');
    }

    public function getAboutPage()
    {
        return view('user.Pages.about');
    }


    public function getAccountPage(){
        return view('user.Pages.account');
    }
}
