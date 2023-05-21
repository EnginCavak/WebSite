



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
<div id="app">
        

        <form action="iletisimiki.php" method="POST">
            
            

           
        </form>
    </div>
<div id="app">
        <h1>Gönderilen Form Verileri:</h1>
        <p><strong>İsim:</strong> <?php echo $_POST['name']; ?></p>
        <p><strong>E-posta:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Okul No:</strong> <?php echo $_POST['phone']; ?></p>
        <p><strong>Mesaj:</strong> <?php echo $_POST['message']; ?></p>
       
        <p><strong>Cinsiyet:</strong> <?php echo isset($_POST['gender']) ? $_POST['gender'] : ''; ?></p>
</div>

    </div>


</body>






















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