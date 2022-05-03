<?php
//header
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col 12 m6 push-m3">
        <h3 class="light"> Novo usuário</h3>
        <form action="php_action/createUser.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="login" id="login"> 
                <label for="nome">Login</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="senha" id="senha"> 
                <label for="nome">Senha</label>
            </div>

            <button type="submit" name="btn-cadastrarUsuario" class="btn"> Cadastrar </button>
            <a href="login.php"  type="submit" class="btn red"> Voltar </a>

        </form>
    </div>
</div>


<?php
//footer
include_once '../includes/footer.php';
?>