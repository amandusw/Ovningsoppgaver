<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Oppgave 2-1 Resultat</title>
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

$svar=$_POST["svar"];

if(!$svar)
    {
        print("Du har ikke svart på spørsmålet.");
    }
    else if ($svar == "j")
    {
        print("Du har svart ja på spørsmålet.");
    }
    else if ($svar == "n")
    {
        print("Du har svart nei på spørsmålet.");
    }
    else 
    {
        print("Du har ikke svart ja eller nei på spørsmålet.");
    }

?>
</body>
</html>

 