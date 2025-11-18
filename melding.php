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

            echo "<h2>God dag $fornavn $etternavn!</h2>";
        } else {
            echo "<h2>Hei. Ingen data er mottatt</h2>";
        }
    ?>
    
</body>
</html>