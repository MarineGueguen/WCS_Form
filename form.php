<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form  action="thanks.php"  method="POST">
        <div>
            <label  for="lastname">Nom :</label>
            <input  type="text"  id="lastname"  name="lastName" required>
        </div>

        <div>
            <label  for="firstname">Prénom :</label>
            <input  type="text"  id="firstname"  name="firstName" required>
        </div>

        <div>
            <label  for="email">Email :</label>
            <input  type="email"  id="email"  name="email" required>
        </div>

        <div>
            <label  for="phone">Téléphone :</label>
            <input  type="tel"  id="phone"  name="phone" required>
        </div>

        <div>
            <label  for="topic">Sujet :</label>
            <select  id="topic"  name="topic" required>
            <option value="">--Choisir un sujet--</option>
            <option value="Prendre RDV">Prendre RDV</option>
            <option value="Obtenir des informations">Obtenir des informations</option>
            <option value="S'inscrire à l'expédition au Pôle Sud">S'inscrire à l'expédition au Pôle Sud</option>
            </select>
        </div>

        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="message" required></textarea>
        </div>

        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>

    </form>
</body>
</html>