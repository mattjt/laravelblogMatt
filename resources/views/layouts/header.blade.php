<header class="bg-red-900 py-8 h-full">
    <div class="container mx-auto flex justify-between items-center h-full px-6">
        <div>
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                Path of Exile 2 News
            </a>
        </div>
        <nav class="text-white text-sm sm:text-base flex items-stretch h-full">
            <a class="no-underline px-2 flex items-center h-full" href="/blog">News</a>
            
            <div class="relative group">
                <a class="no-underline px-2 flex items-center h-full"href="#">Gameplay</a>
                <div class="absolute hidden group-hover:block bg-red-900 text-white text-sm sm:text-base mt-2 z-10 p-4 rounded-lg w-32">
                    <a class="no-underline px-2 py-1 block whitespace-nowrap" href="/skilltree">Skill Tree</a>
                    <a class="no-underline px-2 py-1 block" href="/classes">Classes</a>
                    <a class="no-underline px-2 py-1 block" href="/skills">Skills</a>
                </div>
            </div>
            
            <a class="no-underline px-2 flex items-center h-full" href="/about">About</a>
            <a class="no-underline px-2 flex items-center h-full" href="/contact">Contact us</a>
            
            @guest
                <a class="no-underline px-2 flex items-center h-full" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <span class="border-r border-gray-100 h-full"></span>
                    <a class="no-underline px-2 flex items-center h-full" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <span class="no-underline px-2 flex items-center h-full">{{ Auth::user()->name }}</span>
                <span class="border-r border-gray-100 h-full"></span>
                <a href="{{ route('logout') }}"
                   class="no-underline px-2 flex items-center h-full"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </nav>
    </div>
</header>
