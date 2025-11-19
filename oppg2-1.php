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
</nav>>

<?php
    
$svar=$_POST["svar"];

if($svar == "9") /*Avgitt svar er riktig*/
    {
        print("Riktig. 3 ganger 3 er 9.");
    }
    else /*Avgitt svar er feil*/
    {
        print("Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9.");
    }

?>
</body>
</html>

