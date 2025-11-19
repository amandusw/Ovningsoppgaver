<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Oppgave 1-2 Resultat</title>
</head>
<body>

<nav style="background:hsl(232, 42%, 57%);padding:10px;">
    <a href="index.html" style="color:white;margin-right:20px;">Forside</a>
    <a href="oppg1-1.html" style="color:white;margin-right:20px;">Oppgave 1-1</a>
    <a href="oppg1-2.html" style="color:white;margin-right:20px;">Oppgave 1-2</a>
    <a href="oppg1-3.html" style="color:white;margin-right:20px;">Oppgave 1-3</a>
    <a href="oppg1-4.html" style="color:white;margin-right:20px;">Oppgave 1-4</a>
</nav>

<?php
    if (isset($_POST["fornavn"]) && isset($_POST["etternavn"]) && isset($_POST["alder"])) {
        
        $fornavn = htmlspecialchars($_POST["fornavn"]);
        $etternavn = htmlspecialchars($_POST["etternavn"]);
        $alder = intval($_POST["alder"]);

        echo "<h2>God dag $fornavn $etternavn, du er $alder år og like sprek.</h2>";
    } else {
        echo "Ingen data mottatt.";
    }
?>
</body>
</html>

