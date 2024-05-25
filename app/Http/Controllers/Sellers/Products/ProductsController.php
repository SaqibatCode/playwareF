<?php

namespace App\Http\Controllers\Sellers\Products;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use App\Models\ProductVariations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function getAllProducts()
    {
        $userId = Auth::user()->id;
        $Products = Products::where('user_id', $userId)->get();
        return view('seller.pages.products.allProducts', [
            'title' => 'All Products',
            'Products' => $Products
        ]);
    }

    public function addNewProduct()
    {
        $categories = Categories::root()->get();
        $brands = Brands::get();
        return view('seller.pages.products.addNewProduct', [
            'title' => 'Add New Product',
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    public function uploadProduct(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'productTitle' => 'required|string',
            'brandName' => $request->input('thisBrandDoesNotHaveProduct') == 'on' ? '' : 'required|required',
            'productCategory' => 'required|string',
            'productQuantity' => 'required|integer',
            'productSku' => 'required|string',
            'Manufacturer' => 'required|string',
            'CountryOfOrigin' => 'required|string',
            'AboutThisitem' => 'required|string',
            'productDescription' => 'required|string',
            'mainImage' => 'required|mimes:png,jpg|max:2050',
            'firstImage' => 'required|mimes:png,jpg|max:2050',
            'secondImage' => 'required|mimes:png,jpg|max:2050',
            'thirdImage' => 'required|mimes:png,jpg|max:2050',
            'fourthImage' => 'nullable|mimes:png,jpg|max:2050',
            'fifthImage' => 'nullable|mimes:png,jpg|max:2050',
        ], [
            'mainImage.required' => 'Image Is Required',
            'firstImage.required' => 'Image Is Required',
            'secondImage.required' => 'Image Is Required',
            'thirdImage.required' => 'Image Is Required',
            'brandName.required' => 'Please Enter Brand Name Or Tick mark this box',
        ]);

        $folderPath = 'user_folders/Product_Images/' . Auth::user()->id . '_' . Auth::user()->fullName;

        if (!file_exists(public_path($folderPath))) {
            mkdir(public_path($folderPath), 0777, true);
        }

        $mainImage = $request->file('mainImage');
        $mainImageName = time() . '_' . 'front_image' . '.' . $mainImage->getClientOriginalExtension();
        $mainImage->move(public_path($folderPath), $mainImageName);

        $firstImage = $request->file('firstImage');
        $firstImageName = time() . '_' . 'first_image' . '.' . $mainImage->getClientOriginalExtension();
        $firstImage->move(public_path($folderPath), $firstImageName);

        $secondImage = $request->file('secondImage');
        $secondImageName = time() . '_' . 'second_image' . '.' . $mainImage->getClientOriginalExtension();
        $secondImage->move(public_path($folderPath), $secondImageName);

        $thirdImage = $request->file('thirdImage');
        $thirdImageName = time() . '_' . 'third_image' . '.' . $mainImage->getClientOriginalExtension();
        $thirdImage->move(public_path($folderPath), $thirdImageName);

        if ($request->file('fourthImage')) {
            $fourthImage = $request->file('fourthImage');
            $fourthImageName = time() . '_' . 'fourth_image' . '.' . $mainImage->getClientOriginalExtension();
            $fourthImage->move(public_path($folderPath), $fourthImageName);
        }
        if ($request->file('fifthImage')) {
            $fifthImage = $request->file('fifthImage');
            $fifthImageName = time() . '_' . 'fifth_image' . '.' . $mainImage->getClientOriginalExtension();
            $fifthImage->move(public_path($folderPath), $fifthImageName);
        }
        $product = new Products;
        $product->user_id = Auth::user()->id;
        $product->productTitle = $validate['productTitle'];
        if ($validate['brandName']) {
            $product->brandName = $validate['productTitle'];
        }

        $product->productCategory = $validate['productCategory'];
        $product->productQuantity = $validate['productQuantity'];
        $product->productSku = $validate['productSku'];
        $product->Manufacturer = $validate['Manufacturer'];
        $product->CountryOfOrigin = $validate['CountryOfOrigin'];
        $product->productDescription = $validate['productDescription'];
        $product->AboutThisitem = $validate['AboutThisitem'];
        $product->mainImage = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $mainImageName;
        $product->firstImage = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $firstImageName;
        $product->secondImage = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $secondImageName;
        $product->thirdImage = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $thirdImageName;
        if ($request->file('fourthImage')) {
            $product->fourthImage = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $fourthImageName;
        }
        if ($request->file('fifthImage')) {
            $product->fifthImage = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $fifthImageName;
        }
        if (Auth::user()->approved != 0) {
            $product->approved = 1;
        } else {
            $product->approved = 0;
        }
        $product->save();



        $variations = [];
        $i = 0;

        // Loop through $requestData to extract variation data
        while (isset($request["Price{$i}"])) {

            $variationImage = $request["variationImage{$i}"];
            ;
            $variationImageName = time() . '_' . 'Varitaion' . $i . '.' . $variationImage->getClientOriginalExtension();
            $variationImage->move(public_path($folderPath), $variationImageName);
            $variation = [
                'productId' => $product->id,
                'color' => $request["ColorVariation{$i}"],
                'size' => $request["SizeVariation{$i}"],
                'material' => $request["MaterialVariation{$i}"],
                'style' => $request["Style{$i}"],
                'quantity' => $request["Quanatity{$i}"], // Corrected the typo in your keys
                'price' => $request["Price{$i}"],
                'image' => $variationImageName
            ];

            $variations[] = $variation;
            $i++;
        }

        foreach ($variations as $variation) {
            ProductVariations::create($variation);
        }

        return redirect(route('seller.allProducts'))->with(['success' => 'Product Uploaded Successfully']);
    }


    // Version 2 Setup
    public function addNewProducts()
    {
        return view('seller.pages.product.addNewProduct', [
            'title' => 'Add New Products',
        ]);
    }
}
