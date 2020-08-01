<?php
$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$perfil = $_REQUEST['perfil'];
$datacadastro = $_REQUEST['datacadastro'];

require("../connections/conn.php");
$sql = "update usuarios set nome='$nome',email='$email' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../usuarios.php'>";
mysqli_close($conn);
?>
