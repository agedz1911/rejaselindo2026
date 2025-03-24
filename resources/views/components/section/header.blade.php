<!-- Header -->
<header class="bg-gradient-to-r from-[#0059A8] via-[#3799cd] to-[#0059A8] hidden lg:block text-white text-sm py-4">
    <div class="mx-auto flex justify-between items-center px-4">
        <div>
            <span>
                Secretariat
            </span>
            <span class="ml-4 hover:underline">
                <a href="mailto:burn2025@pharma-pro.com">
                    burn2025@pharma-pro.com
                </a>
            </span>
        </div>
        <div>
            <span class="text-xs">
                Contact Us On:
            </span>
            <a class="btn btn-sm shadow-none" href="#">
                <i class="fa fa-envelope">
                </i>
            </a>
            <a class="btn btn-sm shadow-none" href="#">
                <i class="fab fa-whatsapp text-green-600">
                </i>
            </a>
            <a class="btn btn-sm shadow-none" href="#">
                <i class="fab fa-instagram text-rose-400">
                </i>
            </a>
            <a class="btn btn-sm shadow-none" href="#">
                <i class="fa fa-phone">
                </i>
            </a>
        </div>
    </div>
</header>
<!-- Navigation -->
<nav id="navbar"
    class="w-full bg-transparent z-20 shadow-md sticky lg:shadow-none lg:fixed transition-colors duration-300">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <div class="navbar">
                <div class="navbar-start">
                    <img src="assets/images/logo/logo.png" class="h-full max-h-14" alt="Logo" />
                </div>
                <div class="navbar-center hidden lg:flex py-2">
                    <x-section.menu />
                </div>
                <div class="navbar-end">
                    <div class="btn lg:btn-outline rounded-lg lg:border-white lg:text-white/80 lg:hover:text-gray-900 shadow-none">
                        <i class="fa-solid fa-circle-info"></i>
                        Contact
                    </div>
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                            <i class="fa fa-bars text-2xl"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="bg-base-200 min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <img src="assets/images/logo/logo.png" class="w-full mb-5 max-w-sm" />
                <x-section.menu-mobile />
            </ul>
        </div>
    </div>
</nav>