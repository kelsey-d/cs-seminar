<?php
// Create connection
$conn =pg_connect("host=localhost dbname=tax user=postgres password=NeptunesBoyos");
// Check connection
if (!$conn) {
   die("Connection failed: " .pg_connect_error());
}

$result = pg_query($conn, "SELECT states,budget,pension,healthcare,defense,education,welfare,transport FROM taxinfo");


$row = pg_fetch_array($result, $_POST["id"]-1);


pg_close($conn);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width,initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tax Allocation</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400&family=Trochut&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/styles1.css">
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style media="screen">
            html{
                box-sizing: border-box;
                /*font-size: 62.5%; *//* 1rem = 10px ems vh vw */
                margin: 0;
                padding: 0;
            }

            body{
                margin: 0;
                padding: 0;
/*                 background-color: rgb(128, 8, 8); */
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
                height: 12.5vw;
                width: 12.5vw;
                overflow: hidden;
                fill: #6495ED;
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
                transition: 1.5s linear;
                transform-origin: 50% 50%;
            }

            .name{
                position: absolute;
                text-align: center;
                text-transform: uppercase;
                font-weight: bold;
                top: 40%;
                width: 100%;
                height: 10%;
            }

            .amount{
                position: absolute;
                text-align: center;
                /* background-color: black; */
                top: 50%;
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
                animation: moveSides1 2s ease-in;
                left: 2.5%;
                bottom: 7.5%;
            }

            #education{
                animation: moveDiag1 2s ease-in;
                top: 25.5%;
                left: 12.67%;
            }

            #defense{
                animation: moveTop 2s ease-in;
                left: 32.5%;
            }

            #transportation{
                animation: moveTop2 2s ease-in;
                left: 52.5%;
            }

            #pension{
                animation: moveDiag2 2s ease-in;
                top: 25.5%;
                right: 12.67%;
            }

            #healthcare{
                animation: moveSides2 2s ease-in;
                /* animation-fill-mode: forwards;
                animation-iteration-count: 1; */
                right: 2.5%;
                bottom: 7.5%;
            }

            #state:hover, #healthcare:hover, #pension:hover, #defense:hover, #education:hover, #welfare:hover, #transportation:hover{
                transform: scale(1, .9);
            }

            @keyframes moveSides1 {
                0% {
                    transform: scale(0.3) skewX(20deg);
                    bottom: -5%;
                    left: 40%;
                }
                10%, 20%, 30%, 40%, 50%, 60%, 70%, 80% { transform: scale(1, .9); }
                15%, 25%, 35%, 45%, 55%, 65%, 75% {transform: scale(.9, 1);}
                100% {
                    transform: scale(1) skewX(0deg);
                    left: 2.5%;
                    bottom: 7.5%;
                }
            }

            @keyframes moveSides2 {
                0% {
                    transform: scale(0.3) skewX(-20deg);
                    bottom: -5%;
                    right: 40%;
                }
                10%, 20%, 30%, 40%, 50%, 60%, 70%, 80% { transform: scale(1, .9); }
                15%, 25%, 35%, 45%, 55%, 65%, 75% {transform: scale(.9, 1);}
                100% {
                    transform: scale(1) skewX(0deg);
                    right: 2.5%;
                    bottom: 7.5%;
                }
            }

            @keyframes moveDiag1 {
                0% {
                    transform: scale(0.3) skewX(20deg);
                    top: 70%;
                    left: 40%;
                }
                10%, 20%, 30%, 40%, 50%, 60%, 70%, 80% { transform: scale(1, .9); }
                15%, 25%, 35%, 45%, 55%, 65%, 75% {transform: scale(.9, 1);}
                100% {
                    transform: scale(1) skewX(0deg);
                    top: 25.5%;
                    left: 12.67%;
                }
            }

            @keyframes moveDiag2 {
                0% {
                    transform: scale(0.3) skewX(-20deg);
                    top: 70%;
                    right: 40%;
                }
                10%, 20%, 30%, 40%, 50%, 60%, 70%, 80% { transform: scale(1, .9); }
                15%, 25%, 35%, 45%, 55%, 65%, 75% {transform: scale(.9, 1);}
                100% {
                    transform: scale(1) skewX(0deg);
                    top: 25.5%;
                    right: 12.67%;
                }
            }

            @keyframes moveTop1 {
                0% {
                    transform: scale(0.3) skewX(20deg);
                    bottom: -5%;
                    left: 40%;
                }
                10%, 20%, 30%, 40%, 50%, 60%, 70%, 80% { transform: scale(1, .9); }
                15%, 25%, 35%, 45%, 55%, 65%, 75% {transform: scale(.9, 1);}
                100% {
                    transform: scale(1) skewX(0deg);
                    bottom: 65%;
                    left: 32.5%;
                }
            }

            @keyframes moveTop2 {
                0% {
                    transform: scale(0.3) skewX(20deg);
                    bottom: -5%;
                    left: 40%;
                }
                10%, 20%, 30%, 40%, 50%, 60%, 70%, 80% { transform: scale(1, .9); }
                15%, 25%, 35%, 45%, 55%, 65%, 75% {transform: scale(.9, 1);}
                100% {
                    transform: scale(1) skewX(0deg);
                    bottom: 65%;
                    left: 52.5%;
                }
            }

            @keyframes jiggle {
                10%, 20%, 30%, 40%, 50%, 60%, 70%, 80% { transform: scale(1, .9); }
                15%, 25%, 35%, 45%, 55%, 65%, 75% {transform: scale(.9, 1);}
            }

        </style>

    </head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
    <a class="navbar-brand ml-2" href="index.html"><b>FAST TAX FACTS</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-2">
           <select id=year name=year>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019" selected>2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
            </select>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="comparison1.html">COMPARE</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="about.html">ABOUT</a>
        </li>

      </ul>
    </div>
  </nav>
    <div class="container">
        <div class="blob" id="state">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name"><?php echo $row["states"]?></div>
            <div class="amount">$<?php echo $row["budget"]?>M</div>
        </div>
        <div class="blob" id="welfare">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">WELFARE</div>
            <div class="amount">$<?php echo $row["welfare"]?>M</div>

        </div>
        <div class="blob" id="education">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">EDUCATION</div>
            <div class="amount">$<?php echo $row["education"]?>M</div>
        </div>
        <div class="blob" id="defense">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">DEFENSE</div>
            <div class="amount">$<?php echo $row["defense"]?>M</div>
        </div>
        <div class="blob" id="transportation">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">TRANSPORT</div>
            <div class="amount">$<?php echo $row["transport"]?>M</div>
        </div>
        <div class="blob" id="pension">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">PENSION</div>
            <div class="amount">$<?php echo $row["pension"]?>M</div>
        </div>
        <div class="blob" id="healthcare">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path  d="M61.9,0.7C61.9,28.5,31,57,-0.8,57C-32.5,57,-64.9,28.5,-64.9,0.7C-64.9,-27.1,-32.5,-54.3,-0.8,-54.3C31,-54.3,61.9,-27.1,61.9,0.7Z" transform="translate(100 100)" />
            </svg>
            <div class="name">HEALTHCARE</div>
            <div class="amount">$<?php echo $row["healthcare"]?>M</div>
        </div>
        </div>
        <!-- <script src="js/script.js" charset="utf-8"></script> -->
        <script type="text/javascript">
            const blobs = document.querySelectorAll(".blob svg");
            // console.log(blobContainers);

            const transformBlob = () => {
                var s1, s2, rot;
                s1 = Math.random() * (1.3 - 0.7) + 0.7;
                s2 = Math.random() * (1.3 - 0.7) + 0.7;
                rot = Math.floor(Math.random() * 200) - 100;

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



            }, 1500);
        </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
