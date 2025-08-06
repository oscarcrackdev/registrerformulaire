<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire d'inscription</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Formulaire d'inscription</h2>
  <form action="/submit" method="POST">
    <label for="name">Nom :</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Mot de passe :</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirm-password">Confirmer le mot de passe :</label><br>
    <input type="password" id="confirm-password" name="confirm-password" required><br><br>

    <input type="submit" value="S'inscrire">
  </form>
</body>
</html>