<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.nav')

    <main>
        @section('main') @show
    </main>
    
    <script>
        document.getElementById("item-dropdown-toggle").addEventListener("click", function() {
            if(document.getElementById("item-dropdown").style.opacity === "0") {
                document.getElementById("item-dropdown").style.opacity = "1"
            } else if(document.getElementById("item-dropdown").style.opacity === "1") {
                document.getElementById("item-dropdown").style.opacity = "0";
            }
        })

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

        document.getElementById("item-dropdown-toggle-mob").addEventListener("click", function() {
            if(document.getElementById("item-dropdown-mob").style.opacity === "0") {
                document.getElementById("item-dropdown-mob").style.opacity = "1"
            } else if(document.getElementById("item-dropdown-mob").style.opacity === "1") {
                document.getElementById("item-dropdown-mob").style.opacity = "0";
            }
        })
    </script>
</body>
</html>