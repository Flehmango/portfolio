<?php
    include "scripts/switch.php";
    include "scripts/form.php";
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

	<title>Contact</title>
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
              <li class="nav-item active">
                  <a class="nav-link" href="contact.php"><?php echo $lang['contacts']?>
                      <span class="sr-only">(current)</span>
                  </a>
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

<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-md-12 rounded">
            <?php echo $lang['contact_desc']?>

            <?php if ($error_msg) : ?>
                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
            <?php endif; ?>

            <?php if ($success_msg) : ?>
                <div class="alert alert-success"><?php echo $success_msg; ?></div>
            <?php endif; ?>
            <form id="myform" method="post">
                <label for="name"><?php echo $lang['name']?></label>
                <input type="text" name="name" id="name" placeholder="<?php echo $lang['name']?>" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="example@example.com" required>

                <label for="message"><?php echo $lang['message']?></label>
                <textarea name="message" id="message" placeholder="<?php echo $lang['msg_content']?>" required></textarea>

                <input type="submit" name="submit" value="<?php echo $lang['submit']?>">
            </form>
        </div>
    </div>
</div>

<footer class="page-footer fixed-bottom text-center font-small mt-4 wow fadeIn">
    © 2021 Copyright &nbsp<a class="text-white" href="contact.php?lang=pl">PL</a> | <a class="text-white" href="contact.php?lang=en">EN</a>
</footer>

</body>
</html>