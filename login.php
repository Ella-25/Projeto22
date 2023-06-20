<?php
    #ABRE UMA VARIÁVEL DE SESSÃO
    session_start();

    #SOLICITA O ARQUIVO CONECTADB
    include("conectadb.php");

    #EVENTO APÓS O CLICK NO BOTÃO LOGAR
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome']; #recebe de um metodo post o que vier escrito no html
        $senha = $_POST['senha'];

        #QUERY DE BANCO DE DADOS
        $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome = '$nome' AND usu_senha = '$senha'";
        $retorno = mysqli_query($link, $sql);  #o retorno abre uma conexão de query passando o link ($servidor, $banco, $usuario, $senha)

        #TODO RETORNO DO BANCO É RETORNADO EM ARRAY EM PHP
        while($tbl = myslqi_fetch_array($retorno))
        {
            $cont = $tbl[0];
        }

        #VERIFICA SE O USUÁRIO EXISTE
        #SE $CONT == 1 ELE EXISTE E FAZ LOGIN
        #SE $CONT == 0 ELE NÃO EXISTE E O USUÁRIO NÃO ESTÁ CADASTRADO

        if($cont == 1){
            $sql = "SELECT & FROM usuarios WHERE usu_nome = '$nome' and usu_senha = '$senha' AND usu_ativo = 's'"; #verifica se está ativo além de existir

            #DIRECIONA USUÁRIO PARA ADM
            echo"<script>window.location.href='admhome.php';</script>";
        }
        else{
            echo"<script>window.alert('USUÁRIO OU SENHA INCORRETO');</script>";
        }
    }
?>
<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "./css/estiloadm.css">
    <title>LOGIN USUÁRIO</title>
</head>
<body>
    <form action= "login.php" method= "post">
        <h1>LOGIN DE USUÁRIO</h1>
        <input type="text" name="nome" placeholder="NOME">
        <p></p>
        <input type="password" name="senha" placeholder="SENHA">
        <p></p>
        <input type="submit" name="login" value="LOGIN">
    </form>
</body>
</html>