<!DOCTYPE html>
<html lang="en" data-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BDSta</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <style>
            #nav1 {
                position: fixed;
                top: 0;
                transition: top 0.3s;
                width: 100%;
            }
        </style>
    </head>
    
    <body>
        @include('helpers.navbar')
        
        <main class="pt-36 px-5">
            @yield('content')
        </main>
    </body>
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

    <script>
        let cont = 0;
        function loopSlider() {
            let xx = setInterval(function() {
                switch(cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");

                        cont = 1;
                        break;
                    }

                    case 1: {
                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont = 0;
                        break;
                    }
                }
            }, 8000);
        }

        
        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }

        function sliderButton1() {
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");

            reinitLoop(4000);
            cont = 0
        }

        function sliderButton2(){
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");

            reinitLoop(4000);
            cont = 1
        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");

            loopSlider();
        });
    </script>
</html>