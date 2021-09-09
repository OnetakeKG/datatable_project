<?php

//Удаление продукта



require_once '../config/connect.php';



        $q = $_POST["array"];

        foreach ($q as $id){


        $query =  "DELETE FROM goods WHERE id = '$id'";
        $query_run = mysqli_query($connect,$query);}






