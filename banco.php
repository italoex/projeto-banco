<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'projetobanco';
$bdSenha = 'banco';
$bdBanco = 'tarefas';
$conexao = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if ($conexao -> connect_errno) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();}
?>
