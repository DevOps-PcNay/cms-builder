<?php
  class InstallController 
  {
    // ======================================================}
    // Informacion de la base de datos

    static public function infoDatabase()
    {
      $infoDB = array(
        "database" => "bd_cms_builder",
        "user" => "usuario_cms_builder",
        "pass" => "cms_builder_Abr_30_2025"
      );

      return $infoDB;

    } // static public function infoDatabase()

    // Conexion a la Bsse De datos.

    static public function connect()
    {
      try 
      {
        $link = new PDO ("mysql:host=localhost;dbname=".InstallController::infoDatabase()["database"],InstallController::infoDatabase()["user"], 
        InstallController::infoDatabase()["pass"]
        );

        //$link->exec("set name utf8");
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		

        $mitz="America/Tijuana";
        $tz = (new DateTime('now', new DateTimeZone($mitz)))->format('P');
        $link->exec("SET time_zone='$tz';");		

      }catch(PDOException $e)
      {
        die("Error : ".$e->getMessage());
      }

      return $link; 

    }

    // =================================================================
    // Instalacion del Sistema 
    public function Install()
    {
      if (isset($_POST["email_admin"]))
      {
        echo '<pre>Variables POST';print_r($_POST);echo'</pre>';
        echo '<pre>Conexion Base De Datos ';print_r(InstallController::connect());echo'</pre>';
        
      }
    }

  } // class InstallController 
?>
