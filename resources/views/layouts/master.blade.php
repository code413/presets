<!doctype html>
<html lang='en'>
    <head>
        @section('head')
            <title>@yield('title', 'Hello World!')</title>
            @include('layouts.partials.meta')
            @include('layouts.partials.favicon')
            @include('layouts.partials.styles')
            @include('layouts.partials.scripts')
        @show
    </head>
    <body class="@yield('superclass')">
        @if(config('app.env') == 'production')
            @include('layouts.partials.trackers')
        @endif
        <header>
            @section('header')
                @include('partials.header')
            @show
        </header>
        <main>
            @section('main')

            @show
        </main>
        <footer>
            @section('footer')
                @include('partials.footer')
            @show
        </footer>
    </body>
</html>