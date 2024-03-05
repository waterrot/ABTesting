<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekst</title>
    <link rel="stylesheet" href="styles.css">

    <script type='text/javascript'>
        window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://web-sdk.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', 'b821808c1cae8cd507c9f1ad48b09e4708ecb8c0', { region: 'eu' });
</script>
</head>

<?php
$naam = $_POST["naam"];
$bestandsnaam = "$naam" . " " . date("m-d-Y H.i.s");
$timestamp1 = date("d F Y H:i:s");
// Retrieve redirection information from the URL
$redirection = isset($_GET['redirection']) ? $_GET['redirection'] : '';
$maakbestand = fopen("$bestandsnaam.txt", "w") or die("Unable to open file!");
fwrite($maakbestand, "naam: $naam \r\nstarttijd: " . $timestamp1 . "\r\n");
// Add redirection information to the text file
fwrite($maakbestand, "redirection: $redirection \r\n");

fclose($maakbestand);
?>

<body class="b">

    <h1>YouTube pakt downloadsites voor video's aan</h1>
    <p>
        YouTube pakt websites aan waarop video's van de site kunnen worden gedownload. Beheerders van zulke
        websites wordt gevraagd te stoppen, anders worden er juridische stappen gezet.
    </p>

    <p>Een van de websites waar YouTube contact mee heeft opgenomen is NinjaTube,
        schrijft&nbsp;<em>Torrentfreak</em> maandag. De videodownloader is volgens YouTube in strijd met de
        servicevoorwaarden.</p>
    <p>In die voorwaarden staat dat het downloaden van video's die van zichzelf geen downloadlink hebben,
        verboden
        is. Videodownloaders zorgen via een omweg alsnog voor een downloadlink.</p>
    <p>YouTube heeft NinjaTube gevraagd binnen zeven dagen te stoppen met de dienst. Als dat niet gebeurt,
        volgen
        er juridische maatregelen.</p>

    <h3>Geen actie</h3>
    <p>NinjaTube heeft laten weten geen actie te ondernemen. "In onze servicevoorwaarden staat dat de
        gebruiker
        verantwoordelijk is voor de legitimiteit van de video's die ze voor onze dienst gebruiken", aldus
        NinjaTube.
    </p>
    <p>De beheerder van de site gelooft niet dat er veel zal gebeuren als hij de website niet offline haalt,
        omdat
        er ook talloze Chrome-extensies bestaan voor het downloaden van video's. Chrome is net als YouTube
        in handen
        van Google.</p>
    <p>In 2012 heeft Google al actie ondernomen tegen websites waarmee het geluid van YouTube-video's kon
        worden
        gedownload. Zo was het bijvoorbeeld mogelijk om de muziek van muziekvideo's te downloaden.</p>

    <h1> Apple mag geen tweedehands iPhones verkopen in India </h1>
    <p>Dat heeft Nirmala Sitharaman, minister van Commercie en Industrie, maandag gezegd, zo meldt de
        Indiase
        nieuwssite <em>Livemint</em>.</p>
    <p>Apple wilde in India 'gereviseerde' iPhones verkopen. Dat zijn toestellen die al door een ander zijn
        gebruikt, maar bijvoorbeeld zijn teruggestuurd wegens ontevredenheid of een mankement.</p>
    <p>Deze toestellen worden door Apple opgelapt en vervolgens weer met garantie verkocht. Het bedrijf doet
        dat
        al in verschillende landen en wilde in India de markt voor tweedehands smartphones betreden om beter
        te
        kunnen concurreren met andere bedrijven die goedkopere smartphones verkopen.</p>
    <p>In India gaat de gemiddelde smartphone over de toonbank voor rond de 150 euro, terwijl iPhones een
        veelvoud
        daarvan kosten. Tim Cook bracht vorige week zijn eerste bezoek aan India als directeur van Apple, en
        pleitte
        daar voor de introductie van gereviseerde iPhones in het land.</p>

    <form method="post" action="thankyou.php">
        <input type="hidden" name="bestandsnaam" value="<?php echo $bestandsnaam; ?>" />
        <input type="submit" name="Stuur" value="Klaar!" class="ready" />
    </form>

</body>

</html>