<?php

require_once './model/conexion.php';

if (isset($_POST['enviarNoticia'])) {

    $db = new Conexion();
    $db->conectar();

    $foto = $_FILES["imagen"]["name"];
    $ruta = $_FILES["imagen"]["tmp_name"];
    $destino = "ImagenNoticia/" . $foto;
    copy($ruta, $destino);
    $db->insertar(array('000', $_POST['titulo'], $destino, $_POST['informacion'], $_POST['fecha'], $_POST['nredactor'], $_POST['video']), "noticias");
    header('Location: registrarDatos.php');
}

if (isset($_POST['eniviarJuego'])) {
    $foto = $_FILES["portada"]["name"];
    $ruta = $_FILES["portada"]["tmp_name"];
    $destino = "Portada/" . $foto;
    copy($ruta, $destino);

    $foto1 = $_FILES["imagen"]["name"];
    $ruta1 = $_FILES["imagen"]["tmp_name"];
    $destino1 = "ImagenJuego/" . $foto1;
    copy($ruta1, $destino1);


    $db = new Conexion();
    $db->conectar();
    $db->insertar(array('', $_POST['juego'], $destino, $_POST['contenido'], $_POST['fecha'], $destino1, $_POST['video'], $_POST['calificacion'], $_POST['categoria'], $_POST['precio']), "juegos");


    header('Location: registrarDatos.php');
}
if (isset($_POST["enviarUsuario"])) {

    $db = new Conexion();
    $db->conectar();
//    $recap = $_POST['g-recaptcha-response'];
//    if ($recap != '') {
//        $secret = "6Le3xBsUAAAAAEJKVIfB_CqpgRgXbVv43jFTnSUT";
//        $ip = $_SERVER['REMOTE_ADDR'];
//        $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secrect=$secret&response=$recap&remoteip=$ip");
//        $array = json_decode($var, TRUE);
//        if ($array['success']) {
            if ($_POST['usuario'] == '' or $_POST['contra'] == '' or $_POST['ccontra'] == '' or $_POST['correo'] == '' or $_POST['pais'] == '') {
                echo 'por favor llenar todos los campos ';
            } else {
                if ($_POST["contra"] == $_POST["ccontra"]) {
                    $db->insertar(array('', $_POST['usuario'], MD5($_POST['contra']), $_POST["correo"], $_POST["pais"], 2), "usuarios");
                } else {
                    echo 'las contraseñas no considen';
                }
            }
            header('Location: registro.php');
//        } else {
//            echo 'no soy humano';
//        }
//    }
}

if (isset($_POST["enviarComentarioJ"])) {
    $db = new Conexion();
    $db->conectar();
    session_start();

    

    $fecha_actual = date('Y-m-d');
    $db->insertar(array('', $_POST['texto'],$_SESSION['nombre'], $fecha_actual, $_POST['idjuego']), "comentarios");
 header("Location: Pjuego.php?id_juegos=" . $_POST['idjuego']);
}

if (isset($_POST["enviarPregunta"])) {
    $db = new Conexion();
    $db->conectar();
    $db->insertar(array('', $_POST['nombre'], $_POST['asunto'], $_POST['correo'], $_POST['mensaje']), "preguntas");
}

if (isset($_POST['eliminarJuego'])) {
      $db = new Conexion();
    $db->conectar();
    $db->eliminarJuegos(array(),"juegos", $_POST['idjuego']);
    header("Location: Tablas.php");
}
if (isset($_POST['eliminarNoticia'])) {
      $db = new Conexion();
    $db->conectar();
    $db->eliminarNoticias(array(),"noticias", $_POST['idnoticia']);
    header("Location: Tablas.php");
}
if (isset($_POST['actualizarJuego'])) {
     $foto = $_FILES["portada"]["name"];
    $ruta = $_FILES["portada"]["tmp_name"];
    $destino = "Portada/" . $foto;
    copy($ruta, $destino);

    $foto1 = $_FILES["imagen"]["name"];
    $ruta1 = $_FILES["imagen"]["tmp_name"];
    $destino1 = "ImagenJuego/" . $foto1;
    copy($ruta1, $destino1);
    
  $db = new Conexion();
    $db->conectar(); 
    $db->actualizarJuego(array($_POST['juego'], $destino, $_POST['contenido'], $_POST['fecha'], $destino1, $_POST['video'], $_POST['calificacion'], $_POST['categoria'], $_POST['precio']), "juegos", $_POST ['idjuego']);
   
     header("Location: editJuegos.php?id_juego=" . $_POST['idjuego']);


}
if (isset($_POST['editarNoticia'])) {

    $db = new Conexion();
    $db->conectar();

    $foto = $_FILES["imagen"]["name"];
    $ruta = $_FILES["imagen"]["tmp_name"];
    $destino = "ImagenNoticia/" . $foto;
    copy($ruta, $destino);
    $db->actualizarNoticia(array($_POST['titulo'], $destino, $_POST['informacion'], $_POST['fecha'], $_POST['nredactor'], $_POST['video']), "noticias", $_POST ['idnoticia']);
    header("Location: editNoticias.php?id_noticia=" . $_POST['idnoticia']);
}
?>
