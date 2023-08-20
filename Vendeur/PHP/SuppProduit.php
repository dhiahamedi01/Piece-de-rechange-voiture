<?php
require 'master.php';
$id_p=$_GET['id'];
$userid= mysqli_real_escape_string($conn, $_POST['userid']);
              $queryd= "DELETE FROM produits WHERE id='$id_p';";
              $del= mysqli_query ($conn,$queryd);
              header("location:../ListeProduit.php");

?>