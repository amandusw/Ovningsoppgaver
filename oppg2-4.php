<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Oppgave 2-3 Resultat</title>
</head>
<body>

<nav style="background:hsl(232, 42%, 57%);padding:10px;">
    <a href="index.html" style="color:white;margin-right:20px;">Forside</a>
    <a href="oppg2-1.html" style="color:white;margin-right:20px;">Oppgave 2-1</a>
    <a href="oppg2-2.html" style="color:white;margin-right:20px;">Oppgave 2-2</a>
    <a href="oppg2-3.html" style="color:white;margin-right:20px;">Oppgave 2-3</a>
    <a href="oppg2-4.html" style="color:white;margin-right:20px;">Oppgave 2-4</a>
    <a href="oppg2-5.html" style="color:white;margin-right:20px;">Oppgave 2-5</a>
    <a href="oppg2-6.html" style="color:white;margin-right:20px;">Oppgave 2-6</a>
    <a href="oppg2-7.html" style="color:white;margin-right:20px;">Oppgave 2-7</a>
    <a href="oppg2-8.html" style="color:white;margin-right:20px;">Oppgave 2-8</a>
</nav>

<h2>Resultat:</h2>  
<?php

$gift=$_POST["gift"];
$barn=$_POST["barn"];

if(!$gift || !$barn)
    {
        print("Du har ikke svart på spørsmålet.");
    }
    else if ($gift == "j" && $barn == "j") /*(|| $svar == "J" || $svar == "ja" || $svar == "JA")*/
    {
        print("Du er gift og har barn.");
    }
    else if ($gift == "n" && $barn =="n") /*(|| $svar == "N" || $svar == "nei" || $svar == "NEI")*/
    {
        print("Du er ikke gift og har ikke barn.");
    }
    else if ($gift == "j" && $barn =="n")
    {
        print("Du er gift og har ikke barn.");
    }
    else if ($gift == "n" && $barn =="j")
    {
        print("Du er ikke gift og har barn.");
    }
    else
    {
        print("Du har ikke svart ja eller nei på spørsmålet.");
    }

?>
</body>
</html>

 