<?php

include('./php/classpessoas.php');


$nome = $_POST ['nome'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];
$endereco = $_POST ['endereco'];
$mensagem = $_POST ['mensagem'];
$pessoa = new Pessoa('-1',$nome, $telefone, $email, $endereco, $mensagem);


$pessoa->salvarPessoa();

require('./index.html');

?>