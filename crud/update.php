<?php

//Обновление информации о продукте



require_once '../config/connect.php';

    if (isset($_POST['updatedata'])) {


    $article = $_POST['article1'];
    $title = $_POST['title1'];
    $price = $_POST['price1'];
    $img = $_POST['img_url1'];
    $description = $_POST['description1'];
    $id = $_POST['update_id'];


    $query =  "UPDATE goods SET article = '$article', title = '$title',
                   price = '$price', img = '$img', description = '$description' WHERE id = '$id'";



    $query_run = mysqli_query($connect,$query);




    }

    header('Location: /index.phtml');