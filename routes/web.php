<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Pages\HomePageController;
use App\Http\Controllers\Admin\Products\ApprovedProductsController;
use App\Http\Controllers\Admin\Products\BrandController;
use App\Http\Controllers\Admin\Products\CategoriesController;
use App\Http\Controllers\Admin\Products\ProductApprovalRequiredController;
use App\Http\Controllers\Admin\Products\RejectProductsController;
use App\Http\Controllers\Admin\Reports\ReportsController;
use App\Http\Controllers\Admin\Sellers\SellersController;
use App\Http\Controllers\Admin\Support\SupportTicketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\Sellers\Dashboard\DashboardController as SellerDashboardController;
use App\Http\Controllers\Sellers\Products\ProductsController;
use App\Http\Controllers\Sellers\Profile\ProfileDetailsController;
use App\Http\Controllers\Sellers\Shop\ShopController;
use App\Http\Controllers\Sellers\Package\PackageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', [IndexPageController::class, 'getIndexPage'])->name('indexPage');

Route::get('/shop/{slug}', [ShopController::class, 'getShop'])->name('shop');

// Secure Routes for registration and verification (All Post Requests);
Route::prefix('api/v1')->group(function () {
    Route::post('/register', [AuthController::class, 'registerSeller'])->name('auth.register');
    Route::post('/logout', [AuthController::class, 'logoutSeller'])->name('auth.logout');
    Route::post('/seller/login', [AuthController::class, 'sellerLogin'])->name('login.seller');
    Route::post('/admin/login', [AuthController::class, 'loginAdmin'])->name('login.admin');


    Route::middleware('seller')->prefix('seller')->group(function () {

        Route::post('verfiication', [AuthController::class, 'verifySeller'])->name('auth.verifySeller');

        Route::post('upload-product', [ProductsController::class, 'uploadProduct'])->name('auth.uploadProduct');

        Route::post('upload-package', [PackageController::class, 'uploadPackage'])->name('auth.uploadPackage');
    });


    Route::middleware('admin')->prefix('admin')->group(function () {

        Route::prefix('user')->group(function () {
            Route::post('/approve-seller/{sellerId}', [SellersController::class, 'ApproveSeller'])->name('auth.approveSeller');
            Route::post('/reject-seller/{sellerId}', [SellersController::class, 'rejectSeller'])->name('auth.rejectSeller');
        });

        Route::prefix('content')->group(function () {
            Route::post('/update-homepage-content', [HomePageController::class, 'UpdateContent'])->name('admin.updateContent');
            Route::post('/update-terms-and-conditions', [HomePageController::class, 'UpdateTermsAndConditions'])->name('admin.updateTermsAndConditions');
            Route::post('/update-privacy-policy', [HomePageController::class, 'UpdatePrivacyPolicy'])->name('admin.updatePrivacyPolicy');
            Route::post('/update-refund-policy', [HomePageController::class, 'UpdateRefundPolicy'])->name('admin.UpdateRefundPolicy');
        });

        Route::prefix('product')->group(function () {
            Route::post('/approve-product/{productId}', [ApprovedProductsController::class, 'ApproveProduct'])->name('admin.approveProducts');
            Route::post('/reject-product/{productId}', [ApprovedProductsController::class, 'RejectProduct'])->name('admin.rejectProduct');

            Route::prefix('packages')->group(function () {
                Route::post('/approve-packages/{packageId}', [ApprovedProductsController::class, 'ApprovedPackage'])->name('admin.approvePackages');
                Route::post('/reject-packages/{packageId}', [ApprovedProductsController::class, 'RejectPackage'])->name('admin.rejectPackages');
            });

            Route::prefix('category')->group(function () {
                Route::post('/create-category', [CategoriesController::class, 'createCategory'])->name('admin.createCategory');
                Route::delete('/delete-category/{id}', [CategoriesController::class, 'deleteCategory'])->name('admin.deleteCategory');
            });

            Route::prefix('brands')->group(function () {
                Route::post('/create-brand', [BrandController::class, 'createBrand'])->name('admin.createbrand');
                Route::delete('/delete-brand/{id}', [BrandController::class, 'deleteBrands'])->name('admin.deleteBrand');
            });
        });
    });
});


