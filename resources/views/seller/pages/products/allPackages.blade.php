@extends('seller.Layout.layout')
@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">All Products</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">All Products</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Products</h4>
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th># of Products</th>
                                        <th>Date Created</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @foreach ($packages as $package)
                                    
                                        <tr>
                                            <td><img src='{{ asset('user_folders/Package_images/') . '/' . $package->mainImage }}'
                                                    style='width: 100px;'></td>
                                            <td style="vertical-align: middle">{{ $package->title }}</td>
                                            <td style="vertical-align: middle">{{ $package->quantity }}</td>
                                            <td style="vertical-align: middle">
                                               ${{ $package->SellPrice ?? $package->originalPrice }}</td>
                                            <td style="vertical-align: middle">{{$package->packageProducts->count()}} Products</td>
                                            <td style="vertical-align: middle">{{ $package->created_at }}</td>
                                            <td style="vertical-align: middle">
                                                {{ $package->approved == true ? 'Approved' : 'Un-Approved' }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->




        </div> <!-- container-fluid -->
    </div>
@endsection
