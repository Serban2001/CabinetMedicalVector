<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ro">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" sizes="32x32" href="logo.png">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Cabinet Medical Vector</title>
   </head>
   <body>
      <header class="header">
          <nav class="container flex flex-items-center">
            <a href="/" class="header__logo">
              <img src="assets/images/logo.png" alt="Vector">
            </a>
            <a id="btnHamburger" href="#" class="header__toggle open hide-for-desktop ml-auto">
              <span></span>
              <span></span>
              <span></span>
            </a>
            <ul class="header__links hide-for-mobile flex flex-jc-sb flex-ai-c ml-auto">
              <li>
                <a href="index.php">ACASA</a>
              </li>
              <li>
                <a href="despre-noi.php">DESPRE NOI</a>
              </li>
              <li>
                  <a href="contact.php">CONTACT</a>    
              </li>
              <?php if (isset($_SESSION['user'])) { ?>
                <li>
                  <a href="pacienti.php">PACIENTI</a>    
                </li>
              <?php } ?>
              <li class="dropdown">
                <?php if (isset($_SESSION['user'])) { ?>
                  <span><?php echo $_SESSION['user']; ?></span>
                <?php } else { ?>
                  <span>CONT</span>
                <?php } ?>
                
                <div class="dropdown-content">
                  <?php if (isset($_SESSION['user'])) { ?>
                  <a class="dropdown-item" href="deconectare.php">Deconectare</a>
                <?php } else { ?>
                  <a class="dropdown-item" href="autentificare.php">Autentificare</a>
                  <a class="dropdown-item" href="inregistrare.php">Inregistrare</a>
                <?php } ?>
                </div>
              </li>
            </ul>
          </nav>
          <ul class="header__menu has-fade hide-for-desktop">
            <li><a href="index.php"><li>ACASA</li></a></li>
            <li><a href="despre-noi.php"><li>DESPRE NOI</li></a></li>
            <li><a href="contact.php"><li>CONTACT</li></a></li>
            <li><a href="autentificare.php"><li>AUTENTIFICARE</li></a></li>
            <li><a href="inregistrare.php"><li>INREGISTRARE</li></a></li>
          </ul>
      </header>