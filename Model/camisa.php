<?php
    include_once('conexao.php');
 
    include_once(__DIR__ . '/../Controller/constantesMensagens.php');
?>

<?php
    class camisa {

        private $idcamisa;
        private $modelo;
        private $ano;
        private $tamanho;
        private $preco;
        private $quantidade;

        public function inserirCamisa() {
            try {
                $conn = Conexao::conectar();

                
                    $query = "INSERT INTO projeto.camisas (modelo, ano, tamanho, preco, quantidade) VALUES (:modelo, :ano, :tamanho, :preco, :quantidade)";
                    $stmt = $conn->prepare($query);
                    $stmt->bindParam(':modelo', $this->modelo);
                    $stmt->bindParam(':ano', $this->ano);
                    $stmt->bindParam(':tamanho', $this->tamanho);
                    $stmt->bindParam(':preco', $this->preco);
                    $stmt->bindParam(':quantidade', $this->quantidade);

                    $stmt->execute();

                    $this->exibirMensagem(ConstantesMensagens::CADASTRO_SUCESSO, '../View/Relatorio/Relatorio.php');
                
            } catch (PDOException $erro) {
                echo "Erro ao inserir camisa: " . $erro->getMessage();
            }
            
        }

        public function atualizarCamisa($dadosUpdate) {
            try {
                $conn = Conexao::conectar();
                $modelo = trim($dadosUpdate['modelo']);
                $ano = trim($dadosUpdate['ano']);
                $preco = trim($dadosUpdate['preco']);
                $tamanho = trim($dadosUpdate['tamanho']);
                $quantidade = trim($dadosUpdate['quantidade']);
                $idcamisa = trim($dadosUpdate['id']);

                $query = "UPDATE projeto.camisas SET modelo = :modelo, ano = :ano, tamanho = :tamanho, preco = :preco, quantidade = :quantidade WHERE idcamisa = :idcamisa";
                
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':modelo', $modelo);
                $stmt->bindParam(':ano', $ano);
                $stmt->bindParam(':tamanho', $tamanho);
                $stmt->bindParam(':preco', $preco);
                $stmt->bindParam(':quantidade', $quantidade);
                $stmt->bindParam(':idcamisa', $idcamisa);
                $stmt->execute();

                $this->exibirMensagem(ConstantesMensagens::ATUALIZACAO_SUCESSO, '../View/Relatorio/Relatorio.php');
            } 
            catch (PDOException $erro) 
            {
                echo "Erro ao atualizar camisa: " . $erro->getMessage();
            }
            
        }

        public function camisaUpdate($idUpdate){
            try {
                $conn = Conexao::conectar();
                $id = $idUpdate;
                $queryUsuarioConsultaUpdate = "SELECT * FROM projeto.camisas WHERE idcamisa = :id"; 
                $resultConsultaUpdate = $conn->prepare($queryUsuarioConsultaUpdate);
                $resultConsultaUpdate->execute([':id' => $id]);

            return  $resultConsultaUpdate->fetch(PDO::FETCH_ASSOC);
            
            } catch (PDOException $erro) {
                echo "". $erro->getMessage();
            }

        }

        public function deletarCamisa($dados) {
            try {
                $conn = Conexao::conectar();

                $idcamisa = $dados["idExcluir"];

                $queryVerificarQuantidade = "SELECT quantidade FROM projeto.camisas WHERE idcamisa = :idcamisa";
                $stmtQuantidade = $conn->prepare($queryVerificarQuantidade);
                $stmtQuantidade->bindParam(':idcamisa', $idcamisa);
                $stmtQuantidade->execute();
                $quantidadeEstoque = $stmtQuantidade->fetchColumn();

                $queryVerificarCarrinho = "SELECT COUNT(*) FROM projeto.carrinho WHERE idcamisa = :idcamisa";
                $consultaCarrinho = $conn->prepare($queryVerificarCarrinho);
                $consultaCarrinho->bindParam(':idcamisa', $idcamisa);
                $consultaCarrinho->execute();
                $camisaNoCarrinho = $consultaCarrinho->fetchColumn();

                if ($camisaNoCarrinho > 0) {
                    
                    $this->exibirMensagem(ConstantesMensagens::ERRO_CAMISA_NO_CARRINHO, '../View/Relatorio/Relatorio.php');
                }
                else if ($quantidadeEstoque == 0) {
                    $query = "DELETE FROM projeto.camisas WHERE idcamisa = :idcamisa";
                    $stmt = $conn->prepare($query);
                    $stmt->bindParam(':idcamisa', $idcamisa);
                    $stmt->execute();
                    
                    $this->exibirMensagem(ConstantesMensagens::DELECAO_SUCESSO, '../View/Relatorio/Relatorio.php');
                } 
                else {
                    $this->exibirMensagem(ConstantesMensagens::ERRO_QUANTIDADE, '../View/Relatorio/Relatorio.php');
                }
            } catch (PDOException $erro) {
                echo "Erro ao deletar camisa: " . $erro->getMessage();
            }
        }

        public function Listar()
        {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT idcamisa, modelo, ano, tamanho, preco, quantidade FROM projeto.camisas");
            $sql->execute();
            $result = $sql->fetchAll();
            return $result;
        }


        public function validarNivel(){
            try {
                $conn = Conexao::conectar();

                    
                    $queryVerificarAdmin = "SELECT nivelAcesso FROM projeto.usuarios WHERE idusuarios = :idusuarios";
                    $consultaNivelAcesso = $conn->prepare($queryVerificarAdmin);
                    $consultaNivelAcesso->bindParam(':idusuarios', $_SESSION['idusuarios']);
                    $consultaNivelAcesso->execute(); 
                
                   
                    $resultado = $consultaNivelAcesso->fetch(PDO::FETCH_ASSOC);
                
                    
                    if($resultado['nivelAcesso'] !== "admin"){
                        $this->exibirMensagem(ConstantesMensagens::ERRO_NIVEL_ACESSO, '../Home/Home.php');
                    }
            }
            catch(PDOException $erro){
                echo "Erro ao validar nivel: " . $erro->getMessage();
            }
        }

        public function exibirMensagem($codigoErro, $redirectUrl) {
            $mensagem = '';
            switch ($codigoErro) {
                case ConstantesMensagens::CADASTRO_SUCESSO:
                    $mensagem = 'SUCESSO: Camisa cadastrada com sucesso';
                    break;
                case ConstantesMensagens::ATUALIZACAO_SUCESSO:
                    $mensagem = 'SUCESSO: Camisa atualizada com sucesso';
                    break;
                case ConstantesMensagens::DELECAO_SUCESSO:
                    $mensagem = 'SUCESSO: Camisa deletada com sucesso';
                    break;
                case ConstantesMensagens::ERRO_QUANTIDADE:
                    $mensagem = 'ERRO: Quantidade deve ser zero!';
                    break;
                case ConstantesMensagens::ERRO_CAMISA_NO_CARRINHO:
                    $mensagem = 'ERRO: A camisa está no carrinho de um ou mais usuários e não pode ser excluída';
                    break;
                case ConstantesMensagens::ERRO_NIVEL_ACESSO:
                    $mensagem = 'ERRO: Você não tem permissão para acessar!';
                    break;
                default:
                    $mensagem = 'Ação inválida';
                    break;
            }
            echo "<script>alert('$mensagem'); window.location.href='$redirectUrl';</script>";
        }

        public function getIdCamisa() {
            return $this->idcamisa;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function getAno() {
            return $this->ano;
        }

        public function setTamanho($tamanho) {
            $this->tamanho = $tamanho;
        }

        public function getTamanho() {
            return $this->tamanho;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }
    }
?>