<?php
function http_request($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

$data = http_request("http://localhost/webdramaindonesia/api/api_tampil_all.php");
$data = json_decode($data, TRUE); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Drama Indonesia</title>

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./layout/css/style1.css" />

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body id="top">
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <div class="overlay" data-overlay></div>

      <a href="./index.php" class="logo">
        <p class="hero-subtitle">Drama Indonesia</p>
      </a>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>
        <div class="navbar-top">
          <a href="./index.php" class="logo">
            <p class="hero-subtitle">Drama Indonesia</p>
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li>
            <a href="./index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#drama" class="navbar-link">Drama</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <article>
      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <!-- Tema  -->
            <h1 class="h1 hero-title">Sinetron Anak Jalanan</h1>
            <div class="meta-wrapper">
              <div class="badge-wrapper">
                <div class="badge badge-fill">Info</div>

                <div class="badge badge-outline">4k</div>
              </div>

              <!-- Genre  -->
              <div class="ganre-wrapper">
                <a href="#">Romance,</a>

                <a href="#">Drama,</a>

                <a href="#">Laga</a>
              </div>

              <div class="date-time">
                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2015">2015-10-12</time>
                </div>

                <div>
                </div>
              </div>
            </div>

            <button class="btn btn-primary"><a href="../readapi/all_movie_details.php">Show All Movie Detail</a>
              <ion-icon name="play"></ion-icon>

              <span></span>
            </button>
          </div>
        </div>
      </section>

      <!-- 
        - #TOP RATED
      -->

      <section id="drama" class="top-rated">
        <div class="container">
          <h2 class="h2 section-title">Top 20 Drama Indonesia</h2>
          <button class="btn btn-primary">

            <span><a href="../readapi/tampil.php">Tambah Drama</a></span>
          </button>
          <br />
          <br />



          <span>
            <ul class="movies-list">
              <?php foreach ($data as $data) { ?>
                <li>
                  <div class="movie-card">
                    <a href="./movie-details.php?id_drama=<?php echo $data["id_drama"] ?>">
                      <figure class="card-banner">
                        <img src="../readapi/layout/css/img/<?= $data["gambar"] ?>" alt="<?= $data["judul"] ?>" />
                      </figure>
                    </a>

                    <div class="title-wrapper">
                      <a href="./movie-details.php">
                        <h3 class="card-title"><?php echo $data["judul"] ?></h3>
                      </a>

                      <time datetime="2022"><?= $data["tanggal_tayang"] ?></time>
                    </div>

                    <div class="card-meta">
                      <div class="badge badge-outline">4K</div>

                      <div class="duration">
                        <ion-icon name=""></ion-icon>

                        <time datetime="PT122M"></time>
                      </div>

                      <div class="rating">
                        <ion-icon name=""></ion-icon>

                        <data><?= $data["genre"] ?></data>
                      </div>
                    </div>
                  </div>

                </li>
              <?php } ?>
            </ul>
          </span>


        </div>
      </section>
      <!-- 
    - #FOOTER
  -->

      <footer class="footer">
        <div class="footer-top">
          <div class="container">
            <div class="footer-brand-wrapper">
              <a href="./index.php" class="logo">
                <p class="hero-subtitle">Drama Indonesia</p>
              </a>

              <ul class="footer-list">
                <li>
                  <a href="./index.php" class="footer-link">Home</a>
                </li>

                <li>
                  <a href="#drama" class="footer-link">Drama</a>
                </li>
              </ul>
            </div>

            <div class="divider"></div>

            <div class="quicklink-wrapper">
              <ul class="quicklink-list">
                <li>
                  <a href="#" class="quicklink-link">Faq</a>
                </li>

                <li>
                  <a href="#" class="quicklink-link">Help center</a>
                </li>

                <li>
                  <a href="#" class="quicklink-link">Terms of use</a>
                </li>

                <li>
                  <a href="#" class="quicklink-link">Privacy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="container">
            <p class="copyright">
              &copy; 2023 <a href="#">codebydramaindonesia</a>. All Rights Reserved
            </p>
          </div>
        </div>
      </footer>

      <!-- 
    - #GO TO TOP
  -->

      <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
      </a>

      <!-- 
    - custom js link
  -->
      <script src="./assets/js/script.js"></script>

      <!-- 
    - ionicon link
  -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>