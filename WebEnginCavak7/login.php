<?php
$user = "hayal";
$pass = "1122";

if(isset($_POST['usarname'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($usename==$user && $password==$pass)
    {
        echo"Giris yapildi";
    }
    else 
    {

        echo 'Hatali';
    }
    

    
   }

   ?>
<!--
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giris Sayfasi</title>
   </head>
   <body>
    <form method="POST" action="">
   <input type="text" name="username" placeholder="Kullanici adi"><br>
   <input type="password" name="password" placeholder="Sifre"><br>
   <button type="submit"> Giris yap</button>


    </form>
    
   </body>
   </html>


