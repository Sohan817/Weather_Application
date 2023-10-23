<?php
require_once 'weatherApp.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background-image: url(https://images.unsplash.com/photo-1580193769210-b8d1c049a7d9?auto=format&fit=crop&q=80&w=1474&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-size: cover;
            font-family: poppin, 'Times New Roman', Times, serif;
            font-size: large;
            background-color: white;
            background-attachment: fixed;
        }

        .container {
            text-align: center;
            justify-content: center;
            align-items: center;
            width: 440px;
        }

        h1 {
            font-weight: 700;
            margin-top: 150px;
        }

        input {
            width: 350px;
            padding: 5px;
            background: transparent;
        }

        ::placeholder {
            color: black;
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Search Global Weather</h1>
        <form action="" method="GET">
            <p><label for="city">Enter Your city Name</label></p>
            <p><input type="text" name="city" id="city" placeholder="City Name"></p>
            <button type="submit" name="submit" class="btn btn-success">Search</button>
            <div class="output mt-3">
                <?php
                if (!empty($weather)) {
                    echo '<div class="alert alert-success" role="alert">'
                        . $weather .
                        '</div>';
                }
                if (!empty($error)) {
                    echo '<div class="alert alert-danger" role="alert">'
                        . $error .
                        '</div>';
                }

                ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>