<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

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
                                                    <span><img src="{{ asset('assets/images/logo-dark.png') }}"
                                                            alt="" height="26"></span>
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-muted w-75 mx-auto"> Enter your new password to reset
                                                    your account's password </p>
                                            </div>
                                            <form method="POST" action="{{ route('resetPasswordPost.seller') }}"
                                                class="p-2">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $token }}">
                                                <div class="form-group">
                                                    <label for="emailAddress" class="mt-2">Enter Your Email Address</label>
                                                    <input class="form-control" type="text" name="email"
                                                        id="emailAddress" required=""
                                                        placeholder="Must have match with the password">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <label for="password">Enter Your New Password</label>
                                                    <input class="form-control" type="text" name="password"
                                                        id="password" required=""
                                                        placeholder="Must have atleast 6 characters">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <label for="password_confirmation" class="mt-2">Enter Your New Password</label>
                                                    <input class="form-control" type="text" name="password_confirmation"
                                                        id="password_confirmation" required=""
                                                        placeholder="Must have match with the password">
                                                    @error('password_confirmation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit"> Reset
                                                        Password </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card -->

                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-white-50 mb-0">Already have an account? <a
                                                    href="{{ route('seller.login') }}"
                                                    class="text-white-50 ml-1"><b>Sign
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