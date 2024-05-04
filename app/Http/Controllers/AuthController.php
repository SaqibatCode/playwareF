<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{


    public function getRegisterPage()
    {
        return view('seller.Auth.register');
    }
    public function registerSeller(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|string',
            'FatherName' => 'required|string',
            'EmailAddress' => 'required|email',
            'DateOfBirth' => 'required|string',
            'Address' => 'required|string',
            'phoneNumber' => 'required|string',
            'password' => 'required|confirmed|min:6',
            'confirmTermsAndConditions' => 'required'
        ]);



        $user = new User;
        $user->fullName = $validate['username'];
        $user->fatherName = $validate['FatherName'];
        $user->email = $validate['EmailAddress'];
        $user->number = $validate['phoneNumber'];
        $user->address = $validate['Address'];
        $user->dob = $validate['DateOfBirth'];
        $user->password = bcrypt($validate['password']);
        $user->save();

        Auth::login($user);

        return redirect(route('auth.verificationForm'));
    }

    public function verificationForm()
    {
        return view('seller.Auth.verification', [
            'title' => 'Verification Form'
        ]);
    }

    public function verifySeller(Request $request)
    {

        // dd($request->all());

        $validate = $request->validate([
            'AccountType' => 'required',
            'cnicNumber' => 'required|string|max:16',
            'CNICFrontPicture' => 'required|mimes:png',
            'CNICBackPicture' => 'required|mimes:png',
            'shopAddress' => $request->input('AccountType') == 'Shopkeepr' ? 'required' : '',
            'shopName' => $request->input('AccountType') == 'Shopkeepr' ? 'required' : '',
            'shopPicture' => $request->input('AccountType') == 'Shopkeepr' ? 'required' : '',
            'businessCardPicture' => $request->input('AccountType') == 'Shopkeepr' ? 'required' : '',
        ]);

        $folderPath = 'user_folders/verification/' . Auth::user()->id . '_' . Auth::user()->fullName;

        if (!file_exists(public_path($folderPath))) {
            mkdir(public_path($folderPath), 0777, true);
        }

        $cnicFrontPicture = $request->file('CNICFrontPicture');
        $cnicFrontPictureName = time() . '_' . 'Front_Picture.png';
        $cnicFrontPicture->move(public_path($folderPath), $cnicFrontPictureName);

        $CNICBackPicture = $request->file('CNICBackPicture');
        $CNICBackPictureName = time() . '_' . 'Back_Picture.png';
        $CNICBackPicture->move(public_path($folderPath), $CNICBackPictureName);



        $user = User::findOrfail(Auth::user()->id);
        $user->accountType = $validate['AccountType'];
        $user->CNIC = $validate['cnicNumber'];
        $user->CNICFrontPicture = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $cnicFrontPictureName;
        $user->CNICBackPicture = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $CNICBackPictureName;

        if ($request->input('AccountType') == 'Shopkeepr') {
            $user->ShopAddress = $validate['shopAddress'];
            $user->ShopName = $validate['shopName'];

            $CardPicture = $request->file('businessCardPicture');
            $BusinessCardPicture = time() . '_' . 'business_card.png';
            $CardPicture->move(public_path($folderPath), $BusinessCardPicture);

            $ShopPicture = $request->file('shopPicture');
            $ShopPictureName = time() . '_' . 'shop_picture.png';
            $ShopPicture->move(public_path($folderPath), $ShopPictureName);

            $user->ShopPicture = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $BusinessCardPicture;
            $user->ShopBusinessCardPicture = Auth::user()->id . '_' . Auth::user()->fullName . '/' . $ShopPictureName;
        }

        $user->save();

        return redirect(route('seller.dashboard'));
    }

    public function logoutSeller()
    {
        Auth::logout();
        return redirect(route('indexPage'));
    }

    // ADMIN FUNCTIONS
    public function loginAdmin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->where('accountType', 'Admin')->first();

        if ($user && password_verify($password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('/admin/dashboard');
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }
}
