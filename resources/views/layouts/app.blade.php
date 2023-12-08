@include('layouts.frame.head')

<body>
    <div id="app">
        @include('components.theme')
        @auth
            <main class="d-flex flex-nowrap">
                @include('layouts.navbar.auth.sidenav')
                {{-- @include('layouts.navbar.auth.topnav') --}}
                @yield('content')
            </main>
        @endauth
        @guest
            @if (in_array(request()->route()->getName(),
                    ['login', 'register', 'password.request', 'password.email', 'password.reset']))
                <main>
                    @yield('content')
                </main>
            @else
                @include('layouts.navbar.guest.topnav')
                <main>
                    @yield('content')
                </main>
            @endif
            @include('layouts.footer.guest.footer')
        @endguest
    </div>
</body>
@include('layouts.frame.foot')
