<?php
  session_start();
    require_once(__DIR__ .'/../Model/camisa.php');
    include_once(__DIR__ .'/./constantesMensagens.php');
   
class camisaController{

    public function validarCampos($dados){
        $novaCamisa = new Camisa();
        
        $dados = array_map('trim', $dados);

       
        if($dados['modelo'] != "" && $dados['ano'] != "" && $dados['preco'] != "" && $dados['tamanho'] != "" && $dados['quantidade'] != "") 
        {

            if(is_numeric($dados['modelo'])){
                $this->exibirMensagem(ConstantesMensagens::ERRO_MODELO, '../View/Relatorio/Relatorio.php');
                return;
            }
            if($dados['preco'] >= 1000.00){
                $this->exibirMensagem(ConstantesMensagens::ERRO_PRECO, '../View/Relatorio/Relatorio.php');
                return;
            }
            if(!is_numeric($dados['ano']) || $dados['ano'] > 9999){
                $this->exibirMensagem(ConstantesMensagens::ERRO_ANO, '../View/Relatorio/Relatorio.php');
                return;
            }
            if($dados['quantidade'] > 100){
                $this->exibirMensagem(ConstantesMensagens::ERRO_QUANTIDADE, '../View/Relatorio/Relatorio.php');
            }
            else{
                 
                $novaCamisa->setModelo($dados['modelo']);
                $novaCamisa->setAno($dados['ano']);
                $novaCamisa->setTamanho($dados['tamanho']);
                $novaCamisa->setPreco($dados['preco']);
                $novaCamisa->setQuantidade($dados['quantidade']);

                if(isset($dados['Enviar']))
                {
                    $novaCamisa->inserirCamisa();
                }
                else
                {
                    $novaCamisa->atualizarCamisa($dados);
                }
            }

        
        }
        else{
            $this->exibirMensagem(ConstantesMensagens::ERRO_CAMPOS_VAZIOS, '../View/Relatorio/Relatorio.php' );
        }
    
    }

    public function validarUpdate($idUpdate){
        $camisa = new Camisa();
        
        return $camisa->camisaUpdate($idUpdate);
    }

    public function validarNivelAcesso(){
        $camisa = new Camisa();

        if(isset($_SESSION['idusuarios'])){
            return $camisa->validarNivel();
        }
        else{
            $this->exibirMensagem(ConstantesMensagens::ERRO_LOGIN, '../Login/Login.php' );
        }
    }

    public function exibirMensagem($codigoErro, $redirectUrl) {

        $mensagem = '';
        switch ($codigoErro) {
            case ConstantesMensagens::ERRO_CAMPOS_VAZIOS:
                $mensagem = 'ERRO: Existem campos em branco';
                break;
            case ConstantesMensagens::ERRO_LOGIN:
                $mensagem = 'ERRO: Você deve estar logado para acessar!';
                break;
            case ConstantesMensagens::ERRO_PRECO:
                $mensagem = 'ERRO: O preço deve ser abaixo de mil!';
                break;
            case ConstantesMensagens::ERRO_ANO:
                $mensagem = 'ERRO: Ano inválido!';
                break;
            case ConstantesMensagens::ERRO_MODELO:
                $mensagem = 'ERRO: Modelo Inválido!';
                break;
            case ConstantesMensagens::ERRO_QUANTIDADE:
                $mensagem = 'ERRO: Quantidade deve ser abaixo de 100!';
                break;
            default:
                $mensagem = 'Ação inválida';
                break;
        }
        echo "<script>alert('$mensagem'); window.location.href='$redirectUrl';</script>";
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller = new camisaController();
        $camisa = new Camisa();
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if(isset($dados['Enviar']))
            {
            $controller->validarCampos($dados);
            }
            if(isset($dados['idExcluir']))
            {
            $camisa->deletarCamisa($dados);
            }
            if(isset($dados['AtualizarUsu']))
            {
                $controller->validarCampos($dados);
            }
}
