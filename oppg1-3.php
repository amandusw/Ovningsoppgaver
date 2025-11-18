<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Oppgave 1-3 Resultat</title>
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
$tall1 = floatval($_POST["tall1"]);
$tall2 = floatval($_POST["tall2"]);
$sum = $tall1 + $tall2;
$diff = $tall1 - $tall2;
?>

<br>
<h2>Resultater:</h2>
<p>Tall 1: <?= $tall1 ?></p>
<p>Tall 2: <?= $tall2 ?></p>
<p>Summen: <?= $sum ?></p>
<p>Differansen: <?= $diff ?></p>
</body>
</html>
