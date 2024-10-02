@extends('user.Layout.Layout')
@section('mainContent')
    <main class="mt-11">

        <section class="bg-gray-100 px-4">
            <div class="container mx-auto py-4">
                <p class="text-sm">
                    <a href="#" class="text-skin-secondary">Home</a> / <a href="#"
                        class="text-skin-secondary">Shop</a>
                    /
                    <span>Checkout</span>
                </p>
            </div>
        </section>

        <section class="px-4 flex justify-center items-center py-20">
            <h1 class="text-6xl font-bold">Checkout</h1>
        </section>
        @if (auth()->check())
            @if (session('cart') == '')
                <section class="px-4 py-12">
                    <div class="container mx-auto">

                        <form action="">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-y-0 bg-skin-fill rounded-xl">
                                <div class="col-span-2 sm:rounded-md md:pr-4">
                                    <div class="flex flex-col gap-4 col-span-2 sm:rounded-lg md:pl-4 md:pr-6">
                                        <h3 class="text-skin-primary text-2xl font-semibold mb-6">Billing Details</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="firstName"
                                                    class="block mb-2 text-sm font-medium text-skin-primary">First Name
                                                    *</label>
                                                <input type="text" id="firstName" name="First Name"
                                                    class="product-form-inp w-full" required>
                                            </div>
                                            <div>
                                                <label for="lastName"
                                                    class="block mb-2 text-sm font-medium text-skin-primary">Last
                                                    Name
                                                    *</label>
                                                <input type="text" id="lastName" name="Last Name"
                                                    class="product-form-inp w-full" required>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="companyName"
                                                class="block mb-2 text-sm font-medium text-skin-primary">Company Name
                                                (optional)</label>
                                            <input type="text" id="companyName" name="Company Name"
                                                class="product-form-inp w-full">
                                        </div>
                                        <div>
                                            <label for="address"
                                                class="block mb-2 text-sm font-medium text-skin-primary">Full
                                                Address
                                                *</label>
                                            <input type="text" id="address" name="Address"
                                                class="product-form-inp w-full" required>
                                        </div>
                                        <div>
                                            <label for="townCity"
                                                class="block mb-2 text-sm font-medium text-skin-primary">Town
                                                /
                                                City
                                                *</label>
                                            <input type="text" id="townCity" name="City"
                                                class="product-form-inp w-full" required>
                                        </div>
                                        <div>
                                            <label for="state"
                                                class="block mb-2 text-sm font-medium text-skin-primary">State
                                                *</label>
                                            <input type="text" id="state" name="State"
                                                class="product-form-inp w-full" required>
                                        </div>
                                        <div>
                                            <label for="zip"
                                                class="block mb-2 text-sm font-medium text-skin-primary">Zip
                                                Code
                                                *</label>
                                            <input type="number" id="zip" name="Post Code"
                                                class="product-form-inp w-full remove-arrow" required>
                                        </div>
                                        <div>
                                            <label for="number"
                                                class="block mb-2 text-sm font-medium text-skin-primary">Phone
                                                *</label>
                                            <input type="number" id="number" name="Phone Number"
                                                class="product-form-inp w-full remove-arrow" required>
                                        </div>
                                        <div>
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-skin-primary">Email
                                                Address
                                                *</label>
                                            <input type="email" id="email" name="Email"
                                                class="product-form-inp w-full" required>
                                        </div>
                                        <div>
                                            <label for="orderNote"
                                                class="block mb-2 text-sm font-medium text-skin-primary">Order
                                                Notes
                                                (optional)</label>
                                            <textarea class="product-form-inp w-full" name="Additional Notes" id="orderNote" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="border rounded-md p-5 md:sticky md:top-2 md:left-0">
                                        <div class="flex flex-col gap-4 pb-4 mb-4 border-b">
                                            <span class="text-2xl font-semibold">Coupon Code</span>
                                            <div class="flex flex-col sm:flex-row gap-2">
                                                <input type="text"
                                                    class="border rounded-md p-2 bg-gray-100 focus:border focus:border-blue-600 outline-none"
                                                    placeholder="Coupon Code">
                                                <button type="button" class="btn-1">Apply</button>
                                            </div>
                                        </div>


                                        <div class="flex flex-col gap-4 pb-4 mb-4 border-b">
                                            <span class="text-2xl font-semibold">Your Order</span>


                                            <div class="flex justify-between items-center bg-skin-inverted p-2">
                                                <span class="text-lg font-bold">Product</span>
                                                <span class="text-lg font-bold">Price</span>
                                            </div>

                                            <div id="items" class="flex flex-col gap-4 p-2">
                                                @if (session('cart'))
                                                    @foreach (session('cart') as $id => $details)
                                                        <div class="flex justify-between items-end gap-6">
                                                            <span
                                                                class="text-skin-primary text-sm font-semibold">{{ $details['name'] }}
                                                                × {{ $details['quantity'] }}</span>
                                                            <span
                                                                class="text-skin-primary font-bold">Rs.{{ $details['price'] }}</span>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        @php
                                            $totalPrice = 0;
                                            if (session('cart')) {
                                                foreach (session('cart') as $id => $details) {
                                                    $totalPrice += $details['total'];
                                                }
                                            }
                                        @endphp
                                        <div class="flex justify-between items-center pb-4 mb-4 border-b">
                                            <span class="text-lg font-bold">Subtotal</span>
                                            <span class="text-skin-muted font-bold">Rs. {{ $totalPrice }}</span>
                                        </div>
                                        {{-- <div class="pb-4 mb-4 border-b">
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="text-2xl font-semibold">Shipping</span> <span
                                            class="text-skin-muted font-semibold">$30.00</span>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <label for="flat-rate"
                                            class="flex items-center gap-2 text-sm text-skin-primary cursor-pointer"><input
                                                class="focus:ring-0 focus:outline-none focus:border-none" type="radio"
                                                id="flat-rate" name="Shipping" />Flat Rate</label>
                                        <label for="local-pick"
                                            class="flex items-center gap-2 text-sm text-skin-primary cursor-pointer"><input
                                                class="focus:ring-0 focus:outline-none focus:border-none" type="radio"
                                                id="local-pick" name="Shipping" />Local Pickup / Free Shipping</label>
                                    </div>

                                </div> --}}

                                        <div class="flex justify-between items-center pb-4 mb-4 border-b">
                                            <span class="text-2xl font-semibold">Total</span> <span
                                                class="text-skin-muted font-semibold text-2xl">Rs.{{ $totalPrice }}</span>
                                        </div>

                                        <div class="flex flex-col gap-4 pb-4 mb-4 border-b">
                                            <h3 class="text-2xl font-semibold">Payment Method</h3>
                                            <div class="">
                                                <label for="paymentMethod"
                                                    class="flex items-center gap-2 text-sm text-skin-parimary mb-2 bg-skin-inverted p-2">
                                                    <input class="focus:ring-0 focus:outline-none focus:border-none"
                                                        type="radio" id="paymentMethod" name="Payment Method">Direct
                                                    Bank
                                                    Transfer</label>
                                                <p class="pl-7 text-sm text-skin-parimary">Make your payment directly into
                                                    our
                                                    bank account. Please use your Order ID as the payment
                                                    reference. Your order will not be shipped until the funds have cleared
                                                    in
                                                    our account.</p>
                                            </div>

                                            <label for=" paymentMethod"
                                                class="flex items-center gap-2 text-sm text-skin-parimary mb-2 bg-skin-inverted p-2"><input
                                                    class="focus:ring-0 focus:outline-none focus:border-none"
                                                    type="radio" id="paymentMethod" name="Payment Method">Cash On
                                                Delivery</label>

                                            <p class="text-skin-parimary bg-skin-inverted p-2">Your personal data will be
                                                used
                                                to process your order,
                                                support
                                                your
                                                experience throughout
                                                this website, and for other purposes described in our <a href="/faqs.html"
                                                    class="text-skin-secondary">privacy policy</a>.</p>
                                        </div>

                                        <button class="btn-1 w-full">Proceed to Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>
            @else
                <section class="px-4 py-12">
                    <p>The Cart Is Empty</p>
                </section>
            @endif
        @else
            <section class="px-4 py-12 ma-auto flex justify-center flex-col" style="align-items: center">
                <p>Please Sign Up To Continue</p>
                <a href="{{ route('user.signup') }}" class="btn-1" style="display:block;margin-top:10px;">Sign Up</a>
            </section>
        @endif
    </main>


    </main>
@endsection
