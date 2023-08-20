<?php

require 'master.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Poid = $_POST["Poid"];
    $Nom = $_POST["Nom"];
    $Couleur = $_POST["Couleur"];
    $Fabrication = $_POST["Fabrication"];
    $Nombre = $_POST["Nombre"];
    $Tag = $_POST["Tag"];
    $Qualite = $_POST["Qualite"];
    $Prix = $_POST["Prix"];
    $condition = $_POST["condition"];
    $description = $_POST["description"];
    $Marque = $_POST["Marque"];
    $Type = $_POST["Type"];
    $Categorie=$_POST["Categorie"];
    $model=$_POST["model"];
    $Vendeur="Belgacem";

    if (isset($_FILES['my_picture']) && $_FILES['my_picture']['error'] === UPLOAD_ERR_OK) {
        $image = addslashes($_FILES['my_picture']['tmp_name']);
        $name  = addslashes($_FILES['my_picture']['tmp_name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
    } else {
        echo "error";   
    }


    $sql = "INSERT INTO produits (Poid, Nom, Couleur, Fabrication, Nombre, Tag, Qualite, Prix, `condition`, description, Marque, Type, picture,Categorie,Model,Vendeur) 
            VALUES ('$Poid', '$Nom', '$Couleur', '$Fabrication', '$Nombre', '$Tag', '$Qualite', '$Prix', '$condition', '$description', '$Marque', '$Type', '$image','$Categorie','$model','$Vendeur')";

    if (mysqli_query($conn, $sql)) {
        $message = "The product has been added successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 1; url=../Produit.php'); 
    } else {
        $message = "Error while adding the product";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
