<?php
    session_start();

    require_once('../Model/usuario.php');
    include_once('constantesMensagens.php');
?>

<?php
    class usuarioController{

        public function validaCamposCadastro($dados){

            $novoUsuario = new Usuario();
          
            //tira espaços em volta
            $dados = array_map('trim', $dados);
        
            if(isset($_SESSION['idusuarios'])){
                $this->exibirMensagem(ConstantesMensagens::ERRO_LOGIN, '../View/Home/Home.php');
            }
            else{
        
                if(in_array("", $dados)){
                 
                    $this->exibirMensagem(ConstantesMensagens::ERRO_CAMPOS_VAZIOS, '../View/Cadastro/Cadastro.php');
                }
                elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL) || strlen($dados['email']) > 25){
                   
                    $this->exibirMensagem(ConstantesMensagens::ERRO_EMAIL_INVALIDO, '../View/Cadastro/Cadastro.php');

                }
                elseif(strlen($dados['senha']) > 8){
           
                    $this->exibirMensagem(ConstantesMensagens::ERRO_SENHA_LONGA, '../View/Cadastro/Cadastro.php');

                }
                else{
                    $novoUsuario->setEmail($dados['email']);
                    $novoUsuario->setSenha($dados['senha']);
                    $novoUsuario->validarCadastro();
                }
            }
        }

                
        public function validaCamposLogin($dados){

            $novoUsuario = new Usuario();

            $dados = array_map('trim', $dados);
                        
            if(isset($_SESSION['idusuarios'])){

                $this->exibirMensagem(ConstantesMensagens::ERRO_LOGIN, '../View/Home/Home.php');

            }
            else{
                if(in_array("", $dados)){
                    $this->exibirMensagem(ConstantesMensagens::ERRO_CAMPOS_VAZIOS, '../View/Login/Login.php' );

                }
                else{ 
                    $novoUsuario->setEmail($dados['email']);
                    $novoUsuario->setSenha($dados['senha']);
                    $novoUsuario->validarLogin(); 
                }
            }
                    

        }

        public function exibirMensagem($codigoErro, $redirectUrl) {
            $mensagem = '';
            switch ($codigoErro) {
                case ConstantesMensagens::ERRO_CAMPOS_VAZIOS:
                    $mensagem = 'ERRO: Existem campos em branco';
                    break;
                case ConstantesMensagens::ERRO_EMAIL_INVALIDO:
                    $mensagem = 'ERRO: Email incorreto';
                    break;
                case ConstantesMensagens::ERRO_SENHA_LONGA:
                    $mensagem = 'ALERTA: senha deve conter até 8 caracteres';
                    break;
                case ConstantesMensagens::ERRO_LOGIN:
                    $mensagem = 'ERRO: Você já está logado';
                    break;
                default:
                    $mensagem = 'Ação inválida';
                    break;
            }
            echo "<script>alert('$mensagem'); window.location.href='$redirectUrl';</script>";
        }
    }      

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        $controller = new usuarioController();
        
        $action = $_GET['action'];
            
        switch ($action) {
            case 'cadastro':
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                $controller->validaCamposCadastro($dados);
                break;
            case 'login':
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                $controller->validaCamposLogin($dados);
                break;
            default:
                echo "<p style='color: red; text-align: center;font-size: 18px;'>Ação inválida</p>";
                break;
        }
    }

?>

