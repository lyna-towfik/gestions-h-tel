<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotels";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Requête SQL avec des jointures explicites
$sql = "SELECT * FROM clients";

$result = $conn->query($sql);

// Vérification de la requête
if (!$result) {
    die("Erreur dans la requête : " . $conn->error);
}

// Affichage des résultats dans le tableau
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID Client</th>
                <th>Nom client</th>
                <th>prenom du client</th>
                <th>numero_tel</th>
                <th>adress_mail</th>
                <th>password</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_client"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["numero"] . "</td>";
        echo "<td>" . $row["adresse_email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermeture de la connexion à la base de données
$conn->close();
?>



