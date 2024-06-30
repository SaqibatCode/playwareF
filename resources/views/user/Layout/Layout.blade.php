<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet" />

    <link rel="stylesheet" href=" {{ asset('user/style/output.css') }}">


    <title>Playware</title>
</head>

<body onload="addHeaderAndFooter()">

    <header id="header" class="bg-skin-gray/90 w-full backdrop-blur-sm z-50 fixed top-0 left-0"
        onmouseleave="toggleOutSubcategoryMegaMenu()">

        <!-- GENERATED DYNAMICALLY WITH JAVASCRIPT THROUGH addHeaderAndFooter() Function -->

    </header>


    <!-- <header>


    </header> -->



    @yield('mainContent')




    <footer id="footer" class="flex flex-col items-center bg-skin-gray text-center text-skin-inverted">
        <!-- MAPPED BY SCRIPT HEADER&FOOTER -->
    </footer>


@yield('singleScript')
</body>



<script src="{{ asset('user/scripts/header&footer.js') }}"></script>
<script src="{{ asset('user/scripts/mapProduct.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('user/scripts/homePageSlider.js') }}"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
<script src="{{asset('user/scripts/tooltips.js')}}" ></script>

</html>
