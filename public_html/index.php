<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\PrensaController;
use Controllers\EmpresaController;
use Controllers\GobiernoController;
use Controllers\PaginasController;
use Controllers\RatiosController;

$router = new Router();

$router->get('/notas/admin', [PrensaController::class, 'index']);
$router->get('/notas/crear', [PrensaController::class, 'crear']);
$router->post('/notas/crear', [PrensaController::class, 'crear']);
$router->get('/notas/actualizar', [PrensaController::class, 'actualizar']);
$router->post('/notas/actualizar', [PrensaController::class, 'actualizar']);
$router->post('/notas/eliminar', [PrensaController::class, 'eliminar']);

$router->get('/empresas/admin', [EmpresaController::class, 'index']);
$router->get('/empresas/crear', [EmpresaController::class, 'crear']);
$router->post('/empresas/crear', [EmpresaController::class, 'crear']);
$router->get('/empresas/actualizar', [EmpresaController::class, 'actualizar']);
$router->post('/empresas/actualizar', [EmpresaController::class, 'actualizar']);
$router->post('/empresas/eliminar', [EmpresaController::class, 'eliminar']);

$router->get('/gobierno/admin', [GobiernoController::class, 'index']);
$router->get('/gobierno/crear', [GobiernoController::class, 'crear']);
$router->post('/gobierno/crear', [GobiernoController::class, 'crear']);
$router->get('/gobierno/actualizar', [GobiernoController::class, 'actualizar']);
$router->post('/gobierno/actualizar', [GobiernoController::class, 'actualizar']);
$router->post('/gobierno/eliminar', [GobiernoController::class, 'eliminar']);

$router->get('/ratios/admin', [RatiosController::class, 'index']);
$router->get('/ratios/crear', [RatiosController::class, 'crear']);
$router->post('/ratios/crear', [RatiosController::class, 'crear']);
$router->get('/ratios/actualizar', [RatiosController::class, 'actualizar']);
$router->post('/ratios/actualizar', [RatiosController::class, 'actualizar']);
$router->post('/ratios/eliminar', [RatiosController::class, 'eliminar']);

$router->get('/index', [PaginasController::class, 'index']);
$router->get('/', [PaginasController::class, 'index']);
$router->get('/notasprensa', [PaginasController::class, 'notasprensa']);
$router->get('/notaprensa', [PaginasController::class, 'notaprensa']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/gobierno_corporativo', [PaginasController::class, 'gobierno_corporativo']);
$router->get('/historia', [PaginasController::class, 'historia']);
$router->get('/cotizacion', [PaginasController::class, 'cotizacion']);
$router->get('/presentaciones', [PaginasController::class, 'presentaciones']);
$router->get('/programa_integridad', [PaginasController::class, 'programa_integridad']);
$router->get('/ratios', [PaginasController::class, 'ratios']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

$router->get('/administrador', [PaginasController::class, 'administrador']);

$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();

?>

<?php
// Displays the directory of this file
//echo "Desde Public/index: " . __DIR__; 
//echo "The full path of this file is: " . __FILE__;
?>