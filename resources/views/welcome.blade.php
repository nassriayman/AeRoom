<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <style>
            body{
                background-color: #78e4e8;
            }

            .card__title{
                font-family: "Harlow Solid Italic";
            }
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>

            html {
                font-size: 16px;
            }

            * {
                margin: 0px;
                padding: 0px;
            }

            body {
                font-family: "Lato", sans-serif;
            }

            .container {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }

            .button {
                margin-left: 03%;
                width: 2rem;
                cursor: pointer;
            }

            .button--inactive {
                opacity: 0.2;
            }

            .button img {
                width: 60%;
            }

            .cards-wrapper {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .cards__container {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 25rem;
            }

            .box {
                /*     margin: -1.5rem; */
                width: 12rem;
                height: 20rem;
                box-shadow: 0px 0px 2rem 0px #888888;
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                /* transition: 1s all; */
            }

            .box:nth-child(2n) {
                transform: scale(0.85);
                z-index: -1;
            }

            .box:nth-child(2) {
                left: 5%;
            }

            .box:nth-child(4) {
                left: -5%;
            }

            .box:nth-child(4n + 1) {
                transform: scale(0.75);
                z-index: -2;
            }

            .box:nth-child(1) {
                left: 15%;
            }

            .box:nth-child(5) {
                left: -15%;
            }

            .card__text-content {
                text-align: center;
                width: 75%;
            }

            .card__title {
                padding: 1rem;
            }

            .box--hide {
                display: none;
            }

            .move-out-from-left {
                animation: moveOutLeft 0.5s ease-in-out;
            }

            .move-out-from-right {
                animation: moveOutRight 0.5s ease-in-out;
            }

            .move-to-position5-from-left {
                animation: moveToP5Left 0.5s ease-in-out;
            }

            .move-to-position4-from-left {
                animation: moveToP4Left 0.5s ease-in-out;
            }

            .move-to-position3-from-left {
                animation: moveToP3Left 0.5s ease-in-out;
            }

            .move-to-position2-from-left {
                animation: moveToP2Left 0.5s ease-in-out;
            }


            .move-to-position1-from-left{
                animation: moveToP1Left 0.5s ease-in-out;
            }

            .move-to-position5-from-right{
                animation: moveToP5Right 0.5s ease-in-out;
            }
            .move-to-position4-from-right{
                animation: moveToP4Right 0.5s ease-in-out;
            }
            .move-to-position3-from-right{
                animation: moveToP3Right 0.5s ease-in-out;
            }
            .move-to-position2-from-right{
                animation: moveToP2Right 0.5s ease-in-out;
            }
            .move-to-position1-from-right{
                animation: moveToP1Right 0.5s ease-in-out;
            }

            @keyframes moveOutLeft {
                0% {
                    transform: scale(0.75) translateX(0%);
                    opacity: 1;
                }
                50% {
                    transform: scale(0.5) translateX(-150%);
                    opacity: 0.5;
                }
                100% {
                    transform: scale(0.25) translateX(0%);
                    opacity: 0;
                }
            }

            @keyframes moveOutRight {
                0% {
                    transform: scale(0.75) translateX(0%);
                    opacity: 1;
                }
                50% {
                    transform: scale(0.5) translateX(150%);
                    opacity: 0.5;
                }
                100% {
                    transform: scale(0.25) translateX(0%);
                    opacity: 0;
                }
            }


            @keyframes moveToP5Left {
                from {
                    transform: scale(0.75) translateX(100%);
                }
                to {
                    transform: scale(0.75) translateX(0);
                }
            }

            @keyframes moveToP4Left {
                from {
                    transform: scale(0.75) translateX(100%);
                }
                to {
                    transform: scale(0.85) translateX(0);
                }
            }

            @keyframes moveToP3Left {
                from {
                    transform: scale(0.85) translateX(100%);
                }
                to {
                    transform: scale(1) translateX(0);
                }
            }

            @keyframes moveToP2Left {
                from {
                    transform: scale(1) translateX(100%);
                }
                to {
                    transform: scale(0.85) translateX(0);
                }
            }

            @keyframes moveToP1Left {
                from {
                    transform: scale(0.85) translateX(100%);
                }
                to {
                    transform: scale(0.75) translateX(0);
                }
            }


            @keyframes moveToP1Right {
                from {
                    transform: scale(0.75) translateX(-100%);
                }
                to {
                    transform: scale(0.75) translateX(0);
                }
            }

            @keyframes moveToP2Right {
                from {
                    transform: scale(0.75) translateX(-100%);
                }
                to {
                    transform: scale(0.85) translateX(0);
                }
            }

            @keyframes moveToP3Right {
                from {
                    transform: scale(0.85) translateX(-100%);
                }
                to {
                    transform: scale(1) translateX(0);
                }
            }

            @keyframes moveToP4Right {
                from {
                    transform: scale(1) translateX(-100%);
                }
                to {
                    transform: scale(0.85) translateX(0);
                }
            }

            @keyframes moveToP5Right {
                from {
                    transform: scale(0.85) translateX(-100%);
                }
                to {
                    transform: scale(0.75) translateX(0);
                }
            }

        </style>
    </head>
    <body class="antialiased ">
    <div class="container">
        <div class="button" onclick="shiftLeft()"><img src="https://image.ibb.co/mRsEb7/left_arrow.png" alt=""></div>
        <div class="cards-wrapper">
            <ul class="cards__container">
                <li  class="box"><img src="{{url('/images/6.png')}} "></li>
                <li class="box"><img src="{{url('/images/7.png')}} "></li>
                <li class="box"><img src="{{url('/images/1.png')}} "></li>
                <li class="box"><img src="{{url('/images/2.png')}} "></li>
                <li class="box"><img src="{{url('/images/3.png')}} "></li>
                <li class="box box--hide"><img src="{{url('/images/4.png')}} "></li>
                <li class="box box--hide"><img src="{{url('/images/5.png')}} "></li>

            </ul>
            <div class="card__text-content">
                <h2 class="card__title font-weight-bold">Sometimes all you need is a Breath of fresh Air</h2>
                <div class="card__summary ">
                    <a class="btn btn-primary mr-4" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-success ml-4" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
        <div class="button" onclick="shiftRight()"><img src="https://image.ibb.co/dfPSw7/right_arrow.png" alt=""></div>
    </div>
    <script>

        function shiftLeft() {
            const boxes = document.querySelectorAll(".box");
            const tmpNode = boxes[0];
            boxes[0].className = "box move-out-from-left";

            setTimeout(function() {
                if (boxes.length > 5) {
                    tmpNode.classList.add("box--hide");
                    boxes[5].className = "box move-to-position5-from-left";
                }
                boxes[1].className = "box move-to-position1-from-left";
                boxes[2].className = "box move-to-position2-from-left";
                boxes[3].className = "box move-to-position3-from-left";
                boxes[4].className = "box move-to-position4-from-left";
                boxes[0].remove();

                document.querySelector(".cards__container").appendChild(tmpNode);

            }, 500);

        }

        function shiftRight() {
            const boxes = document.querySelectorAll(".box");
            boxes[4].className = "box move-out-from-right";
            setTimeout(function() {
                const noOfCards = boxes.length;
                if (noOfCards > 4) {
                    boxes[4].className = "box box--hide";
                }

                const tmpNode = boxes[noOfCards - 1];
                tmpNode.classList.remove("box--hide");
                boxes[noOfCards - 1].remove();
                let parentObj = document.querySelector(".cards__container");
                parentObj.insertBefore(tmpNode, parentObj.firstChild);
                tmpNode.className = "box move-to-position1-from-right";
                boxes[0].className = "box move-to-position2-from-right";
                boxes[1].className = "box move-to-position3-from-right";
                boxes[2].className = "box move-to-position4-from-right";
                boxes[3].className = "box move-to-position5-from-right";
            }, 500);

        }
    </script>
    </body>
</html>
