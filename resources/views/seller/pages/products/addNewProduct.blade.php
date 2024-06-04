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

                            <div id="productCategoryDiv" class="col-4">
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

                            <div id="brandNameDiv" class="col-4">
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

                        <div class="row" id="productReasonAndWarrantyDiv">
                            <div class="col-4" id="warrantyDiv">
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

                            <div class="col-4" id="reasonForSellingDiv">
                                <div class="form-group">
                                    <label for="reason">Reason for Selling (Optional)</label>
                                    <input type="text" class="form-control" name="reason" id="reasonForSelling">
                                </div>
                            </div>

                            <div class="col-4 d-none" id="repairedProductDiv"></div>

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

                        <div id="completePCparts" class="d-none">

                        </div>

                        <div class="row" id="manufacturerAndCountryOfOriginDiv">
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

        let countStorage = 2


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


                    let brandNameDiv = document.getElementById('brandNameDiv')
                    let productCategoryDiv = document.getElementById('productCategoryDiv')

                    if (!brandNameDiv && !productCategoryDiv) {
                        $('#productTypeData').empty()
                        $('#productTypeData').append(`
                            <div id="productCategoryDiv" class="col-4">
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

                            <div id="brandNameDiv" class="col-4">
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



                            </div>`)

                        $('#productReasonAndWarrantyDiv').empty();
                        $('#productReasonAndWarrantyDiv').append(`<div class="col-4" id="warrantyDiv">
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
                            <div class="col-4" id="reasonForSellingDiv">
                                <div class="form-group">
                                    <label for="reason">Reason for Selling (Optional)</label>
                                    <input type="text" class="form-control" name="reason" id="reasonForSelling">
                                </div>
                            </div>
                            <div class="col-4 d-none" id="repairedProductDiv"></div>
                    `);

                    }


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
                    let brandNameDiv = document.getElementById('brandNameDiv')
                    let productCategoryDiv = document.getElementById('productCategoryDiv')

                    if (!brandNameDiv && !productCategoryDiv) {
                        $('#productTypeData').empty()
                        $('#productTypeData').append(`
                            <div id="productCategoryDiv" class="col-4">
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

                            <div id="brandNameDiv" class="col-4">
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



                            </div>`)

                        $('#productReasonAndWarrantyDiv').empty();
                        $('#productReasonAndWarrantyDiv').append(`<div class="col-4" id="warrantyDiv">
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
                            <div class="col-4" id="reasonForSellingDiv">
                                <div class="form-group">
                                    <label for="reason">Reason for Selling (Optional)</label>
                                    <input type="text" class="form-control" name="reason" id="reasonForSelling">
                                </div>
                            </div>
                            <div class="col-4 d-none" id="repairedProductDiv"></div>
                    `);
                    }
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


                if (this.value == '4') {

                    let productReasonAndWarrantyDiv = document.getElementById('productReasonAndWarrantyDiv')
                    productReasonAndWarrantyDiv.innerHTML =
                        `<div class="col-4 d-none" id="repairedProductDiv"></div>`


                    document.getElementById("productTypeData").innerHTML = `
                    <div class="col-4" id="warrantyDiv">
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
                            <div class="col-4" id="reasonForSellingDiv">
                                <div class="form-group">
                                    <label for="reason">Reason for Selling (Optional)</label>
                                    <input type="text" class="form-control" name="reason" id="reasonForSelling">
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
                            `


                    $('#completePCparts').removeClass('d-none')
                    $("#completePCparts").empty()
                    $("#completePCparts").html(`
                            <div class="row">
                                <div class="col-12">
                                    <h4>Processor:</h4>
                                </div>
                                <div class="col-12">
                                    <div class='row'>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="processorName">Enter Name</label>
                                                <input type="text" id="processorName" name="processorName"
                                                    class="form-control" placeholder="Eg. Core i7 10th Gen">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="processorBrand">Brand</label>
                                                <select id="processorBrand" name="processorBrand" class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="processorUsedOrNew">Used Or New?</label>
                                                <select id="processorUsedOrNew" name="processorUsedOrNew"
                                                    class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>Graphic Card:</h4>
                                </div>
                                <div class="col-12">
                                    <div class='row'>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="graphicCardName">Enter Name</label>
                                                <input type="text" id="graphicCardName" name="graphicCardName"
                                                    class="form-control" placeholder="Eg. Gigabyte GTX 1050">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="graphicCardBrand">Brand</label>
                                                <select id="graphicCardBrand" name="graphicCardBrand"
                                                    class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="graphicCardMemory">Memory</label>
                                                <select id="graphicCardMemory" name="graphicCardMemory"
                                                    class="form-control">
                                                    <option value="0">Please Select Memory</option>
                                                    <option value="1">1 GB</option>
                                                    <option value="2">2 GB</option>
                                                    <option value="2">3 GB</option>
                                                    <option value="2">4 GB</option>
                                                    <option value="2">6 GB</option>
                                                    <option value="2">8 GB</option>
                                                    <option value="2">12 GB</option>
                                                    <option value="2">24 GB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="graphicCardUsedOrNew">Used Or New?</label>
                                                <select id="graphicCardUsedOrNew" name="graphicCardUsedOrNew0"
                                                    class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>Motherboard:</h4>
                                </div>
                                <div class="col-12">
                                    <div class='row'>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="motherboardName">Enter Name</label>
                                                <input type="text" id="motherboardName" name="motherboardName"
                                                    class="form-control" placeholder="Eg. MSI B450 TOMAHAWK MAX ATX AM4 ">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="motherboardBrand">Brand</label>
                                                <select id="motherboardBrand" name="motherboardBrand"
                                                    class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="motherboardUsedOrNew">Used Or New?</label>
                                                <select id="motherboardUsedOrNew" name="motherboardUsedOrNew"
                                                    class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>RAM:</h4>
                                </div>
                                <div class="col-12">
                                    <div class='row'>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="ramName">Enter Name</label>
                                                <input type="text" id="ramName" name="ramName" class="form-control"
                                                    placeholder="Eg. GSkill 12GB DDR4 ">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="ramBrand">Brand</label>
                                                <select id="ramBrand" name="ramBrand" class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="ramMemory">Memory</label>
                                                <select id="ramMemory" name="ramMemory" class="form-control">
                                                    <option value="0">Please Select Memory</option>
                                                    <option value="1">1 GB</option>
                                                    <option value="2">2 GB</option>
                                                    <option value="2">4 GB</option>
                                                    <option value="2">8 GB</option>
                                                    <option value="2">16 GB</option>
                                                    <option value="2">32 GB</option>
                                                    <option value="2">64 GB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="ramUsedOrNew">Used Or New?</label>
                                                <select id="ramUsedOrNew" name="ramUsedOrNew" class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="ramQuantity">Quantity</label>
                                                <input type="number" id="ramQuantity" Quantity="ramName"
                                                    class="form-control" placeholder="Eg. 2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>Storage:</h4>
                                </div>
                                <div id="storageSpecsDiv" class="col-12">
                                    <div id="row1" class='row'>
                                        <div class="col-12">
                                         <h5>storage 1:</h5>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageName1">Enter Name</label>
                                                <input type="text" id="storageName1" name="storageName1"
                                                    class="form-control"
                                                    placeholder="Eg. Seagate BarraCuda ST1000DM010 1TB SATA Hard Drive">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageBrand1">Brand</label>
                                                <select id="storageBrand1" name="storageBrand1" class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageType1">Type</label>
                                                <select id="storageType1" name="storageType1" class="form-control">
                                                    <option value="0">Please Select Type</option>
                                                    <option value="1">HDD</option>
                                                    <option value="2">SSD</option>
                                                    <option value="3">NVMe</option>
                                                    <option value="4">M.2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageMemory1">Memory</label>
                                                <select id="storageMemory1" name="storageMemory1" class="form-control">
                                                    <option value="0">Please Select Memory</option>
                                                    <option value="1">120 GB</option>
                                                    <option value="2">240 GB</option>
                                                    <option value="3">250 GB</option>
                                                    <option value="4">256 GB</option>
                                                    <option value="5">480 GB</option>
                                                    <option value="6">500 GB</option>
                                                    <option value="7">512 GB</option>
                                                    <option value="8">1 TB</option>
                                                    <option value="9">2 TB</option>
                                                    <option value="10">4 TB</option>
                                                    <option value="11">8 TB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageUsedOrNew1">Used Or New?</label>
                                                <select id="storageUsedOrNew1" name="storageUsedOrNew1"
                                                    class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 mb-3">
                                    <button type="button" class="btn btn-primary" id="addMoreStorageBtn">Add More Storage</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>PSU:</h4>
                                </div>
                                <div class="col-12">
                                    <div class='row'>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="psuName">Enter Name</label>
                                                <input type="text" id="psuName" name="psuName" class="form-control"
                                                    placeholder="Eg. Corsair CX550 550Watt 80+ Bronze ">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="psuBrand">Brand</label>
                                                <select id="psuBrand" name="psuBrand" class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="psuWatts">Watts</label>
                                                <select id="psuWatts" name="psuWatts" class="form-control">
                                                    <option value="0">Please Select Watts</option>
                                                    <option value="1">300 Watts</option>
                                                    <option value="2">400 Watts</option>
                                                    <option value="3">450 Watts</option>
                                                    <option value="4">500 Watts</option>
                                                    <option value="5">550 Watts</option>
                                                    <option value="6">600 Watts</option>
                                                    <option value="7">650 Watts</option>
                                                    <option value="8">700 Watts</option>
                                                    <option value="9">750 Watts</option>
                                                    <option value="10">800 Watts</option>
                                                    <option value="11">850 Watts</option>
                                                    <option value="12">900 Watts</option>
                                                    <option value="13">1000 Watts</option>
                                                    <option value="14">1200 Watts</option>
                                                    <option value="15">1500 Watts</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="psuUsedOrNew">Used Or New?</label>
                                                <select id="psuUsedOrNew" name="psuUsedOrNew" class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>Case:</h4>
                                </div>
                                <div class="col-12">
                                    <div class='row'>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="caseName">Enter Name</label>
                                                <input type="text" id="caseName" name="caseName"
                                                    class="form-control" placeholder="Eg. NZXT H9 Flow Dual-Chamber Mid-Tower Airflow Case">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="caseBrand">Brand</label>
                                                <select id="caseBrand" name="caseBrand"
                                                    class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="caseUsedOrNew">Used Or New?</label>
                                                <select id="caseUsedOrNew" name="caseUsedOrNew"
                                                    class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>Cooler:</h4>
                                </div>
                                <div class="col-12">
                                    <div class='row'>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="coolerName">Enter Name</label>
                                                <input type="text" id="coolerName" name="coolerName"
                                                    class="form-control" placeholder="Eg. XPG VENTO 120 ARGB FAN Case Fan">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="coolerBrand">Brand</label>
                                                <select id="coolerBrand" name="coolerBrand"
                                                    class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="coolerUsedOrNew">Used Or New?</label>
                                                <select id="coolerUsedOrNew" name="coolerUsedOrNew"
                                                    class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
`)

                    $('#addMoreStorageBtn').click(function() {
                        $('#storageSpecsDiv').append(`<div id="row${countStorage}" class='row'>
                                        <div class="col-12">
                                         <h5>storage ${countStorage}:</h5>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageName${countStorage}">Enter Name</label>
                                                <input type="text" id="storageName${countStorage}" name="storageName${countStorage}"
                                                    class="form-control"
                                                    placeholder="Eg. Seagate BarraCuda ST1000DM010 1TB SATA Hard Drive">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageBrand${countStorage}">Brand</label>
                                                <select id="storageBrand${countStorage}" name="storageBrand${countStorage}" class="form-control">
                                                    <option value="0">Please Select Brand</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageType${countStorage}">Type</label>
                                                <select id="storageType${countStorage}" name="storageType${countStorage}" class="form-control">
                                                    <option value="0">Please Select Type</option>
                                                    <option value="1">HDD</option>
                                                    <option value="2">SSD</option>
                                                    <option value="3">NVMe</option>
                                                    <option value="4">M.2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="storageMemory${countStorage}">Memory</label>
                                                <select id="storageMemory${countStorage}" name="storageMemory${countStorage}" class="form-control">
                                                    <option value="0">Please Select Memory</option>
                                                    <option value="1">120 GB</option>
                                                    <option value="2">240 GB</option>
                                                    <option value="3">250 GB</option>
                                                    <option value="4">256 GB</option>
                                                    <option value="5">480 GB</option>
                                                    <option value="6">500 GB</option>
                                                    <option value="7">512 GB</option>
                                                    <option value="8">1 TB</option>
                                                    <option value="9">2 TB</option>
                                                    <option value="10">4 TB</option>
                                                    <option value="11">8 TB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3 d-flex align-items-center" style="gap:20px;">
                                            <div class="form-group">
                                                <label for="storageUsedOrNew${countStorage}">Used Or New?</label>
                                                <select id="storageUsedOrNew${countStorage}" name="storageUsedOrNew${countStorage}"
                                                    class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-danger" style="margin-top:13px;" id="removeStorage${countStorage}" onclick="removeStorage(${countStorage})">Remove</button>
                                        </div>
                                    </div>`)
                        countStorage++
                    })


                    $('#warranty').empty();
                    $('#warranty').html(
                        '<option value="" selected>Please Select Warranty</option>');
                    $('#warranty').append(newProduct);

                    $('#yearOfProduct').empty();
                    $('#yearOfProduct').html(
                        '<option value="" selected>Please Select Year/Make of Product</option>'
                    );
                    $('#yearOfProduct').append(years);

                }
            });

        })


        const removeStorage = (id) => {

            countStorage--


            let productRow = document.getElementById(`row${id}`)

            if (productRow.parentNode.id == 'storageSpecsDiv') {

                productRow.parentNode.removeChild(productRow)

                let allRows = Array.from(document.getElementById('storageSpecsDiv').children);

                console.log(allRows);

                let allLabels = []

                allRows.forEach((e, i) => {
                    e.id = `row${i + 1}`;

                    let heading = e.querySelector('.col-12 h5').innerText = `storage ${i+1}`;
                    let label = e.querySelectorAll('.col-3 .form-group label');
                    let input = e.querySelector('.col-3 .form-group input');
                    let select = e.querySelectorAll('.col-3 .form-group select');
                    let button = e.querySelector('.align-items-center button');

                    if (i > 0) {

                        button.id = `removeStorage${i+1}`;
                        button.setAttribute('onclick', `removeStorage(${i+1})`)
                    }


                    input.id = `storageName${i+1}`
                    input.name = `storageName${i+1}`

                    allLabels = Array.from(label);
                    allSelects = Array.from(select);


                    allSelects[0].id = `storageBrand${i+1}`
                    allSelects[0].name = `storageBrand${i+1}`

                    allSelects[1].id = `storageType${i+1}`
                    allSelects[1].name = `storageType${i+1}`

                    allSelects[2].id = `storageMemory${i+1}`
                    allSelects[2].name = `storageMemory${i+1}`

                    allSelects[3].id = `storageUsedOrNew${i+1}`
                    allSelects[3].name = `storageUsedOrNew${i+1}`

                    allLabels.forEach((labelElement, labelIndex) => {

                        let forAttr = labelElement.getAttribute('for');


                        if (labelIndex == 0) {
                            labelElement.setAttribute('for', `storageName${i+1}`);
                        }
                        if (labelIndex == 1) {
                            labelElement.setAttribute('for', `storageBrand${i+1}`);
                        }
                        if (labelIndex == 2) {
                            labelElement.setAttribute('for', `storageType${i+1}`);
                        }
                        if (labelIndex == 3) {
                            labelElement.setAttribute('for', `storageMemory${i+1}`);
                        }
                        if (labelIndex == 4) {
                            labelElement.setAttribute('for', `storageUsedOrNew${i+1}`);
                        }

                    })
                })



            }


        }
    </script>
@endsection
