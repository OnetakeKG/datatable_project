<?php

//Добавление нового товара


require_once '../config/connect.php';


     if (isset($_POST['insertdata'])) {

         $article = $_POST['article'];
         $title = $_POST['title'];
         $price = $_POST['price'];
         $img = $_POST['img'];
         $description = $_POST['description'];


         $query =  "INSERT INTO `goods` (`id`, `article`, `title`, `price`, `img`, `description`) 
                            VALUES (NULL, '$article', '$title', '$price', '$img', '$description')";
         $query_run = mysqli_query($connect,$query);




     }

    header('Location: /index.phtml');
