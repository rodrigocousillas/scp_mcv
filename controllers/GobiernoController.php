<?php

namespace Controllers;
use MVC\Router;
use Model\Gobierno;
use Intervention\Image\ImageManagerStatic as Image;

class GobiernoController {

    public static function index(Router $router) {
       
        $gobierno = Gobierno::all();
        
        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;
        
        $router->renderAdmin('gobierno/admin', [
            'gobierno' => $gobierno,
            'resultado' => $resultado
        ]);
    }

    
    public static function crear(Router $router){
       
        $gobierno = Gobierno::all();
        
        // Arreglo con mensajes de errores
        $errores = Gobierno::getErrores();

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $gobierno = new Gobierno($_POST['gobierno']);

            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

            //resize a la imagen
            if($_FILES['gobierno']['tmp_name']['imagen']){
                $image = Image::make($_FILES['gobierno']['tmp_name']['imagen'])->fit(720,720);
                $gobierno->setImagen($nombreImagen); 

            }    

            $errores = $gobierno->validar();

            if(empty($errores)) {
            
                if(!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
                
                $image->save(CARPETA_IMAGENES . $nombreImagen);

                $gobierno->guardar();
                
            }    

        }
        

        $router->renderAdmin('gobierno/crear', [
            'gobierno' => $gobierno,
            'errores' => $errores
        ]);
    }

 
    public static function actualizar(Router $router) {

        $id = validarORedireccionar('/admin');

        // Obtener los datos de la nota
        $gobierno = Gobierno::find($id);

        // Arreglo con mensajes de errores
        $errores = Gobierno::getErrores();

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $args = $_POST['gobierno'];
        
            $gobierno->sincronizar($args);
    
            $errores = $gobierno->validar();
          
            
            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
    
            if($_FILES['gobierno']['tmp_name']['imagen']){
                $image = Image::make($_FILES['gobierno']['tmp_name']['imagen'])->fit(720,720);
                $gobierno->setImagen($nombreImagen); 
            }  
    
            if(empty($errores)) {
                if($_FILES['gobierno']['tmp_name']['imagen']){
                $image->save(CARPETA_IMAGENES . $nombreImagen);
                }
    
                $gobierno->guardar();
               
            }
            
        }    
       
        $router->renderAdmin('gobierno/actualizar', [
            'gobierno' => $gobierno,
            'errores' => $errores
        ]);

    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);


            if($id) {

                $tipo = $_POST['tipo'];            
                
                if(validarTipoContenido($tipo === 'gobiernos')) {
                    $gobierno = Gobierno::find($id);
                    $gobierno->eliminar();
                } 
            }
        }
    }
}    

?>

