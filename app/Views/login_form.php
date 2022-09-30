<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url("/login/css/login1.css") ?>">
</head>
<body>

  <?php
    if ( $msgErro != null){
     ?>
        <div class="alert alert-danger" role="alert">
          <?= $msgErro ?>
        </div>
      <?php
    }
  ?>

  <form method="post" action="<?= base_url ('login') ?>">
    <h1>Login</h1>
    <div class="form">
      <label class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email">
    </div>
    <div class="form">
      <label class="form-label">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
    </div>
    <button type="submit" class="btn">Entrar</button>
  </form>
  
</body>
</html>