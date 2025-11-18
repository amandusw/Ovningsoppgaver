<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Hilsen</title>
</head>
<body>
<?php
    if (isset($_POST["fornavn"]) && isset($_POST["etternavn"]) && isset($_POST["alder"])) {
        
        $fornavn = htmlspecialchars($_POST["fornavn"]);
        $etternavn = htmlspecialchars($_POST["etternavn"]);
        $alder = intval($_POST["alder"]); // gjør alder til tall

        echo "<h2>God dag $fornavn $etternavn, du er $alder år og like sprek.</h2>";
    } else {
        echo "Ingen data mottatt.";
    }
?>
</body>
</html>

