<?php
require_once('../../Model/carrinho.php');
include_once('../../Controller/carrinhoController.php');

    
    $carrinho = new Carrinho();

    $dadosCarrinho  = $carrinho->Listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="./Carrinho.css">
</head>
<body>
    <header>
        <nav>
            <div class="divPaiCookieEmail">
                <div>
                    <h1 class="tituloSite">FIVE SPORTS</h1>
                </div>
                <div class="divCookie">
                    <?php if(isset($_COOKIE['email'])){echo "Email Logado: ". $_COOKIE['email'];} ?>
                </div>
                <div class="linkContato">
                    <a class="menu__link" href="../Contato/Contato.php">Fazer contato com a FiveSport</a>
                </div>
            </div>
            <ul class="menu_container">
                <li class="menu__item"><a class="menu__link" href="../Home/Home.php">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="../Feed/Feed.php">Feed</a></li>
                <li class="menu__item"><a class="menu__link" href="../Relatorio/Relatorio.php">Relatório</a></li>
                <li class="menu__item"><a class="menu__link" href="../Carrinho/Carrinho.php">Carrinho</a></li>
                <li class="menu__item"><a class="menu__link" href="../Cadastro/Cadastro.php">Cadastro/Login</a></li>
                <li class="menu__item"><a class="menu__linkSair" href="../../Controller/sairController.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="containerPaiPag">
            <section class="sectionTable">
                <?php
                if ($dadosCarrinho && count($dadosCarrinho) > 0) {
                ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Preço Total</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dadosCarrinho as $rowTable) {
                            ?>
                                <tr>
                                    <td><?php echo $rowTable['modelo']; ?></td>
                                    <td><?php echo 'R$ ' . number_format($rowTable['preco'], 2, ',', '.'); ?></td>
                                    <td><?php echo $rowTable['quantidade']; ?></td>
                                    <td><?php echo 'R$ ' . number_format(($rowTable['preco'] * $rowTable['quantidade']), 2, ',', '.'); ?></td>
                                    <td>
                                        <form method="POST" action="../../Controller/carrinhoController.php">
                                            <input type="hidden" name="idcamisa" value="<?php echo $rowTable['idcamisa']; ?>">
                                            <button type="submit" class="buttonExcluir" name="Excluir">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                <?php
                } else {
                    echo "<p style='color: red;text-align: center;font-size: 22px; margin-top: 15px;'>Carrinho vazio!</p><br>";
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