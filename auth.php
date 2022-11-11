<?php
require_once("conexao.php");

// Campos Recebidos por post

$email = $_POST["email"];
$password = $_POST["password"];


$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

$stmt = $conn->prepare("SELECT * FROM users 
WHERE email = :email AND password = :password
");

$stmt->bindValue(":email", $email);
$stmt->bindValue(":password", $password);
$stmt->execute();
echo "<br>";

if (($stmt) && ($stmt->rowCount() != 0) && ($stmt->rowCount() < 2)) {
  echo "Login efetuado com sucesso";
}else {
  echo "Conexao falhou";
}
