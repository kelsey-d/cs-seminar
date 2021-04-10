<?php
// Create connection
$conn =pg_connect("host=localhost dbname=tax user=postgres password=NeptunesBoyos");
// Check connection
if (!$conn) {
   die("Connection failed: " .pg_connect_error());
}

$result = pg_query($conn, "SELECT budget FROM taxinfo");


$row = pg_fetch_array($result, $_POST["id"]-1);
echo $row["budget"];

pg_close($conn);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tax Allocation</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->

        <style media="screen">
        html{
            box-sizing: border-box;
            font-size: 62.5%; /* 1rem = 10px ems vh vw */
            margin: 0;
            padding: 0;
        }

        body{
            margin: 0;
            padding: 0;
            /* background-color: rgb(128, 8, 8); */
        }

        *, *::before, *::after{
            box-sizing: inherit;
            margin: 0;
            padding: 0;
        }

        .blob{
            position: absolute;
            padding: 0;
            /* border: 0.2rem solid black; */
            height: 15vw;
            width: 15vw;
            overflow: hidden;
            fill: rgb(150, 50, 150);
        }

        .blob svg{
            position: absolute;
            top: -12.5%;
            left: -12.5%;
            margin: 0;
            padding: 0;
            width: 125%;
            height: 125%;
            z-index: -1;
            /* animation: move1 10s ease-in-out infinite; */
            transition: 2s linear;
            transform-origin: 50% 50%;
        }

        .name{
            position: absolute;
            text-align: center;
            font-weight: bold;
            top: 40%;
            width: 100%;
            height: 10%;
        }

        #state{
            width: 20vw;
            height: 20vw;
            bottom: -5%;
            left: 40%;
        }

        #welfare{
            left: 2.5%;
            bottom: 7.5%;
        }

        #welfare svg, #defense svg{
            animation-name: move2;
        }

        #education{
            top: 17.5%;
            left: 18.67%;
        }

        #education svg, #pension svg{
            animation-name: move3;
        }

        #defense{
            left: 42.5%;
        }

        #pension{
            top: 17.5%;
            right: 18.67%;
        }

        #healthcare{
            right: 2.5%;
            bottom: 7.5%;
        }
        /*
        @keyframes move1 {
            0% {
                transform: scale(1);
            }
            38% {
                transform: scale(1.1) rotate(160deg);
            }
            40% {
                transform: scale(1.1) rotate(180deg);
            }
            78% {
                transform: scale(0.9) rotate(-40deg);
            }
            80% {
                transform: scale(0.9) rotate(-20deg);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes move2 {
            0% {
                transform: scale(1);
            }
            38% {
                transform: scale(0.9) rotate(-160deg);
            }
            40% {
                transform: scale(0.9) rotate(-180deg);
            }
            78% {
                transform: scale(1.1) rotate(40deg);
            }
            80% {
                transform: scale(1.1) rotate(20deg);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes move3 {
            0% {
                transform: scale(1);
            }
            38% {
                transform: scale(0.9 1) rotate(-100deg);
            }
            40% {
                transform: scale(0.9 1) rotate(-80deg);
            }
            78% {
                transform: scale(1.1 0.9) rotate(20deg);
            }
            80% {
                transform: scale(1.1 0.9) rotate(40deg);
            }
            100% {
                transform: scale(1);
            } */

        </style>

    </head>
    <body>
        <h1 class="title">Tax Allocation</h1>
        <div class="blob" id="state">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name"></div>
            <div class="amount"></div>
        </div>
        <div class="blob" id="welfare">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">WELFARE</div>
            <div class="amount"></div>
        </div>
        <div class="blob" id="education">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">EDUCATION</div>
            <div class="amount"></div>
        </div>
        <div class="blob" id="defense">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">DEFENSE</div>
            <div class="amount"></div>
        </div>
        <div class="blob" id="pension">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">PENSION</div>
            <div class="amount"></div>
        </div>
        <div class="blob" id="healthcare">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">HEALTHCARE</div>
            <div class="amount"></div>
        </div>

        <!-- <script src="js/script.js" charset="utf-8"></script> -->
        <script type="text/javascript">
            const blobs = document.querySelectorAll(".blob svg");
            // console.log(blobs);

            const transformBlob = () => {
                var s1, s2, rot;
                s1 = Math.random() * (1.3 - 0.7) + 0.7;
                s2 = Math.random() * (1.3 - 0.7) + 0.7;
                rot = Math.floor(Math.random() * 100) - 50;

                return [s1, s2, rot];
            };

            let iQ = setInterval(()=> {

                for (var i = 0; i < blobs.length; i++) {
                    var vals = transformBlob();
                    var s1 = vals[0];
                    var s2 = vals[1];
                    var rot = vals[2];
                    // console.log(s1, s2, rot);
                    // console.log(blobs[i]);
                    blobs[i].style.transform = `scale(${s1} ${s2})`;
                    blobs[i].style.transform = `rotate(${rot}deg)`;
                }



            }, 2000);
        </script>
    </body>
</html>
