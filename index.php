<?php
include  "controller/kalkulator.php";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title> latihan pertemuan 9 </title>
        <link rel = "stylesheet" type "text/css"  href="assets/css/bootstrap.css">
        <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>

       <style>
        .media{
            overflow: hidden;
            collor:#fff;
            background-collor:#0000;
            background-image-collor:#0001;
        }
        </style>

    </head>
    <body>
   
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="https://google.com/">HOME</a>
            <a class="navbar-brand" href="https://google.com/">Prestasi</a>
            <a class="navbar-brand" href="https://google.com/">Contact</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Download
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Software</a>
            <a class="dropdown-item" href="#">Artikel</a>
            </div>
            </li>
        
      </ul>
    </div>
  </nav>
    <div>
            <?php
                $nama ="budi";
                $alamat ="084948595"
            ?>
        <h1>nama&nbsp;&nbsp;:<?= $nama;?></h1>
        <h1>alamat&nbsp;&nbsp;:<?= $alamat;?></h1>
        <br><br>
        <hr>
        <?php
        $bila=10;
        $bilb=5;
        $hasil =0;
        if  (penjumlahan($bila, $bilb)<=15){
            $hasil ="angka kecil";

        }
        else{
            $hasil=penjumlahan($bila, $bilb);
        }
        ?>
        <h2>nilai bil. pertama&nbsp;= <?php echo $bila; ?></h2>
        <h2>nilai bil. kedua&nbsp;= <?php echo $bilb; ?></h2>
        <h2>hasil penjumlahan&nbsp;= <?php echo penjumlahan($bila, $bilb);?></h2>
    <form >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <!-- start table -->
        <table class="table table-bordered" width ="100%">
            <tr>
                <th width="15%">NO</th>
                <th width="25%">Nama</th>
                <th width="20%">kelas</th>
                <th width="20%">Email</th>
                <th width="20%">alamat</th>
            </tr>
            <tr>
                <td>1</td>
                <td>agus</td>
                <td>jarkom</td>
                <td>agusagus@@</td>
                <td>sini</td>
            </tr>
            <tr>
                <td>2</td>
                <td>winda</td>
                <td>jarkom</td>
                <td>wiinnda@@</td>
                <td>sana</td>
            </tr>


        </table>
    <!-- finish table -->
    </body>
</html>
