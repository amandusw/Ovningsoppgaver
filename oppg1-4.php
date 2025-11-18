<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Oppgave 1-4 Resultat</title>
</head>
<body>

<nav style="background:hsl(232, 42%, 57%);padding:10px;">
    <a href="index.html" style="color:white;margin-right:20px;">Forside</a>
    Oppgave 1: 
    <a href="oppg1-1.html" style="color:white;margin-right:10px;">1-1</a>
    <a href="oppg1-2.html" style="color:white;margin-right:10px;">1-2</a>
    <a href="oppg1-3.html" style="color:white;margin-right:10px;">1-3</a>
    <a href="oppg1-4.html" style="color:white;margin-right:10px;">1-4</a>
</nav>
<br>

<?php
if (isset($_POST["tall1"]) && isset($_POST["tall2"])) {

    $tall1 = floatval($_POST["tall1"]);
    $tall2 = floatval($_POST["tall2"]);

    $sum = $tall1 + $tall2;
    $diff = $tall1 - $tall2;
    $prod = $tall1 * $tall2;
    if ($tall2 != 0) {
        $quot = $tall1 / $tall2;
    } else {
        $quot = "Uendelig (kan ikke dele på 0)";
    }

} else {
    $error = "Ingen data mottatt.";
}

if (isset($error)) {
    echo "<p>$error</p>";
} else {
    echo "<h2>Resultater:</h2>";
    echo "<p>Tall 1: $tall1</p>";
    echo "<p>Tall 2: $tall2</p>";
    echo "<p>Summen: $sum</p>";
    echo "<p>Differansen: $diff</p>";
    echo "<p>Produktet: $prod</p>";
    echo "<p>Kvotienten: $quot</p>";
}
?>

</body>
</html>
