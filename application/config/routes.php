<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Login
$route['carta'] = 'home/carta';
$route['galeria'] = 'home/galeria';
$route['reserva'] = 'home/reserva';
$route['cartaAdmin'] = 'home/carta_admin';
$route['galeriaAdmin'] = 'home/galeria_admin';
$route['reservas'] = 'home/reservas';
$route['crearPlato'] = 'home/crearPlato';
$route['modificarPlato'] = 'home/crearPlato';
$route['eliminarPlato'] = 'home/eliminarPlato';
$route['categorias'] = 'administrator/homeAdmin/categorias';
$route['homeAdmin/crearCategoria'] = 'administrator/homeAdmin/crearCategoria';
$route['homeAdmin/crearPlato'] = 'administrator/homeAdmin/crearPlato';
$route['homeAdmin/actualizarPlato'] = 'administrator/homeAdmin/actualizarPlato';
$route['addFavoritos'] = 'administrator/homeAdmin/addFavoritos';
$route['activarPlato'] = 'administrator/homeAdmin/activarPlato';
$route['homeAdmin/eliminarCategoria'] = 'administrator/homeAdmin/eliminarCategoria';
$route['homeAdmin/modificarCategoria'] = 'administrator/homeAdmin/modificarCategoria';
$route['actualizarFotoInicio'] = 'home/actualizarFotoInicio';
$route['homeAdmin/actualizar_foto'] = 'administrator/homeAdmin/actualizarFoto';
$route['homeAdmin/subir_foto'] = 'administrator/homeAdmin/subirFoto';
$route['homeAdmin/borrar_foto'] = 'administrator/homeAdmin/borrarFoto';
$route['administracion'] = 'login';


