<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Base';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['registrar'] = "Base/Registrar";
$route['encerrar-sessao'] = "Base/EncerrarSessao";
$route['encerrar-sessoes'] = "Base/EncerrarSessoes";
$route['sessao-temporizada'] = "Base/SessaoTemporizada";
