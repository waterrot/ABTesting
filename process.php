    <?php
    $naam = $_POST["naam"];

    // Counter for tracking the number of redirects to A and B
    $countA = intval(file_get_contents("count_a.txt"));
    $countB = intval(file_get_contents("count_b.txt"));

    // Check lengths and decide redirection
    if ($countA < $countB) {
        $redirectURL = "tekst-a.php";
        $countA++;
        file_put_contents("count_a.txt", $countA);
    } elseif ($countB < $countA) {
        $redirectURL = "tekst-b.php";
        $countB++;
        file_put_contents("count_b.txt", $countB);
    } else {
        // If lengths are equal, randomly decide redirection
        $randomNumber = rand(0, 1);
        $redirectURL = ($randomNumber == 0) ? "tekst-a.php" : "tekst-b.php";
        if ($randomNumber == 0) {
            $countA++;
            file_put_contents("count_a.txt", $countA);
        } else {
            $countB++;
            file_put_contents("count_b.txt", $countB);
        }
    }

    // Redirect the user with redirection information in the URL
    header("Location: $redirectURL?naam=$naam");
    exit();
    ?>