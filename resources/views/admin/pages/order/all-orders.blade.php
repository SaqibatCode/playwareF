@extends('admin.Layout.layout')
@section('main-content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{ $title }}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <form action="#">
                <div class="row">
                    @if (auth()->user()->accountType === 'Admin')
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="form-label">Select Vendor</label>
                                <select name="vendors" id="vendor" class="form-control">
                                    <option value="">Select Vendor</option>
                                    <option value="">Vendor 1</option>
                                    <option value="">Vendor 2</option>
                                    <option value="">Vendor 3</option>
                                </select>
                            </div>
                            +
                        </div>
                    @endif
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Date From</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Date To</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order Date</th>
                                            <th>Products</th>
                                            <th>Vendor Name</th>
                                            <th>Order Price</th>
                                            <th>Order Status</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>3-12-2019</td>
                                            <td>Intel Core I7</td>
                                            <td>Bashir Store</td>
                                            <td>Rs. 45000</td>
                                            <td>In Progress</td>
                                            <td><a href="#" class="btn btn-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>3-12-2019</td>
                                            <td>Intel Core I7</td>
                                            <td>Bashir Store</td>
                                            <td>Rs. 45000</td>
                                            <td>In Progress</td>
                                            <td><a href="#" class="btn btn-primary">View</a></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td>3-12-2019</td>
                                            <td>Intel Core I7</td>
                                            <td>Bashir Store</td>
                                            <td>Rs. 45000</td>
                                            <td>In Progress</td>
                                            <td><a href="#" class="btn btn-primary">View</a></td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- end card-body-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
