<?php 

class Modulo {

    public static function admin_modulo_eliminar($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            if(isset($args[3])){
                Modulo_Modelo::delete($args[3]);
                echo "success";
            }
        }
    }
    
    public static function admin_modulo_agregar($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){ 
            if(isset($_REQUEST['nombre'])){
                Modulo_Modelo::insertModulo($_REQUEST['nombre']); 
            }
            echo "success";
        }
        
    }
    public static function admin_modulo_get_one($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            if(isset($args[3])){
                $modulo=Modulo_Modelo::getOne($args[3]);
                $bloque_arr = array(
                    'idelemento' => $modulo['idelemento'],
                    'nombre' => $modulo['nombre'],
                );
                echo json_encode($bloque_arr);
            }
        }
    }
    public static function admin_modulo_editar($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user']) ){
            if(isset($_REQUEST['nombre'])&& isset($_REQUEST['idelemento'])){
                Modulo_Modelo::updateModulo($_REQUEST['nombre'],$_REQUEST['idelemento']); 
                echo "success";
            }else{
                echo "not found";
            }
            
        }else{
            echo "error";
        }
    }
    public static function admin_modulo_get_all(){
        $modulos = Modulo_Modelo::getAll();
        echo json_encode($modulos);
    }
    public static function create()
    {
        if ( isset($_REQUEST['MOD_NOMBRE']) && isset($_REQUEST['MOD_DESCRIPCION']) ) {
            $modulo["CURS_ID"] = 4;
            $modulo["MOD_NOMBRE"] = $_REQUEST['MOD_NOMBRE'];
            $modulo["MOD_DESCRIPCION"] = $_REQUEST['MOD_DESCRIPCION'];
            Modulo_Modelo::insertModulo($modulo);
            echo "creado correctamente";
        } else {
            echo "fallo al crear";
        }
    }
    
}
