<?php
$apiKey = "9dbc162b926f68ce060525b3d21ef54a"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial"; //metric-Celcius  imperial-Farhenheit
if ($units == 'metric') { //Changes the $temp varaible to match 
    $temp = "C";
} else {
    $temp = "F";
}
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<html lang="en">
<!--Version 4.0 
        Name:
        Date Completed:
        -->

<head>

    <head>
        <script language="javascript" type="text/javascript">
            alert("Superheroes vs Villians")
        </script>
    </head>
    <font face="TimesNewRoman"><span style="font-size: 10pt; text-decoration: none"></span></a></font>

</head>



</html>
<!DOCTYPE html>
<html lang="en">
<!--Version 4.0
            Name:
            Date Completed:
        -->

<head>

    <title>Superheroes and Villians</title>
    <link rel="shortcut icon" type="image/x-icon" href="TheflashFAV.png" />

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebDev Version 4.0">

    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- Custom -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
        menu {
            margin: 0;
            padding: 0;

        }

        .wideMargin {
            margin: 5px;
            background-color: rgb(255, 0, 0);
            border: 2px solid;
        }

        footer {
            font-size: 12px;
            text-align: center;
        }

        .page-footer {
            background-color: gold;
        }

        .title-large {
            background-color: gold;
        }

        .text-left {
            background-color: gold;
        }

        .topnav a:hover {
            border-bottom: 5px solid red;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }
    </style>
</head>

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <menu>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="index.html">CP Page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto topnav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Top10S.html">Top 10 Superheroes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Top10V.html">Top 10 Villains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Honorable Mentions.html">Honerable Mentions</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Top10S.html">Superheroes</a>
                            <a class="dropdown-item" href="Top10V.html">Villians</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Honorable Mentions.html">Honorable Mentions</a>
                        </div>
                </ul>
            </div>
        </nav>
    </menu>
    <!---------------------------------- End the nav-bar ------------------------------------->

    <main class="wideMargin">

        <h1 class="text-left my-3 title" tabindex="0">Chanmackara Proeun Webpage</h1>

        <!-- Edit this line for the title of your page -->

        <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Put your content below this line ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
        <h3 class="title title-large" id="topHeading">Marvel and DC</h3>

        <div style="padding-top: 5px;">
            <!-- spacing div-->


            <span class="title title-large">DC</span>

            <div class="content">
                <img src="DC.jpeg" class="left" alt="DC Picture width=" 200" height="200"></td>
            </div>

            <span class="title title-large">MARVEL</span>

            <div class="content">
                <img src="Marvel.jpeg" class="left" alt="Marvel Picture width=" 200" height="200"></td>
            </div>

            <span class="title title-large">DC VS MARVEL</span>

            <div class="content">
                <img src="MarvelVDC.jpeg" class="left" alt="Marvel VS DC Picture width=" 200" height="200"></td>
            </div>



            <marquee>Which is better Marvel or Dc?</marquee>
            <span style="background-color: gold">Highlighted text</span>

            <marquee behavior=alternate width="202″ scrollamount=" 8″ scrolldelay="95″ height=" 37″ backgroundcolor="#00FFFF">Bouncy text</marquee>

            <select>

                <option value="">Select an option</option>
                <optgroup label="Action">
                    <option value="">Avengers</option>
                    <option value="">Die Hard</option>
                    <option value="">Fast &amp; Furious</option>
                    <option value="">The Dark Knight</option>
                    <option value="">The Karate Kid</option>
                </optgroup>
                <optgroup label="Animation">
                    <option value="">Despicable Me</option>
                    <option value="">Ice Age</option>
                    <option value="">Kung Fu Panda</option>
                    <option value="">Madagascar</option>
                    <option value="">The Lion King</option>
                </optgroup>
                <optgroup label="Horror">
                    <option value="">Mirrors</option>
                    <option value="">Scream</option>
                    <option value="">The Final Destination</option>
                    <option value="">The Grudge</option>
                    <option value="">The Ring</option>
                </optgroup>

            </select>

            <div class="report-container">
                <h2><?php echo $data->name; ?> Weather Status</h2>
                <div class="time">
                    <div><?php echo date("l g:i a", $currentTime); ?></div>
                    <div><?php echo date("jS F, Y", $currentTime); ?></div>
                    <div><?php echo ucwords($data->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
                </div>
                <div class="time">
                    <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                    <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                </div>
            </div>









            <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Make sure all your content is above this line ↑↑↑↑↑↑↑↑↑-->
    </main>

    <!---------------------------------- Begin the footer ------------->
    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Form -->
                    <form class="form-inline">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">

                    </form>
                    <!-- Form -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
                        </div>
                    </form>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="/"> Chanmackara Proeun</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!---------------------------------- End the footer ------------->
</body>

</html>