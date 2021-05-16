<?php
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

    if (isset($_POST['actualizarData'])) {

        $secuence = $_POST['secuence'];
        $cod_mod = $_POST['cod_mod'];
        // $cod_ugel = $_POST['cod_ugel'];
        // $nom_cole = $_POST['nom_cole'];
        // $dir_cole = $_POST['dir_cole'];
        // $num_cole = $_POST['num_cole'];
        // $email_cole = $_POST['email_cole'];
        // $dpto_cole = $_POST['dpto_cole'];
        // $prov_cole = $_POST['prov_cole'];
        // $dsto_cole = $_POST['dsto_cole'];
        // $loc_cole = $_POST['loc_cole'];
        // $nivel_cole = $_POST['nivel_cole'];

        $query = "UPDATE `colegios` 
                    SET `cod_modu_colegio`='$cod_mod'

                    WHERE `categorias`.`secuence_col` = '$secuence'";
                                        // ,`ugel_colegio`='$cod_ugel',`nom_colegio`='$nom_cole',`dir_colegio`='$dir_cole',
                                        // `tlf_colegio`='$num_cole',`mail_colegio`='$email_cole',`depa_colegio`='$dpto_cole',`prov_colegio`='$prov_cole',
                                        // `dist_colegio`='$dsto_cole',`director_colegio`='$loc_cole',`nivel_colegio`='$nivel_cole'

        $query_run = mysqli_query($cadena,$query);

        if ($query_run) {
            echo '<script> alert("Colegio Actualizado");</script>';
            header("Location:../Vista/Categoria/listaColegios.php");
        }else{
            
            echo '<script> alert("Error al actualizar");</script>';
        }

    }


?>