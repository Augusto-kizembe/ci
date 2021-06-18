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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'SiteController';
$route['sobre']['get'] = 'SiteController/sobre';
$route['servicos']['get'] = 'SiteController/servicos';
$route['projectos']['get'] = 'SiteController/projectos';
$route['contactos']['get'] = 'SiteController/contactos';
$route['solicitacoes']['get'] = 'SiteController/solicitacoes';
$route['servicos/pedido/(:num)'] = 'RequestController/showRequestForm/$1';
/** Funcionários */
$route['funcionarios'] = 'UserController';
$route['funcionario/alterar_estado/(:num)'] = 'UserController/alterarEstado/$1';
$route['funcionario/edit/(:num)']['get'] = 'UserController/edit/$1';
$route['funcionario/update']['post'] = 'UserController/update';
$route['funcionario/novo']['get'] = 'UserController/create';
$route['funcionario/criar']['post'] = 'UserController/store';
/** Solicitações */
$route['solicitacao/consultoria']['post'] = 'RequestController/storeConsultoria';
$route['solicitacao/exportacao']['post'] = 'RequestController/storeExportacao';
$route['solicitacao/importacao']['post'] = 'RequestController/storeImportacao';
$route['solicitacao/escoamento']['post'] = 'RequestController/storeEscoamento';
/** Visualizar Solicitações */
$route['solicitacao/solicitacoes/(:num)'] = 'RequestController/solicitacoes/$1';
$route['solicitacao/estado/(:num)'] = 'RequestController/estado/$1';
$route['solicitacao/visualizar/(:num)'] = 'RequestController/visualizar/$1';
$route['solicitacao/estado']['post'] = 'RequestController/estado';
/** Email */
$route['contactos/email'] = 'EmailController/send';
$route['contactos/teste'] = 'EmailController/teste';
/** Autenticação */
$route['login']['get'] = 'LoginController/showLoginForm';
$route['login']['post'] = 'LoginController/login';
$route['logout']['post'] = 'LoginController/logout';
$route['alterar_senha']['get'] = 'LoginController/showChangePasswordForm';
$route['alterar_senha']['post'] = 'LoginController/changePassword';
$route['pdf']['get'] = 'PdfController/teste';

// Router de Idioma 
$route['idioma/(:any)'] = 'IdiomaController/idiomaCheng/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
