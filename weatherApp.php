<?php
if (array_key_exists('submit', $_GET)) {
    if (!$_GET['city']) {
        $error = "Sorry! Your Input Field is Empty";
    }
    if ($_GET['city']) {
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . $_GET['city'] . "&appid=923d04d2e3f3aa8b3e8cdba5c9447983");
        $weatherArray = json_decode($apiData, true);
        //Temp kelvin to cencious
        $tempCelcious =  $weatherArray['main']['temp'] - 273;
        $weather = "<b> Temperature: " .  $tempCelcious . " &degC </b> <br>";
        //Weather condition
        $weather .= " <b> Weather Condition: </b>" . $weatherArray['weather']['0']['description'];
    }
}
