@extends('user.Layout.Layout')

@section('mainContent')
    <main class="mt-11">

        <!-- BREADCRUMBS -->
        <section class="bg-gray-100 px-4">
            <div class="container mx-auto py-4">
                <p class="text-sm">
                    <a href="#" class="text-skin-secondary">Home</a> / <a href="#"
                        class="text-skin-secondary">Shop</a>
                    / <a href="#" class="text-skin-secondary">{{ $product->category->name }}</a> /
                    <span>{{ $product->productTitle }}</span>
                </p>
            </div>
        </section>

        <section class="px-4">

            <div class="container mx-auto pb-12">

                <!-- PRODUCT NAME HEADER  -->
                <div class="grid grid-cols-1 lg:grid-cols-2 border-b py-4">
                    <div>
                        <h2 class="text-skin-primary text-2xl font-bold mb-3">{{ $product->productTitle }}</h2>

                        <ul class="flex text-sm text-gray-600">
                            <li class="pl-0 px-4 border-r">Brand: <a href=""
                                    class="text-skin-secondary">{{ $product->brand->name }}</a>
                            </li>
                            <li class="px-4 border-r"><a href="">1 Review</a></li>
                            <li class="px-4">SKU: {{ $product->productSku }}</li>
                        </ul>

                    </div>

                </div>

                <!-- PRODUCT INFO AND IMAGES -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 py-4">

                    <div id="page">
                        <div class="sm:px-6">
                            <div class="column small-11 small-centered">
                                <div class="product-slider">
                                    <div class="main-slider slider-for">
                                        @if ($product->mainImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->mainImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->firstImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->firstImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->secondImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->secondImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->thirdImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->thirdImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->fourthImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->fourthImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->fifthImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->fifthImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                    </div>
                                    <div class="main-slider slider-nav">
                                        @if ($product->mainImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->mainImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->firstImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->firstImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->secondImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->secondImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->thirdImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->thirdImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->fourthImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->fourthImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif

                                        @if ($product->fifthImage)
                                            <img src="{{ asset('user_folders/Product_Images/' . $product->fifthImage) }}"
                                                alt="Product" class="h-50 w-72 object-cover rounded-t-xl" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <div class="flex flex-col gap-2 pb-6 border-b">
                            <div class="flex items-center gap-2">
                                <h2 class="text-2xl font-bold text-skin-odd">Rs.{{ $product->SellPrice }}</h2> <del
                                    class="text-sm">Rs.{{ $product->originalPrice }}</del>
                            </div>
                            <div>
                                <p class="text-sm">Status: <span class="text-skin-unique font-bold">In Stock</span></p>
                            </div>
                        </div>
                        <div class="px-4 py-6 border-b">
                            <ul class="flex flex-col gap-2 list-disc text-sm text-gray-600">
                                @php
                                    // Decode the JSON data
                                    $specifications = json_decode($product->AboutThisitem, true);
                                @endphp
                                @if (!empty($specifications) && is_array($specifications))
                                    @foreach ($specifications as $spec)
                                        <li>{{ $spec }}</li>
                                    @endforeach
                                @endif
                            </ul>

                            </ul>
                        </div>
                        <div class="py-6 border-b flex flex-col sm:flex-row items-start sm:items-end gap-4 sm:gap-6">
                            {{-- <div class="">
                                <span class="text-gray-600 text-sm">Quantity:</span>
                                <div class="flex rounded-md border gap-4 items-center text-base p-1 w-max">
                                    <button class="px-2" id="dq">-</button>
                                    <div id="quantity_display">1</div>
                                    <button class="px-2" id="iq">+</button>
                                </div>
                            </div> --}}

                            <div class="flex gap-6 items-center">

                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    {{-- <input type="hidden" name="quantity" id="quantity"> --}}
                                    <button type="submits" class="btn-1 px-12">Add To Cart</button>
                                </form>
                                @if (session('cart'))
                                    <table>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                        @foreach (session('cart') as $id => $details)
                                            <tr>
                                                <td>{{ $details['name'] }}</td>
                                                <td>{{ $details['quantity'] }}</td>
                                                <td>Rs.{{ $details['price'] }}</td>
                                                <td>Rs.{{ $details['quantity'] * $details['price'] }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    <p>Your cart is empty.</p>
                                @endif
                            </div>
                        </div>
                        <div class="py-6 flex flex-col gap-1">
                            <p class="text-sm">Category: <a href="#"
                                    class="text-skin-secondary transition-all duration-300 hover:text-skin-primary">{{ $product->category->name }}</a>
                            </p>
                        </div>
                    </div>

                </div>

        </section>

        <section class="px-4">
            <div class="container mx-auto pb-12">
                <div class="tabs flex gap-5">
                    <button class="tab-btn active" data-target="productDescription">Product Description</button>
                    <button class="tab-btn" data-target="productSpec">Product Specification</button>
                    <button class="tab-btn" data-target="productReviews">Product Reviews</button>
                </div>

                <div class="container p-4 tab-content active" id="productDescription">
                    <p class="text-gray-600 p-1">{{ $product->productDescription }}</p>
                </div>

                <div class="container p-4 tab-content" id="productSpec">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Component Names</th>
                                    <th scope="col" class="px-6 py-3">Specifications</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <!-- Example data -->
                                        CPU
                                    </th>
                                    <td class="px-6 py-4">4.9GHZ Core Clock Speed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="container p-4 tab-content" id="productReviews">
                    <p class="text-gray-600 p-1">No reviews available yet.</p>
                </div>
            </div>
        </section>


        <section class="px-4">
            <div class="container mx-auto pb-12">

                <div class="flex justify-center items-center p-4 sm:p-5 mb-8 border-b bg-gray-100">
                    <h3 class="heading-3">Related Products</h3>
                </div>

                <div
                    class="grid place-items-center grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4">

                    <div class="max-w-60 border rounded-md overflow-hidden p-2 sm:p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="../assets/Images/products/laptop/3.jpg" alt="product1"
                                    class="object-cover origin-center aspect-square">
                            </a>
                            <div
                                class="bg-white w-full py-2 absolute bottom-0 flex justify-around items-center translate-y-2 invisible opacity-0 transition-all ease-in-out duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">

                                <button id="addToCart" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32">
                                        </path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
                                        </path>
                                    </svg>
                                </button>

                                <button id="quickView" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 576 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                        </path>
                                    </svg>
                                </button>

                                <button id="addToWishlist" class="product-card-icons">

                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-orange-600">
                                <span class="text-skin-inverted text-xs font-bold">-12%</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook Air
                                Retina
                                13.3-Inch
                                Laptop </a>

                            <p class="text-xs sm:text-base">Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd text-sm sm:text-base font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-xs sm:text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>
                    <div class="max-w-60 border rounded-md overflow-hidden p-2 sm:p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="../assets/Images/products/laptop/3.jpg" alt="product1"
                                    class="object-cover origin-center aspect-square">
                            </a>
                            <div
                                class="bg-white w-full py-2 absolute bottom-0 flex justify-around items-center translate-y-2 invisible opacity-0 transition-all ease-in-out duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">

                                <button id="addToCart" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32">
                                        </path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
                                        </path>
                                    </svg>
                                </button>

                                <button id="quickView" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 576 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                        </path>
                                    </svg>
                                </button>

                                <button id="addToWishlist" class="product-card-icons">

                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-orange-600">
                                <span class="text-skin-inverted text-xs font-bold">-12%</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook Air
                                Retina
                                13.3-Inch
                                Laptop </a>

                            <p class="text-xs sm:text-base">Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd text-sm sm:text-base font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-xs sm:text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>



                    <div class="max-w-60 border rounded-md overflow-hidden p-2 sm:p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="../assets/Images/products/laptop/3.jpg" alt="product1"
                                    class="object-cover origin-center aspect-square">
                            </a>
                            <div
                                class="bg-white w-full py-2 absolute bottom-0 flex justify-around items-center translate-y-2 invisible opacity-0 transition-all ease-in-out duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">

                                <button id="addToCart" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32">
                                        </path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
                                        </path>
                                    </svg>
                                </button>

                                <button id="quickView" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 576 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                        </path>
                                    </svg>
                                </button>

                                <button id="addToWishlist" class="product-card-icons">

                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-orange-600">
                                <span class="text-skin-inverted text-xs font-bold">-12%</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook Air
                                Retina
                                13.3-Inch
                                Laptop </a>

                            <p class="text-xs sm:text-base">Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd text-sm sm:text-base font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-xs sm:text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>


                    <div class="max-w-60 border rounded-md overflow-hidden p-2 sm:p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="../assets/Images/products/laptop/3.jpg" alt="product1"
                                    class="object-cover origin-center aspect-square">
                            </a>
                            <div
                                class="bg-white w-full py-2 absolute bottom-0 flex justify-around items-center translate-y-2 invisible opacity-0 transition-all ease-in-out duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">

                                <button id="addToCart" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32">
                                        </path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
                                        </path>
                                    </svg>
                                </button>

                                <button id="quickView" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 576 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                        </path>
                                    </svg>
                                </button>

                                <button id="addToWishlist" class="product-card-icons">

                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-orange-600">
                                <span class="text-skin-inverted text-xs font-bold">-12%</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook Air
                                Retina
                                13.3-Inch
                                Laptop </a>

                            <p class="text-xs sm:text-base">Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd text-sm sm:text-base font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-xs sm:text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>


                    <div class="max-w-60 border rounded-md overflow-hidden p-2 sm:p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="../assets/Images/products/laptop/3.jpg" alt="product1"
                                    class="object-cover origin-center aspect-square">
                            </a>
                            <div
                                class="bg-white w-full py-2 absolute bottom-0 flex justify-around items-center translate-y-2 invisible opacity-0 transition-all ease-in-out duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">

                                <button id="addToCart" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32">
                                        </path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
                                        </path>
                                    </svg>
                                </button>

                                <button id="quickView" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 576 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                        </path>
                                    </svg>
                                </button>

                                <button id="addToWishlist" class="product-card-icons">

                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-orange-600">
                                <span class="text-skin-inverted text-xs font-bold">-12%</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook Air
                                Retina
                                13.3-Inch
                                Laptop </a>

                            <p class="text-xs sm:text-base">Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd text-sm sm:text-base font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-xs sm:text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>


                    <div class="max-w-60 border rounded-md overflow-hidden p-2 sm:p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="../assets/Images/products/laptop/3.jpg" alt="product1"
                                    class="object-cover origin-center aspect-square">
                            </a>
                            <div
                                class="bg-white w-full py-2 absolute bottom-0 flex justify-around items-center translate-y-2 invisible opacity-0 transition-all ease-in-out duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">

                                <button id="addToCart" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M80 176a16 16 0 0 0-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 0 0-16-16zm80 0v-32a96 96 0 0 1 96-96h0a96 96 0 0 1 96 96v32">
                                        </path>
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32" d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
                                        </path>
                                    </svg>
                                </button>

                                <button id="quickView" class="product-card-icons">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 576 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                        </path>
                                    </svg>
                                </button>

                                <button id="addToWishlist" class="product-card-icons">

                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                        </path>
                                    </svg>
                                </button>

                            </div>
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-orange-600">
                                <span class="text-skin-inverted text-xs font-bold">-12%</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook Air
                                Retina
                                13.3-Inch
                                Laptop </a>

                            <p class="text-xs sm:text-base">Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd text-sm sm:text-base font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-xs sm:text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>




                </div>



            </div>
        </section>

    </main>
@endsection

@section('singleScript')
    <style>
        .slider-for img {
            height: 500px;
            object-fit: contain;
        }

        .slider-nav img {
            height: 100px;
            object-fit: contain;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tab-btn.active {
            background-color: rgb(1, 61, 196);
            padding: 10px 20px;
            border-radius: 10px;
            color: white;
            transition: 0.5s;
            /* Optional styling for the active tab */
        }
    </style>
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });




        // Select all tab buttons and tab content sections
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        // Add event listener to each button
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove 'active' class from all buttons and all content sections
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));

                // Add 'active' class to the clicked button and its corresponding content
                button.classList.add('active');
                const target = document.getElementById(button.getAttribute('data-target'));
                target.classList.add('active');
            });
        });




        // $(document).ready(function() {
        //     let quantityDisplay = $('#quantity_display');
        //     let quantity = $('#quantity').val() || 1; // Initialize quantity from the display

        //     // Use 'iq' and 'dq' selectors correctly
        //     let iq = $('#iq');
        //     let dq = $('#dq'); // Corrected the selector to '.dq'

        //     // Update the display function
        //     function updateDisplay() {
        //         quantityDisplay.text(quantity); // Update the displayed quantity
        //     }

        //     // Increment quantity
        //     iq.on('click', function() {
        //         quantity += 1; // Correctly increment the quantity
        //         updateDisplay(); // Update the display
        //     });

        //     // Decrement quantity
        //     dq.on('click', function() {
        //         if (quantity !== 1) {
        //             quantity -= 1;
        //         } // Correctly decrement the quantity
        //         updateDisplay(); // Update the display
        //     });

        //     updateDisplay(); // Initial display update
        // });
    </script>
@endsection
