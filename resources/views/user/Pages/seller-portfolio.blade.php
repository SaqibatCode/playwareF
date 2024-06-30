@extends('user.Layout.Layout')

@section('mainContent')

<main class="mt-11">




    <section class="py-20 flex flex-col justify-center items-center">
        <div class="rounded w-40 h-40 overflow-hidden mb-6">
            <img src="./assets/images/Image/pngwing.com.png" alt="" class="w-full h-full">
        </div>
        <h1 class="text-4xl font-extrabold text-center mb-4">Mister Seller 123</h1>
        <h3 class="text-xl font-bold text-center text-purple-950">Verified Shopkeeper</h3>
        <h3 class="text-xl font-bold text-center">Joined at: 20-04-2024</h3>
    </section>


    <section class="container mx-auto py-12 px-4 sm:px-0">
        <h1 class="text-4xl font-bold text-center mb-12">All Products</h1>
        <div id="sellerProductsDiv"
            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-2 sm:gap-4 place-items-center w-full mx-auto">

            <!-- PRDOCUTS MAPPED FROM sellerPageProducts.js -->

        </div>


    </section>



</main>



@endsection