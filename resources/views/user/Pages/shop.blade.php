@extends('user.Layout.Layout')

@section('mainContent')

<main class="mt-11">


    <section class="px-4">

        <div class="container mx-auto py-12">

            <div class="grid grid-cols-6 sm:border rounded-xl overflow-hidden">

                <div class="p-6 bg-skin-fill lg:flex flex-col gap-8 max-lg:hidden">
                    <div class="flex flex-col gap-3">
                        <h3 class="filter-heading">Price</h3>

                        <!-- <div class="relative mb-6">
                            <input id="labels-range-input" type="range" value="0" min="100" max="1500"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <span class="text-sm text-skin-primary absolute start-0 -bottom-6">Rs100</span>
                            <span class="text-sm text-skin-primary absolute end-0 -bottom-6">Rs1500</span>
                        </div> -->


                        <input class="product-form-inp" placeholder="Lowest" type="number" name="" id="" value="0">
                        <input class="product-form-inp" placeholder="Highest" type="number" name="" id=""
                            value="500">

                        <button
                            class="mt-3 rounded-md w-full py-1 text-sm border border-blue-700 font-bold bg-white text-skin-primary hover:border-blue-700 hover:bg-skin-secondary hover:text-skin-inverted transition-all duration-300">
                            Filter</button>
                    </div>

                    <div class="flex flex-col gap-3">
                        <h3 class="filter-heading">Color</h3>

                        <ul class="flex flex-col gap-2">
                            <li class="color-li group"><span class="color-circle bg-white"></span><span
                                    class="color-text">White</span></li>
                            <li class="color-li group"><span class="color-circle bg-black"></span><span
                                    class="color-text">Black</span></li>
                            <li class="color-li group"><span class="color-circle bg-green-600"></span><span
                                    class="color-text">Green</span></li>
                            <li class="color-li group"><span class="color-circle bg-red-600"></span><span
                                    class="color-text">Red</span></li>
                            <li class="color-li group"><span class="color-circle bg-yellow-400"></span><span
                                    class="color-text">Yellow</span></li>
                        </ul>

                    </div>


                    <div class="flex flex-col gap-3">
                        <h3 class="filter-heading">Size</h3>

                        <ul class="flex flex-col gap-2">
                            <li class=""><label class="flex items-center color-li group" for="big"><input
                                        class="filter-checkbox" type="checkbox" name="big" id="big"><span
                                        class="color-text">Big</span></label></li>
                            <li class=""><label class="flex items-center color-li group" for="medium"><input
                                        class="filter-checkbox" type="checkbox" name="medium" id="medium"><span
                                        class="color-text">Medium</span></label></li>
                            <li class=""><label class="flex items-center color-li group" for="small"><input
                                        class="filter-checkbox" type="checkbox" name="small" id="small"><span
                                        class="color-text">Small</span></label></li>
                        </ul>

                    </div>


                    <div class="flex flex-col gap-3">
                        <h3 class="filter-heading">Tags</h3>

                        <ul class="flex flex-wrap gap-2 w-full">
                            <li class=""><label class="tags-check-label group" for="smartphone"><input
                                        class="tags-checkbox" type="checkbox" name="smartphone"
                                        id="smartphone"><span class="tags-text">Smartphone</span></label></li>
                            <li class=""><label class="tags-check-label group" for="laptop"><input
                                        class="tags-checkbox" type="checkbox" name="laptop" id="laptop"><span
                                        class="tags-text">Laptop</span></label></li>
                            <li class=""><label class="tags-check-label group" for="tv"><input class="tags-checkbox"
                                        type="checkbox" name="tv" id="tv"><span class="tags-text">TV</span></label>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="lg:col-span-5 max-lg:col-span-6 bg-skin-fill">


                    <div
                        class=" p-0 py-4 sm:p-4 border-b sm:border-b-0  sm:border-l flex items-end justify-between gap-4">

                        <div
                            class="flex-1 flex flex-col md:flex-row gap-2 sm:gap-0 justify-between md:items-center">

                            <p class="text-xs sm:text-sm text-skin-primary">Showing 1–15 of 47 results</p>

                            <select
                                class="text-xs sm:text-sm w-max border rounded-md py-1 focus:ring-0 focus:outline-none"
                                name="" id="">
                                <option value="default">Default Sorting</option>
                                <option value="popular">Sort By Popularity</option>
                                <option value="latest">Sort By Latest</option>
                                <option value="low-to-high">Sort By Price: Low To High</option>
                                <option value="high-to-low">Sort By Price: High To Low</option>
                            </select>
                        </div>

                        <button
                            class="lg:hidden rounded-md w-max py-1 px-4 sm:px-8 text-sm border border-blue-700 font-bold bg-white text-skin-primary  hover:bg-skin-secondary hover:text-skin-inverted duration-300"
                            type="button" data-drawer-target="drawer-right-example"
                            data-drawer-show="drawer-right-example" data-drawer-placement="right"
                            aria-controls="drawer-right-example">
                            < Filter</button>

                    </div>

                    <div id="shopProducts"
                        class="py-4 sm:p-4 grid place-items-center grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-4 sm:border sm:border-b-0 sm:border-r-0">


                        <!-- MAPPED FROM script mapProduct.js -->

                        <!-- <div class="max-w-60 border rounded-md overflow-hidden p-2 sm:p-4">
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
                                                stroke-width="32"
                                                d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
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
                                <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook
                                    Air
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
                                                stroke-width="32"
                                                d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
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
                                <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook
                                    Air
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
                                                stroke-width="32"
                                                d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
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
                                <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook
                                    Air
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
                                                stroke-width="32"
                                                d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
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
                                <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook
                                    Air
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
                                                stroke-width="32"
                                                d="M160 224v16a96 96 0 0 0 96 96h0a96 96 0 0 0 96-96v-16">
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
                                <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook
                                    Air
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

