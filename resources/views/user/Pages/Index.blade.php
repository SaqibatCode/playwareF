@extends('user.Layout.Layout')
@section('main-content')
    <main class="mt-11">

        <!-- BACK TO TOP BUTTON -->
        <button
            class="fixed z-50 right-5 bottom-5 flex items-center justify-center p-2 rounded-full bg-skin-primary text-skin-inverted w-12 h-12"
            onclick="document.documentElement.scrollTop = 0">
            <svg class="w-6 h-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em"
                width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
                </path>
            </svg>
        </button>



        <!-- SECTION 1 BANNER SLIDER -->

        <section class="">
            <div
                class="relative h-96 bg-[url('{{asset('assets/images/banner-images/bg-slider.jpg')}}')] bg-cover bg-center bg-no-repeat">
                <div class="flex md:hidden absolute left-0 top-0 h-full w-full bg-blue-600/20"></div>

                <!-- Mobile -->
                <div
                    class=" flex md:hidden relative z-10 2xl:container px-4 mx-auto h-full slideitem1 !bg-cover !bg-center !bg-no-repeat">

                    <div class="absolute left-0 top-0 w-full h-full bg-skin-inverted/40"></div>

                    <div class="hidden md:flex h-full justify-center items-center">
                        <button class="arrow-icons">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                </path>
                            </svg>
                        </button>
                    </div>

                    <div class="z-40 relative w-full h-full flex flex-col gap-4 justify-center md:px-28">
                        <h6 class="text-skin-secondary">Special Offer</h6>
                        <h2 class="uppercase text-4xl">Mini Helicopter <br> Drone 4 Channels <br> Sale <span
                                class="text-skin-odd">40% Off</span></h2>
                        <button class="btn-1">Shop
                            Now</button>
                    </div>

                    <div class="hidden md:flex h-full justify-center items-center">
                        <button class="arrow-icons">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                </path>
                            </svg>
                        </button>
                    </div>

                </div>

                <!-- BANNER SLIDER -->
                <div class="hidden md:flex relative z-10 mx-auto h-full">
                    <div class="slider my-slider w-full h-full">
                        <div class="item w-full h-full slideitem1 !bg-cover !bg-center !bg-no-repeat">
                            <div class="w-full h-full flex flex-col gap-4 justify-center md:px-28">
                                <h6 class="text-skin-secondary">Special Offer</h6>
                                <h2 class="uppercase text-4xl">Mini Helicopter <br> Drone 4 Channels <br> Sale <span
                                        class="text-skin-odd">40% Off</span></h2>
                                <button class="btn-1">Shop
                                    Now</button>
                            </div>
                        </div>
                        <div class="item w-full h-full slideitem2 !bg-cover !bg-center !bg-no-repeat">
                            <div class="w-full h-full flex flex-col gap-4 justify-center md:px-28">
                                <h6 class="text-skin-secondary">Special Offer</h6>
                                <h2 class="uppercase text-4xl">Mini Helicopter <br> Drone 4 Channels <br> Sale <span
                                        class="text-skin-odd">40% Off</span></h2>
                                <button class="btn-1">Shop
                                    Now</button>
                            </div>
                        </div>
                        <div class="item w-full h-full bg-cover bg-center bg-no-repeat">
                            <div class="w-full h-full flex flex-col gap-4 justify-center md:px-28">
                                <h6 class="text-skin-secondary">Special Offer</h6>
                                <h2 class="uppercase text-4xl">Mini Helicopter <br> Drone 4 Channels <br> Sale <span
                                        class="text-skin-odd">40% Off</span></h2>
                                <button class="btn-1">Shop
                                    Now</button>
                            </div>
                        </div>
                        <!-- <div class="item">
                                <img
                                    src="https://images.unsplash.com/photo-1443363742879-63e3d75de2f8?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://images.unsplash.com/photo-1446329813274-7c9036bd9a1f?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
                            </div> -->
                    </div>
                </div>

            </div>

            <!-- <div class="relative z-10 2xl:container px-4 mx-auto h-full">
                    <div class="slider">
                        <div class="item">
                            <div class="w-full h-full flex flex-col gap-4 justify-center md:px-28">
                                <h6 class="text-skin-secondary">Special Offer</h6>
                                <h2 class="uppercase text-4xl">Mini Helicopter <br> Drone 4 Channels <br> Sale <span
                                        class="text-skin-odd">40% Off</span></h2>
                                <button class="btn-1">Shop
                                    Now</button>
                            </div>
                        </div>
                        <div class="item">
                            <img
                                src="https://images.unsplash.com/photo-1443363742879-63e3d75de2f8?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
                        </div>
                        <div class="item">
                            <img
                                src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
                        </div>
                        <div class="item">
                            <img
                                src="https://images.unsplash.com/photo-1446329813274-7c9036bd9a1f?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
                        </div>
                    </div>
                </div> -->

        </section>


        <!-- SECTION 2 STORE FEATURES INFO CARDS -->

        <section class="px-4 py-12">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="feature-info-div">
                    <span class="feature-info-icon">

                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32">
                            </path>
                        </svg>
                        <!-- <MdOutlineDeliveryDining /> -->
                    </span>
                    <div>
                        <h3 class="feature-info-heading">Free Delivery</h3>
                        <p>For all orders above $99</p>
                    </div>
                </div>

                <div class="feature-info-div">
                    <span class="feature-info-icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-width="2"
                                d="M20,8 C18.5343681,5.03213345 15.4860999,3 11.9637942,3 C7.01333514,3 3,7.02954545 3,12 M4,16 C5.4656319,18.9678666 8.51390007,21 12.0362058,21 C16.9866649,21 21,16.9704545 21,12 M9,16 L3,16 L3,22 M21,2 L21,8 L15,8">
                            </path>
                        </svg>
                    </span>
                    <div>
                        <h3 class="feature-info-heading">90 Days Return</h3>
                        <p>If goods have problems</p>
                    </div>
                </div>

                <div class="feature-info-div">
                    <span class="feature-info-icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                            </path>
                        </svg> </span>
                    <div>
                        <h3 class="feature-info-heading">Secure Payment</h3>
                        <p>100% secure payment</p>
                    </div>
                </div>

                <div class="feature-info-div">
                    <span class="feature-info-icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M216,76H188V48a20,20,0,0,0-20-20H40A20,20,0,0,0,20,48V176a12,12,0,0,0,19.54,9.33l28.46-23V184a20,20,0,0,0,20,20h92.17l36.29,29.33A12,12,0,0,0,236,224V96A20,20,0,0,0,216,76ZM44,150.87V52H164v80H71.58A12,12,0,0,0,64,134.67Zm168,48-20-16.2a12,12,0,0,0-7.54-2.67H92V156h76a20,20,0,0,0,20-20V100h24Z">
                            </path>
                        </svg> </span>
                    <div>
                        <h3 class="feature-info-heading">24/7 Support</h3>
                        <p>Chat with us if you've any questions</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 3 DEAL PRODUCTS -->

        <section class="px-4 pb-12">
            <div class="container mx-auto">

                <div class="flex flex-col sm:flex-row justify-between sm:items-center py-5 mb-12 border-b">
                    <div class="flex flex-wrap gap-2 items-center mb-3 sm:mb-0">
                        <h5 class="text-lg font-bold mr-2 sm:mr-12">Deals Of The Day</h5>
                        <div class="px-2 py-1 bg-orange-600 rounded-md">
                            <p class="font-bold text-sm sm:text-xl text-skin-inverted">Ends in: <span id="countdown"
                                    class="sm:ml-4">10 : 10 : 13</span> </p>
                        </div>
                    </div>

                    <div class="">
                        <a href="/shop.html" class="underline">View All</a>
                    </div>
                </div>

                <div id="productDiv1"
                    class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-2 place-items-center w-full mx-auto">

                    <!-- <div class="max-w-full flex md:flex-col border rounded-md overflow-hidden p-4">
                            <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                                <a href="/product-page">
                                    <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            </div>
                            <div class="flex flex-col justify-center gap-4">
                                <div class="flex items-center">
                                    <h4 class="text-skin-unique font-bold text-sm sm:text-lg mr-2">$425.47</h4>
                                    <del class="text-gray-400 text-xs sm:text-base mr-2">$425.47</del>
                                </div>

                                <a href="/product-page" class="text-sm text-skin-secondary line-clamp-2">Apple MacBook Air Retina
                                    13.3-Inch
                                    Laptop </a>

                                <span class="text-xs">By: <a href="/vendor" class="text-skin-unique">User1</a></span>

                                <div class="flex flex-col gap-2 sm:flex-row justify-between">
                                    <p class="text-sm">Rating: 4.5</p>
                                    <p class="text-xs text-skin-secondary flex items-center gap-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 512 512" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                                            </path>
                                        </svg>
                                        Verified
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="max-w-60 border rounded-md overflow-hidden p-4">
                            <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                                <a href="/product-page">
                                    <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center">
                                    <h4 class="text-skin-unique font-bold text-sm sm:text-lg mr-2">$425.47</h4>
                                    <del class="text-gray-400 text-xs sm:text-base mr-2">$425.47</del>
                                </div>

                                <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina 13.3-Inch
                                    Laptop </a>

                                <p>Rating: 4.5</p>

                            </div>
                        </div>

                        <div class="max-w-60 border rounded-md overflow-hidden p-4">
                            <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                                <a href="/product-page">
                                    <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center">
                                    <h4 class="text-skin-unique font-bold text-sm sm:text-lg mr-2">$425.47</h4>
                                    <del class="text-gray-400 text-xs sm:text-base mr-2">$425.47</del>
                                </div>

                                <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina 13.3-Inch
                                    Laptop </a>

                                <p>Rating: 4.5</p>

                            </div>
                        </div>

                        <div class="max-w-60 border rounded-md overflow-hidden p-4">
                            <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                                <a href="/product-page">
                                    <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center">
                                    <h4 class="text-skin-unique font-bold text-sm sm:text-lg mr-2">$425.47</h4>
                                    <del class="text-gray-400 text-xs sm:text-base mr-2">$425.47</del>
                                </div>

                                <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina 13.3-Inch
                                    Laptop </a>

                                <p>Rating: 4.5</p>

                            </div>
                        </div>

                        <div class="max-w-60 border rounded-md overflow-hidden p-4">
                            <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                                <a href="/product-page">
                                    <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center">
                                    <h4 class="text-skin-unique font-bold text-sm sm:text-lg mr-2">$425.47</h4>
                                    <del class="text-gray-400 text-xs sm:text-base mr-2">$425.47</del>
                                </div>

                                <a href="/product-page" class="text-xs sm:text-sm text-skin-secondary">Apple MacBook Air Retina
                                    13.3-Inch
                                    Laptop </a>

                                <p>Rating: 4.5</p>

                            </div>
                        </div> -->

                </div>
            </div>
        </section>


        <!-- SECTION 4 TWO COLUMNS & CATEGORIES -->
        <section class="px-4 pb-12 mb-12">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 overflow-hidden md:max-h-[200px] lg:max-h-[250px]">
                    <a href="#"
                        class="w-full h-full bg-yellow-300 border border-gray-300 px-4 py-4 lg:p-10 flex flex-col justify-between banner1 bg-no-repeat bg-cover bg-center">
                        <div>
                            <h3 class="text-2xl mb-2"><span class="font-bold">IQOS 2.4</span> Holder <br> & Charger
                            </h3>
                            <p class="text-lg">Just <span class="text-skin-unique font-bold">$159.99</span></p>
                        </div>
                        <div>
                            <button class="btn-1">Shop Now</button>
                        </div>
                    </a>
                    <a href="#"
                        class="w-full h-full bg-yellow-300 border border-gray-300 px-4 py-4 lg:p-10 flex flex-col justify-between banner2 bg-no-repeat bg-cover bg-center">
                        <!-- <div class="absolute top-0 left-0 h-full w-full bg-white/40"></div> -->
                        <div class="relative z-10">
                            <h3 class="text-2xl mb-2"><span class="font-bold">iPhone X 128GB <br> Retina
                                    Display</span>
                            </h3>
                            <p class="text-lg"><span class="text-red-600 font-bold">25%</span> Off</p>
                        </div>
                        <div class="relative z-10">
                            <button class="btn-1">Shop Now</button>
                        </div>
                    </a>
                </div>
                <div class="my-6">
                    <h3 class="heading-3">Top Categories Of The Month</h3>
                </div>
                <div
                    class="grid gap-8 min-[400px]:grid-cols-2 min-[400px]:gap-8 md:grid-cols-3 md:gap-8 lg:grid-cols-3 lg:gap-8 xl:grid-cols-6 xl:gap-4">
                    <a href="#" class="categories-card">
                        <img src="{{ asset('assets/images/categories/smartphones.jpg') }}" alt="">
                        <p>Smartphones</p>
                    </a>
                    <a href="#" class="categories-card">
                        <img src="{{ asset('assets/images/categories/tablet.jpg') }}" alt="">
                        <p>Tablets</p>
                    </a>
                    <a href="#" class="categories-card">
                        <img src="{{ asset('assets/images/categories/laptops.jpg') }}" alt="">
                        <p>Laptops</p>
                    </a>
                    <a href="#" class="categories-card">
                        <img src="{{ asset('assets/images/categories/accessories.jpg') }}" alt="">
                        <p>Accessories</p>
                    </a>
                    <a href="#" class="categories-card">
                        <img src="{{ asset('assets/images/categories/new-tech.jpg') }}" alt="">
                        <p>New Technology</p>
                    </a>
                    <a href="#" class="categories-card">
                        <img src="{{ asset('assets/images/categories/smartphones.jpg') }}" alt="">
                        <p>Sounds</p>
                    </a>
                </div>
            </div>
        </section>


        <!-- POPULAR SMARTPHONES AND TABLETS -->
        <section class="px-4 pb-12 mb-12">
            <div class="container mx-auto">

                <div class="flex flex-wrap gap-2 justify-between items-center p-4 sm:p-5 mb-8 border-b bg-gray-100">
                    <div class="mb-2 md:mb-0">
                        <h3 class="heading-3">Popular Smartphones & Tablets</h3>
                    </div>
                    <div class="">
                        <ul class="flex flex-wrap gap-x-6">
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">iPhone</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">iPad</a>
                            </li>
                            <li><a href="#"
                                    class="transition-all duration-300 hover:text-skin-secondary">Samsung</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">Sony</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">View
                                    All</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div
                    class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 place-items-center w-max mx-auto">

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-black">
                                <span class="text-skin-inverted text-xs font-bold">Out Of Stock</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- BEST SELLER LAPTOPS & SOUNDS -->
        <section class="px-4 pb-12 mb-12">
            <div class="container mx-auto">

                <div class="flex flex-wrap gap-2 justify-between items-center p-4 sm:p-5 mb-8 border-b bg-gray-100">
                    <div class="mb-2 md:mb-0">
                        <h3 class="heading-3">Best Seller Laptops & Sounds </h3>
                    </div>
                    <div class="">
                        <ul class="flex flex-wrap gap-x-6">
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">iPhone</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">iPad</a>
                            </li>
                            <li><a href="#"
                                    class="transition-all duration-300 hover:text-skin-secondary">Samsung</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">Sony</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">View
                                    All</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div
                    class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 place-items-center w-max mx-auto">

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-black">
                                <span class="text-skin-inverted text-xs font-bold">Out Of Stock</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- TECHNOLOGY TOYS RECOMMENDED FOR YOU -->
        <section class="px-4 pb-12 mb-12">
            <div class="container mx-auto">

                <div class="flex flex-wrap gap-2 justify-between items-center p-4 sm:p-5 mb-8 border-b bg-gray-100">
                    <div class="mb-2 md:mb-0">
                        <h3 class="heading-3">Technology Toys Recommended For You</h3>
                    </div>
                    <div class="">
                        <ul class="flex flex-wrap gap-x-6">
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">iPhone</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">iPad</a>
                            </li>
                            <li><a href="#"
                                    class="transition-all duration-300 hover:text-skin-secondary">Samsung</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">Sony</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">View
                                    All</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div
                    class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 place-items-center w-max mx-auto">

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                            <div class="absolute top-0 right-0 px-3 rounded-md w-max bg-black">
                                <span class="text-skin-inverted text-xs font-bold">Out Of Stock</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-60 border rounded-md overflow-hidden p-4">
                        <div class="group relative flex items-center justify-center max-h-48 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/laptop/3.jpg" alt="product1"
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>

                            <p>Rating: 4.5</p>

                            <div class="flex items-center">
                                <h4 class="text-skin-odd font-bold mr-2">$425.47</h4>
                                <del class="text-gray-400 text-sm mr-2">$425.47</del>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- GOOD PRICE ACCESSORIES -->
        <section class="px-4 pb-12 mb-12">
            <div class="container mx-auto">

                <div class="flex flex-wrap gap-2 justify-between items-center p-4 sm:p-5 mb-8 border-b bg-gray-100">
                    <div class="mb-2 md:mb-0">
                        <h3 class="heading-3">Good Price Accessories</h3>
                    </div>
                    <div class="">
                        <ul class="flex flex-wrap gap-x-6">
                            <li><a href="#"
                                    class="transition-all duration-300 hover:text-skin-secondary">iPhone</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">iPad</a>
                            </li>
                            <li><a href="#"
                                    class="transition-all duration-300 hover:text-skin-secondary">Samsung</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">Sony</a>
                            </li>
                            <li><a href="#" class="transition-all duration-300 hover:text-skin-secondary">View
                                    All</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div
                    class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-4 place-items-center w-full mx-auto">

                    <div class="flex items-center overflow-hidden">
                        <div class="group relative flex items-center justify-center max-h-40 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/desktop/chromebook.jpg" alt="product1"
                                    class="size-32 object-cover origin-center aspect-square">
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
                        </div>
                        <div class="flex flex-wrap flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>
                            <h4 class="font-bold mr-2">$425.47</h4>

                        </div>
                    </div>

                    <div class="flex items-center overflow-hidden">
                        <div class="group relative flex items-center justify-center max-h-40 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/desktop/chromebook.jpg" alt="product1"
                                    class="size-32 object-cover origin-center aspect-square">
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>
                            <h4 class="font-bold mr-2">$425.47</h4>

                        </div>
                    </div>

                    <div class="flex items-center overflow-hidden">
                        <div class="group relative flex items-center justify-center max-h-40 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/desktop/chromebook.jpg" alt="product1"
                                    class="size-32 object-cover origin-center aspect-square">
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>
                            <h4 class="font-bold mr-2">$425.47</h4>

                        </div>
                    </div>

                    <div class="flex items-center overflow-hidden">
                        <div class="group relative flex items-center justify-center max-h-40 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/desktop/chromebook.jpg" alt="product1"
                                    class="size-32 object-cover origin-center aspect-square">
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>
                            <h4 class="font-bold mr-2">$425.47</h4>

                        </div>
                    </div>

                    <div class="flex items-center overflow-hidden">
                        <div class="group relative flex items-center justify-center max-h-40 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/desktop/chromebook.jpg" alt="product1"
                                    class="size-32 object-cover origin-center aspect-square">
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>
                            <h4 class="font-bold mr-2">$425.47</h4>

                        </div>
                    </div>

                    <div class="flex items-center overflow-hidden">
                        <div class="group relative flex items-center justify-center max-h-40 overflow-hidden">
                            <a href="/product-page">
                                <img src="assets/images/products/desktop/chromebook.jpg" alt="product1"
                                    class="size-32 object-cover origin-center aspect-square">
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
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="/product-page" class="text-sm text-skin-secondary">Apple MacBook Air Retina
                                13.3-Inch
                                Laptop </a>
                            <h4 class="font-bold mr-2">$425.47</h4>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection