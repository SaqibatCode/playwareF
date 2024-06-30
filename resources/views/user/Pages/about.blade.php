@extends('user.Layout.Layout')

@section('mainContent')

<main class="mt-11">

    <!-- BREADCRUMBS -->
    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-4">
            <p class="text-sm">
                <a href="#" class="text-skin-secondary">Home</a> / <a href="#" class="">About Us</a>
            </p>
        </div>
    </section>



    <section class="py-20 flex flex-col justify-center items-center">
        <h1 class="text-4xl font-extrabold text-center">About Us</h1>
    </section>


    <section class="container mx-auto px-4 py-12 flex flex-col lg:flex-row gap-8">
        <div class="lg:w-7/12">
            <h3 class="text-xl sm:text-2xl font-bold mb-8">Welcome to Playware</h3>
            <h2 class="text-2xl sm:text-3xl md:text-4xl mb-8">We connect millions of buyers and sellers around the world, empowering people
                &
                creating economic opportunity for all.</h2>
            <p>
                Within our markets, millions of people around the world connect, both online and offline, to make,
                sell
                and buy unique goods. We also offer a wide range of Seller Services and tools that help creative
                entrepreneurs start, manage and scale their businesses. Our mission is to reimagine commerce in ways
                that build a more fulfilling and lasting world, and we’re committed to using the power of business
                to
                strengthen communities and empower people.
            </p>
        </div>
        <div class="lg:w-5/12">
            <img src="./assets/images/banner-images/about-us.jpg" width="500" height="500" alt="about us" class="w-full h-auto">
        </div>
    </section>


</main>

@endsection