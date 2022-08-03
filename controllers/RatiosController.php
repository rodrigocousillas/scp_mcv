<?php

namespace Controllers;
use MVC\Router;
use Model\Ratios;
use Intervention\Image\ImageManagerStatic as Image;

class RatiosController {

    public static function index(Router $router) {
       
        $ratios = Ratios::all();
        
        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;
        
        $router->renderAdmin('ratios/admin', [
            'ratios' => $ratios,
            'resultado' => $resultado
        ]);
    }   
    
    public static function crear(Router $router){
       
        $ratios = Ratios::all();
        
        // Arreglo con mensajes de errores
        $errores = Ratios::getErrores();

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $ratios = new Ratios($_POST['ratios']);

            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

            //resize a la imagen
            if($_FILES['ratios']['tmp_name']['imagen']){
                $image = Image::make($_FILES['ratios']['tmp_name']['imagen'])->fit(980,355);
                $ratios->setImagen($nombreImagen); 
            }    

            $errores = $ratios->validar();

            if(empty($errores)) {
            
                if(!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
                }
        
                $image->save(CARPETA_IMAGENES . $nombreImagen);

                $ratios->guardar();

            }    

        }
        

        $router->renderAdmin('ratios/crear', [
            'ratios' => $ratios,
            'errores' => $errores
        ]);
    }

    public static function actualizar(Router $router) {

        $id = validarORedireccionar('/admin');

        // Obtener los datos de la nota
        $ratios = Ratios::find($id);

      
        // Arreglo con mensajes de errores
        $errores = Ratios::getErrores();

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $args = $_POST['ratios'];
        
            $ratios->sincronizar($args);
    
            $errores = $ratios->validar();
          
            
            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
    
            if($_FILES['ratios']['tmp_name']['imagen']){
                $image = Image::make($_FILES['ratios']['tmp_name']['imagen'])->fit(980,355);
                $ratios->setImagen($nombreImagen); 
            }  
    
            if(empty($errores)) {
                if($_FILES['ratios']['tmp_name']['imagen']){
                $image->save(CARPETA_IMAGENES . $nombreImagen);
                }
    
                $ratios->guardar();
               
            }
            
        }    

        $router->renderAdmin('ratios/actualizar', [
            'ratios' => $ratios,
            'errores' => $errores
        ]);

    }

    public static function eliminar(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);


            if($id) {

                $tipo = $_POST['tipo'];            
                
                if(validarTipoContenido($tipo === 'ratio')) {
                    $ratios = Ratios::find($id);
                    $ratios->eliminar();
                } 
            }
        }
    }


}    

?>

