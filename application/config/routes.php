<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['default_controller'] = 'home';
$route['404_override'] = 'home/paginaConstruccion';
$route['translate_uri_dashes'] = FALSE;

$route['contacto'] = 'home/contacto';
$route['blog'] = 'home/blog';
$route['fisioterapia'] = 'home/fisioterapia';
$route['osteopatia'] = 'home/osteopatia';
$route['podologia'] = 'home/podologia';
$route['epi'] = 'home/epi';
$route['tecarterapia'] = 'home/tecarterapia';
$route['nutricion'] = 'home/nutricion';
$route['pilatesTerapeutico'] = 'home/pilates';
$route['gimnasiaAbdominalHipopresiva'] = 'home/gimnasia';
$route['ejercicioTerapeutico'] = 'home/ejercicioTerapeutico';
$route['FisioterapiaRespiratoria'] = 'home/fisioterapiaRespiratoria';
$route['terapiaManual'] = 'home/terapiaManual';

$route['HathaYoga'] = 'home/yoga';


$route['empleado'] = 'home/empleado';







$route['administracion'] = 'login';
$route['homeAdmin'] = 'homeAdmin';
$route['comentarios'] = 'homeAdmin/comentarios';
$route['personal'] = 'homeAdmin/personal';


$route['galeriaImagenes'] = 'home/galeria';
$route['galeria'] = 'home/galeria';
$route['borrarFoto/(:num)'] = 'homeAdmin/borrarFoto/$1';
$route['subirFoto'] = 'homeAdmin/subirFoto';
$route['subirFotoGaleria'] = 'homeAdmin/subirFotoGaleria';
$route['marcarFotoInicio/(:num)/(:num)'] = 'homeAdmin/marcarFotoInicio/$1/$2';

$route['editarFoto'] = 'homeAdmin/editarFoto';
$route['editarFotoGaleria/(:num)'] = 'homeAdmin/editarFotoGaleria/$1';

$route['articulos'] = 'homeAdmin/articulos';
$route['subirArticulo'] = 'homeAdmin/subirArticulo';
$route['borrarArticulo/(:num)'] = 'homeAdmin/borrarArticulo/$1';


$route['subirEmpleado'] = 'homeAdmin/subirEmpleado';
$route['borrarEmpleado/(:num)'] = 'homeAdmin/borrarEmpleado/$1';



$route['subirComentario'] = 'homeAdmin/subirComentario';
$route['borrarComentario/(:num)'] = 'homeAdmin/borrarComentario/$1';
