<meta charset="utf-8">
<?php
session_start();
 
include_once 'config.php';
include_once 'ConnectDb.php';
   if (file_exists ('install/index.php')){
      ob_start();
      $new_url = 'install/index.php';
      header('Location: '.$new_url);
      ob_end_flush();
      }
      else{
      ob_start();
      $new_url = 'Core/index.php';
      header('Location: '.$new_url);
      ob_end_flush();
      }
?>