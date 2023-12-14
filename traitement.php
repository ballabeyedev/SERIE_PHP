<?php

if (isset($_POST["action"])) {
    $action = $_POST["action"];

    switch ($action) {
        case "Vendre":
            header("Location: vendre.php");
            break;
        case "Acheter":
            header("Location: acheter.php");
            break;
        case "Louer":
            header("Location: louer.php");
            break;
        default:
            header("Location: exercice14.php");
            break;
    }
}
?>