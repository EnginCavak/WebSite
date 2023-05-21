<?php
ob_start();
$HtmlForm = <<< BLOK
   
<form name="login" method="post">

            <table>
                <tr>
                    <td>Kullanıcı Adı</td>
                    <td><input type="text" name="kullanici_adi" /></td>
                </tr>
                <tr>
                    <td>Şifre</td>
                    <td><input type="password" name="kullanici_sifre" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Giriş" /></td>
                </tr>
            </table>

        </form>
BLOK;



?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>Siteye giris yapabilmek icin asagı kismi doldurunuz</h1>
        <br>

        <?php
        if (!empty($_POST)) {

            if ($_POST['kullanici_adi'] == 'test' && $_POST['kullanici_sifre'] == '123') {
                 header('location:http://localhost/dosyayapisi/index.php');
            } else {
                
                header('location: http://localhost/dosyayapisi/login.php');
                
            }
           
        } else {
            echo $HtmlForm;
        }

       
       
        ?>

    </body>
</html>