@extends('seller.Layout.layout')
@section('main-content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Complete PC</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item ">Products</li>
                                <li class="breadcrumb-item ">Type</li>
                                <li class="breadcrumb-item active">Complete PC</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md col-sm-12">
                                <div class="form-group">
                                    <label for="productTitle">Title</label>
                                    <input type="text" value="{{ old('productTitle') }}" id="productTitle"
                                        name="productTitle" class="form-control"
                                        placeholder="Brand + Product Type + Color + Material Eg. Adidas T20 Shoes red leather">
                                    @error('productTitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md col-sm-12">
                                <div class="form-group">
                                    <label for="warranty" class="form-label">Warranty</label>
                                    <select name="warranty" id="warranty" class="form-control form-select">
                                        <option value="">Select Warranty</option>
                                        <option value="6 Month">6 Month</option>
                                        <option value="1 Year">1 Year</option>
                                        <option value="2 Year">2 Year</option>
                                        <option value="3 Year">3 Year</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="form-group">
                                    <label for="year_of_making" class="form-label">Year Of Making</label>
                                    <select name="year_of_making" id="year_of_making" class="form-control form-select">
                                        <option value="">Year Of Making</option>
                                        @for ($i = 2010; $i <= 2024; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md col-sm-12">
                                <div class="form-group">
                                    <label for="amount_in_stock" class="form-label">Amount In Stock</label>
                                    <input type="number" name="amount_in_stock" id="amount_in_stock" placeholder="1 to 20"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="form-group">
                                    <label for="current_price" class="form-label">Current Price</label>
                                    <input type="number" name="current_price" id="current_price" placeholder="100 to 1500"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="form-group">
                                    <label for="sale_price" class="form-label">Sale Price</label>
                                    <input type="number" name="sale_price" id="sale_price" placeholder="50 to 1450"
                                        class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="isRepairedOrOpened"
                                            id="isRepairedOrOpened" data-toggle="collapse" data-target="#collapseExample"
                                            aria-expanded="false" aria-controls="collapseExample">
                                        <label class="form-check-label" for="isRepairedOrOpened">
                                            Has Product Used, Or Repaired?
                                        </label>
                                    </div>
                                    <div class="collapse mt-2" id="collapseExample">
                                        <textarea name="reason" style="height: 200px;" id="" class="form-control"
                                            placeholder="Please Enter The Reason"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="completePCparts" class="mt-5">
                            <h2>PC Parts:</h2>
                            <div class="row">
                                <div class="col-12">
                                    <h4>Processor:</h4>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="processorName">Enter Name</label>
                                                <input type="text" id="processorName" name="processorName"
                                                    class="form-control" placeholder="Eg. Core i7 10th Gen">
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="processorBrand">Brand</label>
                                                <select id="processorBrand" name="processorBrand" class="form-control">
                                                    <option selected="">Select Brand</option>
                                                    <option value="1">Intel</option>
                                                    <option value="2">AMD</option>
                                                    <option value="7">Nvidia</option>
                                                    <option value="60">Other</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
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
                                    <div class="row">
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="graphicCardName">Enter Name</label>
                                                <input type="text" id="graphicCardName" name="graphicCardName"
                                                    class="form-control" placeholder="Eg. Gigabyte GTX 1050"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="graphicCardBrand">Brand</label>
                                                <select id="graphicCardBrand" name="graphicCardBrand"
                                                    class="form-control">
                                                    <option selected="">Select Brand</option>
                                                    <option value="7">Nvidia</option>
                                                    <option value="2">AMD</option>
                                                    <option value="1">Intel</option>
                                                    <option value="60">Other</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="graphicCardMemory">Memory</label>
                                                <select id="graphicCardMemory" name="graphicCardMemory"
                                                    class="form-control">
                                                    <option value="0" selected="">Please Select Memory</option>
                                                    <option value="1">1 GB</option>
                                                    <option value="2">2 GB</option>
                                                    <option value="3">3 GB</option>
                                                    <option value="4">4 GB</option>
                                                    <option value="6">6 GB</option>
                                                    <option value="7">8 GB</option>
                                                    <option value="8">12 GB</option>
                                                    <option value="9">24 GB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="graphicCardUsedOrNew">Used Or New?</label>
                                                <select id="graphicCardUsedOrNew" name="graphicCardUsedOrNew0"
                                                    class="form-control">
                                                    <option value="0" selected="">Please Select</option>
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
                                    <div class="row">
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="motherboardName">Enter Name</label>
                                                <input type="text" id="motherboardName" name="motherboardName"
                                                    class="form-control" placeholder="Eg. MSI B450 TOMAHAWK MAX ATX AM4 "
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="motherboardBrand">Brand</label>
                                                <select id="motherboardBrand" name="motherboardBrand"
                                                    class="form-control">
                                                    <option selected="">Select Brand</option>
                                                    <option value="3">ASUS</option>
                                                    <option value="4">GIGABYTE</option>
                                                    <option value="5">MSI</option>
                                                    <option value="6">EVGA</option>
                                                    <option value="60">Other</option>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
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
                                    <div class="row">
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="ramName">Enter Name</label>
                                                <input type="text" id="ramName" name="ramName" class="form-control"
                                                    placeholder="Eg. GSkill 16GB DDR4 " value="">
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="ramBrand">Brand</label>
                                                <select id="ramBrand" name="ramBrand" class="form-control">
                                                    <option selected="">Select Brand</option>
                                                    <option value="8">Corsair</option>
                                                    <option value="9">Crucial</option>
                                                    <option value="10">Adata</option>
                                                    <option value="11">Kingston</option>
                                                    <option value="13">Samsung</option>
                                                    <option value="19">XPG</option>
                                                    <option value="14">OLOY</option>
                                                    <option value="15">Lezar</option>
                                                    <option value="16">PNY</option>
                                                    <option value="17">T-Force</option>
                                                    <option value="18">V-Color</option>
                                                    <option value="19">XPG</option>
                                                    <option value="60">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="ramMemory">Memory</label>
                                                <select id="ramMemory" name="ramMemory" class="form-control">
                                                    <option value="0">Please Select Memory</option>
                                                    <option value="1">1 GB</option>
                                                    <option value="2">2 GB</option>
                                                    <option value="3">4 GB</option>
                                                    <option value="4">8 GB</option>
                                                    <option value="5">16 GB</option>
                                                    <option value="6">32 GB</option>
                                                    <option value="7">64 GB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="ramUsedOrNew">Used Or New?</label>
                                                <select id="ramUsedOrNew" name="ramUsedOrNew" class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="ramQuantity">Quantity</label>
                                                <input type="number" id="ramQuantity" name="ramQuantity"
                                                    class="form-control" placeholder="Eg. 2" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>Storage:</h4>
                                </div>
                                <input type="hidden" id="storageData" name="storageData">
                                <div id="storageSpecsDiv" class="col-12">
                                    <div id="row1" class="row">
                                        <div class="col-12">
                                            <h5>storage 1</h5>
                                        </div>
                                        <div class="col-sm-12 col-md">
                                            <div class="form-group">
                                                <label for="storageName1">Enter Name</label>
                                                <input type="text" data-id="1" id="storageName1"
                                                    name="storageName1" class="form-control storageName"
                                                    placeholder="Eg. Seagate BarraCuda ST1000DM010 1TB SATA Hard Drive">

                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md">
                                            <div class="form-group">
                                                <label for="storageBrand1">Brand</label>
                                                <select id="storageBrand1" data-id="1" name="storageBrand1"
                                                    class="form-control storageBrand">
                                                    <option value="" selected="">Select Brand</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md">
                                            <div class="form-group">
                                                <label for="storageType1">Type</label>
                                                <select id="storageType1" data-id="1" name="storageType1"
                                                    class="form-control storageType">
                                                    <option value="0">Please Select Type</option>
                                                    <option value="1">HDD</option>
                                                    <option value="2">SSD</option>
                                                    <option value="3">NVMe</option>
                                                    <option value="4">M.2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md">
                                            <div class="form-group">
                                                <label for="storageMemory1">Memory</label>
                                                <select id="storageMemory1" data-id="1" name="storageMemory1"
                                                    class="form-control storageMemory">
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
                                        <div class="col-sm-12 col-md">
                                            <div class="form-group">
                                                <label for="storageUsedOrNew1">Used Or New?</label>
                                                <select id="storageUsedOrNew1" data-id="1" name="storageUsedOrNew1"
                                                    class="form-control storageUsedOrNew">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md mb-3">
                                    <button type="button" class="btn btn-primary" id="addMoreStorageBtn">Add More
                                        Storage</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4>PSU:</h4>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="psuName">Enter Name</label>
                                                <input type="text" id="psuName" name="psuName" class="form-control"
                                                    placeholder="Eg. Corsair CX550 550Watt 80+ Bronze " value="">
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="psuBrand">Brand</label>
                                                <select id="psuBrand" name="psuBrand" class="form-control">
                                                    <option selected="">Select Brand</option>
                                                    <option value="3">ASUS</option>
                                                    <option value="8">Corsair</option>
                                                    <option value="35">Thermaltake</option>
                                                    <option value="19">XPG</option>
                                                    <option value="4">GIGABYTE</option>
                                                    <option value="24">LianLi</option>
                                                    <option value="5">MSI</option>
                                                    <option value="33">XIGMATEK</option>
                                                    <option value="36">Gamdias</option>
                                                    <option value="25">Darkflash</option>
                                                    <option value="30">Redragon</option>
                                                    <option value="6">EVGA</option>
                                                    <option value="28">NZXT</option>
                                                    <option value="27">Cooler Master</option>
                                                    <option value="60">Other</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md col-sm-12">
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
                                        <div class="col-md col-sm-12">
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
                                    <div class="row">
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="caseName">Enter Name</label>
                                                <input type="text" id="caseName" name="caseName"
                                                    class="form-control"
                                                    placeholder="Eg. NZXT H9 Flow Dual-Chamber Mid-Tower Airflow Case"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="caseBrand">Brand</label>
                                                <select id="caseBrand" name="caseBrand" class="form-control">
                                                    <option selected="">Select Brand</option>
                                                    <option value="8">Corsair</option>
                                                    <option value="3">ASUS</option>
                                                    <option value="24">LianLi</option>
                                                    <option value="25">Darkflash</option>
                                                    <option value="46">GameMax</option>
                                                    <option value="47">1st Player</option>
                                                    <option value="60">Other</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="caseUsedOrNew">Used Or New?</label>
                                                <select id="caseUsedOrNew" name="caseUsedOrNew" class="form-control">
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
                                    <div class="row">
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="coolerName">Enter Name</label>
                                                <input type="text" id="coolerName" name="coolerName"
                                                    class="form-control" placeholder="Eg. XPG VENTO 120 ARGB FAN Case Fan"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="coolerBrand">Brand</label>
                                                <select id="coolerBrand" name="coolerBrand" class="form-control">
                                                    <option selected="">Select Brand</option>
                                                    <option value="24">LianLi</option>
                                                    <option value="25">Darkflash</option>
                                                    <option value="8">Corsair</option>
                                                    <option value="26">DeepCool</option>
                                                    <option value="27">Cooler Master</option>
                                                    <option value="28">NZXT</option>
                                                    <option value="29">Antec</option>
                                                    <option value="30">Redragon</option>
                                                    <option value="31">Sapphire</option>
                                                    <option value="32">ID-Cooling</option>
                                                    <option value="33">XIGMATEK</option>
                                                    <option value="34">Alseye</option>
                                                    <option value="35">Thermaltake</option>
                                                    <option value="19">XPG</option>
                                                    <option value="60">Other</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md col-sm-12">
                                            <div class="form-group">
                                                <label for="coolerUsedOrNew">Used Or New?</label>
                                                <select id="coolerUsedOrNew" name="coolerUsedOrNew" class="form-control">
                                                    <option value="0">Please Select</option>
                                                    <option value="1">Used</option>
                                                    <option value="2">New</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="additionalPCparts" class="row mt-5">
                            <div class="col-12">
                                <h2>Additional PC Parts:</h2>
                            </div>
                            <input type="hidden" id="additionalPartsData" name="additionalPartsData">
                            <div id="additionalPCpartsSpecs" class="col-12">
                                <div id="additionalPCpartsrow1" class="row">
                                    <div class="col-12">
                                        <h5>Additional Part 1</h5>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-group">
                                            <label for="additionalPCpartName1">Enter Name</label>
                                            <input type="text" id="additionalPCpartName1" name="additionalPCpartName1"
                                                class="form-control additionalPCPartName" placeholder="Eg. Case Fans">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-group">
                                            <label for="additionalPCpartUsedOrNew1">Used Or New?</label>
                                            <select id="additionalPCpartUsedOrNew1" name="additionalPCpartUsedOrNew1"
                                                class="form-control additionalPCpartUsedOrNew">
                                                <option value="0">Please Select</option>
                                                <option value="1">Used</option>
                                                <option value="2">New</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="addMorePcPartsBtnDiv" class="col-12 mb-3">
                                <p>You can add upto 5 additional parts.</p>
                                <button type="button" class="btn btn-primary" id="addMoreadditionalPCpartBtn">Add More
                                    Parts</button>
                            </div>
                        </div>

                        <div id="additionalProducts" class="row mt-5">
                            <div class="col-12">
                                <h2>Additional Products:</h2>
                            </div>
                            <input type="hidden" id="additionProductData" name="additionProductData">
                            <div id="additionalProductsSpecs" class="col-12">
                                <div id="additionalProductrow1" class="row">
                                    <div class="col-12">
                                        <h5>Additional Product 1</h5>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-group">
                                            <label for="additionalProductName1">Enter Name</label>
                                            <input type="text" data-id="1" id="additionalProductName1"
                                                name="additionalProductName1" class="form-control additionalProductName"
                                                placeholder="Product Title">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-group">
                                            <label for="additionalProductCategory1">Product Category</label>
                                            <select id="additionalProductCategory1" data-id="1"
                                                name="additionalProductCategory1"
                                                class="form-control additionalProductCategory">
                                                <option value="0">Please Select</option>
                                                <option value="1"> PC Build</option>

                                                <option value="2"> Processors</option>

                                                <option value="3"> Motherboards</option>

                                                <option value="4"> Graphics Card</option>

                                                <option value="5"> RAMs</option>

                                                <option value="6"> Storage</option>

                                                <option value="7"> Cooling</option>

                                                <option value="8"> PSU</option>

                                                <option value="10"> PC Essentials </option>

                                                <option value="11"> Monitors</option>

                                                <option value="12"> Cases</option>

                                                <option value="13"> Monitor Arms</option>

                                                <option value="15"> Router</option>

                                                <option value="16"> Cables</option>

                                                <option value="17"> Accessories</option>

                                                <option value="18"> Mouse</option>

                                                <option value="19"> Keyboard</option>

                                                <option value="20"> Headphones</option>

                                                <option value="21"> Speakers</option>

                                                <option value="22"> Microphone</option>

                                                <option value="23"> Mousepads</option>

                                                <option value="24"> Headphone stand</option>

                                                <option value="26"> Consoles</option>

                                                <option value="27"> Gaming Chair</option>

                                                <option value="28"> Gaming Desks</option>

                                                <option value="29"> Printers</option>

                                                <option value="30"> Laptop bags</option>

                                                <option value="31"> Mouse Bungee</option>

                                                <option value="32"> Console Accessories</option>

                                                <option value="33"> iPad</option>

                                                <option value="34"> iMac</option>

                                                <option value="35"> MacBook</option>

                                                <option value="36"> Mac Mini</option>

                                                <option value="38"> Airpods</option>

                                                <option value="39"> Complete PCs</option>

                                                <option value="40"> Laptops</option>

                                                <option value="41"> Apple Accessories</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-group">
                                            <label for="additionalProductBrand1">Product Brand</label>
                                            <select id="additionalProductBrand1" data-id="1"
                                                name="additionalProductBrand1"
                                                class="form-control additionalProductBrand">
                                                <option value="0">Please Select</option>
                                                <option value="1">Intel</option>
                                                <option value="2">AMD</option>
                                                <option value="3">ASUS</option>
                                                <option value="4">GIGABYTE</option>
                                                <option value="5">MSI</option>
                                                <option value="6">EVGA</option>
                                                <option value="7">Nvidia</option>
                                                <option value="8">Corsair</option>
                                                <option value="9">Crucial</option>
                                                <option value="10">Adata</option>
                                                <option value="11">Kingston</option>
                                                <option value="12">G.Skill</option>
                                                <option value="13">Samsung</option>
                                                <option value="14">OLOY</option>
                                                <option value="15">Lezar</option>
                                                <option value="16">PNY</option>
                                                <option value="17">T-Force</option>
                                                <option value="18">V-Color</option>
                                                <option value="19">XPG</option>
                                                <option value="20">Ease</option>
                                                <option value="21">Netac</option>
                                                <option value="22">Western Digital</option>
                                                <option value="23">Seagate</option>
                                                <option value="24">LianLi</option>
                                                <option value="25">Darkflash</option>
                                                <option value="26">DeepCool</option>
                                                <option value="27">Cooler Master</option>
                                                <option value="28">NZXT</option>
                                                <option value="29">Antec</option>
                                                <option value="30">Redragon</option>
                                                <option value="31">Sapphire</option>
                                                <option value="32">ID-Cooling</option>
                                                <option value="33">XIGMATEK</option>
                                                <option value="34">Alseye</option>
                                                <option value="35">Thermaltake</option>
                                                <option value="36">Gamdias</option>
                                                <option value="37">HP</option>
                                                <option value="38">DELL</option>
                                                <option value="39">Phillips</option>
                                                <option value="40">ViewSonic</option>
                                                <option value="41">Acer</option>
                                                <option value="42">LG</option>
                                                <option value="43">AOC</option>
                                                <option value="44">BENQ</option>
                                                <option value="45">Lenovo</option>
                                                <option value="46">GameMax</option>
                                                <option value="47">1st Player</option>
                                                <option value="48">Apple</option>
                                                <option value="49">Arozzi</option>
                                                <option value="50">Finalmouse</option>
                                                <option value="51">Glorious</option>
                                                <option value="52">Havit</option>
                                                <option value="53">Logitech</option>
                                                <option value="54">Razer</option>
                                                <option value="55">Steelseries</option>
                                                <option value="56">Skyloong</option>
                                                <option value="57">Sony PlayStation</option>
                                                <option value="58">Microsoft Xbox</option>
                                                <option value="59">Nintendo</option>
                                                <option value="60">Other</option>
                                                <option value="61">Lexar</option>
                                                <option value="62">Aukey</option>
                                                <option value="63">Generic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md">
                                        <div class="form-group">
                                            <label for="additionalProductUsedOrNew1">Used Or New?</label>
                                            <select id="additionalProductUsedOrNew1" data-id="1"
                                                name="additionalProductUsedOrNew1"
                                                class="form-control additionalProductUsedOrNew">
                                                <option value="0">Please Select</option>
                                                <option value="1">Used</option>
                                                <option value="2">New</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md mb-3">
                                <button type="button" class="btn btn-primary" id="addMoreadditionalProductsBtn">Add More
                                    Products</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md col-sm-12">
                                <div class="form-group">
                                    <label for="productDescription">Product Description</label>
                                    @error('productDescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <textarea name="productDescription" value="{{ old('productDescription') }}" id="productDescription"
                                        class="form-control" style="height: 400px;" placeholder="Enter Your Product Description">{{ old('productDescription') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md col-sm-6">
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
                            <div class="col-md col-sm-6">
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
                            <div class="col-md col-sm-6">
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
                            <div class="col-md col-sm-6">
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
                            <div class="col-md col-sm-6">
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
                            <div class="col-md col-sm-6">
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
            </div>
        </div>
    </div>
@endsection
@section('additionScript')
    <script>
        let Storage = 1;
        $('#addMoreStorageBtn').on('click', function() {
            Storage++;
            let StorageDiv = `
                <div id="row1" class="row">
                    <div class="col-12">
                        <h5>storage ${Storage}</h5>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="storageName${Storage}">Enter Name</label>
                            <input type="text" data-id="${Storage}" id="storageName${Storage}" name="storageName${Storage}" class="form-control storageName" placeholder="Eg. Seagate BarraCuda ST1000DM010 1TB SATA Hard Drive">

                        </div>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="storageBrand${Storage}">Brand</label>
                            <select id="storageBrand${Storage}" data-id="${Storage}" name="storageBrand${Storage}" class="form-control storageBrand">
                                <option value="" selected="">Select Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="storageType${Storage}">Type</label>
                            <select id="storageType${Storage}" data-id="${Storage}" name="storageType1" class="form-control storageType">
                                <option value="0">Please Select Type</option>
                                <option value="1">HDD</option>
                                <option value="2">SSD</option>
                                <option value="3">NVMe</option>
                                <option value="4">M.2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="storageMemory${Storage}">Memory</label>
                            <select id="storageMemory${Storage}" data-id="${Storage}" name="storageMemory${Storage}" class="form-control storageMemory">
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
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="storageUsedOrNew${Storage}">Used Or New?</label>
                            <select id="storageUsedOrNew${Storage}" data-id="${Storage}" name="storageUsedOrNew${Storage}" class="form-control storageUsedOrNew">
                                <option value="0">Please Select</option>
                                <option value="1">Used</option>
                                <option value="2">New</option>
                            </select>
                        </div>
                    </div>
                </div>
            `
            $('#storageSpecsDiv').append(StorageDiv);
        });


        let AdditionalProductCount = 1;
        $('#addMoreadditionalProductsBtn').on('click', function() {
            AdditionalProductCount++;

            let AdditionalProduct = `
                <div id="additionalProductrow${AdditionalProductCount}" class="row">
                    <div class="col-12">
                        <h5>Additional Product ${AdditionalProductCount}</h5>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="additionalProductName${AdditionalProductCount}">Enter Name</label>
                            <input type="text" data-id="${AdditionalProductCount}" id="additionalProductName${AdditionalProductCount}" name="additionalProductName${AdditionalProductCount}" class="form-control additionalProductName" placeholder="Product Title">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="additionalProductCategory${AdditionalProductCount}">Product Category</label>
                            <select id="additionalProductCategory${AdditionalProductCount}" data-id="${AdditionalProductCount}" name="additionalProductCategory${AdditionalProductCount}" class="form-control additionalProductCategory">
                                <option value="0">Please Select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="additionalProductBrand${AdditionalProductCount}">Product Brand</label>
                            <select id="additionalProductBrand${AdditionalProductCount}" data-id="${AdditionalProductCount}" name="additionalProductBrand${AdditionalProductCount}" class="form-control additionalProductBrand">
                                <option value="0">Please Select</option>
                                @foreach ($allBrands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md">
                        <div class="form-group">
                            <label for="additionalProductUsedOrNew${AdditionalProductCount}">Used Or New?</label>
                            <select id="additionalProductUsedOrNew${AdditionalProductCount}" data-id="${AdditionalProductCount}" name="additionalProductUsedOrNew${AdditionalProductCount}" class="form-control additionalProductUsedOrNew">
                                <option value="0">Please Select</option>
                                <option value="1">Used</option>
                                <option value="2">New</option>
                            </select>
                        </div>
                    </div>
                </div>
            `
            $('#additionalProductsSpecs').append(AdditionalProduct);

        });

        let AdditionalPcParts = 1;
        $('#addMoreadditionalPCpartBtn').on('click', function() {
            AdditionalPcParts++;
            if (AdditionalPcParts <= 5) {
                let html = `<div id="additionalPCpartsrow${AdditionalPcParts}" class="row">
                                <div class="col-12">
                                    <h5>Additional Part ${AdditionalPcParts}</h5>
                                </div>
                                <div class="col-sm-12 col-md">
                                    <div class="form-group">
                                        <label for="additionalPCpartName${AdditionalPcParts}">Enter Name</label>
                                        <input type="text" id="additionalPCpartName${AdditionalPcParts}" name="additionalPCpartName${AdditionalPcParts}" class="form-control additionalPCPartName" placeholder="Eg. Case Fans">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md">
                                    <div class="form-group">
                                        <label for="additionalPCpartUsedOrNew${AdditionalPcParts}">Used Or New?</label>
                                        <select id="additionalPCpartUsedOrNew${AdditionalPcParts}" name="additionalPCpartUsedOrNew${AdditionalPcParts}" class="form-control additionalPCpartUsedOrNew">
                                            <option value="0">Please Select</option>
                                            <option value="1">Used</option>
                                            <option value="2">New</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            `
                $('#additionalPCpartsSpecs').append(html)
            }
        });


        $(document).on('change', '.additionalProductCategory', function() {
            let categoryID = $(this).val();
            let dataID = $(this).data('id');
            let brandNameSelectBox = $('#additionalProductBrand' + dataID);

            $.ajax({
                url: "{{ route('seller.getBrandsByCategory') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    categoryID: categoryID
                },
                success: function(res) {
                    brandNameSelectBox.empty(); // Clear the dropdown first
                    brandNameSelectBox.append(
                        '<option value="" selected>Select Brand</option>');
                    if (res.length > 0) {
                        res.forEach(function(brand) {
                            brandNameSelectBox.append('<option value="' + brand.id +
                                '">' + brand.name + '</option>');
                        });
                    } else {
                        brandNameSelectBox.append(
                            '<option value="">No brands available</option>');
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
        })
    </script>
@endsection
