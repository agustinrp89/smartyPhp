<?php
include("smarty/libs/Smarty.class.php");




$apiUrl = "https://rickandmortyapi.com/api/character";
$data_json = file_get_contents($apiUrl);
$data=json_decode($data_json);
$personajes = $data->results;

//$titulo="Trabajo Smarty";

$smarty=new Smarty();
$smarty->setTemplateDir(dirname(__FILE__).'/template');
$smarty->assign("personajes",$personajes);
$smarty->display("templates/index.tpl");

?>

