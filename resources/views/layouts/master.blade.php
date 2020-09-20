<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.head')
    <body id="cuerpo" class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layouts.partials.navbar')
            @include('layouts.partials.aside')
            @yield('content')
        </div>
        @include('layouts.partials.scripts')
        @yield('scripts')
    </body>
</html>