// All sellers route
Route::middleware('seller')->prefix('seller')->group(function () {
    Route::get('/verification-form', [AuthController::class, 'verificationForm'])->name('auth.verificationForm');
    Route::get('/dashboard', [SellerDashboardController::class, 'getDashboardPage'])->name('seller.dashboard');

    Route::prefix('products')->group(function () {
        Route::get('/all-products', [ProductsController::class, 'getAllProducts'])->name('seller.allProducts');
        Route::get('/add-new-product', [ProductsController::class, 'addNewProduct'])->name('seller.addNewProduct');
    });

    Route::prefix('packages')->group(function () {
        Route::get('/all-packages', [PackageController::class, 'getAllPackages'])->name('seller.allPackages');
        Route::get('/add-new-package', [PackageController::class, 'getNewPackage'])->name('seller.getNewPackage');
    });

    Route::prefix('accounts')->group(function () {
        Route::get('/details', [ProfileDetailsController::class, 'getProfileDetailsPage'])->name('seller.details');
    });
});


// All Admin Dashboard Routes
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'getAdminDashboard'])->name('admin.dashboard');

    Route::prefix('products')->group(function () {
        Route::get('/approved-products', [ApprovedProductsController::class, 'getApprovedProducts'])->name('admin.approvedProducts');
        Route::get('/rejected-products', [RejectProductsController::class, 'getRejectedProducts'])->name('admin.RejectProducts');
        Route::get('/approval-required', [ProductApprovalRequiredController::class, 'getApprovalRequiredProducts'])->name('admin.ApprovalRequiredProducts');

        Route::prefix('packages')->group(function () {
            Route::get('/approval-required', [ApprovedProductsController::class, 'getApprovedPackaged'])->name('admin.ApprovedPackages');
            Route::get('/rejected-packages', [ApprovedProductsController::class, 'getRejectedPackaged'])->name('admin.RejectedPackages');
            Route::get('/approved-packages', [ApprovedProductsController::class, 'getApprovedPackagesPage'])->name('admin.ApprovedPackage');
        });

        Route::get('/categoires', [CategoriesController::class, 'getCategoriesPage'])->name('admin.getCategoriesPage');
        Route::get('/brands', [BrandController::class, 'getBrandsPage'])->name('admin.getBrandsPage');
    });


    Route::prefix('sellers')->group(function () {
        Route::get('/all-sellers', [SellersController::class, 'getAllSellers'])->name('admin.allSellers');
        Route::get('/verified-sellers', [SellersController::class, 'getVerifiedSellers'])->name('admin.verifiedSellers');
        Route::get('/un-verified-sellers', [SellersController::class, 'getUnVerifiedSellers'])->name('admin.UnVerfiedSellers');
        Route::get('/shop-sellers-sellers', [SellersController::class, 'getShopSellers'])->name('admin.shopSellers');
        Route::get('/corporate-sellers', [SellersController::class, 'getCorporateSellers'])->name('admin.corporateSellers');

        Route::get('/details/{sellerId}', [SellersController::class, 'getSellersDetails'])->name('admin.sellers.details');
    });

    Route::prefix('pages')->group(function () {
        Route::get('/home', [HomePageController::class, 'getHomePageEditor'])->name('admin.HomePageEdit');
        Route::get('/terms-and-coniditions', [HomePageController::class, 'getTermsAndConditionsEditor'])->name('admin.TermsAndConditionsEditor');
        Route::get('/privacy-policy', [HomePageController::class, 'getPrivacyPolicy'])->name('admin.privacyPolicy');
        Route::get('/refund-policy', [HomePageController::class, 'getRefundPolicy'])->name('admin.RefundPolicy');

        Route::get('/support-ticket', [SupportTicketController::class, 'getSupportTicketPage'])->name('admin.supportTicket');
        Route::get('/reports', [ReportsController::class, 'getReportsPage'])->name('admin.reports');
    });

});


// If Seller Is Login, Do Not Allow them to visit Auth pages.
Route::middleware('isLogin')->group(function () {
    Route::get('admin/login', [AdminDashboardController::class, 'getLoginPage'])->name('admin.Login');
    Route::get('seller/register', [AuthController::class, 'getRegisterPage'])->name('register');
    Route::get('seller/login', [AuthController::class, 'getLoginPage'])->name('seller.login');
});