-->


                    </div>


                </div>


            </div>

        </div>


    </section>










    <!-- drawer component -->
    <div id="drawer-right-example"
        class="fixed top-0 right-0 z-[60] h-screen p-4 overflow-y-auto transition-transform duration-300 translate-x-full bg-white w-80 border border-black"
        tabindex="-1" aria-labelledby="drawer-right-label">

        <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-skin-inverted">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        <div class="p-6 bg-skin-fill flex flex-col gap-8">
            <div class="flex flex-col gap-3">
                <h3 class="filter-heading">Price</h3>

                <input class="product-form-inp" type="number" name="" id="" value="0">
                <input class="product-form-inp" type="number" name="" id="" value="500">

                <button
                    class="mt-3 rounded-md w-full py-1 text-sm border border-blue-700 font-bold text-skin-secondary hover:bg-skin-secondary hover:text-skin-inverted duration-300">
                    Filter</button>
            </div>

            <div class="flex flex-col gap-3">
                <h3 class="filter-heading">Color</h3>

                <ul class="flex flex-col gap-2">
                    <li class="color-li group"><span class="color-circle bg-white"></span><span
                            class="color-text">White</span></li>
                    <li class="color-li group"><span class="color-circle bg-black"></span><span
                            class="color-text">Black</span></li>
                    <li class="color-li group"><span class="color-circle bg-green-600"></span><span
                            class="color-text">Green</span></li>
                    <li class="color-li group"><span class="color-circle bg-red-600"></span><span
                            class="color-text">Red</span></li>
                    <li class="color-li group"><span class="color-circle bg-yellow-400"></span><span
                            class="color-text">Yellow</span></li>
                </ul>

            </div>


            <div class="flex flex-col gap-3">
                <h3 class="filter-heading">Size</h3>

                <ul class="flex flex-col gap-2">
                    <li class=""><label class="flex items-center color-li group" for="big1"><input
                                class="filter-checkbox" type="checkbox" name="big" id="big1"><span
                                class="color-text">Big</span></label></li>
                    <li class=""><label class="flex items-center color-li group" for="medium1"><input
                                class="filter-checkbox" type="checkbox" name="medium" id="medium1"><span
                                class="color-text">Medium</span></label></li>
                    <li class=""><label class="flex items-center color-li group" for="small1"><input
                                class="filter-checkbox" type="checkbox" name="small" id="small1"><span
                                class="color-text">Small</span></label></li>
                </ul>

            </div>


            <div class="flex flex-col gap-3">
                <h3 class="filter-heading">Tags</h3>

                <ul class="flex flex-wrap gap-2 w-full">
                    <li class="">
                        <label class="tags-check-label group" for="smartphone1">
                            <input class="tags-checkbox" type="checkbox" name="smartphone" id="smartphone1">
                            <span class="tags-text">Smartphone</span>
                        </label>
                    </li>
                    <li class="">
                        <label class="tags-check-label group" for="laptop1">
                            <input class="tags-checkbox" type="checkbox" name="laptop" id="laptop1">
                            <span class="tags-text">Laptop</span>
                        </label>
                    </li>
                    <li class="">
                        <label class="tags-check-label group" for="tv">
                            <input class="tags-checkbox" type="checkbox" name="tv" id="tv">
                            <span class="tags-text">TV</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>



    </div>

</main>

@endsection