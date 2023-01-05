<?php
function conectar(){
    $host="sql107.epizy.com";
    $user="epiz_32023618";
    $pass="k8YNkVymfzy7I";

    $bd="epiz_32023618_jvh_tutoriales";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
