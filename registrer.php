<?php
 // Tableau pour stocker les erreurs
    $errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Nettoyage des entrées
    $username = trim(htmlspecialchars($_POST["username"] ?? ""));
    $email = trim(htmlspecialchars($_POST["email"] ?? ""));
    $password = $_POST["passeword"] ?? "";
    $confirmPassword = $_POST["confirmPasseword"] ?? "";

    // Validation du nom d'utilisateur
    if (empty($username)) {
        $errors[] = "Le nom d'utilisateur est requis.";
    } elseif (strlen($username) < 3) {
        $errors[] = "Le nom d'utilisateur doit contenir au moins 3 caractères.";
    }

    // Validation de l'email
    if (empty($email)) {
        $errors[] = "L'adresse e-mail est requise.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse e-mail est invalide.";
    }

    // Validation du mot de passe
    if (empty($password)) {
        $errors[] = "Le mot de passe est requis.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Le mot de passe doit contenir au moins 6 caractères.";
    }

    // Vérification de la confirmation du passeword
    if ($password !== $confirmPassword) {
        $errors[] = "Les password ne correspondent pas.";
    }
    if (empty($errors)) {
        echo " Données valides. Prêt à enregistrer dans la base de données.";
     
    } else {
  
        foreach ($errors as $error) {
            echo " " . $error . "<br>";
        }
    }
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