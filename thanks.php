<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
<p>Merci <?= $_POST['firstName'];?> <?= $_POST['lastName'];?> de nous avoir contacté à propos de “<?= $_POST['topic'];?>”.

Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['email'];?> ou par téléphone au <?= $_POST['phone'];?> dans les plus brefs délais pour traiter votre demande : 

<?= $_POST['message'];?></p>
</body>
</html>