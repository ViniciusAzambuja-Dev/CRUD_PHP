<?php
    session_start();
    include_once('constantesMensagens.php');
    if(isset($_SESSION['idusuarios'])) {
   
        session_destroy();
        session_unset();

        if(isset($_COOKIE['email']) || isset($_COOKIE['senha'])) {
            setcookie("email", '', time() - 3600, "/");
            setcookie("senha", '', time() - 3600, "/");
        }

   
        
        exibirMensagem(ConstantesMensagens::SUCESSO_SAIR, '../View/Login/Login.php' );
    } 

    else {
  
        exibirMensagem(ConstantesMensagens::ERRO_SAIR, '../View/Home/Home.php' );
    }

    function exibirMensagem($codigoErro, $redirectUrl) {
        $mensagem = '';
        switch ($codigoErro) {
            case ConstantesMensagens::SUCESSO_SAIR:
                $mensagem = 'SUCESSO: Logout efetuado com sucesso!';
                break;
            case ConstantesMensagens::ERRO_SAIR:
                $mensagem = 'ERRO: Você não pode sair pois não está logado!';
                break;
        }
        echo "<script>alert('$mensagem'); window.location.href='$redirectUrl';</script>";
    }
?>