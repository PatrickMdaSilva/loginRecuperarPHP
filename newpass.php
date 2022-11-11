<?php
require_once("conexao.php");

// Campos Recebidos por post

$email = $_POST["email"];


$email = filter_input(INPUT_POST, "email");


$stmt = $conn->prepare("SELECT * FROM users 
WHERE email = :email 
");

$stmt->bindParam(":email", $email);
$stmt->execute();
echo "<br>";

if (($stmt) && ($stmt->rowCount() != 0) && ($stmt->rowCount() < 2)) {
  $dados = $stmt->fetch(PDO::FETCH_ASSOC);
  echo "<br>";
  $chave = $dados["email"] . $dados["password"];
  //return $chave;
  
}else{
  echo "Não possui conta";
}
echo "http://localhost/recuperar/redefinir.php?chave=$chave";
