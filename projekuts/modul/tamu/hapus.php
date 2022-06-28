<?php 
            $sever ='localhost';
            $usernm ='root';
            $pass = '';
            $db = 'bukutamu';

  $conn = mysqli_connect($sever,$usernm,$pass);
    mysqli_select_db($conn,$db) or die ('I cannot connect to database because: '.mysqli_error());


?>

<?php

$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM tamu WHERE id=$id");
header("Location:index_lihat.php");


?>