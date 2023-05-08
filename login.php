<!DOCTYPE html>
<html long="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <meta none="viewport" content="width-device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge" ;>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mualla</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">İletişim </a>
                    </li>


                </ul>




            </div>
        </div>
    </nav>



    <form class="form" method="post" action="login.php">
        <div class="input-wrapper">
            <label for="username">Kullanıcı Adı</label>
            <input class="input-field" class="input-wrapper" type="text" id="username" name="username" required>
        </div>
        <div class="input-wrapper">
            <label for="password">Şifre</label>
            <input class="input-field" type="password" id="password" name="password" required>
        </div>
        <div>
            <button class="button" type="submit" value="Giriş Yap">Giriş Yap</button>
        </div>

    </form>
</body>

</html>

<?php
  if(isset($_POST['submit'])){
   $un=$_POST['username'];
   $pw=$_POST['password'];

   if($un=='username' && $pw=='password'){
    header("location:login.html");
    exit();
   }
   else{

   }
 
        
  }

?>