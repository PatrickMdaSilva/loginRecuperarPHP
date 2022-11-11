<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="main-container">
    <form action="auth.php" id="login" method="POST">
      <h1>login</h1>
      <label for="User">Usiário</label><br>
      <input type="email" name="email"><br>
      <br>
      <label for="senha">Senha</label><br>
      <input type="password" name="password"><br><br>
      <button type="submit" value="enviar">Enviar</button>
    </form>
    <p>Esqueceu a senha click <a href="forget.php">aqui</a></p>
  </div>

  
</body>
</html>