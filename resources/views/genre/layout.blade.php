<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Genre admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">
    @livewireStyles
</head>
<body style="background: #e2e2e2;">
@livewire('navigation-menu')

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            @yield('content')
        </div>
    </div>
</div>
@livewireScripts
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
