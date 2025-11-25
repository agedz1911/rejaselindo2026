<!DOCTYPE html>
<html class="scroll-smooth" data-theme='corporate' lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'REJASELINDO 2026' }}</title>
    <meta name="description"
        content="6th Annual meeting Indonesia Association of Tissue Engineering & Cell Therapy (REJASELINDO), 20th International Conference Asia Pacific Association of Surgical Tissue Bank (APASTB)" />
    <meta name="keywords" content="Tissue Bank, Surgical Tissue Bank, Indonesia Stem Cell Association, Stem Cell" />
    <meta name="author" content="AV-PRO" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <!--FontAwesome CSS-->
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <!-- daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- theme daisyui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@$5/themes.css" rel="stylesheet" type="text/css" />
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}

</head>


<body>

    <div class="">
        <x-section.header />
        {{ $slot }}
        <x-section.footer />

    </div>

    <!-- Back-to-top Button start -->
    <button onclick="topFunction()" id="back-to-top"
        class="fixed hover:cursor-pointer hover:scale-105 rounded z-10 bottom-5 end-5 px-1.5 text-xl text-center bg-gradient-to-b from-[#A93E89] to-[#A93E89] text-white leading-8 transition-all duration-500 block ">
        <span class="fa-solid fa-angle-up text-2xl/none"></span>
    </button>
    <!-- Back-to-top Button end -->

    <script src="assets/js/custom.js" data-navigate-once></script>

</body>

</html>