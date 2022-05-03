<?php
//conexão
include_once '../php_action/db_connect.php';
//header
include_once '../includes/header.php';
?>

<div > 
    <div class="row">
        <div class="col 12 m6 push-m3">
            <h3 class="light"> Fazer Login </h3>
            <form action="php_action/cadastro.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados ['id'];?>">
                <div class="input-field col s12">
                    <input type="text" name="usuario" id="usuario" value="<?php echo $usuario['usuario'];?>"> 
                    <label for="nome">Usuário</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="senha" id="senha" value="<?php echo $senha['senha'];?>"> 
                    <label for="nome">Senha</label>
                </div>

                <button type="submit" name="btn-login" class="btn green"> Login </button>
                <a href="cadastrar_usuario.php"  type="submit" class="btn"> Registre-se </a>

            </form>    
        </div>
    </div>
</div>
<?php
//footer
include_once '../includes/footer.php';
?>