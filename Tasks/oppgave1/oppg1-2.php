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

echo '<nav style="background:#333;padding:10px;">
<a href="/index.html" style="color:white;margin-right:20px;">Forside</a>
Oppgave 1: 
<a href="/Tasks/oppgave1/oppg1-1.html" style="color:white;margin-right:10px;">1-1</a>
<a href="/Tasks/oppgave1/oppg1-2.html" style="color:white;margin-right:10px;">1-2</a>
<a href="/Tasks/oppgave1/oppg1-3.html" style="color:white;margin-right:10px;">1-3</a>
<a href="/Tasks/oppgave1/oppg1-4.html" style="color:white;margin-right:10px;">1-4</a>
</nav><br>';

        echo "<h2>God dag $fornavn $etternavn, du er $alder år og like sprek.</h2>";
    } else {
        echo "Ingen data mottatt.";
    }
?>
</body>
</html>

