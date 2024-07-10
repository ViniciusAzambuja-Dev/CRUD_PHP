<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./Cadastro.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header>
        <nav>
            <a href="../Home/Home.php"><span class="mdi mdi-arrow-left"></span></a>
        </nav>
    </header>

    <div class="centralizaConteudo">
        <main>
            <div class="containerPaiForm">
                <div class="containerBemVindo">
                    <h1>Bem Vindo!</h1>
                    <p id="marginParagrafoLogin">Para continuar conectado conosco</p>
                    <p class="marginSegundoParagrafoLogin">por favor realize seu login com as suas</p> 
                    <p class="marginTerceiroParagrafoLogin">informações pessoais!</p>

                    <div class="divPaiLinkLogin">
                        <div class="divFilhoLinkLogin" id="marginLinkLogin">
                            <a href="../Login/Login.php" class="linkLogin">Login</a>
                        </div>
                    </div>
                </div>

                <div class="containerForm">
                    <form method="post" action="../../Controller/usuarioController.php?action=cadastro">
                        <div>
                            <h1>Cadastro</h1>
                            <p>Use seu email para cadastrar</p>
                        </div>
                        <div class="divInputPai">
                                    
                            <div class="divInputFilho">
                                <span class="mdi mdi-email"></span>
                                <input type="text" name="email" id="idEmail" placeholder="Email">
                            </div>

                            <div class="divInputFilho">
                                <span class="mdi mdi-lock"></span>
                                <input type="password" name="senha" id="idSenha" placeholder="Senha">
                            </div>

                            <div class="divFilhoInputCadastrar">
                                <input type="submit" value="Cadastrar" name="enviarForm">
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
  <footer class="footer">
    <sup>©</sup>2024 - Todos os direitos Reservados
  </footer>

</body>
</html>