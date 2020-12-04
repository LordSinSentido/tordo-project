<?php
  include("seguridad.php");

  unset($_SESSION["estado"]); 
  unset($_SESSION["nombre"]);
  unset($_SESSION["apellido"]);
  unset($_SESSION["correo"]);
  session_destroy();
  
  echo <<<END
  <script languaje='javascript'>
  alert('Se ha cerrado su sesión.');
  window.location.href="../../index.php";
  </script>
  END;

  exit;
  die();
?>