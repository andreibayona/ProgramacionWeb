<?php

# Clase conexion: permite conectar a la base de datos y ejecutar consultas sql

class Conexion {
    # Atributos de la clase conexion

    private $mysqli = '';
    private $usuario = 'root';
    private $clave = '';
    private $server = 'localhost';
    private $db = 'infojuegos';

    # Funcion que permite conectarnos a la base de datos

    public function conectar() {
        # Creamos un objeto de conexion MySQLI
        $this->mysqli = new mysqli($this->server, $this->usuario, $this->clave, $this->db);

        # Validamos si existe un error al conectarnos
        if ($this->mysqli->connect_errno) {
            # Imprimimos el error
            echo 'Fallo al conectarse con MySQL: ' . $this->mysqli->connect_error;
        }
    }
    
       function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "' ,";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->mysqli, " insert into " . $tabla . " values(" . $valoresFila . ");") or die(' la consulta fallo ' . mysqli_error($this->mysqli));
     
    }

    function consultar($tabla = "", $campo = "", $dato = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else if ($dato == "") {
            $query = "select " . $campo . " from " . $tabla;
        } else {
            $query = "select * from " . $tabla . " where " . $campo . " = " . $dato;
        }
        $res = mysqli_query($this->mysqli, $query);
        return $res;
    }
   function juegos($nombre = "") {
        $consulta = "SELECT * FROM usuarios WHERE nombre like '%$nombre%'";
        mysqli_query($this->link, $consulta) and mysqli_info($this->link);
    }

        function actualizarJuego($fila = array(), $tabla = "", $idJuego = "") {
        $actualizar = "update " . $tabla . " set  nombre='$fila[0]', portada='$fila[1]', contenido='$fila[2]', fecha='$fila[3]', imagen='$fila[4]', video='$fila[5]', calificacion='$fila[6]', id_categoria='$fila[7]', precio='$fila[8]' where id_juego='$idJuego'";
        $res = mysqli_query($this->mysqli, $actualizar)or die("la consulta fallo (insertar)" . mysqli_error($this->mysqli));
        return $res;
    }

    function actualizarNoticia($fila = array(), $tabla = "", $idNoticia = "") {
        $actualizar = "update " . $tabla . " set  titulo='$fila[0]', imagen='$fila[1]', informacion='$fila[2]', fecha='$fila[3]', redactor='$fila[4]', video='$fila[5]' where id_noticia='$idNoticia'";
        mysqli_query($this->mysqli, $actualizar) and mysqli_info($this->link);
    }

    function eliminarJuegos($fila = array(), $tabla = "", $idJuego = "") {
        $eliminar = "delete  from juegos where id_juego='$idJuego'";
        mysqli_query($this->mysqli, $eliminar)or die(" no se pudo eliminar" . mysqli_error($this->link));
    }
    function eliminarNoticias($fila = array(), $tabla = "", $idNoticia = "") {
        $eliminarn = "delete  from noticias where id_noticia='$idNoticia'";
        mysqli_query($this->mysqli, $eliminarn)or die(" no se pudo eliminar" . mysqli_error($this->mysqli));
    }





    # Function que retorna un objeto de MySQL

    public function query($consulta) {
        #mysqli_query Realiza una consulta a la base de datos
        return $this->mysqli->query($consulta);
    }

    # Funcion que retorna el numero de filas afectadas por una consulta sql

    public function verificarRegistros($consulta) {
        # mysqli_num_rows: Obtiene el número de filas de un resultado de una consulta
        return $verificarRegistros = mysqli_num_rows($this->mysqli->query($consulta));
    }
    public function registrar_usuario($usuario, $contra, $ccontra, $correo, $pais)
    {
        if ($contra == $ccontra) {
        $validacion_contra=true;
        }else{
            $validacion_contra=false;
        }
        if ($validacion_contra) {
            $consulta= $this->mysqli->query("select correo from usuarios where usuario = '".correo."'");

            if (mysqli_num_rows($consulta)>0){
            echo '1';
        }else{
            $this->mysqli->query("insert into usuarios values ('', ".$usuario."', '".$contra."', '".$correo."', '".$pais."', 2)");
        echo "../index.php";
        }

        }else{
            echo '2';
        }
        
           

    }

    
    # Funcion que retorna un arreglo con los registros de una consulta

    public function consultaArreglo($consulta) {
        # mysqli_fetch_array Obtiene una fila de resultados como un array asociativo, numérico, o ambos
        return mysqli_fetch_array($this->mysqli->query($consulta));
    }

    # Function que permite cerrar una conexion de MySQL

    public function cerrar() {
        # Accedemos al atributo de conexion y cerramos la conexion
        $this->mysqli->close();
    }

    # Escapa los caracteres especiales de un string para evitar las inyecciones sql

    public function salvar($des) {
        /*
          mysqli_real_escape_string: Escapa los caracteres especiales de una cadena
          para usarla en una sentencia SQL, tomando en cuenta el conjunto de
          caracteres actual de la conexión.
         */
        $string = $this->mysqli->real_escape_string($des);

        return $string;
    }

    # Serie de filtros para almacenar en base de datos

    public function filtrar($string) {

        $res = $this->salvar($string);

        # Asignamos los parametros de busqueda
        $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
        $reemplazar = array('&aacute', '&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

        # str_replace: Reemplaza todas las apariciones del string buscado con el string de reemplazo
        $res = str_replace($buscar, $reemplazar, $string);

        # strtolower: Convierte una cadena a minúsculas
        $res = strtolower($res);

        # trim: Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena
        $res = trim($res);

        return $res;
    }

    # Convierte el acento de base de datos a acentos entendibles

    public function rescatar($string) {

        # Asignamos los parametros de busqueda
        $buscar = array('&aacute', '&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');
        $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');

        $res = str_replace($buscar, $reemplazar, $string);

        return $res;
    }

}

// End Class
?>
