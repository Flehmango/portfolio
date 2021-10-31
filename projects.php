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

	<title>Projects</title>
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
              <li class="nav-item">
                  <a class="nav-link" href="index.php"><?php echo $lang['home']?>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php"><?php echo $lang['contacts']?></a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="projects.php"><?php echo $lang['projects']?>
                      <span class="sr-only">(current)</span>
                  </a>
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

<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-md-12 rounded">
            <p>
                <?php echo $lang['projects']?>
            </p>

            <div class="list-group">
                <a href="https://github.com/Flehmango/Projekt" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo $lang['title1']?></h5>
                        <small>2021</small>
                    </div>
                    <p class="mb-1"><?php echo $lang['desc1']?></p>
                </a>

                <a href="https://github.com/Flehmango/ai-ti" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo $lang['title4']?></h5>
                        <small class="text-muted">2021</small>
                    </div>
                    <p class="mb-1"><?php echo $lang['desc4']?></p>
                </a>

                <a href="https://drive.google.com/file/d/1fOWGS-qs0USpoyNdkUOZywgCSfjSCO8v/view?usp=sharing" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo $lang['title2']?></h5>
                        <small class="text-muted">2015</small>
                    </div>
                    <p class="mb-1"><?php echo $lang['desc2']?></p>
                </a>

                <a href="https://www.deviantart.com/amflemm" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo $lang['title3']?></h5>
                        <small class="text-muted">2021</small>
                    </div>
                    <p class="mb-1"><?php echo $lang['desc3']?></p>
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer fixed-bottom text-center font-small mt-4 wow fadeIn">
    © 2021 Copyright &nbsp<a class="text-white" href="projects.php?lang=pl">PL</a> | <a class="text-white" href="projects.php?lang=en">EN</a>
</footer>

</body>
</html>
