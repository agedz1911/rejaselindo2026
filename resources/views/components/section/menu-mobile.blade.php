<nav class="space-y-4">
    <ul class="flex flex-col gap-5">
        <li>
            <a href="/" wire:navigate
                class="{{ request()->is('/') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Home
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/organizing-committee" wire:navigate
                class="{{ request()->is('organizing-committee') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Organizing
                Committee <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('faculties') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Faculties
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('program-at-glance') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Program
                at Glance <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('scientific-schedule') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Scientific
                Schedule <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('registration') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Registration
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('accommodation') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Accommodation
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('submission') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/visiting" wire:navigate
                class="{{ request()->is('visiting') ? 'text-[#c01e8f]' : '' }} justify-between font-normal hover:text-[#c01e8f] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-green-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Venue
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
    </ul>
</nav>