<nav id="nav-guest" class="flex fixed z-10 w-full bg-white border-b border-obito-grey">
    <div class="flex w-full py-5 items-center justify-between mx-auto" style="padding-left:70px; padding-right:70px;">
        <div class="flex items-center gap-[50px]">
            <a href="{{ route('front.index') }}" class="flex">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" class="flex shrink-0" alt="logo">
            </a>
        </div>
        <ul class="flex items-center gap-10">
            <li class="{{request()->routeIs('front.index') ? ' font-semibold' : '' }} hover:font-semibold transition-all duration-300 ">
                <a href="{{ route('front.index') }}">Home</a>
            </li>
            <li class="hover:font-semibold transition-all duration-300">
                <a href="{{ route('front.about') }}">About</a>
            </li>
            <li class="hover:font-semibold transition-all duration-300">
                <a href="{{ route('front.prestasi') }}">Prestasi</a>
            </li>
            <li class="{{request()->routeIs('front.pricing') ? ' font-semibold' : '' }} hover:font-semibold transition-all duration-300">
                <a href="{{ route('front.pricing') }}">Pricing</a>
            </li>
            <li class="hover:font-semibold transition-all duration-300">
                <a href="{{ route('front.blog') }}">Blog</a>
            </li>
            <li class="hover:font-semibold transition-all duration-300">
                <a href="{{ route('front.ketua') }}">Ketua</a>
            </li>
        </ul>
        <div class="flex items-center gap-5 justify-end">
            <div class="h-[50px] flex shrink-0 bg-obito-green-500 w-px"></div>
            <div class="flex items-center gap-3">
                <a href="{{ route('register') }}" class="rounded-full border border-obito-grey py-3 px-5 gap-[10px] bg-white hover:border-obito-green-500 transition-all duration-300">
                    <span class="font-semibold">Sign Up</span>
                </a>
                <a href="{{ route('login') }}" class="rounded-full py-3 px-5 gap-[10px] bg-obito-green-500 hover:drop-shadow-effect transition-all duration-300">
                    <span class="font-semibold text-white">My Account</span>
                </a>
            </div>
        </div>
    </div>
</nav>