<?php
    require("../database/database.php");
    require("../env.php");


    
    function getFiambres($connection) {

        $consulta="SELECT * FROM fiambres";

        //2- Ejecuto mi query
        $datos= mysqli_query($connection,$consulta);

        //3- Devuelvo los cafés
        return $datos;
    }
        
    function getFiambre($connection, $fiambre_id) {
        //1 - Hago mi query para capturar cafés de la BBDD
        $consulta="SELECT * FROM fiambres WHERE id=".$fiambre_id;
        
        //2- Ejecuto mi query
        $datos= mysqli_query($connection,$consulta);

        //3- Devuelvo los cafés
        return $datos;
    }



    //pregunta si seleccionas deleteFiambre
    if (isset($_POST["deleteFiambre"])) {
        deleteFiambre($connection, $_POST["id"]);
        header('Location: ../views/home.php');
    } 

    //Check if it is a c    reateFiambre post request
    if (isset($_POST["createFiambre"])) {          
        //Check if there is something in $_FILES
        if(isset($_FILES["img"])) {
            //Getting origin path
            $from=$_FILES["img"]["tmp_name"];
            
            //Put name of image
            $name=basename($_FILES["img"]["name"]);

            //Getting destination path
            $to=$_SERVER["DOCUMENT_ROOT"]."/Potrero2023/storage/img/".time().$name;
            

            //Moving file from temporary space to storage
            move_uploaded_file($from, $to);
            
        } else {
            header('Location: ../views/home.php');
        }

        
        //validate post data
        $data=validate__fiambre($_POST);
      

        //Add image path to data
        $to="../storage/img/".basename($to);
        $data["img"]=$to;
       
        
        //Execute createFiambre function
        createFiambre($connection, $data);
        
        
        header('Location: ../views/home.php');
    }
    
    //EDIT COFFE

    //Check if it is a editCoffee post request
    if (isset($_POST["editFiambre"])) {          
        //Check if there is something in $_FILES

        $to=NULL;

        if($_FILES["img"]["name"] !="") {

            //Getting origin path
            $from=$_FILES["img"]["tmp_name"];
                
            //Put name of image
            $name=basename($_FILES["img"]["name"]);

            //Getting destination path
            $to=$_SERVER["DOCUMENT_ROOT"]."/storage/img/".time().$name;

            //Moving file from temporary space to storage
            move_uploaded_file($from, $to);

            $to=$root_url."/storage/img/".basename($to);
        } else {
            header('Location: ../views/home.php');
        }


        //validate post data
        $data=validate__fiambre($_POST);
        //Add image path to data
        $data["img"]=$to;
        $data["id"]=$_POST["id"];
        
        //Execute createFiambre function
        editFiambre($connection, $data);
        header('Location: ../views/home.php');
    }

    function editFiambre($connection,$data) {
        if ($data["img"]==NULL) {
            $fiambre_updated=" UPDATE fiambres
                        SET name = '".$data["name"]."',
                            marca = '".$data["marca"]."',
                            precio = '".$data["precio"]."',
                            peso = '".$data["peso"]."',
                            img = '".$data["img"]."',
                            link = '".$data["link"]."'
                        WHERE id = ".$data["id"]."";
        } else {
            $fiambre_updated=" UPDATE fiambres
            h            SET name = '".$data["name"]."',
                            marca = '".$data["marca"]."',
                            precio = '".$data["precio"]."',
                            peso = '".$data["peso"]."',
                            img = '".$data["img"]."',
                            link = '".$data["link"]."' 
                        WHERE id = ".$data["id"]."";
        }

        mysqli_query($connection,$fiambre_updated);
        header('Location: ../views/home.php');
    }



    function createFiambre($connection, $data) {
        $newFiambre= "INSERT INTO fiambres (
            name, marca, precio, peso, img, link
            )
            VALUES (
                '".$data["name"]."', 
                '".$data["marca"]."',
                '".$data["precio"]."', 
                '".$data["peso"]."', 
                '".$data["img"]."',
                '".$data["link"]."'
                )";

        mysqli_query($connection,$newFiambre); 
        echo("pasa por aca");
        return 1;
    }

    function validate__fiambre($form) {
        $data["name"]=$form["name"];
        $data["marca"]=$form["marca"];
        $data["precio"]=$form["precio"];
        $data["peso"]=$form["peso"];
        $data["link"]=$form["link"];
        
        return $data;
        
    }



    function deleteFiambre($connection, $fiambre_id) {
        $consulta="DELETE FROM fiambres WHERE id=".$fiambre_id;
        mysqli_query($connection,$consulta);
        return ;
    }
?>