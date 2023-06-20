<?php
    ## ARQUIVO DE ACESSO AO BANCO DE DADOS ##
    ## ALERTA EM MODO PROFISSIONAL ARQUIVO DEVE SE MANTER OCULTO E PROTEGIDO ##

    ## LOCALIZA O PC OU SERVIDOR COM O BANCO DE DADOS (NOME DO COMPUTADOR)
    $servidor = "localhost:3307";
    ## NOME DO BANCO
    $banco = "projeto22";
    ## USUÁRIO DE ACESSO
    $usuario = "administrador";
    ## SENHA DO USUÁRIO
    $senha = "123";

    ## LINK DE CONEXÃO
    $link = mysqli_connect($servidor, $usuario, $senha, $banco);
?>