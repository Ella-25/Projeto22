<?php  //termina a sessão, a destrói e leva ate a página da loja
    session_start();
    session_destroy();
    header("Location: loja.php");
    exit;
?>