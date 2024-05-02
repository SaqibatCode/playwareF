<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ApprovedProductsController extends Controller
{
    public function getApprovedProducts()
    {
        $Products = Products::where('approved', '1')->simplePaginate(10);

        return view('admin.pages.products.Approved', [
            'title' => 'Approved Products',
            'Products' => $Products

        ]);
    }


    public function ApproveProduct($productId)
    {
        $product = Products::find($productId);
        $product->approved = 1;
        $product->save();
        return back()->with('success', 'Product Has Been Approved Successfully');
    }
    public function RejectProduct($productId)
    {
        $product = Products::find($productId);
        $product->approved = 3;
        $product->save();
        return back()->with('success', 'Product Has Been Rejected Successfully');
    }
}
