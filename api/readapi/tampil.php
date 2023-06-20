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
        <div class="container2">
          <a href="../readapi/index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
          <a href="../readapi/tambah.php"><button type="submit" class="btn btn-primary">Tambah Data</button></a>
          <br>
          <table style="width:100%">
            <tr>
              <td>Kode Drama</td>
              <td>Gambar</td>
              <td>Judul</td>
              <td>Genre</td>
              <td>Tanggal Tayang</td>
              <td>Sinopsis</td>
              <td>Sutradara</td>
              <td>Pemeran</td>
              <td>Opsi</td>
            </tr>
            <?php foreach ($data as $data) { ?>
              <tr>
                <td>
                  <?= $data["id_drama"] ?>
                </td>
                <td>
                  <img src="../readapi/layout/css/img/<?= $data["gambar"] ?>" alt="Sonic the Hedgehog 2 movie poster" />
                </td>
                <td>
                  <?= $data["judul"] ?>
                </td>
                <td>
                  <?= $data["genre"] ?>
                </td>
                <td>
                  <?= $data["tanggal_tayang"] ?>
                </td>
                <td>
                  <?= $data["sinopsis"] ?>
                </td>
                <td>
                  <?= $data["sutradara"] ?>
                </td>
                <td>
                  <?= $data["pemeran"] ?>
                </td>
                <td colspan="2">
                  <a href="../readapi/edit.php?id_drama=<?= $data['id_drama'] ?>"><button type="submit" class="btn btn-primary">Edit </button></a>
                  <a href="../api_hapus.php?id_drama=<?= $data['id_drama'] ?>"><button type="submit" class="btn btn-primary">Hapus</button></a>
                </td>
              </tr>
            <?php } ?>
          </table>
          <br>
          <a href="../readapi/index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
          <a href="../readapi/tambah.php"><button type="submit" class="btn btn-primary">Tambah Data</button></a>
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