<?php
// You can write PHP logic here
$message = "Hello World!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Webpage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <p>Welcome to my first PHP webpage!</p>
</body>
</html>
