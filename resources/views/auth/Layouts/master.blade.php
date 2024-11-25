
    {{-- @include('layouts.sidebar')   --}}
    @include('auth.Layouts.nav') 
    <div class="content">
        @yield('content') 
    </div>
    
    <div>
        @include('auth.Layouts.footer')
    </div>
    