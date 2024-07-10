<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrabalhoWeb</title>
    <link rel="stylesheet" href="./Home.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
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

                <div class="linkContato">
                    <a class="menu__link" href="../Contato/Contato.php" >Fazer contato com a FiveSport </a>
                </div>

            </div>

           

            <ul class="menu_container">
                <li class="menu__item"><a class="menu__link" href ="../Home/Home.php" >Home</a></li>
                <li class="menu__item"><a class="menu__link" href="../Feed/Feed.php" >Feed</a></li>
                <li class="menu__item"><a class="menu__link" href="../Relatorio/Relatorio.php" >Relatório</a></li>
                <li class="menu__item"><a class="menu__link" href="../Carrinho/Carrinho.php" >Carrinho</a></li>
                <li class="menu__item"><a class="menu__link" href="../Cadastro/Cadastro.php" >Cadastro/Login</a></li>
                <li class="menu__item"><a class="menu__linkSair" href="../../Controller/sairController.php">Sair</a></li>
            </ul> 
        </nav>
        
    </header>
    <main>

        <div class="fora_banner">

            <section class="banner">

                <div class="slides">
                    <div class="slide">
                        <img class="imagensSlides" src="../IMG_slides/foto city.webp" alt="">
                    </div>
                    <div class="slide">
                        <img class="imagensSlides" src="../IMG_slides/lukaku2.webp" alt="">
                    </div>
                    <div class="slide">
                        <img class="imagensSlides"  src="../IMG_slides/madrid2.jpg" alt="">
                    </div>
                </div>
            </section>

        </div>

        <section class="sectionProdutos">
            <p class="paragrafoOferta"><b>Camisas para todas as mães</b></p>
            <p class="descontoTitulo">ATÉ 50% OFF</p>
            <p class="paragrafoOferta_3">Garanta até 50%OFF em produtos selecionados para você acertar no presente.</p>
            

            <div class="produtos">
                
               

                <div class="divProdutosContainer">
                    <div class="produto">
                        
                        <img class="imagemCamisas" src="../IMG_Paginas/real.jpg" alt="Real Madrid 2022">  
                        <p class="tituloCamisas">Real Madrid 2023-2024</p>
                        <p class="tipoEsporteCamisa">Futebol</p>   
                        
                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$110,00</p>
                            <p class="precoSemDesconto">220,00</p>
                        </div>
                    </div>
                    
                    <div class="produto">
                        
                        <img class="imagemCamisas" src="../IMG_Paginas/city.jpg" alt="Manchester City">
                        <p class="tituloCamisas">Man City 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$125,00</p>
                            <p class="precoSemDesconto">R$250,00</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="produtos">
                <div class="divTituloCamisasContainer">
                    
                </div>

                <div class="divProdutosContainer">
                    <div class="produto">
                    
                        <img class="imagemCamisas" src="../IMG_Paginas/wolverhampton.jpg" alt="Wolver Hampton">
                        <p class="tituloCamisas">Wolver Hampton 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$110,00</p>
                            <p class="precoSemDesconto">R$220,00</p>
                        </div>
                    </div>
                    
                    <div class="produto">
                        
                        <img class="imagemCamisas" src="../IMG_Paginas/Liverpool.jpg" alt="Liverpool">
                        <p class="tituloCamisas">Liverpool 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$129,00</p>
                            <p class="precoSemDesconto">R$258,00</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="produtos">
                
                    

                <div class="divProdutosContainer">
                    <div class="produto">
                        
                        <img class="imagemCamisas" src="../IMG_Paginas/brasil azul.webp" alt="Brasil">
                        <p class="tituloCamisas">Brasil 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$189,00</p>
                            <p class="precoSemDesconto">378,00</p>
                        </div>
                    </div>
                    
                    <div class="produto">
                    
                        <img class="imagemCamisas" src="../IMG_Paginas/argentina.webp" alt="Argentina">
                        <p class="tituloCamisas">Argentina 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$250,00</p>
                            <p class="precoSemDesconto">R$500,00</p>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <main>

    <footer class="footer">
        <sup>©</sup>2024 - Todos os direitos Reservados
    </footer>
</body>
</html>