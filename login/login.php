<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sigaluh Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin" >
  <form method="POST" action="cek_login.php">
    <img class="mb-4" src="../assets/brand/logo.PNG" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Form Login SiGaluh</h1>
    <p> Masukkan Username dan Password Anda</p>

    <div class="form-floating mb-2">
      <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Masukkan Username Anda">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <!-- <div class="form-floating mb-3"> -->
      <!-- <select class="form-select" name="level" aria-label="Default select example">
        <option selected>Pilih Level</option>
        
        <option value="Admin">Admin</option>
    </select>
    </div>
 -->
    
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login" value="login">Log in</button>
    <!-- <p>Tidak Punya Akun?<a href="daftar_user.php"> Daftar Sekarang</a></p> -->

    <p class="mt-5 mb-3 text-muted">&copy; Copyright by SiGaluh 2022</p>
  </form>
</main>


    
  </body>
</html>
