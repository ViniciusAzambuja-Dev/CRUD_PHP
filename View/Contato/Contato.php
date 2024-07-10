<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrabalhoWeb</title>
    <link rel="stylesheet" href="./Contato.css">
</head>
<body>
    <header>
        <nav>
            <div class="divPaiCookieEmail">
                <div>
                    <h1 class="tituloSite">FIVE SPORTS</h1>
                </div>
                <div class="divCookie">
                    <?php if(isset($_COOKIE['email'])){echo "Email Logado: ". $_COOKIE['email'];}?>
                </div>
            </div>

            <ul class="menu_container">
                <li class="menu__item"><a class="menu__link" href ="../Home/Home.php" >Home</a></li>
                <li class="menu__item"><a class="menu__link" href="../Feed/Feed.php" >Feed</a></li>
                <li class="menu__item"><a class="menu__link" href="../Relatorio/Relatorio.php" >Relatório</a></li>
                <li class="menu__item"><a class="menu__link" href="../Cadastro/Cadastro.php" >Cadastro/Login</a></li>
                <li class="menu__item"><a class="menu__linkSair" href="../../Controller/sairController.php">Sair</a></li>
            </ul> 
        </nav>
        
    </header>
    <main>
        <div class="divPaiSection">
            <section class="sectionContato">
                <div class="tituloContato">
                    <h1>Dados do Contato</h1>
                </div>
                <form action="" class="">
                    <div class="divPaiCampos">
                        <div class="divFilhaCampos">
                            <label for="endereço">Endereço</label>
                            <input type="text" name="endereço" id="endereço" placeholder="Digite seu endereço">
                        </div>

                        <div class="divFilhaCampos">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                        </div>
                    </div>

                    <div class="divPaiCampos">
                        <div class="divFilhaCampos">
                            <label for="telefone">Telefone/Celular</label>
                            <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone/celular">
                        </div>

                        <div class="divFilhaCampos">
                            <label for="data">Data</label>
                            <input type="date" name="data" id="data">
                        </div>
                    </div>

                    <div class="divMensagem">
                        <label for="mansagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="6" cols="50"></textarea>
                    </div>

                    <div class="divPaiButtonEnviar">
                        <button class="buttonEnviar" type="text">Enviar</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <footer class="footer">
        <sup>©</sup>2024 - Todos os direitos Reservados
    </footer>
    
</body>
</html>