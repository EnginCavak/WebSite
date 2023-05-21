
<!--
    

/*$user = "hayal";
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSitem</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">



<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">Anasayfa </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İletisim</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="Sehrim.html">Şehrim </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Hakkımda
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="ozgecmis.html">Özgeçmiş</a>
                <a class="dropdown-item" href="takimimiz.html">Takımımız</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="ilgialanlarim.html">İlgi alanlarım</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Login</a>
        </li>
    </ul>

</div>
</nav>

    <div class="container mt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
        <h3 class="text-center mt-3">AÇIKLAMA</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis id alias explicabo illum mollitia
            necessitatibus dolores! Cum quia itaque fugiat pariatur voluptates porro voluptatem dolorem eveniet soluta
            fuga repellendus laudantium magnam nulla quaerat molestias natus, dolore ipsam. Vero perspiciatis,
            asperiores doloremque error consequuntur aut ipsa dignissimos sit quo exercitationem dolor vel, tempora
            nisi, modi architecto. Assumenda dolorem quam harum, nobis ut quae officia praesentium sequi impedit modi,
            eos architecto. Laboriosam, cum ducimus molestias natus nulla omnis reprehenderit nihil nisi tempore
            blanditiis harum soluta pariatur suscipit accusantium dolorem eligendi odio quia nam id nemo ipsa laudantium
            dicta repudiandae? Expedita facilis iste ipsam odit reiciendis animi velit laboriosam corrupti ea.
            Laboriosam tenetur autem recusandae odit facere? Ducimus optio iusto exercitationem sint quis commodi
            maiores assumenda obcaecati qui repellat similique autem, culpa recusandae voluptas molestiae, accusantium
            veritatis expedita odio quae. Fugiat ratione debitis earum ipsa modi, eveniet aliquid vitae adipisci aperiam
            cumque voluptate libero deleniti minima voluptatum ducimus officiis non nam facere perferendis. Commodi modi
            ipsam qui aliquam obcaecati, reprehenderit, explicabo totam unde nobis harum placeat voluptatum inventore
            iste ducimus sequi odio laudantium quibusdam distinctio porro fugit. Consequatur quo assumenda magnam minima
            illo voluptatibus. Consectetur iure a sed ducimus, nemo ratione quae eius?</p>



        <div class="row mt-4">
            <div class="col-sm">
                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Çok Yakında</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Çok Yakında</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Çok Yakında</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm mt-4 mb-4">
            <div class="card">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Çok Yakında</p>
                </div>
            </div>
        </div>









        <br>




        <br>




        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
            integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
            crossorigin="anonymous"></script>
</body>

</html>










<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script src="app.js"></script>
</head>
<body>
  <h1>Login</h1>
  <form>
    <label for="username">Kullanıcı Adı (E-posta):</label>
    <input type="text" id="username" required><br>

    <label for="password">Şifre:</label>
    <input type="password" id="password" required><br>

    <input type="submit" value="Giriş Yap" onclick="login()">
  </form>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Giriş Yap / Kayıt Ol</title>
  <script src="app.js"></script>
</head>
<body>
  <h1>Giriş Yap / Kayıt Ol</h1>
  <div id="loginPage">
    <h2>Giriş Yap</h2>
    <form>
      <label for="loginUsername">Kullanıcı Adı:</label>
      <input type="text" id="loginUsername" required><br>

      <label for="loginPassword">Şifre:</label>
      <input type="password" id="loginPassword" required><br>

      <input type="submit" value="Giriş Yap" onclick="login()">
    </form>
    <p>Hesabınız yok mu? <a href="#" onclick="showRegisterPage()">Kayıt Ol</a></p>
  </div>

  <div id="registerPage" style="display: none;">
    <h2>Kayıt Ol</h2>
    <form>
      <label for="registerUsername">Kullanıcı Adı:</label>
      <input type="text" id="registerUsername" required><br>

      <label for="registerPassword">Şifre:</label>
      <input type="password" id="registerPassword" required><br>

      <input type="submit" value="Kayıt Ol" onclick="register()">
    </form>
    <p>Zaten bir hesabınız var mı? <a href="#" onclick="showLoginPage()">Giriş Yap</a></p>
  </div>

  <div id="loggedInMessage" style="display: none;">
    <h2>Hoşgeldiniz</h2>
    <p id="loggedInUsername"></p>
  </div>
</body>
</html>






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
