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
        /*
        echo '<pre>Variables POST';print_r($_POST);echo'</pre>';
        echo '<pre>Conexion Base De Datos ';print_r(InstallController::connect());echo'</pre>';
        */
        // Creando la tabla "admins"
        $sqlAdmins = "CREATE TABLE admins (
        id_admin INT NULL AUTO_INCREMENT,
        rol_admin TEXT NULL DEFAULT NULL,
        permissions_admin TEXT NULL DEFAULT NULL,
        email_admin TEXT NULL DEFAULT NULL,
        password_admin TEXT NULL DEFAULT NULL,
        token_admin TEXT NULL DEFAULT NULL,
        token_exp_admin TEXT NULL DEFAULT NULL,
        status_admin INT NULL DEFAULT 1,
        title_admin TEXT NULL DEFAULT NULL,
        symbol_admin TEXT NULL DEFAULT NULL,
        font_admin TEXT NULL DEFAULT NULL,
        color_admin TEXT NULL DEFAULT NULL,
        back_admin TEXT NULL DEFAULT NULL,
        date_created_admn DATE NULL DEFAULT NULL,
        date_updated_admin TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id_admin)) ENGINE = InnoDB;";
        $stmtAdmins = InstallController::connect()->prepare($sqlAdmins);

        if ($stmtAdmins->execute())
        {
          echo '<script> alert("Tabla creada exitosamente")</script>';
        }
      }
    }

  } // class InstallController 
?>
