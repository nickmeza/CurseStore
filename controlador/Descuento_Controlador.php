<?php

class Descuento
{ 

   
    public static function admin_descuento_eliminar($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            if(isset($args[3])){
                Descuento_Modelo::delete($args[3]);
                echo "success";
            }
        }
    }
    
    public static function admin_descuento_agregar($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){ 
            if(isset($_REQUEST['nombre'])){
                Descuento_Modelo::insertDescuento($_REQUEST['nombre']); 
            }
            echo "success";
        }
        
    }
    public static function admin_descuento_get_one($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user'])){
            if(isset($args[3])){
                $Descuento=Descuento_Modelo::getOne($args[3]);
                $bloque_arr = array(
                    'idelemento' => $Descuento['idelemento'],
                    'nombre' => $Descuento['nombre'],
                );
                echo json_encode($bloque_arr);
            }
        }
    }
    public static function admin_descuento_editar($args=Array()){
        $Session = new UsuarioSession();
        if(isset($_SESSION['user']) ){
            if(isset($_REQUEST['nombre'])&& isset($_REQUEST['idelemento'])){
                Descuento_Modelo::updateDescuento($_REQUEST['nombre'],$_REQUEST['idelemento']); 
                echo "success";
            }else{
                echo "not found";
            }
            
        }else{
            echo "error";
        }
    }
    public static function admin_Descuento_get_all(){
        $Descuentos = Descuento_Modelo::getAll();
        echo json_encode($Descuentos);
    }
}