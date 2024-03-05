<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <link rel="stylesheet" href="styles.css">

    <!-- Hotjar Tracking Code for https://www.staff.science.uu.nl/~nimwe105/a/ 

HIER KOMT DE TRACKING CODE VAN HOTJAR!!

-->
</head>

<?php
$bestand = $_POST['bestandsnaam'];
$starttijd = $_POST["starttijd"];
$timestamp2 = date("d F Y H:i:s");
$eindbestand = fopen("$bestand.txt", "a+") or die("Unable to open file!");

// Calculate the time spent on the website
$starttime = strtotime($starttijd);
$endtime = strtotime($timestamp2);
$timespent_seconds = $endtime - $starttime;

// Convert seconds to a readable format
$timespent_readable = gmdate("H:i:s", $timespent_seconds);

// Append the end time and time spent to the text file
fwrite($eindbestand, "\r\neindtijd: $timestamp2 \r\ntijd op de website: $timespent_readable \r\n");
fclose($eindbestand);
?>

<body>
    <p>Bedankt om deel te nemen!</p>
</body>

</html>