<?php
    session_start();
    require_once(__DIR__ .'/../Model/carrinho.php');

    class carrinhoController{

        public function validaAdicionarAoCarrinho(){

            $carrinho = new Carrinho();
            if (!empty($_POST["idcamisa"]) && !empty($_SESSION['idusuarios'])) {
                $carrinho->adicionarAoCarrinho();
            }
            else{
                $this->exibirMensagem(ConstantesMensagens::ERRO_LOGIN, '../View/Login/Login.php');
            }
        }

        public function validaExluir(){
            
            $carrinho = new Carrinho();
            if (!empty($_POST["idcamisa"]) && !empty($_SESSION['idusuarios'])) {
                $carrinho->excluirCamisa();
                
            }
        }
        
        public function exibirMensagem($codigoErro, $redirectUrl) {
            $mensagem = '';
            switch ($codigoErro) {
                case ConstantesMensagens::ERRO_LOGIN:
                    $mensagem = 'ERRO: Você deve estar logado!';
                    break;
                default:
                    $mensagem = 'Ação inválida';
                    break;
            }
            echo "<script>alert('$mensagem'); window.location.href='$redirectUrl';</script>";
        }
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller = new carrinhoController();

            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if(isset($dados['Enviar']))
            {
                $controller->validaAdicionarAoCarrinho($dados);
            }
            elseif(isset($dados['Excluir']))
            {
                $controller->validaExluir($dados);
            }

         
    }





?>