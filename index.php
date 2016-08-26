<?php 
define("APP_FOLDER","app");
define("APP_URL", "http://".$_SERVER['SERVER_NAME']."/moneytrack/".APP_FOLDER."/");
define("APP_URL_CSS",APP_URL."public/css/");
define("APP_URL_IMG",APP_URL."public/img/");
define("APP_URL_JS",APP_URL."public/js/");
#Definir separador de directorios
define("DS",DIRECTORY_SEPARATOR);
#para obtener los nombres de los directorios
define("ROOT", realpath(dirname(__FILE__)).DS);
#una conexion al directorio aplication
define("APP_PATH", ROOT."aplication".DS);
define("LIB_PATH", ROOT."libs".DS);

#se incluyen los archivos necesarios 
require(APP_PATH."config.php");
require(LIB_PATH."PDO.php");
require(LIB_PATH."Authorization.php");
require(LIB_PATH."Password.php");
require(LIB_PATH."Validations.php");
require(APP_PATH."request.php");
require(APP_PATH."bootstrap.php");
require(APP_PATH."controller.php");
require(APP_PATH."model.php");
require(APP_PATH."view.php");

#echo "<pre>";
#print_r(get_required_files());

if(isset($_GET['url']))
{
	$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
	$url = explode("/", $url);
	$url = array_filter($url);
	$controller = array_shift($url);
	$action = array_shift($url);
	$args = $url;

	}

if(!isset($controller)){
	$controller = "pages";
}
if (!isset($action)) {
	$action = "index";
}
if(empty($args)){
	$args = array(0 => null);
}


$path =   ROOT."controllers". DS .$controller."Controller.php";
$view =   ROOT."views".DS.$controller. DS .$action.".php";
$header = ROOT."views".DS."layouts". DS ."default". DS ."header.phtml";
$footer = ROOT."views".DS."layouts". DS ."default". DS. "footer.phtml";

if($action=="login"){
	$header = ROOT."views". DS ."layouts". DS ."login". DS ."header.phtml";
	$footer = ROOT."views".DS."layouts". DS ."login". DS. "footer.phtml";
	
}else{
	Authorization::logged();
}

if(file_exists($path)){
	include_once($path);
	$ob = new $controller();
	$ob->$action($args);

	if(file_exists($view))
	{
		include_once($header);
		include_once($view);
		include_once($footer);
	}
	else
	{
		echo "La vista para la acción $action no existe";
	}	

}
else
{	
	echo("el controlador $controller no existe");

}
 ?>