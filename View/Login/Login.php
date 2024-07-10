<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./Login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header>
        <nav>
            <a href="../Cadastro/Cadastro.php"><span class="mdi mdi-arrow-left"></span></a>
        </nav>
    </header>

    <div class="centralizaConteudo">
        <main>
            <div class="containerPaiForm">
                <div class="containerBemVindo">
                    <h1>Bem Vindo!</h1>
                    <p id="marginParagrafoCadastro">Não tem nenhum cadastro?</p>
                    <p class="marginSegundoParagrafoCadastro">por favor realize seu cadastro clicando aqui abaixo</p> 
        
                    <div class="divPaiLinkCadastro">
                        <div class="divFilhoLinkCadastro" id="marginLinkCadastro">
                            <a href="../Cadastro/Cadastro.php" class="linkCadastro">Cadastrar</a>
                        </div>
                    </div>
                </div>

                <div class="containerForm">
                    <form method="post" action="../../Controller/usuarioController.php?action=login">
                        <div>
                            <h1>Login</h1>
                            <p>Use seu email para entrar</p>
                        </div>
                        <div class="divInputPai">
                                    
                            <div class="divInputFilho">
                                <span class="mdi mdi-email"></span>
                                <input type="text" name="email" id="idEmail" placeholder="Email" value="<?php  if(isset($_COOKIE['senha'])){echo $_COOKIE['email'];}?>">
                            </div>

                            <div class="divInputFilho">
                                <span class="mdi mdi-lock"></span>
                                <input type="password" name="senha" id="idSenha" placeholder="Senha"  value="<?php if(isset($_COOKIE['senha'])){echo $_COOKIE['senha'];}?>">
                            </div>

                            <div class="divFilhoInputLembrarSenha">
                                <label class="labelLembrarSenha" for="lembrarSenha"><br>Lembrar senha</label>
                                <input type="checkbox" name="lembrarSenha">
                            </div>
            
                            <div class="divFilhoInputLogar">
                                <input type="submit" value="Entrar" name="enviarForm">
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