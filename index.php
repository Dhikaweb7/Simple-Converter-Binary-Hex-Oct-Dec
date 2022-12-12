<html>
<head>
 <title>Kalkulator Konversi Bilangan</title>
  <!--ambil Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--ambil materialize.css-->
      <link type="text/css" rel="stylesheet" href="style/css/bootstrap.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
      <!--viewport-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="photo.jpg" class="rounded" height="80" width="80"><a class="navbar-brand" href="#">Konversi Sistem Bilangan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">
          <span class="bi bi-microsoft">
           Menu
        </span>
        </a>
        <a class="nav-link active" aria-current="page" href="#">
          <span class="bi bi-gear">
           Konversi Bilangan
          </span>
          </a>
        <a class="nav-link active" aria-cureent="page" href="#">
          <span class="bi bi-person-circle">
           Tentang Kami</span></a>
        <a class="nav-link disabled">X TKJ 1 | SMK RADEN PAKU </a>
      </div>
    </div>
  </div>
</nav>
 <!-- body -->
 <div class="mt-2 mb-2">
  <h1 class="text-center text-success">SMK RADEN PAKU</h1>
  <hr class="text-danger">
  <h4 class="text-center text-primary">X TKJ 1</h4>
 </div>
 <form method="post" action="">
   <table width="500" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <br>
       <div class="input-group mb-3">
  <span placeholder="Masukan Bilangan ..." class="input-group-text" id="inputGroup-sizing-default">Masukan Bilangan</span>
  <input name ="angka" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
     </tr>
     <tr>
       <br>
       <input type="submit" class="btn btn-success pb-2 text-light" name="d2b" value="desimal ke biner" /></td>
     </tr>
     <br>
     <tr>
       <br>
       <input class="btn btn-success pt-2 text-light" type="submit" name="d2o" value="desimal ke oktal" /></td>
     </tr>
     <br>
     <tr>
       <br>
       <input class="btn btn-success text-light pt-2" type="submit" name="d2h" value="desimal ke hexadesimal" /></td>
     </tr>
     <br>
     <tr>
       <br>
       <input class="btn btn-success text-light pt-2" type="submit" name="b2d" value="biner ke desimal" /></td>
     </tr>
     <br>
     <tr>
       <br>
       <input class="btn btn-success pt-2 text-light" type="submit" name="o2d" value="oktal ke desimal" /></td>
     </tr>
     <br>
     <tr>
       <br>
       <input class="btn btn-success pt-2 text-light" type="submit" name="h2d" value="hexadesimal ke desimal" />
       <br>
     </tr>
   </table>
 </form>
 <p>Hasil :
   <textarea class="btn btn-outline-success text-light" cols="20">
  <?php

  $angka = isset($_POST['angka']) ? $_POST['angka']:"";

  if (isset($_POST['d2b'])) {
      echo decbin($angka);
  }
  if (isset($_POST['d2o'])) {
      echo decoct($angka);
  }
  if (isset($_POST['d2h'])) {
      echo dechex($angka);
  }
  if (isset($_POST['b2d'])) {
      echo bindec($angka);
  }
  if (isset($_POST['o2d'])) {
      echo octdec($angka);
  }
  if (isset($_POST['h2d'])) {
      echo hexdec($angka);
  }

  ?>
   </textarea>
 </p>
 <script src="style/js/bootstrap.min.js"></script>
</body>
</html>
