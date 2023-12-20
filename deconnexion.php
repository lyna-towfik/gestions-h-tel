<?php
// Démarrez la session si elle n'est pas déjà démarrée
session_start();

// Détruisez toutes les variables de session
session_unset();

// Détruisez la session
session_destroy();

// Redirigez l'utilisateur vers la page d'accueil
header("Location: index.html");
exit();
?>