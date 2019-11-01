<?php 
  include("config.php"); 

  $query = mysqli_query($conn, "SELECT * FROM kabupaten ORDER BY id_kabupaten DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data BMKG Malang</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">
      .a {
  background-color:#008CBA; /* Hijau */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-bottom:5px solid gray;
  
  margin: 4px 2px;
  cursor: pointer;
}

    
    body {
      padding-top: 70px;
       background: #98ECE5;
    }

    .container-body {
      background:#F0F8FF;
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
          <li><a href="">DATA HUJAN</a></li>
          <ul class="nav navbar-nav">
          <li><a href="fklim.php">FKLIM</a></li>
           <ul class="nav navbar-nav">
          <li><a href="arg.php">ARG</a></li>
          <ul class="nav navbar-nav">
          <li><a href="aws.php">AWS</a></li>
          <ul class="nav navbar-nav">
          <li><a href="aaws.php">AAWS</a></li>
           
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
          <li><a href="http://tutorialweb.net/" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
   <h1><p style="font-family: Franklin Gothic Heavy" align="center" >Pilih Kabupaten/Kota</h1>

  <center> <input type="search" class="light-table-filter " data-table="order-table" placeholder="cari"/></center><br>
  <table class="rainbow-table order-table" align="center" bgcolor="white" >
    <thead>
      <tr>
         <th bgcolor="gray" height="40px" >Kabupaten/Kota</th>
        <th bgcolor="gray">Provinsi</th>
        <th bgcolor="gray">Input</th>
      </tr>
    </thead>
    <tbody>

      <?php
      if (mysqli_num_rows($query)>0) {
      $no = 1;
        while ($data =mysqli_fetch_array($query)) {
      ?>
      <tr>
        
        <td width="300px" height="50px"><?= $data['nama_kabupaten'];?></td>
        <td width="300px"height="50px"><?= $data['provinsi'];?></td>
        <td><a href="detail.php?id=<?php echo $data['id_kabupaten'];?>"><button class="a"> Buka </button></td></a>
      </tr>

      
      </tr>
    <?php 
        $no++;}
      } ?>
    </tbody>
  </table>
  <hr>
    <center>copyright &copy; 2019 <a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">BMKG MALANG</a></center>
    </tr>
    
   
            
        </div>

      
 <?php
    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
    }
    ?>
  </table>

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
