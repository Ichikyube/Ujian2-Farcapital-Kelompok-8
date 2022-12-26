<nav  x-data="{ open: false }"  class="relative px-4 py-4 flex justify-between items-center bg-white background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0)">
    <a class="flex text-3xl font-bold leading-none text-gray-900 no-underline hover:no-underline" href="#">
        <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
    </a>
    <div class="absolute lg:hidden right-5" >
        <button data-collapse-toggle="navbar-default" type="button" aria-controls="navbar-default" aria-expanded="false" class="flex items-center p-3 text-blue-600 navbar-burger">
            <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <div class="relative z-50 hidden mt-5 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6" id="navbar-default">
        <div class="absolute z-50 flex flex-col flex-wrap p-4 mt-4 border border-gray-100 rounded-lg md:static lg:static backdrop-blur-sm md:backdrop-filter-none lg:backdrop-filter-none sm:max-xl:right-12 md:right-0 lg:right-0 md:-top-14 lg:-top-14 -right-5 sm:top-4 lg:bg-transparent md:bg-transparent sm:bg-transparent bg-white/30 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <div class="flex w-max gap-14">
                @if(!session()->has('logged'))
                    @if(Route::is('welcome') )
                    <x-nav-link :href="route('form.aspirasi')">
                        {{ __('Suara Anda') }}
                    </x-nav-link>
                    @else
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Beranda') }}
                    </x-nav-link>
                    @endif
                @endif
                @if(session()->has('logged'))
                <x-nav-link :href="route('admin.list')" :active="request()->routeIs('admin.list')">
                    {{ __('Daftar Aspirasi') }}
                </x-nav-link>
                @endif
                @if(session()->has('logged'))
                <x-nav-link :href="route('admin.listadmin')" :active="request()->routeIs('blogs.list')">
                    {{ __('Daftar Admin') }}
                </x-nav-link>
                @endif
            </div>

            @if (Route::has('admin.login'))
            <div class="px-6 py-4 sm:block">
                @if (session()->has('logged'))
                <x-nav-link :href="route('admin.logout')" :active="request()->routeIs('admin.logout')">
                    {{ __('Logout') }}
                </x-nav-link>
                @else
                <x-nav-link :href="route('admin.login')" :active="request()->routeIs('admin.login')">
                    {{ __('Login') }}
                </x-nav-link>
                @endif
            </div>
            @endif
        </div>
    </div>
</nav>
<!--Container-->
