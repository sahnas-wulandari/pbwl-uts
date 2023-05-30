<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kost | SEPA</title>

      <link rel="shortcut icon" href="layouts/assets/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/Gambar1.JPEG" class="brand">
                  <div class="user">KOST-SEPA</div><h4>TUNTUNGAN</h4>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kost_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Kost
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=member_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Member
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=boking_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Boking
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=logout">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Logout
                              </a>
                        </li>


                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer style="text-align: center; color: green;">
                  Copyright &copy; 2023. Designed by Sahnas Wulandari Siregar
            </footer>
      </main>

</body>

</html>