<?php
include 'parcial/header.php';
require 'users.php';

if (!isset($_POST['id'])){
    include "parcial/nao_encontrado.php";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: index.php");

?>

<?php include 'parcial/footer.php' ?>