<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<!-- METHODE GET -->
<!-- <body>
  <form  action=""  method="get">
  <div>
    <label  for="nom">Nom :</label>
    <input  type="text"  id="nom"  name="user_name">
  </div>
  <div>
    <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email">
  </div>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Envoyer votre message</button>
  </div>
</form> -->

<!-- METHODE POST -->
<body>
  <form  action="thanks.php"  method="post" class="form">
    <label for="subject">Choisir :</label>
    <select name="form_subject" id="subject">
      <option value="achat">Achat</option>
      <option value="vente">Vente</option>
      <option value="location">Location</option>
    </select>
    <div>
    <label  for="prenom">Prénom :</label>
    <input  type="text"  id="prenom"  name="user_lastname">
  </div>
  <div>
    <label  for="nom">Nom :</label>
    <input  type="text"  id="nom"  name="user_name">
  </div>
  <div>
    <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email">
  </div>
  <div>
    <label  for="numero">Téléphone :</label>
    <input  type="tel"  id="numero"  name="user_number">
  </div>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Envoyer votre message</button>
  </div>
</form>

<!-- <?php
  var_dump($_POST);
  echo  $_POST['user_name'];
?> -->

</body>
</html>