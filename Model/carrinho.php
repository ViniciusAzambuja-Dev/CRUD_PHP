<?php
    include_once('conexao.php');

    include_once(__DIR__ . '/../Controller/constantesMensagens.php');

    class Carrinho{

        private $idusuarios;
        private $idcamisa;

        public function adicionarAoCarrinho(){
            try {
                $conn = Conexao::conectar();

                $idcamisaFeed = $_POST["idcamisa"];
                $idusuarios = $_SESSION['idusuarios'];

                $queryInsereId = "INSERT INTO carrinho (idusuarios, idcamisa) VALUES (:idusuarios, :idcamisa)";
                $consultaId = $conn->prepare($queryInsereId);
                $consultaId->bindParam(':idcamisa', $idcamisaFeed);
                $consultaId->bindParam(':idusuarios', $idusuarios);

                $consultaId->execute();

                $this->exibirMensagem(ConstantesMensagens::SUCESSO_ADD_CARRINHO, '../View/Feed/Feed.php');

            }
            catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }

        public function Listar(){
            try {
                $conn = Conexao::conectar();

                
                if(isset($_SESSION['idusuarios'])){
                
                
                    $idusuarios = $_SESSION['idusuarios'];

                    $stmt = $conn->prepare("
                        SELECT c.idcamisa,c.modelo, c.preco, COUNT(*) AS quantidade
                        FROM carrinho ca
                        JOIN camisas c ON ca.idcamisa = c.idcamisa
                        WHERE ca.idusuarios = :idusuarios
                        GROUP BY c.idcamisa, c.modelo, c.preco
                    ");

                
                        $stmt->bindParam(':idusuarios', $idusuarios);

                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        return $result;
                    }
                    else{
                        $this->exibirMensagem(ConstantesMensagens::ERRO_LOGIN, '../Login/Login.php');
                    }
            }

            catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }

        public function excluirCamisa(){

            try {
                $conn = Conexao::conectar();
                
                $queryUsuarioConsultaDelete = "
                SELECT * 
                FROM carrinho 
                WHERE idcamisa = :idcamisa AND idusuarios = :idusuarios
                ";

                $resultConsultaDelete = $conn->prepare($queryUsuarioConsultaDelete);
                
                $resultConsultaDelete->execute([
                    ':idcamisa' => $_POST["idcamisa"],
                    ':idusuarios' => $_SESSION['idusuarios']
                ]);

                if ($resultConsultaDelete->rowCount() > 0) {
                    
                    $sqlDelete = "
                        DELETE FROM carrinho 
                        WHERE idcamisa = :idcamisa AND idusuarios = :idusuarios
                    ";
                    $resultDeletar = $conn->prepare($sqlDelete);
                    $resultDeletar->execute([
                        ':idcamisa' => $_POST["idcamisa"],
                        ':idusuarios' => $_SESSION['idusuarios']
                    ]);

                    $this->exibirMensagem(ConstantesMensagens::DELECAO_SUCESSO, '../View/Carrinho/Carrinho.php');
                    
                }
            }
            catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }


        public function exibirMensagem($codigoErro, $redirectUrl) {
            $mensagem = '';
            switch ($codigoErro) {
                case ConstantesMensagens::SUCESSO_ADD_CARRINHO:
                    $mensagem = 'SUCESSO: Camisa adicionada ao carrinho!';
                    break;
                case ConstantesMensagens::DELECAO_SUCESSO:
                    $mensagem = 'SUCESSO: Camisa deletada do carrinho com sucesso';
                    break;
                case ConstantesMensagens::ERRO_LOGIN:
                    $mensagem = 'ERRO: Você não esta logado!';
                    break;
                default:
                    $mensagem = 'Ação inválida';
                    break;
            }
            echo "<script>alert('$mensagem'); window.location.href='$redirectUrl';</script>";
        }

        public function getIdUsuario(){
            return $this->idusuarios;
        }

        public function getIdCamisa(){
            return $this->idcamisa;
        }

    }





?>