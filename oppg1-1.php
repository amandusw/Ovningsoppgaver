<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Melding</title>
</head>
<body>
    <?php
        if(isset($_POST["fornavn"]) && isset($_POST["etternavn"])) {
            $fornavn = $_POST["fornavn"];
            $etternavn = $_POST["etternavn"];

echo '<nav style="background:hsl(232, 42%, 57%);padding:10px;">
<a href="index.html" style="color:white;margin-right:20px;">Forside</a>
Oppgave 1: 
<a href="oppg1-1.html" style="color:white;margin-right:10px;">1-1</a>
<a href="oppg1-2.html" style="color:white;margin-right:10px;">1-2</a>
<a href="oppg1-3.html" style="color:white;margin-right:10px;">1-3</a>
<a href="oppg1-4.html" style="color:white;margin-right:10px;">1-4</a>
</nav><br>';

            echo "<h2>God dag $fornavn $etternavn!</h2>";
        } else {
            echo "<h2>Hei. Ingen data er mottatt</h2>";
        }
    ?>
    
</body>
</html>