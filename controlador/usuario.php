<?php 

class Usuario {
    public static function Login($args=Array()){
        $message_error="";
        $atributos=$args;
        if(isset($atributos['error'])){
            switch($atributos['error']){
                case "error":
                    $message_error="usuario y contraseña erronea, ingrese nuevamente";
                    break;
            }
            
        }
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            header("location:".$GLOBALS['BASE_URL']."usuario/admin ");
        }else{
            include_once "./vistas/administrador/general/login.php";
        }
        
        
    }
    public static function admin(){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            $usuario_nombre=UsuarioSession::getCurrentUser();

            include_once "./vistas/administrador/general/index.php";
        }else{
            header("location:".$GLOBALS['BASE_URL']."usuario/login");
        }
        
    }
    public static function GoInside($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            return true;
        }else{
            if(isset($_REQUEST["usuario"])&&isset($_REQUEST["password"])){
                $usuario=$_REQUEST["usuario"];
                $password=$_REQUEST["password"];
                if(Usuario_Modelo::findUser($usuario,$password)){
                    $usuario_found = Usuario_Modelo::getUser($usuario,$password);
                    UsuarioSession::setCurrentUser($usuario,$usuario_found);
                    header("location:".$GLOBALS['BASE_URL']."usuario/admin");
                }else{
                    echo "nel";
                    header("location:".$GLOBALS['BASE_URL']."usuario/login");
                }
            }else{
                echo "error 404";
            }
            
            
        }
    }
    public static function logout(){
        $Session = new UsuarioSession();
        UsuarioSession::closeSession();
        header("Location:" . $GLOBALS['BASE_URL']);
    }
    public static function admin_usuario(){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            $usuario_nombre=UsuarioSession::getCurrentUser();

            include_once "./vistas/administrador/usuario/Usuario.php";
        }else{
            header("location:".$GLOBALS['BASE_URL']."usuario/login");
        }
    }
    //functions 
    
}
?>
