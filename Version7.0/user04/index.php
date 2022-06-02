<?php
$apiKey = "53f7934ac3a80c4bba5a645d76ee6b53"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'imperial'){//Changes the $temp varaible to match 
    $temp = "F"; 
}
else {
    $temp = "C";
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
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
<!--Version 7.0 
    Name:  Logan Swartout
    Date Completed: 5/9/22
-->
<body>
<head>
    <title>All About Shakopee Lacrosse</title>
    <script>
        alert('Welcome to everything about Shakopee Lacrosse. You are going to learn about rosters, records, social media pages, and more.');
       </script>
        <!-- Homepage meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Home Page">
    
        <!-- Bootstrap core JS -->
        <!-- These are needed to get the responsive menu to work -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <!-- Custom styles for this template -->
        <style type="text/css" >
            .menu {
                margin: 0px;
            }
            .navbar-brand {
                background-image: linear-gradient(to bottom right, red, black);
}
            .wideMargin {
                margin: 15px;
            }

            
            #footer {
                font-size: 12px;
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <!---------------------------------- Begin the nav-bar ----------------------------------->
        <div class="menu">
            <nav class="navbar navbar-expand-md navbar-dark bg-danger">
                <a href="http://shakonet.isd720.com" class="navbar-brand">SHAKOPEE LAX</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                        <a href="index.html" class="nav-item nav-link active">Homepage</a>
                        <a href="roster.html" class="nav-item nav-link">2021 Rosters</a>
                        <a href="schedule.html" class="nav-item nav-link enabled" tabindex="-1">Past Records</a>
                        <a href="socials.html" class="nav-item nav-link enabled" tabindex="-1">Social Medias</a>
                       
                        <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                    </div>
                    </div>
                    </nav>
        <!---------------------------------- End the nav-bar ------------------------------------->
              <h2 onmouseover="style.color='red'" onmouseout="style.color='black'" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Shakopee Lacrosse Homepage</h2> 
              <br>
              <font color="#a60011"><h4 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Lacrosse is a big part of Shakopee and if you want to join the community, but need extra information, click the link down below.</h4></font>
              <a href="https://www.shakopeesabers.com/boyslacrosse#:~:text=The%20Shakopee%20Boys%20Lacrosse%20teams,the%20first%20week%20of%20practice." target="_blank">Click me to learn more about Shakopee Lacrosse</a>
                <br>   
              <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Shakopee Lacrosse is a big association and if you are interested in trying it you can sign up for a youth try lacrosse event for ages 5-14 below!</h5>
              <a href="https://www.shakopeelacrosse.org/page/show/3861632-try-lax-clinics" target="_blank">Click me to view the date and times for the free trial</a>
              <h6 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Want to learn about the coaches? Click the link below to see the coaching staff and extra information.</h6>
              <a href="https://cdn1.sportngin.com/attachments/document/a50a-2381673/Shakopee_Boys_HS_Spring_Meeting_2022.pdf#_ga=2.6116214.497247339.1652114569-1939698381.1652114568" target="_blank">Click me to view the coaching staff and more</a>
              
              <br>
              <br>
              <br>
              <br>
              <center><footer class="wideMargin">
                <div>
                    Webpage made by <a href="https://www.instagram.com/logan_swartout/" >Logan Swartout</a>
                </div></center>
            </footer>
            <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
    </body>