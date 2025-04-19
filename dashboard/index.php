<?php
  // ================================================
  // Depurar errores
  // ================================================
  // Variable Global
  define('DIR',__DIR__);

  
  // echo "<pre>";print_r(DIR);echo"</echo>";

  // Para desplegar los errores
  //ini_set("display_errors",1);
  //ini_set("log_errors",1);
  //ini_set("error_log",DIR."/php_error_log");


  require_once "controllers/template.controller.php";

  $index = new TemplateController(); // Enlace entre el "Controllers" y "Views"
  $index->index();

?>