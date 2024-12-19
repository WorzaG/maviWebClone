<?php

function getDatabaseConnection(){

    $host= "localhost:3306";
    $username = "root";
    $password = "123123123";
    $database = "maviveritabani";
    
    
    $connect = mysqli_connect($host,$username,$password,$database);
    
    if(!$connect){
        die("Bağlantı hatası: " . mysqli_connect_error());
    }else{
        //echo "başarılı şekilde çalışıyor";
    }
    
    return $connect;
}

