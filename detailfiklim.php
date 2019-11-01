<?php include("config.php");

          $id=$_GET['id'];
           $query = mysqli_query($conn,"SELECT * FROM fklim INNER JOIN data_fklim ON data_fklim.id_fklim = fklim.data_fklim WHERE fklim.id_fiklim = '$id'");
              $row_query = mysqli_fetch_assoc($query);  
        
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Fklim</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #98ECE5;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-filestyle.min.js"></script>
 
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://karangploso.jatim.bmkg.go.id/" target="_blank">BMKG MALANG</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
         
          <ul class="nav navbar-nav">
          <li><a href="hujan.php">DATA HUJAN</a></li>
          <ul class="nav navbar-nav">
          <li><a href="fklim.php">FKLIM</a></li>
           <ul class="nav navbar-nav">
          <li><a href="arg.php">ARG</a></li>
          <ul class="nav navbar-nav">
          <li><a href="aws.php">AWS</a></li>
          <ul class="nav navbar-nav">
          <li><a href="aaws.ph">AAWS</a></li>
           
            </ul>
         </ul>
       </ul>
     </ul>
   </ul>
 </ul>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if($_SESSION['user']){
            echo '<li><a href="profile.php">Profile</a></li>';
            echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
          <li><a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

        


  <div class="container container-body">
    <h1>Upload Data <?= $row_query['data_fklim'];?></h1>
    <hr>
    <?php
    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
    }else{
    ?>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-10">
              <input type="file" name="myFile" class="filestyle" data-icon="false">
            </div>
            <div class="col-md-2">
              <input type="submit" name="upload" class="btn btn-primary" value="Upload">
            </div>
          </div>
        </form>

        <?php
       


          define("UPLOAD_DIR", "uploads/");

          if (!empty($_FILES["myFile"])) {
          $myFile = $_FILES["myFile"];
          $ext    = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
          $size   = $_FILES["myFile"]["size"];
          $tgl   = date("Y-m-d");






          if ($myFile["error"] !== UPLOAD_ERR_OK) {
            echo '<div class="alert alert-warning">Gagal upload file.</div>';
            exit;
          }

          
          $idk = $_GET['id'];

          // filename yang aman
          $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

          // mencegah overwrite filename
          $i = 0;
          $parts = pathinfo($name);
          while (file_exists(UPLOAD_DIR . $name)) {
            $i++;
            $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
          }

          // upload file
          $success = move_uploaded_file($myFile["tmp_name"],
            UPLOAD_DIR . $name);
            if (!$success) { 
              echo '<div class="alert alert-warning">Gagal upload file.</div>';
              exit;
            }else{

            $insert = $conn->query("INSERT INTO data_fklim(id_fklim, tgl_upload, file_name, file_size, file_type) VALUES('$idk', '$tgl', '$name', '$size', '$ext')");


            if($insert){

              echo '<div class="alert alert-success">File berhasil di upload.</div>';
            }else{
              echo '<div class="alert alert-warning">Gagal upload file.</div>';
              // Report all errors
              error_reporting(E_ALL);

            }
          }

          // set permisi file
          chmod(UPLOAD_DIR . $name, 0644);
        }
        ?>

      </div>
    </div>

    <?php
    }
    ?>

    <hr>
  
  </div>

  
<div class="container container-body">
  <?php
        $id=$_GET['id']; 
        $query = mysqli_query($conn,"SELECT * FROM fklim where id_fiklim='$id'");
        while($row_query = mysqli_fetch_assoc($query)) :
  ?>
    <h1>Download Data </h1>
    
    <hr>
  
    <?php


    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
    }else{
      function bytesToSize($bytes, $precision = 2){  
        $kilobyte = 1024;
        $megabyte = $kilobyte * 1024;
        $gigabyte = $megabyte * 1024;
        $terabyte = $gigabyte * 1024;
       
        if (($bytes >= 0) && ($bytes < $kilobyte)) {
          return $bytes . ' B';
        } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
          return round($bytes / $kilobyte, $precision) . ' KB';
        } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
          return round($bytes / $megabyte, $precision) . ' MB';
        } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
          return round($bytes / $gigabyte, $precision) . ' GB';
        } elseif ($bytes >= $terabyte) {
          return round($bytes / $terabyte, $precision) . ' TB';
        } else {
          return $bytes . ' B';
        }
      }
    ?>
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="cari"/>
    <table class="table table-striped table-hover order-table ">
      <br>
      <tr>
        <th>NO.</th>
        <th>TGL. UPLOAD</th>
        <th>FILE NAME</th>
        <th>FILE SIZE</th>
        <th>FILE TYPE</th>
        <th>DOWNLOAD</th>
        <th>DELETE</th>
      </br>
      </tr>
      <?php
      
      $sql = $conn->query("SELECT * FROM data_fklim where id_fklim='$id'");
      

      if($sql->num_rows > 0){
        $no = 1;
        while($row = $sql->fetch_assoc()){
          echo '
            <tr>
            <td>'.$no.'</td>
            <td>'.$row['tgl_upload'].'</td>
            <td>'.$row['file_name'].'</td>
            <td>'.bytesToSize($row['file_size']).'</td>
            <td>'.$row['file_type'].'</td>
            <td><a href="uploads/'.$row['file_name'].'" class="btn btn-primary btn-sm">Download</a></td>
             <td><a href="fhapus.php?id='.$row['id_datafklim'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Ongguen?\')"> Delete</a></td>
             
          </tr>
          ';
          $no++;
        }
      }else{
        echo '<tr><td colspan="5">Tidak ada data</td></tr>';
      }
      ?>
    </table>

    <?php
    }
    ?>
  <?php endwhile; ?>

     <hr>
     <center>copyright &copy; 2019 <a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">BMKG MALANG</a></center>
  </div>

  
</body>
</html>
<script type="text/javascript">
  (function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(thh) {
          Arr.forEach.call(thh.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>