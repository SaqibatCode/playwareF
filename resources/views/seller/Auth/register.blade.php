<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Seller Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="bg-primary">

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-4 mt-3">
                                                <a href="index.html">
                                                    <span><img src="assets/images/logo.svg" alt=""
                                                            height="26"></span>
                                                </a>
                                            </div>

                                            <form method="POST" action="{{ route('auth.register') }}"
                                                enctype="multipart/form-data" class="p-2">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="username">Full Name</label>
                                                    <input class="form-control" type="text" name="username"
                                                        id="username" required="" placeholder="Ahmed Bashir">
                                                    @error('username')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="FatherName">Father Name</label>
                                                    <input class="form-control" type="text" name="FatherName"
                                                        id="FatherName" required="" placeholder="Bashir Ahmed">
                                                    @error('FatherName')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailaddress">Email address</label>
                                                    <input class="form-control" type="email" name="EmailAddress"
                                                        id="emailaddress" required="" placeholder="john@deo.com">
                                                    @error('EmailAddress')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="DateOfBirth">Date Of birth (According to your
                                                        CNIC)</label>
                                                    <input class="form-control" type="date" name="DateOfBirth"
                                                        id="DateOfBirth" required="" placeholder="11-Nov-2006">
                                                    @error('DateOfBirth')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="Address">Address</label>
                                                    <input class="form-control" type="text" name="Address"
                                                        id="Address" required=""
                                                        placeholder="123 Main Street, Karachi, Pakistan 12345">
                                                    @error('Address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="phoneNUmber">Phone Number</label>
                                                    <input class="form-control" type="tel" name="phoneNumber"
                                                        id="phoneNUmber" required="" placeholder="+92 123 456789">
                                                    @error('phoneNumber')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" name="password"
                                                        required="" id="password"
                                                        placeholder="Enter your password">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="ConfirmPassword">Confirm Password</label>
                                                    <input class="form-control" type="password" required=""
                                                        id="ConfirmPassword" name="password_confirmation"
                                                        placeholder="Enter your ConfirmPassword">

                                                </div>
                                                <div class="form-group mb-4 pb-3">
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" name="confirmTermsAndConditions"
                                                            class="custom-control-input" id="checkbox-signin">
                                                        <label class="custom-control-label" for="checkbox-signin">I
                                                            accept <a href="#">Terms and Conditions</a></label>
                                                        @error('confirmTermsAndConditions')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit"> Sign Up
                                                        Free </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card -->

                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-white-50 mb-0">Already have an account? <a
                                                    href="pages-login.html" class="text-white-50 ml-1"><b>Sign
                                                        In</b></a></p>
                                        </div>
                                    </div>

                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>
