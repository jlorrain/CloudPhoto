<?php
include('../login/verifauth.php');
if ($_SESSION['userId'] == 1) {
    if (isset($_GET['id'])) {

        $id = intval($_GET['id']);
        include("../php/connection.php");
        $req = "UPDATE utilisateur "
                . "SET etat = 1 WHERE userid = " . $id;
        $sql = mysqli_query($bdd, $req) or die(mysql_error());

        header('Location: admin.php');
    } else {
        header('Location: admin.php');
    }
}
?>