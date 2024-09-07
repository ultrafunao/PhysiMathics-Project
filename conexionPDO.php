<?php
    // Habilitar el reporte de errores para depuración
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
    //error_reporting(0);

    //En el my.ini agrego skip-grant-tables=TRUE. Busco skip y lo agrego debajo de #skip-federated para habilitar el manejo de excepciones o si no utilizar try catch. -- para el caso de una coxinon OO básica.
    
    /**************************************************** */
    // Manejo de excepciones con el bloque "Trate de atraparlo"
    try {
        $con = new mysqli("localhost", "root", "", "physimathics");
        $con->set_charset("utf8");
        //echo "Conexión exitosa!";
    } catch (mysqli_sql_exception $e) {
        die("Error de conexión: " . $e->getMessage());
    }
?>
