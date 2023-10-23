<?php
if (array_key_exists('submit', $_GET)) {
    if (!$_GET['city']) {
        $error = "Sorry! Your Input Field is Empty";
    }
    if ($_GET['city']) {
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . $_GET['city'] .
            "&appid=923d04d2e3f3aa8b3e8cdba5c9447983");
        $weatherArray = json_decode($apiData, true);
        if ($weatherArray['cod'] == 200) {
            //Temp kelvin to cencious
            $tempCelcious =  $weatherArray['main']['temp'] - 273;
            $temfeel = $weatherArray['main']['feels_like'] - 273;
            $weather = "<b>" . $weatherArray['name'] . ", " . $weatherArray['sys']['country'] . " : " .
                intval($tempCelcious) . " &deg;C </b> <br>";
            $weather .= "<b>Feels Like: </b>" . "<b>" . intval($temfeel) . "</b>" . " <b>&deg;C </b> <br>";
            //Weather condition
            $weather .= " <b> Weather Condition: </b>" . $weatherArray['weather']['0']['description'] . "<br>";
            $weather .= " <b> Atmosperic Pressure: </b>" . $weatherArray['main']['pressure'] . "hpa <br>";
            $weather .= " <b> Wind Speed: </b>" . $weatherArray['wind']['speed'] . " ms <br>";
            $weather .= " <b> Cloudness: </b>" . $weatherArray['clouds']['all'] . " % <br>";
            date_default_timezone_set("Asia/Dhaka");
            $sunrise = $weatherArray['sys']['sunrise'];
            $weather .= " <b>Sunrise: </b>" . date('g:i a', $sunrise) . "<br>";
            $sunset = $weatherArray['sys']['sunset'];
            $weather .= " <b>Sunset: </b>" . date('g:i a', $sunset);
        } else {
            $error = "Couldn't be process, Your city name is not valid";
        }
    }
}
