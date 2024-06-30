@extends('user.Layout.Layout')

@section('mainContent')


<main class="mt-11">


    <section class="bg-skin-fill-unique px-24 max-xl:px-8 max-lg:px-0 max-lg:py-10 py-10">


        <div class="bg-skin-fill p-8 border rounded-xl">
            <h2 class="text-skin-inverted text-3xl font-bold text-center mb-8">Thank you! Your order has been
                received.
            </h2>

            <div class="grid grid-cols-1 lg:gap-0 md:grid-cols-2 lg:grid-cols-4">

                <div class="flex flex-col items-center gap-2 max-lg:border-b md:border-r p-4">
                    <p>Order Number:</p> <span>2831</span>
                </div>

                <div class="flex flex-col items-center gap-2 max-lg:border-b lg:border-r p-4">
                    <p>Date:</p> <span>November 15, 2023</span>
                </div>


                <div class="flex flex-col items-center gap-2 max-md:border-b md:border-r p-4">
                    <p>Payment Method:</p> <span>Direct Bank Transfer</span>
                </div>

                <div class="flex flex-col items-center gap-2 p-4">
                    <p>Total:</p> <span>$619.00</span>
                </div>

            </div>



            <div class="flex flex-col items-center mt-14">
                <div class="!max-w-screen-sm w-full">
                    <h3 class="text-2xl font-semibold mb-6">Order Details</h3>




                    <div>
                        <div class="flex gap-6 justify-between items-center border-b py-4">
                            <p class="uppercase">Product</p>
                            <p class="uppercase">total</p>
                        </div>
                        <div class="border-b flex flex-col gap-5 py-4">
                            <div class="flex gap-6 justify-between items-center">
                                <p class="text-sm">Apple Iphone 15 Pro Max × 1</p>
                                <p class="text-skin-inverted text-sm font-bold">$350.00</p>
                            </div>
                            <div class="flex gap-6 justify-between items-center">
                                <p class="text-sm">RTX 4080 16GB × 1</p>
                                <p class="text-skin-inverted text-sm font-bold">$99.00</p>
                            </div>
                            <div class="flex gap-6 justify-between items-center">
                                <p class="text-sm">Core I5-12700 × 1</p>
                                <p class="text-skin-inverted text-sm font-bold">$140.00</p>
                            </div>
                        </div>
                        <div class="flex gap-6 justify-between items-center border-b py-4">
                            <p class="font-bold text-skin-inverted">Subtotal:</p>
                            <p class="font-bold text-skin-inverted">$589.99</p>
                        </div>
                        <div class="flex gap-6 justify-between items-center border-b py-4">
                            <p class="font-bold text-skin-inverted">Shipping:</p>
                            <p class="font-bold text-skin-inverted">$30.00 <span class="text-xs font-normal">via
                                    Flat Rate</span></p>
                        </div>
                        <div class="flex gap-6 justify-between items-center border-b py-4">
                            <p class="font-bold text-xl text-skin-inverted">Total:</p>
                            <p class="font-bold text-xl text-skin-muted">$619.00</p>
                        </div>
                    </div>


                </div>
            </div>

        </div>


    </section>


</main>
@endsection