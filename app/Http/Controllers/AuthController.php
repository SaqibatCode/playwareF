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
            'EmailAddress' => 'required|email|unique:users,Email',
            'DateOfBirth' => 'required|string',
            'Address' => 'required|string',
            'phoneNumber' => 'required|string|unique:users,number',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:6',
            'confirmTermsAndConditions' => 'required'
        ], [
            'username.required' => 'Please Enter Your Full Name',
            'username.string' => 'Make Sure To Write Your Name In Correct Format',
            'FatherName.required' => 'Please Enter Your Father Name',
            'FatherName.string' => 'Please Enter Your Father Name In Correct Format',
            'EmailAddress.required' => 'Please Enter Your Email Address',
            'EmailAddress.unique' => 'This Email Address is already Take, Please Login To Your Account',
            'DateOfBirth.required' => 'Please Enter Your date of birth',
            'Address.required' => 'Please Enter Your Address',
            'phoneNumber.required' => 'Please Enter Your Phone Number',
            'password.required' => "Please Enter Your Correct Password",
            'password.requried_with' => 'Your Password Doesn"t match',
            'password.same' => 'Your Password Doesn"t match',
            'confirmTermsAndConditions.required' => 'Please Select Checkbox if you confirm with our Terms and Conditions',
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
            'cnicNumber' => 'required|string|max:16|unique:users,CNIC',
            'CNICFrontPicture' => 'required|mimes:png,jpg,jpeg',
            'CNICBackPicture' => 'required|mimes:png,jpg,jpeg',
            'shopAddress' => $request->input('AccountType') == 'Shopkeepr' ? 'required' : '',
            'shopName' => $request->input('AccountType') == 'Shopkeepr' ? 'required' : '',
            'shopPicture' => $request->input('AccountType') == 'Shopkeepr' ? 'required|mimes:png,jpg,jpeg' : '',
            'businessCardPicture' => $request->input('AccountType') == 'Shopkeepr' ? 'required|mimes:png,jpg,jpeg' : '',
        ], [
            'AccountType.required' => 'Please select Account Type.',
            'cnicNumber.required' => 'Please Enter Your Correct 13 Digits CNIC Number.', // Corrected the typo here
            'cnicNumber.unique' => 'The CNIC number has already been taken.', // Corrected the typo here
            'CNICFrontPicture.mimes' => 'Make sure to upload image in png, jpg, or jpeg format.',
            'CNICFrontPicture.required' => 'Your CNIC Front Picture is required.',
            'CNICBackPicture.mimes' => 'Make sure to upload image in png, jpg, or jpeg format.',
            'CNICBackPicture.required' => 'Your CNIC Back Picture is required.',
            'shopAddress.required' => 'Your Shop Address is required.',
            'shopPicture.required' => 'Your Shop Picture is required.',
            'businessCardPicture.required' => 'Your Business Card Picture is required.', // Corrected the typo here
            'businessCardPicture.mimes' => 'Make sure to upload image in png, jpg, or jpeg format.', // Added 'jpg' here for consistency
            'shopPicture.mimes' => 'Make sure to upload image in png, jpg, or jpeg format.', // Added 'jpg' here for consistency
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


    public function getLoginPage()
    {
        return view('seller.Auth.Login');
    }

    public function sellerLogin(Request $request)
    {
        // dd($request->all());
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && password_verify($password, $user->password)) {
            Auth::login($user);
            return redirect(route('seller.dashboard'));
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }

    // ADMIN FUNCTIONS
    public function loginAdmin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

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
