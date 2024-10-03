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

                    <div id="order" class="col-span-2 px-4">
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right">
                                <thead class="text-xs uppercase">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Order Id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Product Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Quantity
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Sold By
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Amount
                                        </th>
                                        <th scope="col" class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->all_products as $order)
                                        <tr class="">
                                            <th scope="row">
                                               {{  }}
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td>
                                                View ORder Details
                                                Pay Amount
                                                Order Received
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
