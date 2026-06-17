<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        //Personal Details
        $Name = "Drin";
        $LastName = "Hajzeraj";
        $Age = 15;
        $Country = "Kosovo";
        $City = "Prishtina";
        $InfoVal = true;

        //Validate Info
        echo "<div class='info-container'>";
        //Validate Name
        if (strlen($Name) > 10) {
            echo "<p class='info'>Your name is too long and possibly not real!</p>";
            $InfoVal = false;
        }
        //Validate Last name
        if (strlen($LastName) > 15) {
            echo "<p class='info'>Your last name is too long and possibly not real!</p>";
            $InfoVal = false;
        }
        //Validate Age
        if ($Age >= 18) {
            echo "<p class='info'>You are too old to use this website!</p>";
            $InfoVal = false;
        }
        //Validate the Country
        if (strlen($Country) > 56) {
            echo "<p class='info'>Your country's name is too long and not real!</p>";
            $InfoVal = false;
        }
        //Validate the City
        if (strlen($City) > 162) {
            echo "<p class='info'>Your city's name is too long and not real!</p>";
            $InfoVal = false;
        }
        //Run if all validation are correct
        if ($InfoVal == true) {
            echo "<p class='info'>Your full name is $Name $LastName, you are $Age years old and you live in $City, $Country.</p>";
        }
        echo "</div>";
    ?>
</body>
</html>