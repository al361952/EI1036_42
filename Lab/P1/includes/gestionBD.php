<?php

function registrar($table)
{
    print_r("gestionDB");
    ##global $pdo;
    $pdo=new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASWORD);
    $datos = $_REQUEST;
    if (count($_REQUEST) < 6) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO     $table (name, surname, address, city ,zip_code,foto_file)
                        VALUES (?,?,?,?,?,?)";
                       
    echo $query;
    try { 
        $a=array($_REQUEST['name'], $_REQUEST['surname'], $_REQUEST['address'],$_REQUEST['city'],$_REQUEST['zip_code'],$_REQUEST['foto_file'] );
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_REQUEST['name'], $_REQUEST['surname'],$_REQUEST['address'],$_REQUEST['city'],$_REQUEST['zip_code'],$_REQUEST['foto_file']  ));
        if (1>$a)echo "InCorrecto";
    
    } catch (PDOExeption $e) {
        echo("error");
        echo ($e->getMessage());
    }
}
?>
