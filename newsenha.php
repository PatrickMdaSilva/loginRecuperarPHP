<?php
require_once("conexao.php");

// Campos Recebidos por post

$email = $_POST["email"];
$password = $_POST["password"];
$chave = $_POST["chave"];


$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");
$chave = filter_input(INPUT_POST, "chave");

$stmt = $conn->prepare("SELECT * FROM users 
WHERE email = :email 
");

$stmt->bindParam(":email", $email);
$stmt->execute();
echo "<br>";

if (($stmt) && ($stmt->rowCount() != 0) && ($stmt->rowCount() < 2)) {
  $dados = $stmt->fetch(PDO::FETCH_ASSOC);
  $chaveCorreta = $dados["email"] . $dados["password"];
  if ($chave == $chaveCorreta) {
    $stmt = $conn->prepare("UPDATE users SET password = :password
    WHERE email = :email 
    ");
    $stmt->bindValue(":password", $password);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
  }
  echo "Senha atualizada com Sucesso";
} else {
  echo "falhou";
}
