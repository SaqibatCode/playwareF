<?php

namespace App\Http\Controllers\Sellers\Products;

use App\Http\Controllers\Controller;
use App\Models\AdditionalPcPartsData;
use App\Models\additionalProducts;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\OtherSingleProducts;
use App\Models\Products;
use App\Models\ProductVariations;
use App\Models\StorageData;
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
            'ProductType' => 'required',
            'productTitle' => 'required|string',
            'productCategory' => ($request->ProductType == '4' || $request->ProductType == '5') ? 'nullable|string' : 'required|string',
            'brandName' => ($request->input('thisBrandDoesNotHaveProduct') == 'on' || $request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'nullable|string' : 'required|string',
            'yearOfProduct' => 'required|string',
            'warranty' => 'required|string',
            'reason' => 'nullable|string',
            'repaired' => ($request->input('ProductType') == '1' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'laptopUsedOrNew' => $request->input('ProductType') == '5' ? 'required|string' : 'nullable|string',
            'explainAboutRepairing' => $request->input('repaired') == '1' ? 'required|string' : 'nullable|string',
            'productQuantity' => 'required|integer',
            'productSku' => 'required|string',
            'originalPrice' => 'required|integer',
            'sellPrice' => 'nullable|integer',
            'AboutThisitem' => ($request->input('ProductType') == '1' || $request->input('ProductType') == '2') ? 'required|string' : 'nullable|string',
            'productDescription' => 'required|string',
            'mainImage' => 'required|mimes:png,jpg,jpeg,webp|max:2050',
            'firstImage' => 'required|mimes:png,jpg,jpeg,webp|max:2050',
            'secondImage' => 'required|mimes:png,jpg,jpeg,webp|max:2050',
            'thirdImage' => 'required|mimes:png,jpg,jpeg,webp|max:2050',
            'fourthImage' => 'nullable|mimes:png,jpg,jpeg,webp|max:2050',
            'fifthImage' => 'nullable|mimes:png,jpg,jpeg,webp|max:2050',
            'processorName' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'processorBrand' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'processorUsedOrNew' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'graphicCardName' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'graphicCardBrand' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'graphicCardMemory' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'graphicCardUsedOrNew0' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'motherboardName' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'motherboardBrand' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'motherboardUsedOrNew' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'ramName' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'ramBrand' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'ramMemory' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'ramUsedOrNew' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'ramQuantity' => ($request->input('ProductType') == '4' || $request->input('ProductType') == '5') ? 'required|string' : 'nullable|string',
            'psuName' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'psuBrand' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'psuWatts' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'psuUsedOrNew' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'caseName' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'caseBrand' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'caseUsedOrNew' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'coolerName' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'coolerBrand' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'coolerUsedOrNew' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'storageData' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'laptopStorage' => $request->input('ProductType') == '5' ? 'required|string' : 'nullable|string',
            'additionalPartsData' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'additionProductData' => $request->input('ProductType') == '4' ? 'required|string' : 'nullable|string',
            'ramGeneration' => $request->input('productCategory') == '5' ? 'required|string' : 'nullable|string',
            'ramClockSpeed' => $request->input('productCategory') == '5' ? 'required|string' : 'nullable|string',
            'ramSize' => $request->input('productCategory') == '5' ? 'required|string' : 'nullable|string',
            'storageType' => $request->input('productCategory') == '6' ? 'required|string' : 'nullable|string',
            'storageSize' => $request->input('productCategory') == '6' ? 'required|string' : 'nullable|string',
            'monitorPanelType' => $request->input('productCategory') == '11' ? 'required|string' : 'nullable|string',
            'monitorRefreshRate' => $request->input('productCategory') == '11' ? 'required|string' : 'nullable|string',
            'monitorSize' => $request->input('productCategory') == '11' ? 'required|string' : 'nullable|string',
            'monitorModelNo' => $request->input('productCategory') == '11' ? 'required|string' : 'nullable|string',
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
        $firstImageName = time() . '_' . 'first_image' . '.' . $firstImage->getClientOriginalExtension();
        $firstImage->move(public_path($folderPath), $firstImageName);

        $secondImage = $request->file('secondImage');
        $secondImageName = time() . '_' . 'second_image' . '.' . $secondImage->getClientOriginalExtension();
        $secondImage->move(public_path($folderPath), $secondImageName);

        $thirdImage = $request->file('thirdImage');
        $thirdImageName = time() . '_' . 'third_image' . '.' . $thirdImage->getClientOriginalExtension();
        $thirdImage->move(public_path($folderPath), $thirdImageName);

        if ($request->file('fourthImage')) {
            $fourthImage = $request->file('fourthImage');
            $fourthImageName = time() . '_' . 'fourth_image' . '.' . $fourthImage->getClientOriginalExtension();
            $fourthImage->move(public_path($folderPath), $fourthImageName);
        }
        if ($request->file('fifthImage')) {
            $fifthImage = $request->file('fifthImage');
            $fifthImageName = time() . '_' . 'fifth_image' . '.' . $fifthImage->getClientOriginalExtension();
            $fifthImage->move(public_path($folderPath), $fifthImageName);
        }

        $product = new Products;
        $product->ProductType = $validate['ProductType'];
        $product->user_id = Auth::user()->id;
        $product->productTitle = $validate['productTitle'];

        if ($request->input('brandName')) {
            $product->brandName = $validate['brandName'];
        } else {
            $product->brandName = 1;
        }

        if ($request->input('reason')) {
            $product->reason = $validate['reason'];
        }

        if ($request->input('repaired')) {
            $product->repaired = $validate['repaired'];
            if ($validate['repaired'] == 1) {
                $product->explainAboutRepairing = $validate['explainAboutRepairing'];
            }
        } else {
            $product->repaired = 0;
        }

        $product->yearOfProduct = $validate['yearOfProduct'];
        $product->warranty = $validate['warranty'];

        if ($request->input('productCategory')) {
            $product->productCategory = $validate['productCategory'];
        } elseif ($request->input('ProductType') == '4') {
            $product->productCategory = 39;
        } elseif ($request->input('ProductType') == '5') {
            $product->productCategory = 40;
        }

        $product->productQuantity = $validate['productQuantity'];
        $product->productSku = $validate['productSku'];
        $product->originalPrice = $validate['originalPrice'];
        if ($request->input('sellPrice')) {
            $product->SellPrice = $validate['sellPrice'];
        }

        if ($request->input('productDescription')) {
            $product->productDescription = $validate['productDescription'];
        }

        if ($request->input('AboutThisitem')) {
            $product->AboutThisitem = $validate['AboutThisitem'];
        }

        $product->mainImage = Auth::user()->id . '_' . str_replace(' ', '_', Auth::user()->fullName) . '/' . $mainImageName;
        $product->firstImage = Auth::user()->id . '_' . str_replace(' ', '_', Auth::user()->fullName) . '/' . $firstImageName;
        $product->secondImage = Auth::user()->id . '_' . str_replace(' ', '_', Auth::user()->fullName) . '/' . $secondImageName;
        $product->thirdImage = Auth::user()->id . '_' . str_replace(' ', '_', Auth::user()->fullName) . '/' . $thirdImageName;
        if ($request->file('fourthImage')) {
            $product->fourthImage = Auth::user()->id . '_' . str_replace(' ', '_', Auth::user()->fullName) . '/' . $fourthImageName;
        }
        if ($request->file('fifthImage')) {
            $product->fifthImage = Auth::user()->id . '_' . str_replace(' ', '_', Auth::user()->fullName) . '/' . $fifthImageName;
        }
        if (Auth::user()->approved != 0) {
            $product->approved = 1;
        } else {
            $product->approved = 0;
        }
        $product->save();

        if ($request->ProductType == '4' || $request->ProductType == '5') {
            $ProductVariation = new ProductVariations;
            $ProductVariation->productId = $product->id;
            $ProductVariation->ProcessorName = $validate['processorName'];
            $ProductVariation->ProcessorBrand = $validate['processorBrand'];
            if ($request->input('processorUsedOrNew')) {
                $ProductVariation->ProcessorUsedOrNew = $validate['processorUsedOrNew'];
            }
            $ProductVariation->GraphicCardName = $validate['graphicCardName'];
            $ProductVariation->GraphicCardBrand = $validate['graphicCardBrand'];
            $ProductVariation->GraphicCardMemory = $validate['graphicCardMemory'];
            if ($request->input('graphicCardUsedOrNew0')) {
                $ProductVariation->GraphicCardUsedOrNew = $validate['graphicCardUsedOrNew0'];
            }
            if ($request->input('motherboardName')) {
                $ProductVariation->MotherBoardName = $validate['motherboardName'];
            }
            if ($request->input('motherboardBrand')) {
                $ProductVariation->MotherBoardBrand = $validate['motherboardBrand'];
            }
            if ($request->input('motherboardUsedOrNew')) {
                $ProductVariation->MotherBoardUsedOrNew = $validate['motherboardUsedOrNew'];
            }
            $ProductVariation->RamName = $validate['ramName'];
            $ProductVariation->RamBrand = $validate['ramBrand'];
            $ProductVariation->RamMemory = $validate['ramMemory'];
            if ($request->input('ramUsedOrNew')) {
                $ProductVariation->ramUsedOrNew = $validate['ramUsedOrNew'];
            }
            $ProductVariation->RamQuantity = $validate['ramQuantity'];
            if ($request->ProductType == '4') {
                $ProductVariation->PSUName = $validate['psuName'];
                $ProductVariation->PSUBrand = $validate['psuBrand'];
                $ProductVariation->PSUWatts = $validate['psuWatts'];
                $ProductVariation->PSUUsedOrNew = $validate['psuUsedOrNew'];
                $ProductVariation->CaseName = $validate['caseName'];
                $ProductVariation->CaseBrand = $validate['caseBrand'];
                $ProductVariation->CaseUsedOrNew = $validate['caseUsedOrNew'];
                $ProductVariation->CoolerName = $validate['coolerName'];
                $ProductVariation->CoolerBrand = $validate['coolerBrand'];
                $ProductVariation->coolerUsedOrNew = $validate['coolerUsedOrNew'];
            }
            $ProductVariation->save();


            if ($request->input('ProductType') == '4') {
                $storageData = json_decode($validate['storageData']);
                foreach ($storageData as $storageItem) {
                    $Storage = new StorageData;
                    $Storage->productId = $product->id;
                    $Storage->name = $storageItem->name;
                    $Storage->brandID = $storageItem->brand;
                    $Storage->type = $storageItem->type;
                    $Storage->Memory = $storageItem->memory;
                    $Storage->usedOrNew = $storageItem->usedOrNew;
                    $Storage->save();
                }
            }

            if ($request->input('ProductType') == '5') {
                $laptopStorage = json_decode($validate['laptopStorage']);
                foreach ($laptopStorage as $laptop) {
                    $Storage = new StorageData;
                    $Storage->productId = $product->id;
                    $Storage->name = $laptop->name;
                    $Storage->brandID = $laptop->brand;
                    $Storage->type = $laptop->type;
                    $Storage->Memory = $laptop->memory;
                    $Storage->save();
                }
            }

            if ($request->input('ProductType') == '4') {
                $additionalPartsData = json_decode($validate['additionalPartsData']);
                foreach ($additionalPartsData as $pcparts) {
                    $additionparts = new AdditionalPcPartsData;
                    $additionparts->productId = $product->id;
                    $additionparts->name = $pcparts->name;
                    $additionparts->userOrnew = $pcparts->userOrnew;
                    $additionparts->save();
                }
            }

            if ($request->input('ProductType') == '4') {
                $additionalProducts = json_decode($validate['additionProductData']);
                foreach ($additionalProducts as $additionProduct) {
                    $additionsProduct = new additionalProducts;
                    $additionsProduct->productId = $product->id;
                    $additionsProduct->name = $additionProduct->name;
                    $additionsProduct->brandId = $additionProduct->brand;
                    $additionsProduct->CategoryID = $additionProduct->category;
                    $additionsProduct->UsedOrNew = $additionProduct->usedOrNew;
                    $additionsProduct->save();
                }
            }

        }


        if ($request->input('productCategory') == '5') {
            $ram = new OtherSingleProducts;
            $ram->productId = $product->id;
            $ram->Type = $validate['ramGeneration'];
            $ram->RRCS = $validate['ramClockSpeed'];
            $ram->size = $validate['ramSize'];
            $ram->save();
        } elseif ($request->input('productCategory') == '6') {
            $storage = new OtherSingleProducts;
            $storage->productId = $product->id;
            $storage->Type = $validate['storageType'];
            $storage->size = $validate['storageSize'];
            $storage->save();
        } elseif ($request->input('productCategory') == '11') {
            $monitor = new OtherSingleProducts;
            $monitor->productId = $product->id;
            $monitor->Type = $validate['monitorPanelType'];
            $monitor->RRCS = $validate['monitorRefreshRate'];
            $monitor->size = $validate['monitorSize'];
            $monitor->modelNo = $validate['monitorModelNo'];
            $monitor->save();
        }



        return redirect(route('seller.allProducts'))->with(['success' => 'Product Uploaded Successfully']);

    }


    public function getBrandsByCategory(Request $request)
    {
        $categories = Categories::where('id', $request->categoryID)->first();
        return response()->json($categories->brands);
    }



    // Edit Products

    public function getEditProductsPage($id)
    {

        $Product = Products::where('id', $id)->with([
            'completePc.processorBrand',
            'completePc.GraphicCardBrand',
            'completePc.MotherBoardBrand',
            'completePc.RamBrand',
            'completePc.PSUBrand',
            'completePc.CaseBrand',
            'completePc.CoolerBrand',
        ])->first();

        $categories = Categories::root()->get();
        $brands = Brands::get();

        return view('seller.pages.products.editProducts', [
            'title' => 'Edit ' . $Product->productTitle,
            'product' => $Product,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

}
