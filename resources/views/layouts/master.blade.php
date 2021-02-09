<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@isset($title) {{ $title }} | @endisset {{ config('app.name') }}</title>
    <script src="https://kit.fontawesome.com/a82e000026.js" crossorigin="anonymous"></script>
</head>
<body>
    @if(Auth::user())
    @include('partials.nav')
    @endif

    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
        @section('main') @show
    </main>
    
    <script>
        document.getElementById("sidebar-close").addEventListener("click", function() {
            if(document.getElementById("sidebar").style.opacity === "0") {
                document.getElementById("sidebar").style.opacity = "1"
            } else if(document.getElementById("sidebar").style.opacity === "1") {
                document.getElementById("sidebar").style.opacity = "0";
            }
        })

        document.getElementById("open-sidebar").addEventListener("click", function() {
            if(document.getElementById("sidebar").style.opacity === "0") {
                document.getElementById("sidebar").style.opacity = "1"
            } else if(document.getElementById("sidebar").style.opacity === "1") {
                document.getElementById("sidebar").style.opacity = "0";
            }
        })
    </script>

    @section('scripts') @show
</body>
</html>