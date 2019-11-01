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
          <li><a href="aaws.php">AAWS</a></li>
           
              </ul>
          
         </ul>
       </ul>
     </ul>
   </ul>
 </ul>
 
  <div class="container container-body">
    <h1>About Author</h1>
    <hr>
    Kunjungi <a href="https://www.bmkg.go.id/" target="_blank">Web BMKG </a>
    <hr>
    <center>copyright &copy; 2019 <a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">BMKG MALANG</a></center>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>