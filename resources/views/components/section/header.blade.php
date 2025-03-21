<!-- Header -->
<div class="header">
    <header class="bg-pink-500 z-50 text-white text-sm py-2">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div>
                <span>
                    12893 Green Valley Street, USA 85882
                </span>
                <span class="ml-4">
                    contactinfo@gmail.com
                </span>
            </div>
            <div>
                <span>
                    Follow Us On:
                </span>
                <a class="ml-2" href="#">
                    <i class="fab fa-facebook-f">
                    </i>
                </a>
                <a class="ml-2" href="#">
                    <i class="fab fa-twitter">
                    </i>
                </a>
                <a class="ml-2" href="#">
                    <i class="fab fa-linkedin-in">
                    </i>
                </a>
                <a class="ml-2" href="#">
                    <i class="fab fa-instagram">
                    </i>
                </a>
            </div>
        </div>
    </header>
    <!-- Navigation -->
    <nav class="w-full z-10" >
        <div class="container mx-auto flex justify-between items-center py-4 px-4">
            <div class="text-2xl font-bold text-gray-800">
                EduMim
            </div>
            <ul class="flex space-x-6">
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Pages
                    </a>
                </li>
                <li>
                    <a href="#">
                        Courses
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#">
                        Contacts
                    </a>
                </li>
            </ul>
            <div class="flex items-center space-x-4">
                <i class="fas fa-search text-gray-600">
                </i>
                <button class="bg-blue-900 text-white px-4 py-2 rounded">
                    Start Free Trial
                </button>
            </div>
        </div>
    </nav>
</div>
<script>
    window.addEventListener('scroll', function() {
             var navbar = document.getElementById('navbar');
             if (window.scrollY > 50) {
                 navbar.classList.add('scrolled');
             } else {
                 navbar.classList.remove('scrolled');
             }
         });
</script>

<!-- Mobile Header -->
{{-- <div class="lg:hidden bg-white flex justify-between items-center p-4 shadow-md sticky top-0 z-50">
    <img src="assets/images/logo/logo-event.png" class="w-full max-w-52" />
    <button id="hamburger" class="text-gray-700 focus:outline-none">
        <i class="fa-solid fa-bars text-2xl hover:text-purple-700 hover:scale-110"></i>
    </button>
</div> --}}
<!-- Offcanvas Menu -->
{{-- <div id="offcanvas-menu" class="fixed bg-white top-0 left-0 w-4/5 h-full p-8 offcanvas lg:hidden z-50">
    <button id="close-menu" class="text-gray-700 focus:outline-none mb-4">
        <i class="fa-solid fa-x text-2xl hover:text-purple-700 hover:scale-110"></i>
    </button>
    <div class="mb-8">
        <img src="assets/images/logo/logo-event.png" class="w-full max-w-xs" />
    </div>
    <x-section.menu-mobile />
    <h4 class="mt-8 mb-2 text-gray-600 text-base font-normal">Get in touch with us</h4>
    <x-section.contact-icon-m />
</div> --}}
<!-- Sidebar -->
{{-- <div class="w-1/5 bg-white shadow-lg border-r border-purple-50 p-8 hidden lg:block sticky top-0 h-screen">
    <div class="mb-10">
        <img src="assets/images/logo/logo-event.png" class="w-full max-w-sm" />
    </div>
    <x-section.menu />
    <h4 class="mt-8 mb-2 text-gray-600 text-base font-normal">Get in touch with us</h4>
    <x-section.contact-icon />
</div> --}}