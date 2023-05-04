<?php

// Definindo as informações de conexão com o banco de dados


$host = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "test";

// Criando a conexão
$conexao = mysqli_connect($host, $usuario, $senha, $banco_de_dados);

// Verificando se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Executando uma consulta no banco de dados
$resultado = mysqli_query($conexao, "SELECT * FROM tt_cadastro");

// Loop para exibir os resultados da consulta
while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $linha["id"] . " - Nome: " . $linha["nome"] . "<br>";
}

// Inserir um dado na tabela
$insert = mysqli_query ($conexao, "INSERT INTO tt_cadastro (nome,nascimento) values 
                                ('Marcelo','16101980'");
$inserir = mysqli_insert($insert);

                            

?>