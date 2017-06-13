<?php

  session_start();

  if($_SESSION['id_tipo'] == 1){
    header('location: ../view/admin/index.php');
  }else if($_SESSION['id_tipo'] == 2){
    header('location: ../view/user/index.php');
  }

 ?>
