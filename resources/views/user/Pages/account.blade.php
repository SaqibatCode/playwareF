@extends('user.Layout.Layout')
@section('mainContent')
    <main class="mt-11">

        <section class="bg-gray-100 px-4">
            <div class="container mx-auto py-4">
                <p class="text-sm">
                    <a href="#" class="text-skin-secondary">Home</a> / <a href="#"
                        class="text-skin-secondary">Dashboard</a>
                    /
                    <span>Account</span>
                </p>
            </div>
        </section>

        <section class="px-4 flex justify-center items-center py-20">
            <h1 class="text-6xl font-bold">Account</h1>
        </section>

        <section class="px-4 py-12">
            <div class="container mx-auto">

                <div class="text-skin-primary lg:hidden mb-12">
                    <ul>
                        <li
                            class="border-b-0 border hover:cursor-pointer  text-lg font-bold py-4 px-4 bg-skin-secondary text-skin-inverted transition-all duration-300 hover:bg-skin-secondary hover:text-skin-inverted">
                            Account</li>
                        <li
                            class="border-b-0 border hover:cursor-pointer  text-lg font-bold transition-all duration-300 hover:bg-skin-secondary hover:text-skin-inverted">
                            <a href="/orders.html" class="block py-4 px-4">Orders</a>
                        </li>
                        <li
                            class="border-b-0 border hover:cursor-pointer  text-lg font-bold py-4 px-4 transition-all duration-300 hover:bg-skin-secondary hover:text-skin-inverted">
                            Address</li>
                        <li
                            class="border hover:cursor-pointer  text-lg font-bold py-4 px-4 transition-all duration-300 hover:bg-skin-secondary hover:text-skin-inverted">
                            Logout</li>
                    </ul>
                </div>

                <div class="grid grid-cols-4">

                    <div class="text-skin-primary hidden lg:block col-span-1">
                        <ul>
                            <li id="accountBtn"
                                class="border-b-0 border hover:cursor-pointer  text-lg font-bold transition-all duration-300 bg-skin-secondary text-skin-inverted">
                                <span class="block py-4 px-4">Account</span>
                            </li>
                            <li id="orderBtn"
                                class="border-b-0 border hover:cursor-pointer  text-lg font-bold transition-all duration-300 hover:bg-skin-secondary hover:text-skin-inverted">
                                <span class="block py-4 px-4">Orders</span>
                            </li>

                            <li
                                class="border-b-0 border hover:cursor-pointer  text-lg font-bold transition-all duration-300 hover:bg-skin-secondary hover:text-skin-inverted">
                                <a href="{{ route('logoutUser') }}" class="block py-4 px-4">Logout</a>
                            </li>
                        </ul>
                    </div>

                    <div id="account" class="col-span-2 ">
                        <div class="text-skin-primary col-span-4 lg:col-span-3 px-4">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('userUpdateData') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="flex flex-col sm:flex-row justify-between gap-3">
                                    <span class="w-full sm:w-1/2">
                                        <label for="firstname"
                                            class="block text-xs font-semibold text-gray-600 uppercase">Full
                                            Name</label>
                                        <input id="firstname" type="text" name="fullName" placeholder="Ali"
                                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-md"
                                            required value="{{ $user->fullName }}" />
                                        <small style="color:red;">
                                            @error('fullName')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </small>
                                    </span>
                                </div>
                                <label for="number"
                                    class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Number</label>
                                <input id="number" type="number" name="number" placeholder="+92 123 4231499"
                                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-md"
                                    required value="{{ $user->number }}" />
                                <small style="color:red;">
                                    @error('number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>
                                <label for="email"
                                    class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                                <input id="email" type="email" name="email" placeholder="exampl@gmail.com"
                                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-md"
                                    required value="{{ $user->Email }}" />
                                <label for="password"
                                    class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>

                                <input id="password" type="password" name="password" placeholder="**********"
                                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-md" />
                                <label for="dob" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Date
                                    Of
                                    Birth</label>
                                <input id="dob" type="date" name="dob"
                                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-md"
                                    required value="{{ $user->dob }}" />
                                <small style="color:red;">
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </small>
                                <button type="submit"
                                    class="w-full py-3 mt-6 font-medium tracking-widest text-skin-inverted uppercase bg-blue-600 shadow-lg focus:outline-none hover:bg-blue-700 transition-all duration-300 hover:shadow-none rounded-md">
                                    update
                                </button>
                            </form>

                        </div>
                    </div>

                    <div id="order" class="col-span-2 px-4" style="display: none;">
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right">
                                <thead class="text-xs uppercase">
                                    <tr>
                                        <th class="px-6 py-3">
                                            Order Id
                                        </th>
                                        <th class="px-6 py-3">
                                            Product Name
                                        </th>
                                        <th class="px-6 py-3">
                                            Quantity
                                        </th>
                                        <th class="px-6 py-3">
                                            Sold By
                                        </th>
                                        <th class="px-6 py-3">
                                            Amount
                                        </th>
                                        <th class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="">
                                            <th scope="row">
                                                {{ '#' . $order->id }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $order->all_products->productTitle }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $order->quantity }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $order->all_products->users->fullName }}
                                            </td>
                                            <td>
                                                {{ 'Rs.' . $order->total_amount }}
                                            </td>
                                            <td>
                                                <a class="btn-1 w-full">View Order Details</a>
                                                <a class="btn-1 w-full">Pay Amount</a>
                                                <a class="btn-1 w-full">Order Received</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </section>


    </main>
@endsection
@section('singleScript')
    <script>
        $(document).ready(function() {
            function toggleElements(showElement, hideElement, addClassElement, removeClassElement, addClasses,
                removeClasses) {
                $(showElement).show();
                $(hideElement).hide();
                $(removeClassElement).removeClass(removeClasses);
                $(addClassElement).addClass(addClasses);
            }

            $('#orderBtn').on('click', function() {
                toggleElements('#order', '#account', '#orderBtn', '#accountBtn',
                    'bg-skin-secondary text-skin-inverted', 'bg-skin-secondary text-skin-inverted');
            });
            $('#accountBtn').on('click', function() {
                toggleElements('#account', '#order', '#accountBtn', '#orderBtn',
                    'bg-skin-secondary text-skin-inverted', 'bg-skin-secondary text-skin-inverted');
            })
        })
    </script>
@endsection
