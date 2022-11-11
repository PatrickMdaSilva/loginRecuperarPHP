

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<?php
$chave = "";

if($_GET["chave"]){
  $chave = $_GET["chave"];
  
?>
<body>
  <div class="main-container">
    <form action="newsenha.php" id="alterar" method="POST">
      <input type="hidden" name="chave" value="<?php echo $chave; ?>">
      <h1>Nova senha</h1>
      <label for="User">Usiário</label><br>
      <input type="email" name="email"><br>
      <br>
      <label for="senha">Senha</label><br>
      <input type="password" name="password"><br><br>
      <button type="submit" value="enviar">Enviar</button>
    </form>
  </div>
  <?php

}else{
  echo'<div class="main-container">
    
      <h1>Sem acesso</h1>
      
  </div>';
}
?>
  
</body>
</html>