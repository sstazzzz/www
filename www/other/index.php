<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	$title = "Разное";
	define("ROOT_PATH",  __DIR__."/../");
	require_once(ROOT_PATH.'block/head.php');
	?>
</head>
<?php 
require_once(ROOT_PATH.'block/menu.php');
require_once(ROOT_PATH.'block/leftsidebar.php');
$linktext = "Разное";
require_once(ROOT_PATH.'block/content.php');
require_once(ROOT_PATH.'block/footer.php');
?>

  
