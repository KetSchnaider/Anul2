<?php
include_once 'configurare.php';
$link = mysqli_connect($host, $user, $password, $database);
/* verificarea concetarii la server si BD*/
if (mysqli_connect_errno()) 
{
    printf("Conecatare nereusita: %s\n", mysqli_connect_error());
    exit();
}
Else
{
//echo "Conecatare la serverul: ".$host."  si la BD: ".$database." este reusita";
}
?>
