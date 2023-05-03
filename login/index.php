<?php 
require_once("conexao.php");

/*
//CRIAR AUTOMATICAMENTE O USUARIO ADMIN
$query = $pdo->query("SELECT * FROM users where nivel = 'admin'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg == 0){
	$res = $pdo->query("INSERT INTO users SET nome = 'Administrador', cpf = '00000000000', email = '$email_admin', senha = '123', nivel = 'admin'");	
}
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Marthec Desenvolvimento">
        <title><?php echo $title ?></title>
        <link rel="icon" href="img/icone.ico" type="image/x-icon">
        <link rel="stylesheet" href="style/style.css">
    </head>

<body>

<div class="login">
    <div align="center" class="img">
        <img src="img/logo-branca.png" width="270">
    </div>
    <form method="post" action="autenticar.php">
        <input class="input" type="text" name="email" placeholder="Email" required="required" />
        <input class="input" type="password" name="senha" placeholder="Senha" required="required" />
        <button type="submit" class="btn">Logar</button>
        <!--
        <div align="center" class="mt-2">
            <small><a href="" data-toggle="modal" data-target="#modalRecuperar" title="Clique para Recuperar sua Senha" class="text-light">Recuperar Senha?</a></small>
        </div>
        -->
    </form>
</div>
<p>Página de demonstração de Login para Portifólio em PHP!</p>
<p>Dados meramente fictícios!</p>
</body>

</html>