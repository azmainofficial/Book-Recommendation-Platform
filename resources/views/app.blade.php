<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" type="image/x-icon" href="./user/image/LOGO.png" />

    <title>BOI PECHA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

      {{-- <link rel="stylesheet" href="./user/css/user.css">
      <link rel="stylesheet" href="./user/css/all.min.css"> --}}

      <link rel="stylesheet" href="./admin/assets/css/admin_styles.css">
      <link rel="stylesheet" href="./admin/assets/css/admin_styles.min.css">

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div id="app"></div>

    <!-- Include Vite JS -->
    @vite('resources/js/app.js')

    {{-- Swiper JS <script src="{{ asset('user/js/swiper-bundle.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('user/js/script.js') }}"></script> --}}
    <script src="./admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./admin/assets/js/admin_sidebarmenu.js"></script>
    <script src="./admin/assets/js/admin_dashboard.js"></script>
    <script src="./admin/assets/js/admin_app.min.js"></script>
    <script src="./admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./admin/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
