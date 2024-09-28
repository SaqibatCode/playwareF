@extends('user.Layout.Layout')

@section('mainContent')
    <main class="mt-11">


        <section class="px-4">

            <div class="container mx-auto py-12">
                <div class="grid grid-cols-6 sm:border rounded-xl overflow-hidden">

                    <div class="p-6 bg-skin-fill lg:flex flex-col gap-8 max-lg:hidden">
                        <div class="flex flex-col gap-3">
                            <h3 class="filter-heading">Price</h3>
                            <input class="product-form-inp" placeholder="Lowest" type="number" name="" id=""
                                value="0">
                            <input class="product-form-inp" placeholder="Highest" type="number" name=""
                                id="" value="500">
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
                                            class="tags-checkbox" type="checkbox" name="smartphone" id="smartphone"><span
                                            class="tags-text">Smartphone</span></label></li>
                                <li class=""><label class="tags-check-label group" for="laptop"><input
                                            class="tags-checkbox" type="checkbox" name="laptop" id="laptop"><span
                                            class="tags-text">Laptop</span></label></li>
                                <li class=""><label class="tags-check-label group" for="tv"><input
                                            class="tags-checkbox" type="checkbox" name="tv" id="tv"><span
                                            class="tags-text">TV</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="lg:col-span-5 max-lg:col-span-6 bg-skin-fill">


                        <div
                            class=" p-0 py-4 sm:p-4 border-b sm:border-b-0  sm:border-l flex items-end justify-between gap-4">

                            <div class="flex-1 flex flex-col md:flex-row gap-2 sm:gap-0 justify-between md:items-center">

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

                        <section
                            class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

                            @foreach ($products as $product)
                                <div
                                    class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                                    <a href="{{ route('shop-single', $product->id) }}">
                                        <img src="user_folders/Product_Images/{{ $product->mainImage }}" alt="Product"
                                            class="product_image" />
                                        <div class="px-4 py-3 w-72">
                                            <span
                                                class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand->name }}</span>
                                            <p class="text-lg font-bold text-black truncate block capitalize">
                                                {{ $product->productTitle }}
                                            </p>
                                            <div class="flex items-center">
                                                <p class="text-lg font-semibold text-black cursor-auto my-3">
                                                    Rs.{{ $product->SellPrice }}</p>
                                                <del>
                                                    <p class="text-sm text-gray-600 cursor-auto ml-2">
                                                        Rs.{{ $product->originalPrice }}</p>
                                                </del>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </section>


                    </div>


                </div>
            </div>


        </section>











    </main>

    <style>
        .product_image {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }
    </style>
@endsection
