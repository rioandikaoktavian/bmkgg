<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data BMKG Malang</title>
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

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
        <a class="navbar-brand" href="http://tutorialweb.net/" target="_blank">BMKG MALANG</a>
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
          <li><a href="">AAWS</a></li>
           
              </ul>
          
         </ul>
       </ul>
     </ul>
   </ul>
 </ul>

        <ul class="nav navbar-nav navbar-right">
          <?php
          if($_SESSION['user']){
            echo '<li class="active"><a href="profile.php">Profile</a></li>';
            echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
           <li><a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">Visit Us</a></li>
        </ul>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
    <h1>Profile</h1>
    <hr>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <?php
        $sql = $conn->query("SELECT * FROM user WHERE username='{$_SESSION['user']}'");
        $data = $sql->fetch_assoc();
        ?>
        <table class="table">
          <tr>
            <th>USERNAME</th><th>:</th><td><?php echo $data['username']; ?></td>
          </tr>
          <tr>
            <th>TGL. DAFTAR</th><th>:</th><td><?php echo $data['tgl_daftar']; ?></td>
          </tr>
          <tr>
            <th>NAMA LENGKAP</th><th>:</th><td><?php echo $data['nama']; ?></td>
          </tr>
          <tr>
            <th>EMAIL</th><th>:</th><td><?php echo $data['email']; ?></td>
          </tr>      
        </table>
      </div>
    </div>
    <hr>
    <center>copyright &copy; 2019 <a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">BMKG MALANG</a></center>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>