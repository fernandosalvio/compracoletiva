<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo(NOME_SISTEMA); ?></title>
	<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" media="screen" />
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen" />
	<link href="css/complemento.css?ver=1.2" rel="stylesheet" media="screen" /> 
	<link href="css/datepicker.css" rel="stylesheet" media="screen">
    	<link rel="shortcut icon" href="favicon.ico" />
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/bootstrap-3.1.1.min.js"></script>
	<script src="js/pedido.js?ver=1.7.7"></script>
	<script src="js/bootstrap-datepicker.js" charset="UTF-8"></script>
    <script src="js/locales/bootstrap-datepicker.pt-BR.js" charset="UTF-8"></script>
    <script src="js/jquery.maskedinput.min.js" charset="UTF-8"></script>
    
    
</head>

<body >
 <div class="container">
<img src="img/logo_sistema.gif"  class="img-responsive"  />

<?php
 if(isset($_SESSION['usr.id']) && $_SESSION['usr.id']!="")
 {
 	 include "menu.inc.php";
 }
 else
 {
	 echo ("<br><br>");
 }
?>


<?php

if( function_exists('escreve_mensagem_status')) escreve_mensagem_status();

?>
