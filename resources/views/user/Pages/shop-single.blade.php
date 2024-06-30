@extends('user.Layout.Layout')

@section('mainContent')

<main class="mt-11">

    <!-- BREADCRUMBS -->
    <section class="bg-gray-100 px-4">
        <div class="container mx-auto py-4">
            <p class="text-sm">
                <a href="#" class="text-skin-secondary">Home</a> / <a href="#" class="text-skin-secondary">Shop</a>
                / <a href="#" class="text-skin-secondary">Laptops</a> / <span>Apple
                    MacBook Air Retina 13.3-Inch Laptop</span>
            </p>
        </div>
    </section>

    <section class="px-4">

        <div class="container mx-auto pb-12">

            <!-- PRODUCT NAME HEADER  -->
            <div class="grid grid-cols-1 lg:grid-cols-2 border-b py-4">
                <div>
                    <h2 class="text-skin-primary text-2xl font-bold mb-3">Apple Laptop 500GB - White Color</h2>

                    <ul class="flex text-sm text-gray-600">
                        <li class="pl-0 px-4 border-r">Brand: <a href="" class="text-skin-secondary">Apple</a></li>
                        <li class="px-4 border-r"><a href="">1 Review</a></li>
                        <li class="px-4">SKU: VS75560391239</li>
                    </ul>

                </div>
                <div class="flex gap-4 justify-start lg:justify-end mt-3 lg:mt-0">

                    <a href="#">
                        <svg class="text-2xl text-[#3b5998]" stroke="currentColor" fill="currentColor"
                            stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                            </path>
                        </svg>
                    </a>

                    <a href="#">
                        <svg class="text-2xl text-[#C13584]" stroke="currentColor" fill="currentColor"
                            stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </a>


                    <a href="#">
                        <svg class="text-2xl text-[#0762C8]" stroke="currentColor" fill="currentColor"
                            stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                            </path>
                        </svg>
                    </a>


                </div>
            </div>

            <!-- PRODUCT INFO AND IMAGES -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 py-4">

                <div id="page">
                    <div class="sm:px-6">
                        <div class="column small-11 small-centered">
                            <div class="slider slider-single">
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                                <div class="">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt=""
                                        class="object-contain mx-auto">
                                </div>
                            </div>
                            <div class="slider slider-nav">
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                                <div class="border w-[110px] transition-all duration-300 hover:border-blue-600">
                                    <img src="../assets/Images/products/laptop/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-1">
                    <div class="flex flex-col gap-2 pb-6 border-b">
                        <div class="flex items-center gap-2">
                            <h2 class="text-2xl font-bold text-skin-odd">$425.47</h2> <del
                                class="text-sm">$536.02</del> <span class="text-skin-odd text-sm">(-21%)</span>
                        </div>
                        <div>
                            <p class="text-sm">Status: <span class="text-skin-unique font-bold">In Stock</span></p>
                        </div>
                    </div>
                    <div class="px-4 py-6 border-b">
                        <ul class="flex flex-col gap-2 list-disc text-sm text-gray-600">
                            <li>Unrestrained and portable active stereo speaker</li>
                            <li>Free from the confines of wires and chords</li>
                            <li>20 hours of portable capabilities</li>
                            <li>Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                            <li>3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                        </ul>
                    </div>
                    <div class="py-6 border-b flex flex-col sm:flex-row items-start sm:items-end gap-4 sm:gap-6">
                        <div class="">
                            <span class="text-gray-600 text-sm">Quantity:</span>
                            <div class="flex rounded-md border gap-4 items-center text-base p-1 w-max">
                                <button class="px-2">-</button>
                                <div>1</div>
                                <button class="px-2">+</button>
                            </div>
                        </div>

                        <div class="flex gap-6 items-center">
                            <button class="btn-1 px-12">Add To Cart</button>

                            <button id="addToWishlist"
                                class="text-3xl text-gray-400 transition-all duration-300 hover:text-skin-secondary">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 512 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="py-6 flex flex-col gap-1">
                        <p class="text-sm">Category: <a href="#"
                                class="text-skin-secondary transition-all duration-300 hover:text-skin-primary">Laptops</a>
                        </p>
                        <p class="text-sm">Tags:
                            <a href="#"
                                class="text-gray-500 transition-all duration-300 hover:text-skin-primary">Laptop,</a>
                            <a href="#"
                                class="text-gray-500 transition-all duration-300 hover:text-skin-primary">Retina,</a>
                            <a href="#"
                                class="text-gray-500 transition-all duration-300 hover:text-skin-primary">Wireless</a>
                        </p>
                    </div>
                </div>

            </div>

    </section>

    <section class="px-4">
        <div class="container mx-auto pb-12">



            <div class="mb-4 border-b border-gray-200">
                <ul id="myTabs" class="flex justify-center flex-wrap -mb-px text-sm font-medium text-center"
                    id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button onclick="activeTab('description')" id="description"
                            class="inline-block p-4 border-b-2 rounded-t-lg !text-skin-secondary !border-blue-700 transition-all duration-300"
                            data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Description</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button onclick="activeTab('specification')" id="specification"
                            class="inline-block p-4 border-b-2 rounded-t-lg text-skin-primary border-gray-700 transition-all duration-300 hover:text-skin-secondary hover:border-blue-700"
                            data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard"
                            aria-selected="false">Specification</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button onclick="activeTab('reviews')" id="reviews"
                            class="inline-block p-4 border-b-2 rounded-t-lg text-skin-primary border-gray-700 transition-all duration-300 hover:text-skin-secondary hover:border-blue-700"
                            data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings"
                            aria-selected="false">Reviews</button>
                    </li>
                </ul>
            </div>
            <div id="default-styled-tab-content">
                <div class="hidden p-4 max-h-[500px] overflow-auto" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p class="text-sm">This is some placeholder content the <strong
                            class="font-medium text-skin-secondary">Profile tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the
                        next. The tab JavaScript swaps classes to control the content visibility and styling.
                    </p>
                </div>
                <div class="hidden p-4 max-h-[500px] overflow-auto" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <p class="text-sm">This is some placeholder content the <strong
                            class="font-medium text-skin-secondary">Dashboard tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the
                        next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 max-h-[500px] overflow-auto" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                    <p class="text-sm">This is some placeholder content the <strong
                            class="font-medium text-skin-secondary">Settings tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the
                        next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
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