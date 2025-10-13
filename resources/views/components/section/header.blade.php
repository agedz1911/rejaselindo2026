<!-- Header -->
<header class="bg-gradient-to-r from-[#0E58A8] via-[#273691] to-[#A93E89] hidden lg:block text-white text-sm py-2">
    <div class="mx-auto flex justify-between items-center px-4">
        <div>
            <span>
                More Information <i class="fa fa-angle-right text-xs"></i>
            </span>
            <span class="ml-4 hover:underline">
                <a href="mailto:rejaselindo-apastb@pharma-pro.com ">
                    rejaselindo-apastb@pharma-pro.com 
                </a>
            </span>
        </div>
        <div>
            <span class="text-xs">
                Contact Us On:
            </span>
            <a class="btn btn-sm shadow-none" href="mailto:rejaselindo-apastb@pharma-pro.com ">
                <i class="fa fa-envelope">
                </i>
            </a>
            <a class="btn btn-sm shadow-none" href="https://wa.me/+6281319135153" target="_blankx`">
                <i class="fa fa-whatsapp text-green-600">
                </i>
            </a>
            <a class="btn btn-sm shadow-none" href="#">
                <i class="fa fa-instagram text-rose-400">
                </i>
            </a>
        </div>
    </div>
</header>
<!-- Navigation -->
<nav id="navbar"
    class="w-full py-2 bg-transparent z-20 shadow-lg sticky lg:shadow-none lg:fixed transition-colors duration-300">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <div class="navbar">
                <div class="navbar-start">
                    <img src="assets/images/logo/logo.png" class="h-full max-h-12" alt="Logo" />
                </div>
                <div class="navbar-center hidden lg:flex py-2">
                    <x-section.menu />
                </div>
                <div class="navbar-end">
                    <div onclick="contact.showModal()"
                        class="btn lg:btn-outline rounded-lg lg:border-white lg:text-white/80 lg:hover:text-gray-900 shadow-none">
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
                <img src="assets/images/logo/logo-04.png" class="w-full mb-5 max-w-sm" />
                <x-section.menu-mobile />
            </ul>
        </div>
    </div>
    <dialog id="contact" class="modal px-1">
        <div class="modal-box w-full max-w-5xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <div class="flex justify-center">
                <x-section.contact-icon />
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</nav>