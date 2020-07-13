<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'todo';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Checking if Database connection is successful
// if(!$connection){
//     die('Error Connecting to the database '.mysqli_error($connection));
// }else{
//     echo "Successfully connected to the database";
// }
// ?>