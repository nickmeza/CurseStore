<?php 
class Contactanos{
    public static function CargarImagen($file_imagen,$ruta_de_gurdado='publico/img/empresa/',$editar=0,$valor_editar=""){

        if ($file_imagen['tmp_name'] != "" || $file_imagen['tmp_name'] != null ) {

            $rtOriginal=$file_imagen['tmp_name'];
            $nombre = $file_imagen['name'];
            $fileNameCmps = explode(".", $nombre);
            $extension = strtolower(end($fileNameCmps));
            $nuevonombre = time() . $nombre ;
            $directoriosubida = $ruta_de_gurdado;
            $pathcompleto = $directoriosubida . $nuevonombre;
            switch($extension){
                case "jpg":
                case "jpeg":
                    $original = imagecreatefromjpeg($rtOriginal);
                break;
                case "png":
                    $original = imagecreatefrompng($rtOriginal);
                break;
                
            }        
            //Ancho y alto máximo
            $max_ancho = 300; $max_alto = 100;
            //Medir la imagen
            list($ancho,$alto)=getimagesize($rtOriginal);
            //Crear un lienzo
            $lienzo=imagecreatetruecolor($max_ancho,$max_alto); 
            //Copiar original en lienzo
            imagecopyresampled($lienzo,$original,0,0,0,0,$max_ancho, $max_alto,$ancho,$alto);
            //Destruir la original
            imagedestroy($original);
            
            switch($extension){
                case "jpg":
                case "jpeg":
                    imagejpeg($lienzo,$pathcompleto);
                break;
                case "png":
                    imagepng($lienzo,$pathcompleto);
                break;
            }
            if($editar==1){
                if($valor_editar=="publico/img/imagen_default.png"){
                }else{
                    unlink($valor_editar);
                }
            }
            return $pathcompleto;
        } else {
            
            if($editar==1){
                if($valor_editar == "" ){
                    return "publico/img/imagen_default.png";
                }else{
                    return $valor_editar;
                    
                }
            }else{
                return "publico/img/imagen_default.png";
            }
            
        }
    }
    public static function default(){
        include_once "./vistas/componentes/contactanos.php";
    }
    public static function admin_contactanos(){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            $contactanos=Contactanos_Modelo::getAll();
            include_once "./vistas/administrador/contactanos/Contactanos.php";
        }else{
            header("location:".$GLOBALS['BASE_URL']."usuario/login");
        }
    }
    public static function admin_contactanos_eliminar($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            $id=$args[3];
            echo $id;
            Contactanos_Modelo::delete($id);
            header("location:".$GLOBALS['BASE_URL']."contactanos/admin_contactanos");
        }else{
            header("location:".$GLOBALS['BASE_URL']."usuario/login");
        }
    }
    public static function contactanos_enviar_mensaje(){
        if(isset($_REQUEST)){
            $contac['nombre']=$_REQUEST['nombre'];
            $contac['correo']=$_REQUEST['correo'];
            $contac['asunto']=$_REQUEST['asunto'];
            $contac['descripcion']=$_REQUEST['descripcion'];
            Contactanos_Modelo::insertContactanos($contac);
            include_once "./vistas/administrador/contactanos/mensaje.php";

            
        }
    }



    public static function admin_empresa_editar(){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            $empresa=Empresa_Modelo::getOne(1);
            include_once "./vistas/administrador/empresa/Empresa_editar.php";
        }else{
            header("location:".$GLOBALS['BASE_URL']."usuario/login");
        }
    }
    public static function admin_empresa_set_update(){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            $empresa['idempresa']=1;
            $empresa['nombre']=$_REQUEST['nombre'];
            
            $empresa['descripcion']=$_REQUEST['descripcion'];
            $empresa['correo']=$_REQUEST['correo'];
            $empresa['telefono']=$_REQUEST['telefono'];
            $empresa['ubicacion']=$_REQUEST['ubicacion'];
            $empresa['facebook']=$_REQUEST['facebook'];
            $empresa['google']=$_REQUEST['google'];
            $empresa['twitter']=$_REQUEST['twitter'];

            $empresa['logo']=self::CargarImagen($_FILES['logo'],'publico/img/empresa/',1,$_REQUEST['nullimagen']);
            var_dump($empresa);
            Empresa_Modelo::updateEmpresa($empresa);
            echo "success";
        }else{
            
        }
    }
}
?>
