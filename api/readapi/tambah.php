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

$data = http_request("http://localhost/webdramaindonesia/api/api_tambah.php");
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
  <link rel="stylesheet" href="./layout/css/style.css" />

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
    </div>
  </header>

  <main>
    <article>
      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container3">
          <div class="content1">
            <a href="../readapi/tampil.php"><button type="submit" class="btn btn-primary">Kembali</button></a>

            <div id="stylish" class="myform">
              <h1>TAMBAH DRAMA INDONESIA</h1>
              <p>form ini digunakan untuk tambah data drama indonesia</p>
              <form action="../api_tambah.php" method="post" id="form">
                <div class="form-group">
                  <label for="">Kode Drama</label>
                  <input type="text" class="label" name="id_drama" id="id_drama" placeholder="Kode Drama" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Gambar</label>
                  <input type="file" class="label" name="gambar" id="gambar" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Judul</label>
                  <input type="text" class="label" name="judul" id="judul" placeholder="Judul" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Genre</label>
                  <input type="text" class="label" name="genre" id="genre" placeholder="Genre" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Tanggal Tayang</label>
                  <input type="date" class="label" name="tanggal_tayang" id="tanggal_tayang" placeholder="Tanggal Tayang" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Sinopsis</label>
                  <input type="text" class="label" name="sinopsis" id="sinopsis" placeholder="Sinopsis" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Sutradara</label>
                  <input type="text" class="label" name="sutradara" id="sutradara" placeholder="Sutradara" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Pemeran</label>
                  <input type="text" class="label" name="pemeran" id="pemeran" placeholder="Pemeran" aria-describedby="helpId">
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


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
                  <a href="./index.php#drama" class="footer-link">Drama</a>
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