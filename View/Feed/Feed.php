<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>TrabalhoWeb</title> 
    <link rel="stylesheet" href="./Feed.css"> 
    
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
        <h1 class="titulo">Feed</h1> 
        <section> 
            
            <div class="banner">
                <img class="imagemBannerSelecao" src="../IMG_Paginas/Banner-Camisa-Selecao-2024-Desk.png" alt="BannerSeleção">
            </div>

            
            <h2 class="ligas">Seleções</h2> 
            <div class="produtos">
                <div class="divProdutosContainer"> 

                    <div class="produto">
                        <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="1">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>

                        <img class="imagemCamisas" src="../IMG_Paginas/inglaterra.webp" alt="Inglaterra"> 
                        <p class="tituloCamisas">Inglaterra 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$120,00</p>
                            <p class="precoSemDesconto">R$240,00</p>
                        </div> 
        
                        <div class="divButtonComprar">
                            <button class="buttonComprar">Comprar</button>
                        </div>
                    </div> 

                    <div class="produto"> 
                        <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="2">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>

                        <img class="imagemCamisas" src="../IMG_Paginas/brasil.jpg" alt="Brasil"> 
                        <p class="tituloCamisas">Brasil 2022 World Cup</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$120,00</p>
                            <p class="precoSemDesconto">R$240,00</p>
                        </div> 

                        <div class="divButtonComprar">
                            <button class="buttonComprar">Comprar</button>
                        </div>
                    </div> 

                    <div class="produto">
                        <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="3">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>

                        <img class="imagemCamisas" src="../IMG_Paginas/espanha.jpg" alt="Espanha"> 
                        
                        <p class="tituloCamisas">Espanha 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$180,00</p>
                            <p class="precoSemDesconto">R$360,00</p>
                        </div> 

                        <div class="divButtonComprar">
                            <button class="buttonComprar">Comprar</button>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="produtos">
                <div class="divProdutosContainer"> 

                    <div class="produto">
                        <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="4">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>

                        <img class="imagemCamisas" src="../IMG_Paginas/camisaSeleçãoFrancesa2024.webp" alt="França"> 
                        <p class="tituloCamisas">França Feminina 2023-2024</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$140,00</p>
                            <p class="precoSemDesconto">R$280,00</p>
                        </div> 

                        <div class="divButtonComprar">
                            <button class="buttonComprar">Comprar</button>
                        </div>
                    </div> 

                    <div class="produto"> 
                        <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="5">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>

                        <img class="imagemCamisas" src="../IMG_Paginas/camisaSeleção2024.avif" alt="Brasil2024"> 
                        <p class="tituloCamisas">Brasil 2023-2024</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$160,00</p>
                            <p class="precoSemDesconto">R$320,00</p>
                        </div> 

                        <div class="divButtonComprar">
                            <button class="buttonComprar">Comprar</button>
                        </div>
                    </div> 

                    <div class="produto">
                        <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="6">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                        <img class="imagemCamisas" src="../IMG_Paginas/camisaSeleçãoNigeria2022.webp" alt="Nigeria"> 
                        <p class="tituloCamisas">Nigéria 2022-2023</p>
                        <p class="tipoEsporteCamisa">Futebol</p>

                        <div class="containerPrecos">
                            <p class="precoComDesconto">R$130,00</p>
                            <p class="precoSemDesconto">R$260,00</p>
                        </div> 

                        <div class="divButtonComprar">
                            <button class="buttonComprar">Comprar</button>
                        </div>
                    </div> 
                </div>
            </div>


                <h2 class="ligas">La Liga</h2>
                <div class="produtos">
                    <div class="divProdutosContainer">

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="7">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>
                            <img class="imagemCamisas" src="../IMG_Paginas/barça.jpg"  alt="Barcelona">
                            <p class="tituloCamisas">Barcelona 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$110,00</p>
                                <p class="precoSemDesconto">R$220,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div>

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="8">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>
                            <img class="imagemCamisas" src="../IMG_Paginas/atl madrid.jpg" alt="Atletico de Madrid">
                            <p class="tituloCamisas">Atlético de Madrid 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$125,00</p>
                                <p class="precoSemDesconto">R$250,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div>

                        <div class="produto"> 
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="9">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>                
                            <img class="imagemCamisas" src="../IMG_Paginas/servilla.jpg" alt="Sevilla">
                            <p class="tituloCamisas">Sevilla 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$170,00</p>
                                <p class="precoSemDesconto">R$340,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="produtos">
                   
                    <div class="divProdutosContainer">

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                                <form method="POST" action="../../Controller/carrinhoController.php">
                                    <input type="hidden" name="idcamisa" value="10">
                                    <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                                </form>
                            </div>
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaRealMadridPreta.jpg"  alt="RealMadridPreta">
                            <p class="tituloCamisas">Real Madrid 2022-2023 Preta</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$150,00</p>
                                <p class="precoSemDesconto">R$300,00</p>
                            </div>
                            
                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div>

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="11">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaGirona2022.jpg" alt="Girona">
                            <p class="tituloCamisas">Girona 2022-2023</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$160,00</p>
                                <p class="precoSemDesconto">320,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div>

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="12">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>                 
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaEspanyol2022.jpg" alt="Espanyol">
                            <p class="tituloCamisas">Espanyol 2022-2023</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$135,00</p>
                                <p class="precoSemDesconto">R$270,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div>
                    </div> 
                </div>


                <h2 class="ligas">Série A</h2> 
                <div class ="produtos"> 
                    <div class="divProdutosContainer">

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="13">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/inter.jpg" alt="Inter de Milão"> 
                            <p class="tituloCamisas">Internazionale 2022-2023</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$145,00</p>
                                <p class="precoSemDesconto">R$290,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="14">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/juventus.jpg" alt="Juventus">
                            <p class="tituloCamisas">Juventus 2022-2023</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$115,00</p>
                                <p class="precoSemDesconto">R$230,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="15">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/milan.jpg" alt="Milan"> 
                            <p class="tituloCamisas">Milan 2022-2023</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$175,00</p>
                                <p class="precoSemDesconto">R$350,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class ="produtos"> 
                    <div class="divProdutosContainer">
                        
                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="16">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaFiorentina2019.jpg" alt="Fiorentina"> 
                            <p class="tituloCamisas">Fiorentina 2019-2020</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$155,00</p>
                                <p class="precoSemDesconto">R$310,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="17">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaLazio2021.jpg" alt="Lazio">
                            <p class="tituloCamisas">Lazio 2021-2022</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$140,00</p>
                                <p class="precoSemDesconto">R$280,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="18">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaRoma2021.jpg" alt="Roma"> 
                            <p class="tituloCamisas">Roma 2021-2022</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$165,00</p>
                                <p class="precoSemDesconto">R$330,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 
                    </div> 
                </div>


                <h2 class="ligas">Premier League</h2> 
                <div class="produtos"> 
                    <div class="divProdutosContainer">

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="19">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/manchester united.jpg" alt="Manchester United"> 
                            <p class="tituloCamisas">Manchester United 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$120,00</p>
                                <p class="precoSemDesconto">R$240,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 

                        <div class="produto ">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="20">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaChelsea2024.jpg" alt="Chelsea"> 
                            <p class="tituloCamisas">Chelsea 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$130,00</p>
                                <p class="precoSemDesconto">R$260,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="21">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/arsenal.jpg" alt="Arsenal"> 
                            <p class="tituloCamisas">Arsenal 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$150,00</p>
                                <p class="precoSemDesconto">R$300,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="produtos"> 
                    <div class="divProdutosContainer">

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="22">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>                          
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaForest2021.jpg" alt="Forest"> 
                            <p class="tituloCamisas">Nottingham Forest 2021-2022</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$135,00</p>
                                <p class="precoSemDesconto">R$270,00</p>
                            </div> 

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                        </div> 
                        
                        <div class="produto ">
                        <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="23">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div>
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaEverton2024.jpg" alt="Everton"> 
                            <p class="tituloCamisas">Everton 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$125,00</p>
                                <p class="precoSemDesconto">R$250,00</p>
                            </div>

                            <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>
                            
                        </div> 

                        <div class="produto">
                            <div class="divButtonAdicionarAoCarrinho">
                            <form method="POST" action="../../Controller/carrinhoController.php">
                                <input type="hidden" name="idcamisa" value="24">
                                <input class="buttonAdicionarAoCarrinho" type="submit" value="Adicionar ao Carrinho +" name="Enviar">
                            </form>
                        </div> 
                            <img class="imagemCamisas" src="../IMG_Paginas/camisaAstonVilla2024.jpg" alt="AstonVilla"> 
                            <p class="tituloCamisas">Aston Villa 2023-2024</p>
                            <p class="tipoEsporteCamisa">Futebol</p>

                            <div class="containerPrecos">
                                <p class="precoComDesconto">R$140,00</p>
                                <p class="precoSemDesconto">R$280,00</p>
                            </div>

                             <div class="divButtonComprar">
                                <button class="buttonComprar">Comprar</button>
                            </div>

                        </div> 
                    </div> 
                </div>
           
        </section> 
    </main>

    <footer class="footer">
        <sup>©</sup>2024 - Todos os direitos Reservados
    </footer>
</body> 
</html>