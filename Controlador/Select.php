<?php
    function selectorDepartamentos(){
        include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

        $query = "select * from ubdepartamento";

        $result = mysqli_query($cadena, $query);

        $json = array();

        while ($row = mysqli_fetch_array($result)) {
            $json [] = array(
                'codDepto' => $row['idDepa'],
                'nombDepto' => $row['departamento']
            );
        }

        $jsonstring = json_encode($json);

        echo $jsonstring;
    }

    function obtenerProvincias($codDepartamento){
        include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

        $query = "SELECT provincia from ubprovincia uprov
        INNER JOIN ubdepartamento udep 
        on uprov.idDepa = udep.idDepa 
        where udep.departamento = '$codDepartamento'";

        $result = mysqli_query($cadena, $query);

        $jsonstring = array();

        while ($row = mysqli_fetch_array($result)) {
            $jsonstring [] = array(
                'nomProv' => $row['provincia']
            );
        }
        $jsonstring = json_encode($jsonstring);
        echo $jsonstring;

    }
    
    function obtenerDistritos($codProvincia){
        include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

        $query = "SELECT distrito from ubdistrito ubdist
        INNER JOIN ubprovincia uprov 
        on ubdist.idProv = uprov.idProv 
        where uprov.provincia  = '$codProvincia'";
        $result = mysqli_query($cadena, $query);

        $json = array();

        while ($row = mysqli_fetch_array($result)) {
            $json [] = array(
                'nomDist' => $row['distrito']
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;

    }



    if (isset($_POST['codDepar'])) {
        $codDepartamento = $_POST['codDepar'];
        obtenerProvincias($codDepartamento);
        
    }else if(isset($_POST['codProv'])){
        $codProvincia = $_POST['codProv'];
        obtenerDistritos($codProvincia);
    }else{
        selectorDepartamentos();
    }

?>