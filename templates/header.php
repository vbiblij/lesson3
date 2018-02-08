<?php
	require_once '/var/www/html/lesson3/vendor/autoload.php';
	
	\App\Connect::$db = new \PDO('mysql:host=localhost;dbname=lesson3', 'root', 'vjq vjnsktr pfxtv ktnbi r juy.');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WALL</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>