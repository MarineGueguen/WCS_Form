<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
<?php
$nameErr = $topicErr = $phoneErr = $emailErr = $messageErr = "";
$firstName = $lastName = $topic = $phone = $email = $message = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['firstName']) || empty($_POST['lastName'])) {
        $nameErr = "Merci de renseigner votre nom complet. <br>";
    } else {
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
        $nameErr = "Seules des lettres et des espaces sont autorisés dans votre prénom.<br>";
        } 
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
            $nameErr = "Seules des lettres et des espaces sont autorisés dans votre nom.<br>";
        } 
    } 
    
    if (empty($_POST["email"])) {
        $emailErr = "Merci de renseigner votre email.<br>";
      } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Merci de renseigner un email valide.<br>";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Merci de renseigner votre numéro de téléphone.<br>";
    } else {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("#[0][1-9][- \.?]?([0-9][0-9][- \.?]?){4}$#", $phone)) {
            $phoneErr = "Merci de renseigner un numéro de téléphone valide.<br>";
        }
    }

    if (empty($_POST["topic"])) {
        $topicErr = "Veuillez choisir une catégorie.<br>";
    } else {
        $topic = test_input($_POST["topic"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Veuillez écrire votre message.<br>";
    } else {
        $message = test_input($_POST["message"]);
    }

    if (empty($nameErr) && empty($topicErr) && empty($phoneErr) && empty($emailErr) && empty($messageErr = "")) {
        echo "Merci " . htmlspecialchars($_POST['firstName']) . " " . htmlspecialchars($_POST['lastName']) . " de nous avoir contacté à propos de “" . htmlspecialchars($_POST['topic']) . "”. <br>Un de nos conseiller vous contactera soit à l’adresse " . htmlspecialchars($_POST['email']) . " ou par téléphone au " . htmlspecialchars($_POST['phone']) . "dans les plus brefs délais pour traiter votre demande :<br>" . htmlspecialchars($_POST['message']);
    } else {
        echo $nameErr, $topicErr, $emailErr, $phoneErr, $messageErr;
    }

    
}

?>
</body>
</html>