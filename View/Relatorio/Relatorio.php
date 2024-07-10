<?php
        require_once('../../Model/camisa.php');
        include_once('../../Controller/camisaController.php');

        $camisa = new Camisa();
        $controller = new camisaController();

        $controller->validarNivelAcesso();
        $dadosCamisas  = $camisa->Listar();

        $camisaParaEditar['idcamisa'] = null;
    
         if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['idupdate'])) {
            $idUpdate = $_POST['idupdate'];
            $camisaParaEditar = $controller->validarUpdate($idUpdate);
         }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrabalhoWeb</title>
    <link rel="stylesheet" href="./Relatorio.css">
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
        <h2 class="tituloRelatorio">Relatórios</h2>

        <div class="containerPaiPag">
            <section class="section">
                    <form action="../../Controller/camisaController.php" method="post">

                        <div class="divContainerPaiCampos">
                        
                            <div class="primeiraDivCamposForm">
                                <div class="divPaiCampos1">
                                    <div class="campos">
                                        <label for="selecao">Entrada:</label>
                                        <select name="selecao" id="selecao1">
                                            <option value="entrada">Entrada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="divPaiCampos">
                                    <div class="campos">
                                        <label  for="modelo">Modelo*:</label>
                                        <input class="input" type="text" name="modelo" id="texto" placeholder="Digite o nome do produto">
                                    </div>

                                    <div class="campos">
                                        <label for="preco">Preço*: </label>
                                        <input type="text" name="preco" class="input" placeholder="Digite o preço atual">
                                    </div>
                                </div>
                                <div class="divPaiCampos">
                                    <div class="campos">
                                        <label for="ano">Ano*: </label>
                                        <input type="text" name="ano" class="input" placeholder="Digite o ano da camisa">
                                    </div>
                
                                    <div class="campos">
                                        <label for="select">Tamanho*: </label>
                                        <select name="tamanho" id="selecao2">
                                            <option value="PP">PP</option>
                                            <option value="P">P</option>
                                            <option value="M">M</option>
                                            <option value="G">G</option>
                                            <option value="XG">XG</option>
                                            <option value="XXG">XXG</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="divPaiCampos">
                                    <div class="campos">
                                        <label for="Quantidade">Quantidade*: </label>
                                        <input class="input" type="number" name="quantidade" id="Quantidade" placeholder="Digite a quantidade em estoque">
                                    </div>
                           
                                </div>
                            </div>
                        </div>

                        <div class="divButtonsForm">
                            <input class="submit" type="submit" value="Enviar" name="Enviar"> 
                            <input class="reset" type="reset" value="Limpar">
                        </div>

                    </form>

            </section>
            <section class="sectionTable">
                
                <?php 
                
                if ($dadosCamisas) {
                ?>
            <div>
                <table>

                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Descrição</th>
                            <th>Ano</th>
                            <th>Tamanho</th>
                            <th>Preço</th>
                            <th>Peças em Estoque</th>
                            <th>Valor em Estoque</th>
                            <th>Excluir</th>
                            <th>Editar</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
                        foreach ($dadosCamisas as $rowTable) {
                            if ($rowTable['idcamisa'] ==  $camisaParaEditar['idcamisa']) {
                              ?>
                                <form name="AtualizarUsuario" method="POST" action="../../Controller/camisaController.php">
                                <td>
                                <div class="camposUptade">
                                        <input class="input" type="text" name="id" value="<?php echo$rowTable['idcamisa']; ?>" readonly>
                                    </div>
                                </td>
                                  <td>
                                    <div class="camposUptade">
                                        <input class="input" type="text" name="modelo" value="<?php echo $rowTable['modelo']; ?>">
                                    </div>
                                </td>
                          
                                <td>
                                    <div class="camposUptade">
                                        <input type="text" name="ano" class="input" value="<?php echo $rowTable['ano']; ?>">
                                    </div>
                                </td>
                                <td>
                                    <div class="camposUptade">
                                        <select name="tamanho" id="selecao2">
                                        <option value="PP" <?php if ($rowTable['tamanho'] == 'PP') echo 'selected'; ?>>PP</option>
                                        <option value="P" <?php if ($rowTable['tamanho'] == 'P') echo 'selected'; ?>>P</option>
                                        <option value="M" <?php if ($rowTable['tamanho'] == 'M') echo 'selected'; ?>>M</option>
                                        <option value="G" <?php if ($rowTable['tamanho'] == 'G') echo 'selected'; ?>>G</option>
                                        <option value="XG" <?php if ($rowTable['tamanho'] == 'XG') echo 'selected'; ?>>XG</option>
                                        <option value="XXG" <?php if ($rowTable['tamanho'] == 'XXG') echo 'selected'; ?>>XXG</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="camposUptade">
                                        <input type="text" name="preco" class="input" value="<?php echo $rowTable['preco']; ?>">
                                    </div>
                                </td>
                               
                                <td>
                                    <div class="camposUptade">
                                        <input class="input" type="number" name="quantidade" id="Quantidade" value="<?php echo $rowTable['quantidade']; ?>">
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                
                                <td>
                                    <input type="submit" name="AtualizarUsu" value="Enviar" id="Enviar" class="buttonUptade">
                                </td>
                                </form>
                                <?php
                            } else{
                        ?>
                        <tr>
                            <td><?php echo $rowTable['idcamisa']; ?></td>
                            <td><?php echo $rowTable['modelo']; ?></td>
                            <td><?php echo $rowTable['ano']; ?></td>
                            <td><?php echo $rowTable['tamanho']; ?></td>
                            <td><?php echo 'R$ ' . number_format($rowTable['preco'], 2, ',', '.');  ?></td>
                            <td><?php echo $rowTable['quantidade']; ?></td>
                            <td><?php echo 'R$ ' . number_format(($rowTable['quantidade'] * $rowTable['preco'] ), 2, ',', '.'); ?></td>
                            <td>
                                <form method="POST" action="../../Controller/camisaController.php">
                                <input type="hidden" name="idExcluir" value="<?php echo $rowTable['idcamisa']; ?>">
                                    <button type="submit" class="buttonExcluir" >Excluir</button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="">
                                <input type="hidden" name="idupdate" value="<?php echo $rowTable['idcamisa']; ?>">
                                    <button type="submit" class="buttonEditar" >Editar</button>
                                </form>
                            </td>
                        </tr>
                    <?php 
                    } }
                    ?>
                    </tbody>
                </table>
                <?php 
                }
                    else{
                        echo "<p style='color: red;text-align: center;font-size: 22px; margin-top: 15px;'>Estoque vazio!</p> <br>";
                    }
                ?>
            </section>
        </div>
    </main>

    <footer class="footer">
        <sup>©</sup>2024 - Todos os direitos Reservados
    </footer>
    
</body>
</html>