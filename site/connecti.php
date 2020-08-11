<?php
$bd = new mysqli('localhost','root','','sitelcp');		

if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: '. mysqli_connect_error());
    exit();
}
?>
