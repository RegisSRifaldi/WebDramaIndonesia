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

$data = http_request("http://localhost/webdramaindonesia/api/api_edit.php?id_drama=" . $_GET["id_drama"]);
$data = json_decode($data, TRUE);
?>
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
        <div class="container4">
          <div class="content2">
            <a href="../readapi/tampil.php"><button type="button" class="btn btn-primary">Kembali</button></a>

            <div id="stylish" class="myform">
              <h1>EDIT Drama Indonesia</h1>
              <p>form ini digunakan untuk edit drama indonesia</p>
              <form action="../api_ubah.php" method="post" id="form">
                <div class="form-group">
                  <label for="">Kode Drama</label>
                  <input type="text" class="label" value="<?= $data["id_drama"] ?>" name="id_drama" id="id_drama" placeholder="Kode Drama">
                </div>
                <div class="form-group">
                  <label for="">Gambar</label>
                  <input type="file" class="label" value="<?= $data["gambar"] ?>" name="gambar" id="gambar" placeholder="Gambar">
                </div>
                <div class="form-group">
                  <label for="">Judul</label>
                  <input type="text" class="label" value="<?= $data["judul"] ?>" name="judul" id="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                  <label for="">Genre</label>
                  <input type="text" class="label" value="<?= $data["genre"] ?>" name="genre" id="genre" placeholder="Genre">
                </div>
                <div class="form-group">
                  <label for="">Tanggal Tayang</label>
                  <input type="date" class="label" value="<?= $data["tanggal_tayang"] ?>" name="tanggal_tayang" id="tanggal_tayang" placeholder="Tanggal Tayang">
                </div>
                <div class="form-group">
                  <label for="">Sinopsis</label>
                  <input type="text" class="label" value="<?= $data["sinopsis"] ?>" name="sinopsis" id="sinopsis" placeholder="Sinopsis">
                </div>
                <div class="form-group">
                  <label for="">Sutradara</label>
                  <input type="text" class="label" value="<?= $data["sutradara"] ?>" name="sutradara" id="sutradara" placeholder="Sutradara">
                </div>
                <div class="form-group">
                  <label for="">Pemeran</label>
                  <input type="text" class="label" value="<?= $data["pemeran"] ?>" name="pemeran" id="pemeran" placeholder="Pemeran">
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
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