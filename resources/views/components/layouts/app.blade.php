<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://use.typekit.net/zda3gdw.css">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            document.documentElement.className = "js";
            var supportsCssVars = function() {
                var e, t = document.createElement("style");
                return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t
                    .parentNode.removeChild(t), e
            };
            supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
        </script>
        <script src="//tympanus.net/codrops/adpacks/analytics.js"></script>

        <title>{{ $title ?? 'Portofolio' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body id="sss" class="demo-2 loading">

        <div id="cursor">
            <div class="cursor__circle"></div>
        </div>

        {{-- @livewire('partials.navbar') --}}

        {{ $slot }}

        @livewireScripts
        @vite('resources/js/app.js')
    </body>

</html>
