<?php
    include "scripts/switch.php";
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">

	<title>Home</title>
</head>

<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand">
        <strong>Konrad Stępniak</strong>
      </a>

      <!-- Collapse-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
        </ul>

        <ul class="navbar-nav nav-flex-icons">
			<li class="nav-item active">
            <a class="nav-link" href="index.php"><?php echo $lang['home']?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><?php echo $lang['contacts']?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projects.php"><?php echo $lang['projects']?></a>
          </li>
          
          <li class="nav-item">
            <a href="https://github.com/Flehmango" class="nav-link rounded" target="_blank">
              <i class="fab fa-github mr-2"></i>GitHub
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="main h-100 d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-md-12 rounded">
            <p>
                <?php echo $lang['welcome']?>
            </p>

            <div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/team1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/team2.png" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>

<!--- Footer -->
<footer class="page-footer fixed-bottom text-center font-small mt-4 wow fadeIn">
    © 2021 Copyright &nbsp<a class="text-white" href="index.php?lang=pl">PL</a> | <a class="text-white" href="index.php?lang=en">EN</a>
</footer>

</body>
</html>