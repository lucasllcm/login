<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("/cadastro_usuario/css/cadastro_usuario.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/style.css") ?>">
    <title>Cadastro usuário</title>
</head>

<body>
    <div class="container">
        <?php
        echo $this->include('toast');
        ?>
        <div class="form-image">
        </div>
        <form id="form" action="<?= base_url("/cadastrar/usuario/inserir") ?>" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
            </div>
            <div class="field-group">
                <div class=" data-field">
                    <label for="username">Login</label>
                    <input id="username" type="text" name="username" placeholder="Login" required>
                </div>

                <div class="data-field">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="password" placeholder="Senha" required>
                </div>

                <div class="data-field">
                    <label for="confirmPassword">Confirmação de senha</label>
                    <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confimação" required>
                </div>

                <div class="data-field">
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" name="nome" placeholder="Nome" required>
                </div>

                <div class="data-field">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="registration-button">
                <a href="<?= base_url("/") ?>"><button type="button" class="btn btn-warning bttwo">Já tenho uma conta</button></a>
                <button type="submit" class="btn btn-warning bttwo">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>