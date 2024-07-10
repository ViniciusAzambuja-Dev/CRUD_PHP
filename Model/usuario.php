<?php
    include_once('conexao.php');
    include_once('../Controller/constantesMensagens.php');

?>

<?php
    class Usuario{
        private $idusuarios;
        private $email;
        private $senha;
        private $nivelAcesso;


        public function validarCadastro(){

            try{
                $conn = Conexao::conectar();

                $queryValidarEmail = "SELECT * FROM projeto.usuarios WHERE email = :email";
                $validarEmail = $conn->prepare($queryValidarEmail);
                $validarEmail->bindParam(':email', $this->email);
                $validarEmail->execute();
    
                if($validarEmail->rowCount() > 0){
                    $this->exibirMensagem(ConstantesMensagens::ERRO_EMAIL_EM_USO, '../View/Cadastro/Cadastro.php');
                }
                else{
    
                    $sql = $conn->prepare("INSERT INTO projeto.usuarios(email, senha, nivelAcesso) VALUES(:email, :senha, 'usuario')") ;
           
                    $sql->bindParam(":email", $email);
                    $sql->bindParam(":senha", $senha);

                    $email=$this->email;
                    $senha=$this->senha;

                    $this->nivelAcesso = 'usuario'; 

                    $sql->execute();
    
                    $this->exibirMensagem(ConstantesMensagens::CADASTRO_SUCESSO, '../View/Login/Login.php');
                    unset($dados);
                }
            }
            catch(PDOException $erro){
                echo "Cadastro falhou! " . $erro->getMessage();
            }

        }

        public function validarLogin(){
            
            try {
                $conn = Conexao::conectar();

                $queryValidarLogin = "SELECT * FROM projeto.usuarios WHERE email = :email
                AND senha = :senha";
            
                $validarLogin = $conn->prepare($queryValidarLogin);
                $validarLogin->bindParam(':email', $this->email);
                $validarLogin->bindParam(':senha', $this->senha); 
                $validarLogin->execute();
            
                if($validarLogin->rowCount() > 0){

                    $usuario = $validarLogin->fetch(PDO::FETCH_ASSOC);
                    $usuario_id = $usuario['idusuarios']; 

                    $_SESSION['idusuarios'] = $usuario_id;
            
                    if(isset($_POST['lembrarSenha'])){
                        setcookie("email", $usuario['email'], time()+3600, "/");
                        setcookie("senha", $usuario['senha'], time()+3600, "/");
                    }
            
                    $this->exibirMensagem(ConstantesMensagens::LOGIN_SUCESSO, '../View/Home/Home.php');
        
                }
                else{
                    $this->exibirMensagem(ConstantesMensagens::ERRO_EMAIL_OU_SENHA, '../View/Login/Login.php');
                }
            
            }
            catch(PDOException $erro){
                echo "Login falhou! " . $erro->getMessage();
            }
        }

        public function exibirMensagem($codigoErro, $redirectUrl) {
            $mensagem = '';
            switch ($codigoErro) {
                case ConstantesMensagens::ERRO_EMAIL_EM_USO:
                    $mensagem = 'ERRO: Email em uso';
                    break;
                case ConstantesMensagens::ERRO_EMAIL_OU_SENHA:
                    $mensagem = 'ERRO: Email ou senha incorretos';
                    break;
                case ConstantesMensagens::CADASTRO_SUCESSO:
                    $mensagem = 'SUCESSO: Cadastrado';
                    break;
                case ConstantesMensagens::LOGIN_SUCESSO:
                    $mensagem = 'SUCESSO: Login efetuado com sucesso';
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

        public function setIdUsuario($idusuarios){
            $this->idusuarios = $idusuarios;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getNivelAcesso(){
            return $this->nivelAcesso;
        }

        public function setNivelAcesso($nivelAcesso){
            $this->nivelAcesso = $nivelAcesso;
        }

    }
?>