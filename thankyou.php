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
$timestamp2 = date("d F Y H:i:s");
$eindbestand = fopen("$bestand.txt", "a+") or die("Unable to open file!");
fwrite($eindbestand, "eindtijd : " . $timestamp2);
fclose($eindbestand);
?>

<body>
    <p>Bedankt om deel te nemen!</p>
</body>

</html>