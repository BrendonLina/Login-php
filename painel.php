<?php
if(!isset($_SESSION)){
session_start();
}

include('verifica_login.php');


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/login.css">

<div id="sec">
<div class="row d-flex justify-content-center">	
<div class="card w-25">
  <div class="card-body">
    <h5 class="card-title">Usuário</h5>
    <p class="card-text">Seja bem-vindo <h2><?php echo $_SESSION['usuario']; ?></h2></p>
    <h2><a href="logout.php" class="btn btn-danger btn-sm"> Sair </a></h2>
  </div>
</div>
</div>
</div>


<!--<h2><?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php" class="btn btn-danger btn-sm"> Sair </a></h2>-->
<body class="p-3 mb-2 bg-primary text-black"> </body>