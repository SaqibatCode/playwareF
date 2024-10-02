<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Shipping;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {

        $product = Products::findorFail($id);


        $cart = session()->get('cart', []);


        $productPrice = $product->sellPrice == null ? $product->originalPrice : $product->sellPrice;


        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['total'] = $cart[$id]['quantity'] * $cart[$id]['price'];
        } else {

            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->productTitle,
                'quantity' => 1,
                'price' => $productPrice,
                'total' => $productPrice,
                'image' => $product->mainImage
            ];
        }

        // Store the updated cart back into the session
        session()->put('cart', $cart);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart($id)
    {
        // Get the cart from session
        $cart = session()->get('cart', []);

        // Remove the specific product from the cart
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart); // Update the sessions
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    public function clearCart()
    {
        // Remove the 'cart' key from the session
        session()->forget('cart');

        // Optionally, you can add a success message and redirect the user
        return redirect()->back()->with('success', 'Cart has been cleared!');
    }

    public function getCartPage(){
        $subTotal = 0;
        $shipping = Shipping::get();
        if(session('cart')){
            foreach(session('cart') as $id => $details){
                $subTotal += $details['total'];
            }
        }
        return view('user.Pages.cart', compact('subTotal', 'shipping'));
    }
    public function getCheckoutPage(){
        return view('user.Pages.checkout');
    }


    public function updateCartQuantity(Request $req) {
        $cart = session('cart');
        foreach ($cart as &$session) {
            if ($session['id'] == $req->id) {
                $session['quantity'] = (int)$req->quantity;
                $session['total'] = (int)$req->quantity * $session['price'];
            }
        }
        session(['cart' => $cart]);
        return response()->json($cart[$req->id]);
    }

}
