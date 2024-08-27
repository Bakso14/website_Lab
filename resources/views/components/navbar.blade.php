<div class="navbar bg-gradient-to-b from-black to-gray-600 drop-shadow-lg fixed top-0 z-20" data-aos="fade-down">
    <div class="navbar-start">
        <div class="flex-none lg:hidden">
        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            class="inline-block w-6 h-6 stroke-current">
            <path color="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16">
            </path>
            </svg>
        </label>
        </div>
        <a class="btn btn-ghost text-xl" href="{{ url('/') }}">
        <img src="/assets/logo-with-title.png" class="h-full" alt="">
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-white">
        <li class="hover:bg-slate-600 hover:rounded-xl"><a href="{{ url('/#what-we-do') }}">What We Do</a></li>
        <li class="hover:bg-slate-600 hover:rounded-xl"><a href="{{ url('/#who-we-are') }}">Who We Are</a></li>
        <li class="hover:bg-slate-600 hover:rounded-xl"><a href="{{ url('/#how-we-do-it') }}">How We Do It</a></li>
        <li class="hover:bg-slate-600 hover:rounded-xl"><a href="{{ url('/news') }}">News & Views</a></li>
        <li class="hover:bg-slate-600 hover:rounded-xl"><a href="{{ url('/people') }}">Our People & Values</a></li>

        </ul>
    </div>
    <div class="navbar-end hidden lg:flex">
        <a class="btn hover:bg-[#1B82B2] text-white bg-[#10516F] border-none">Join Us</a>
    </div>
</div>
