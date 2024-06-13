@extends('seller.Layout.layout')
@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Add New Package</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Add New Package</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('auth.uploadProduct') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="productTitle">Package Title</label>
                            <input type="text" value="{{ old('productTitle') }}" id="productTitle" name="productTitle"
                                class="form-control" placeholder="Package 1 Flash Deal">
                            {{-- @error('productTitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}

                        </div>






                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="originalPrice">Original Price</label>
                                    <input type="number" id="originalPrice" name="originalPrice" class="form-control"
                                        placeholder="Eg. 1500">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="sellPrice">Sale Price (Leave Empty If Not On Sale)</label>
                                    <input type="number" id="sellPrice" name="sellPrice" class="form-control"
                                        placeholder="Eg. 1200">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="packageProductsDiv" class="col-12">
                                {{-- <div class='row' id="row1">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="productTitle1">Select Product Title 1:</label>
                                            <select name="productTitle1" class="form-control" id="productTitle1">
                                                <option value="0" selected>Select Your Product</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="product1">Select Product 1:</label>
                                            <select name="product1" class="form-control" id="product1">
                                                <option value="0" selected>Select Your Product</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                                <div id="packageProductrow1" class='row'>
                                    <div class="col-12">
                                        <h5>Product 1</h5>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="packageProductName1">Enter Name</label>
                                            <input type="text" id="packageProductName1" name="packageProductName1"
                                                class="form-control" placeholder="Product Title">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="packageProductCategory1">Product Category</label>
                                            <select id="packageProductCategory1" name="packageProductCategory1"
                                                class="form-control">
                                                <option value="0">Please Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="packageProductUsedOrNew1">Used Or New?</label>
                                            <select id="packageProductUsedOrNew1" name="packageProductUsedOrNew1"
                                                class="form-control">
                                                <option value="0">Please Select</option>
                                                <option value="1">Used</option>
                                                <option value="2">New</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <button type="button" class="btn btn-primary mt-2" id="addMoreBtn">Add More Products
                                </button>
                            </div>
                            <div class="col-12 mb-4">
                                <p>Can't find your product? <a href="{{ route('seller.getNewPackage') }}">create product</a>
                                </p>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="productDescription">Package Description</label>
                            @error('productDescription')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <textarea name="productDescription" value="{{ old('productDescription') }}" id="productDescription" class="form-control"
                                style="height: 400px;" placeholder="Enter Your Product Description, For A+ Content Just Paste HTML Content Here.">{{ old('productDescription') }}</textarea>
                            <p>You Can Use This Editor For Your <a href="#">A+ Content.</a></p>
                        </div>

                        {{--

                            <div class="row">
                                <div class="col-2">
                                    <label for="mainImage"
                                        class="container p-0 bg-white rounded flex-column d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/media/default.webp') }}" alt="Error"
                                            class="img-fluid">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="mainImage" id="mainImage">
                                            <label class="custom-file-label" for="mainImage">Choose file</label>
                                        </div>
                                        @error('mainImage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label for="firstImage"
                                        class="container p-0 bg-white rounded flex-column d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/media/default.webp') }}" alt="Error"
                                            class="img-fluid">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="firstImage" id="firstImage">
                                            <label class="custom-file-label" for="firstImage">Choose file</label>
                                        </div>
                                        @error('firstImage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label for="secondImage"
                                        class="container p-0 bg-white rounded flex-column d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/media/default.webp') }}" alt="Error"
                                            class="img-fluid">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="secondImage"
                                                id="secondImage">
                                            <label class="custom-file-label" for="secondImage">Choose file</label>
                                        </div>
                                        @error('secondImage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label for="thirdImage"
                                        class="container p-0 bg-white rounded flex-column d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/media/default.webp') }}" alt="Error"
                                            class="img-fluid">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="thirdImage"
                                                id="thirdImage">
                                            <label class="custom-file-label" for="thirdImage">Choose file</label>
                                        </div>
                                        @error('thirdImage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label for="fourthImage"
                                        class="container p-0 bg-white rounded flex-column d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/media/default.webp') }}" alt="Error"
                                            class="img-fluid">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="fourthImage"
                                                id="fourthImage">
                                            <label class="custom-file-label" for="fourthImage">Choose file</label>
                                        </div>
                                        @error('fourthImage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label for="fifthImage"
                                        class="container p-0 bg-white rounded flex-column d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/media/default.webp') }}" alt="Error"
                                            class="img-fluid">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="fifthImage"
                                                id="fifthImage">
                                            <label class="custom-file-label" for="fifthImage">Choose file</label>
                                        </div>
                                        @error('fifthImage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>

                            </div> --}}

                        <button class="btn btn-primary mt-3 w-100" id="uploadProduct">Upload Product</button>
                    </form>
                </div>
                <!-- end card-body-->
            </div>
            <!-- end row-->




        </div> <!-- container-fluid -->
    </div>
@endsection
@section('additionScript')
    <script>
        // let images = document.querySelectorAll('.custom-file-input');
        // images.forEach(input => {
        //     input.onchange = function() {
        //         let container = input.parentElement.parentElement;
        //         let img = container.querySelector('img');
        //         let label = container.querySelector('label');
        //         if (label) {
        //             // label.style.display = 'none';
        //         }
        //         img.src = window.URL.createObjectURL(input.files[0]);
        //     };
        // });



        let packageProducts = 2;

        document.getElementById('addMoreBtn').addEventListener('click', function() {

            if (packageProducts <= 15) {

                document.getElementById('packageProductsDiv').innerHTML += `


                <div id="packageProductrow${packageProducts}" class='row'>
                                    <div class="col-12">
                                        <h5>Product ${packageProducts}</h5>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="packageProductName${packageProducts}">Enter Name</label>
                                            <input type="text" id="packageProductName${packageProducts}" name="packageProductName${packageProducts}"
                                                class="form-control" placeholder="Product Title">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="packageProductCategory${packageProducts}">Product Category</label>
                                            <select id="packageProductCategory${packageProducts}" name="packageProductCategory${packageProducts}"
                                                class="form-control">
                                                <option value="0">Please Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="packageProductUsedOrNew${packageProducts}">Used Or New?</label>
                                            <select id="packageProductUsedOrNew${packageProducts}" name="packageProductUsedOrNew${packageProducts}"
                                                class="form-control">
                                                <option value="0">Please Select</option>
                                                <option value="1">Used</option>
                                                <option value="2">New</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3 d-flex align-items-center">
                                        <button type="button" class="btn btn-danger" id="removeProduct${packageProducts}" onclick="removeProduct(${packageProducts})" style="margin-top: 10px;">Remove</button>
                                    </div>
                                </div>
        `

                packageProducts++
            } else {
                return alert('Maximum Product Limit Reached For Package')
            }
        })

        const removeProduct = (id) => {


            let productRow = document.getElementById(`packageProductrow${id}`)
            productRow.parentNode.removeChild(productRow)

            let allRows = Array.from(document.getElementById('packageProductsDiv').children);

            allRows.forEach((e, i) => {
                e.id = `packageProductrow${i + 1}`;

                let heading = e.querySelector('.col-12 h5');
                heading.innerText = `Product ${i+1}`;


                let label = e.querySelectorAll('.col-3 .form-group label');
                let input = e.querySelector('.col-3 .form-group input');
                let select = e.querySelectorAll('.col-3 .form-group select');
                let button = e.querySelector('.align-items-center button');

                if (i > 0) {
                    button.id = `removeProduct${i+1}`;
                    button.setAttribute('onclick', `removeProduct(${i+1})`)
                }


                input.id = `packageProductName${i+1}`
                input.name = `packageProductName${i+1}`

                allLabels = Array.from(label);
                allSelects = Array.from(select);


                allSelects[0].id = `packageProductCategory${i+1}`
                allSelects[0].name = `packageProductCategory${i+1}`

                allSelects[1].id = `packageProductUsedOrNew${i+1}`
                allSelects[1].name = `packageProductUsedOrNew${i+1}`



                allLabels.forEach((labelElement, labelIndex) => {

                    let forAttr = labelElement.getAttribute('for');


                    if (labelIndex == 0) {
                        labelElement.setAttribute('for', `packageProductName${i+1}`);
                    }
                    if (labelIndex == 1) {
                        labelElement.setAttribute('for', `packageProductCategory${i+1}`);
                    }
                    if (labelIndex == 2) {
                        labelElement.setAttribute('for', `packageProductUsedOrNew${i+1}`);
                    }

                })
            })





            packageProducts--
        }
    </script>
@endsection
