@extends('seller.Layout.layout')
@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Add New Products</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item ">All Products</li>
                                <li class="breadcrumb-item active">Add New Product</li>
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





                        <div class="row">
                            <div class="col-6" id="selectProducttype">
                                <div class="form-group">
                                    <label for="ProductType">Product Type</label>
                                    <select name="ProductType" class="form-control" id="ProductType">
                                        <option value="0" selected>Select Your Product Type</option>
                                        <option value="1">Sell A Used Product</option>
                                        <option value="2">Sell a New Product</option>
                                        {{-- <option value="3">Sell Package of products</option> --}}
                                        <option value="4">Complete PCs</option>
                                        <option value="5">Laptops</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="productTitle">Product Title</label>
                                    <input type="text" value="{{ old('productTitle') }}" id="productTitle"
                                        name="productTitle" class="form-control"
                                        placeholder="Brand + Product Type + Color + Material Eg. Adidas T20 Shoes red leather">
                                    @error('productTitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                        </div>




                        <div class="row" id="productTypeData">

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="productCategory">Product Category</label>
                                    <select name="productCategory" class="form-control" id="productCategory">
                                        <option value="" selected>Select Category</option>
                                        @foreach ($categories as $category)
                                            <x-categories-select :category="$category" />
                                        @endforeach
                                    </select>
                                    @error('productCategory')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="brandName">Brand Name</label>
                                    <select name="brandName" class="form-control" id="brandName">
                                        <option value="" selected>Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>

                                    <div class="custom-control mt-2 custom-checkbox checkbox-primary">
                                        <input type="checkbox" name="thisBrandDoesNotHaveProduct"
                                            class="custom-control-input"
                                            {{ old('thisBrandDoesNotHaveProduct') == 'on' ? 'checked' : '' }}
                                            id="checkbox-signin">
                                        <label class="custom-control-label" for="checkbox-signin">This Product Does Not Have
                                            Brand
                                            Name.</label>
                                        @error('brandName')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-4" id="selectProductYear">
                                <div class="form-group">
                                    <label for="yearOfProduct">Year-Make of Product</label>

                                    <select name="yearOfProduct" class="form-control" id="yearOfProduct">
                                        <option value="0" selected>Select Year/Make of Your Product</option>

                                    </select>
                                </div>



                            </div>


                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="warranty">Check warranty</label>
                                    <select name="warranty" id="warranty" class="form-control">
                                        <option value="" selected>Please Select Warranty</option>

                                    </select>
                                    @error('warranty')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4 d-none" id="repairedProductDiv">

                            </div>

                            <div class="col-4" id="reasonForSellingDiv">
                                <div class="form-group">
                                    <label for="reason">Reason for Selling (Optional)</label>
                                    <input type="text" class="form-control" name="reason" id="reasonForSelling">
                                </div>
                            </div>

                        </div>

                        <div id="explainRepairingDiv" class="d-none">

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="productQuantity">Product Quantity</label>
                                    <input type="number" id="productQuantity" value="{{ old('productQuantity') }}"
                                        name="productQuantity" class="form-control" placeholder="Eg. 50">
                                    @error('productQuantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="productSku">Product SKU</label>
                                    <input type="text" id="productSku" value="{{ old('productSku') }}"
                                        name="productSku" class="form-control"
                                        placeholder="Eg. Seller123, Product123, For Your Convineiece After Order">
                                    @error('productSku')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
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
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Manufacturer">Manufacturer</label>
                                    <input type="text" id="Manufacturer" name="Manufacturer" class="form-control"
                                        placeholder="Eg. Adidas" value="{{ old('Manufacturer') }}">
                                    @error('Manufacturer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="custom-control mt-2 custom-checkbox checkbox-primary">
                                        <input type="checkbox"
                                            {{ old('thisProductHaveVariations') == 'on' ? 'checked' : '' }}
                                            name="thisProductHaveVariations" class="custom-control-input"
                                            id="VariationCheckBox">
                                        <label class="custom-control-label" for="VariationCheckBox">This Product Have
                                            Variations? (Eg.
                                            Color, Size, Material)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="CountryOfOrigin">Country of Origin</label>
                                    <input type="text" id="CountryOfOrigin" value="{{ old('CountryOfOrigin') }}"
                                        name="CountryOfOrigin" class="form-control"
                                        placeholder="Eg. Manufacture In Pakistan, Turkey, UAE">
                                    @error('CountryOfOrigin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row" id="getVariations">
                            @php
                                $i = 0;
                            @endphp
                            @while (old('Price' . $i))
                                <div class='container-fluid row'>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="ColorVariation">Enter Color</label>
                                            <input type="text" id="ColorVariation"
                                                name="ColorVariation{{ $i }}" class="form-control"
                                                value="{{ old('ColorVariation' . $i) }}"
                                                placeholder="Eg. Red, Blue, Green">
                                        </div>

                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-end">
                                        <div class="form-group">
                                            <label for="SizeVariation">Enter Size</label>
                                            <input type="text" id="SizeVariation"
                                                name="SizeVariation{{ $i }}" class="form-control"
                                                value="{{ old('SizeVariation' . $i) }}"
                                                placeholder="Eg. Small, Medium, Large">
                                        </div>
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-end">
                                        <div class="form-group">
                                            <label for="MaterialVariation">Material</label>
                                            <input type="text" id="MaterialVariation"
                                                name="MaterialVariation{{ $i }}" class="form-control"
                                                value="{{ old('MaterialVariation' . $i) }}"
                                                placeholder="Eg. Plastic, Silicone, Metal">
                                        </div>
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-end">
                                        <div class="form-group">
                                            <label for="Style">Style</label>
                                            <input type="text" id="Style" name="Style{{ $i }}"
                                                class="form-control" value="{{ old('Style' . $i) }}"
                                                placeholder="Eg. Red, Blue, Green">
                                        </div>
                                    </div>
                                    <div class="col-1 d-flex flex-column justify-content-end">
                                        <div class="form-group">
                                            <label for="Quanatity">Quanatity</label>
                                            <input type="text" value="{{ old('Quanatity' . $i) }}" id="Quanatity"
                                                name="Quanatity{{ $i }}" class="form-control"
                                                placeholder="Eg. 10, 20, 30">
                                        </div>
                                    </div>
                                    <div class="col-1 d-flex flex-column justify-content-end">
                                        <div class="form-group">
                                            <label for="Price">Price</label>
                                            <input type="text" id="Price" name="Price{{ $i }}"
                                                class="form-control" value="{{ old('Price' . $i) }}"
                                                placeholder="Eg. 10, 20, 30">
                                        </div>
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-end">
                                        <div class="form-group">
                                            <label>Choose Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    name='variationImage{{ $i }}'
                                                    value="{{ old('variationImage' . $i) }}" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $i++;
                                @endphp
                            @endwhile
                        </div>

                        <div class='contianer-fluid' id="getVariationDetails"></div>

                        <div class="form-group" id="aboutThisItemContainer">
                            <label for="AboutThisItem">About this item</label>
                            <input type="text" id="AboutThisItem" class="form-control AboutThisItem"
                                placeholder="About This Item">
                            <span class="btn btn-primary mt-2" id="addMoreBtn">Add More</span>
                            <input type="hidden" id="aboutThisItemhidden" name="AboutThisitem">
                            @error('AboutThisitem')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (old('AboutThisitem'))
                                @php
                                    $AboutThisItem = json_decode(old('AboutThisitem'));
                                @endphp

                                @foreach ($AboutThisItem as $data)
                                    <input type="text" id="AboutThisItem" class="form-control mt-2 AboutThisItem"
                                        placeholder="About This Item" value="{{ $data }}">
                                @endforeach
                            @endif
                        </div>



                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            @error('productDescription')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <textarea name="productDescription" value="{{ old('productDescription') }}" id="productDescription"
                                class="form-control" style="height: 400px;"
                                placeholder="Enter Your Product Description, For A+ Content Just Paste HTML Content Here.">{{ old('productDescription') }}</textarea>
                            <p>You Can Use This Editor For Your <a href="#">A+ Content.</a></p>
                        </div>



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
                                        <input type="file" class="custom-file-input" name="firstImage"
                                            id="firstImage">
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

                        </div>

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
        let images = document.querySelectorAll('.custom-file-input');
        images.forEach(input => {
            input.onchange = function() {
                let container = input.parentElement.parentElement;
                let img = container.querySelector('img');
                let label = container.querySelector('label');
                if (label) {
                    // label.style.display = 'none';
                }
                img.src = window.URL.createObjectURL(input.files[0]);
            };
        });






        let Container = document.querySelector('#aboutThisItemContainer');
        let addMoreBtn = document.querySelector('#addMoreBtn');
        let isMoreThanSeven = 1; // You forgot to declare this variable with `let`

        function isMoreThanSevenFunc() {
            let AboutThisItem = document.querySelectorAll('.AboutThisItem');

            if (AboutThisItem.length >= 7) { // Changed the condition to `>=` to include 7 items
                addMoreBtn.style.display = 'none'; // Hides the button
            }
        }

        addMoreBtn.addEventListener('click', function(e) {
            e.preventDefault();

            if (isMoreThanSeven < 7) {
                let input = document.createElement('input');
                input.classList.add('form-control', 'AboutThisItem', 'mt-2');
                input.placeholder = 'About This Item';
                Container.insertBefore(input, addMoreBtn);
                isMoreThanSeven += 1;
                isMoreThanSevenFunc(); // Corrected function call
            }
        });

        // Initial check when the page loads
        isMoreThanSevenFunc();


        let uploadProductForm = document.querySelector('form[action="{{ route('auth.uploadProduct') }}"]');
        uploadProductForm.addEventListener('submit', function(e) {
            e.preventDefault();

            let AboutThisItem = document.querySelectorAll('.AboutThisItem');
            let aboutThisItemhidden = document.querySelector('#aboutThisItemhidden');
            let AboutThisItemValues = [];

            AboutThisItem.forEach(e => {
                AboutThisItemValues.push(e.value);
            });

            let itemPointsJSON = JSON.stringify(AboutThisItemValues);
            aboutThisItemhidden.value = itemPointsJSON;

            // After setting the hidden input value, you can submit the form programmatically
            this.submit();
        });


        let brandNameInput = document.getElementById('brandName');
        let noBrandCheckbox = document.getElementById('checkbox-signin');

        noBrandCheckbox.addEventListener('change', function() {
            if (noBrandCheckbox.checked) {
                brandNameInput.readOnly = true;
            } else {
                brandNameInput.readOnly = false;
            }
        });


        $(document).ready(function() {
            $('#VariationCheckBox').on('change', function() {
                if ($(this).prop('checked') == true) {
                    var getVariations = `
                    <div class='container-fluid row'>
                    <div class="col-2">
                                <div class="form-group">
                                    <label for="ColorVariation">Enter Color</label>
                                    <input type="text" id="ColorVariation" name="ColorVariation0" class="form-control"
                                        placeholder="Eg. Red, Blue, Green">
                                </div>

                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="SizeVariation">Enter Size</label>
                                    <input type="text" id="SizeVariation" name="SizeVariation0" class="form-control"
                                        placeholder="Eg. Small, Medium, Large">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="MaterialVariation">Material</label>
                                    <input type="text" id="MaterialVariation" name="MaterialVariation0" class="form-control"
                                        placeholder="Eg. Plastic, Silicone, Metal">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="Style">Style</label>
                                    <input type="text" id="Style" name="Style0" class="form-control"
                                        placeholder="Eg. Red, Blue, Green">
                                </div>
                            </div>
                            <div class="col-1 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="Quanatity">Quanatity</label>
                                    <input type="text" id="Quanatity" name="Quanatity0" class="form-control"
                                        placeholder="Eg. 10, 20, 30">
                                </div>
                            </div>
                            <div class="col-1 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input type="text" id="Price" name="Price0" class="form-control"
                                        placeholder="Eg. 10, 20, 30">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                            <label>Choose Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name='variationImage0' id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                            </div>
                        </div>
                            `
                    $('#getVariations').html(getVariations);
                    $('#getVariations').append(
                        `<div class='container-fluid mb-4 mt-0' id='addVaritionbtn'><span id='addVarition' class='btn btn-primary'>Add More</span></div>`
                    )
                } else {
                    $('#getVariations').html('');
                }
            });
            var count = 1;
            $(document).on('click', '#addVarition', function() {
                var getVariations = `
                    <div class='container-fluid row'>
                    <div class="col-2">
                                <div class="form-group">
                                    <label for="ColorVariation">Enter Color</label>
                                    <input type="text" id="ColorVariation" name="ColorVariation${count}" class="form-control"
                                        placeholder="Eg. Red, Blue, Green">
                                </div>

                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="SizeVariation">Enter Size</label>
                                    <input type="text" id="SizeVariation" name="SizeVariation${count}" class="form-control"
                                        placeholder="Eg. Small, Medium, Large">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="MaterialVariation">Material</label>
                                    <input type="text" id="MaterialVariation" name="MaterialVariation${count}" class="form-control"
                                        placeholder="Eg. Plastic, Silicone, Metal">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="Style">Style</label>
                                    <input type="text" id="Style" name="Style${count}" class="form-control"
                                        placeholder="Eg. Red, Blue, Green">
                                </div>
                            </div>
                            <div class="col-1 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="Quanatity">Quanatity</label>
                                    <input type="text" id="Quanatity" name="Quanatity${count}" class="form-control"
                                        placeholder="Eg. 10, 20, 30">
                                </div>
                            </div>
                            <div class="col-1 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input type="text" id="Price" name="Price${count}" class="form-control"
                                        placeholder="Eg. 10, 20, 30">
                                </div>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-end">
                                <div class="form-group">
                                            <label>Choose Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name='variationImage${count}' id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                            </div>
                        </div>
                            `
                $('#addVaritionbtn').before(getVariations);
                count++;
            })

            $('#ProductType').change(function() {
                var usedProducts = `
                        <option value='1 week'>1 week</option>
                        <option value='1 Month'>1 Month</option>
                        <option value='3 Months'>3 Months</option>
                    `;
                var newProduct = `
                        <option value='6 Months'>6 Months</option>
                        <option value='1 Year'>1 Year</option>
                        <option value='2 Years'>2 Years</option>
                        <option value='3 Years'>3 Years</option>
                    `;
                var productTypeData = `

                    `;

                let yearOfProduct = document.getElementById('yearOfProduct')

                let years;
                let currentYear = new Date().getFullYear()
                let yearValue = 1

                for (let index = 2010; index <= currentYear; index++) {
                    years += `<option value='${yearValue}'>${index}</option>`;
                    yearValue++;
                }

                $('#repairedProductDiv').addClass('d-none')
                $('#repairedProductDiv').empty();
                $('#explainRepairingDiv').addClass('d-none');
                $('#explainRepairingDiv').empty();


                if (this.value == '1') {
                    $('#warranty').empty();
                    $('#warranty').html(
                        '<option value="" selected>Please Select Warranty</option>');
                    $('#warranty').append(usedProducts);

                    $('#yearOfProduct').empty();
                    $('#yearOfProduct').html(
                        '<option value="" selected>Please Select Year/Make of Product</option>');
                    $('#yearOfProduct').append(years);

                    $('#repairedProductDiv').removeClass('d-none');
                    $('#repairedProductDiv').empty();
                    $('#repairedProductDiv').html(
                        `<div class="form-group">
                                    <label for="repaired">Is Product Repaired/Opened?</label>
                                    <select name="repaired" id="repaired" class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>`
                    );


                    $('#repaired').change(function() {

                        if (this.value == "1") {
                            $('#explainRepairingDiv').removeClass('d-none');
                            $('#explainRepairingDiv').html(
                                `<div class="form-group">
                                    <label for="explainAboutRepairing">Explain Why Is The Product Repaired/Opened?</label>
                                    <textarea class="form-control" rows="4" name="explainAboutRepairing" id="explainAboutRepairing" placeholder="Because of dust..." required></textarea>
                            </div>`
                            );

                        } else {
                            $('#explainRepairingDiv').addClass('d-none');
                            $('#explainRepairingDiv').empty();
                        }

                    });


                }
                if (this.value == '2') {
                    $('#warranty').empty();
                    $('#warranty').html(
                        '<option value="" selected>Please Select Warranty</option>');
                    $('#warranty').append(newProduct);

                    $('#yearOfProduct').empty();
                    $('#yearOfProduct').html(
                        '<option value="" selected>Please Select Year/Make of Product</option>');
                    $('#yearOfProduct').append(years);

                    $('#repairedProductDiv').addClass('d-none')
                    $('#repairedProductDiv').empty();

                    $('#explainRepairingDiv').addClass('d-none');
                    $('#explainRepairingDiv').empty();
                }

                if (this.value == '3') {
                    $('#selectProducttype').removeClass('col-4')
                    $('#selectProducttype').addClass('col-12')

                    var ProductCondition = `
                        <select>
                            <option value='1'>New Product</option>
                            <option value='2'></option>
                        </select>
                    `;

                    $('#repairedProductDiv').addClass('d-none')
                    $('#repairedProductDiv').empty();

                    $('#explainRepairingDiv').addClass('d-none');
                    $('#explainRepairingDiv').empty();
                }
            });

        })
    </script>
@endsection
