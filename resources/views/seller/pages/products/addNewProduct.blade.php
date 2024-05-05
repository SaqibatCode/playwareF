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
                        <div class="form-group">
                            <label for="productTitle">Product Title</label>
                            <input type="text" id="productTitle" name="productTitle" class="form-control"
                                placeholder="Brand + Product Type + Color + Material Eg. Adidas T20 Shoes red leather">
                            @error('productTitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="brandName">Brand Name</label>
                                    <input type="text" id="brandName" name="brandName" class="form-control"
                                        placeholder="Brand Name">


                                    <div class="custom-control mt-2 custom-checkbox checkbox-primary">
                                        <input type="checkbox" name="thisBrandDoesNotHaveProduct"
                                            class="custom-control-input" id="checkbox-signin">
                                        <label class="custom-control-label" for="checkbox-signin">This Product Does Not Have
                                            Brand
                                            Name.</label>
                                        @error('brandName')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="productCategory">Product Category</label>
                                    <select name="productCategory" class="form-control" id="productCategory">
                                        <option selected>Select Category</option>
                                    </select>
                                    @error('productCategory')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="productQuantity">Product Quantity</label>
                                    <input type="number" id="productQuantity" name="productQuantity" class="form-control"
                                        placeholder="Eg. 50">
                                    @error('productQuantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="productSku">Product SKU</label>
                                    <input type="text" id="productSku" name="productSku" class="form-control"
                                        placeholder="Eg. 50">
                                    @error('productSku')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Manufacturer">Manufacturer</label>
                                    <input type="text" id="Manufacturer" name="Manufacturer" class="form-control"
                                        placeholder="Eg. Adidas">
                                    @error('Manufacturer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="custom-control mt-2 custom-checkbox checkbox-primary">
                                        <input type="checkbox" name="thisProductHaveVariations" class="custom-control-input"
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
                                    <input type="text" id="CountryOfOrigin" name="CountryOfOrigin" class="form-control"
                                        placeholder="Eg. Manufacture In Pakistan, Turkey, UAE">
                                    @error('CountryOfOrigin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row" id="getVariations">
                        
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
                        </div>



                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            @error('productDescription')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <textarea name="productDescription" id="productDescription" class="form-control" style="height: 400px;"
                                placeholder="Enter Your Product Description, For A+ Content Just Paste HTML Content Here."></textarea>
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
                    $('#getVariations').append(`<div class='container-fluid mb-4 mt-0' id='addVaritionbtn'><span id='addVarition' class='btn btn-primary'>Add More</span></div>`)
                } else {
                    $('#getVariations').html('');
                }
            });
           var count = 1;
            $(document).on('click', '#addVarition', function(){
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

            // var variations = [];
            // $(document).on('click', '.addVariation', function() {
            //     var element = $(this).closest('.row');
            //     var optionType = element.find('#OptionType').val();
            //     var optionValue = element.find('#optionValue').val();


            //     var variant = `
            //         <div class='row'>
            //             <div class='col-2'>
            //                 <div class='form-group'>
            //                     <input type='text' class='form-control' readonly value='${optionValue}'>
            //                 </div>
            //             </div>
            //             <div class='col-2'>
            //                 <div class='form-group'>
            //                     <input type='text' class='form-control' Placeholder='qty'>
            //                 </div>
            //             </div>
            //             <div class='col-2'>
            //                 <div class='form-group'>
            //                     <input type='text' class='form-control' Placeholder='price'>
            //                 </div>
            //             </div>
            //             <div class='col-2'>
            //                 <div class='form-group'>
            //                     <input type='text' class='form-control' Placeholder='Seller SKU'>
            //                 </div>
            //             </div>
            //             <div class='col-2'>
            //                 <div class='form-group'>
            //                     <input type='file' class='form-control' placeholder='Image'>
            //                 </div>
            //             </div>
            //         </div>
                    
                    
            //     `

            //     $('#getVariationDetails').append(variant);

            //     element.find('#optionValue').val('')
            // });
        })
    </script>
@endsection
