<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Oppgave 2-5 Resultat</title>
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

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];

if($tall3 == 1)
    {
        $resultat = $tall1 + $tall2;    
        print("Tall 1: $tall1<br>");
        print("Tall 2: $tall2<br>");
        print("Regneoperasjon: Addisjon<br>");
        print("Resultatet av addisjonen er: $resultat");
    }
 else if($tall3 == 2)
    {
        $resultat = $tall1 - $tall2;
        print("Tall 1: $tall1<br>");
        print("Tall 2: $tall2<br>");
        print("Regneoperasjon: Subtraksjon<br>");
        print("Resultatet av subtraksjonen er: $resultat");
    }
 else if($tall3 == 3)
    {
        $resultat = $tall1 * $tall2;
        print("Tall 1: $tall1<br>");
        print("Tall 2: $tall2<br>");
        print("Regneoperasjon: Multiplikasjon<br>");
        print("Resultatet av multiplikasjonen er: $resultat");
    }
 else if($tall3 == 4)
    {
        if($tall2 == 0)
            {
                print("Divisjon med null er ikke tillatt.");
            }
        else
            {
                $resultat = $tall1 / $tall2;
                print("Tall 1: $tall1<br>");
                print("Tall 2: $tall2<br>");
                print("Regneoperasjon: Divisjon<br>");
                print("Resultatet av divisjonen er: $resultat");
            }
    }
 else
    {
        print("Ugyldig regneoperasjon valgt.");
    }

?>
</body>
</html>

 