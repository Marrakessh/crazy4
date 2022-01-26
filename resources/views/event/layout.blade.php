<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Event Admin Panel</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- The "defer" attribute is important to make sure Alpine waits for Livewire to load first. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">

    @livewireStyles

</head>
<body style="background: #e2e2e2;">
{{--<body class="font-sans antialiased">--}}
<x-jet-banner />
@livewire('navigation-menu')

<div class="container">

    <!-- Page Heading -->
{{--    @if (isset($header))--}}
{{--        <header class="bg-white shadow">--}}
{{--            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                {{ $header }}--}}
{{--            </div>--}}
{{--        </header>--}}
{{--    @endif--}}

    <div class="row">

        <div class="col-md-10 offset-1">
            @yield('content')
        </div>
    </div>
</div>

@livewireScripts
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

{{--<script>--}}
{{--    function app() {--}}
{{--        return {--}}
{{--            initFlatpickr() {--}}
{{--                const fp = flatpickr(this.$refs.datetime, {--}}
{{--                    locale: "en",--}}
{{--                    minDate: "1930-01",--}}
{{--                    maxDate: "2050-01",--}}
{{--                    enableTime: true,--}}
{{--                    time_24hr: true,--}}
{{--                    // minTime: "07:00",--}}
{{--                    // maxTime: "20:00",--}}
{{--                    dateFormat: "Y-m-d H:i",--}}
{{--                    disableMobile: "true",--}}
{{--                    static: false,--}}
{{--                });--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}

</html>
