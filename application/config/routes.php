<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['empleados'] = 'CrudControllers/Empleados'; // Ruta personalizada para la lista de empleados
$route['nuevo-empleado'] = 'CrudControllers/Empleados/agregar'; // Cambiado de 'CrudControllers/Add' a 'Empleados/agregar'
$route['nuevo-empleado/guardar'] = 'CrudControllers/Empleados/guardar'; 
$route['empleado/(:num)'] = 'CrudControllers/Empleados/edit/$1';
$route['empleado/eliminar/(:num)'] = 'CrudControllers/Empleados/eliminar/$1';

$route['cargos'] = 'CrudControllers/Cargos'; 
$route['cargo/eliminar/(:num)'] = 'CrudControllers/Cargos/eliminar/$1';
$route['cargo/(:num)'] = 'CrudControllers/Cargos/edit/$1';
$route['nuevo-cargo/guardar'] = 'CrudControllers/Cargos/guardar'; 
$route['nuevo-cargo'] = 'CrudControllers/Cargos/agregar';
$route['cargo/(:num)'] = 'CrudControllers/Cargos/edit/$1';

$route['sucursales'] = 'CrudControllers/Sucursales'; 
$route['sucursal/eliminar/(:num)'] = 'CrudControllers/Sucursales/eliminar/$1';
$route['sucursal/(:num)'] = 'CrudControllers/Sucursales/edit/$1';
$route['nuevo-sucursal/guardar'] = 'CrudControllers/Sucursales/guardar'; 
$route['nuevo-sucursal'] = 'CrudControllers/Sucursales/agregar';
$route['sucursal/(:num)'] = 'CrudControllers/Sucursales/edit/$1';

$route['translate_uri_dashes'] = FALSE;