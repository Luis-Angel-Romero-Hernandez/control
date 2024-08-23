<?php
$Userver ="localhost";
$Uuser = "root";
$Upass="";
$Udb= "inventario_ius";

$con=new mysqli($Userver,$Uuser,$Upass,$Udb);

if($con->connect_errno){
    echo "Ha ocurrido un error";
}
?>