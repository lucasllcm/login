<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/login/css/cadastro.css") ?>">
    <title>Cadastro usuário</title>
</head>

<body>
    <form id="form" action="<?= base_url("login") ?>" method="POST">
        <div class="form-header">
            <div class="title">
                    <h1>Cadastre-se</h1>
            </div>
        </div>
        <div class="field-group">
            <div class="data-field">
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="data-field">
                <label for="password">Senha:</label>
                <input id="password" type="password" name="password" placeholder="Senha" required>
            </div>
        </div>
        <div class="registration-button">
            <a href="<?= base_url("/") ?>"><button type="button" class="btn btn-warning bttwo">Já tenho uma conta</button></a>
            <button type="submit" class="btn btn-warning bttwo">Cadastrar</button>
        </div>
    </form>
</body>
</html>