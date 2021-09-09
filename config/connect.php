<?php

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = 'root';
const DATABASE = 'test';

    $connect =mysqli_connect(HOST, USER, PASSWORD, DATABASE);






if (!$connect) {
    die('Error connect to database!');
}