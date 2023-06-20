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
$data = json_decode($data, TRUE);
?>
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
    <link rel="stylesheet" href="./layout/css/style1.css" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body id="#top">
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
                        <a href="./index.php#drama" class="navbar-link">Drama</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <article>
            <!-- 
        - #MOVIE DETAIL
      -->
            <section class="movie-detail">
                <?php foreach ($data as $data) { ?>
                    <div class="container">

                        <figure class="movie-detail-banner">
                            <img src="../readapi/layout/css/img/<?= $data["gambar"] ?>?id_drama=" alt="<?= $data["judul"] ?>" />


                        </figure>

                        <div class="movie-detail-content">
                            <p class="detail-subtitle"></p>

                            <h1 class="h1 detail-title"><strong><?= $data["judul"] ?></strong></h1>

                            <div class="meta-wrapper">
                                <!-- <div class="badge-wrapper">
                  <div class="badge badge-fil"></div>

                  <div class="badge badge-outlin"></div>
                </div> -->

                                <div class="ganre-wrapper">
                                    <a href="#">Genre : <?= $data["genre"] ?> </a>
                                </div>

                                <div class="date-time">
                                    <div>
                                        <ion-icon name="calendar-outline"></ion-icon>

                                        <time datetime="2021">Tanggal Tayang : <?= $data["tanggal_tayang"] ?></time>
                                    </div>

                                    <div>
                                        <ion-icon name="time-outlin"></ion-icon>

                                        <time datetime="PT115M"></time>
                                    </div>
                                </div>
                            </div>

                            <p class="storyline"> Sinopsis :
                                <?= $data["sinopsis"] ?>
                                <br><br>Pemeran :
                                <?= $data["pemeran"] ?>
                            </p>

                            <div class="details-actions">
                                <!-- <button class="share">
                  <ion-icon name="share-social"></ion-icon>

                  <span>Share</span>
                </button> -->
                                <div class="title-wrapper">
                                    <p class="title">Drama Indonesia</p>

                                    <p class="text">Info Drama Indonesia</p>
                                </div>
                                <button class="btn btn-primary"><a href="../readapi/edit.php?id_drama=<?= $data['id_drama'] ?>">Edit </button></a>
                                <button class="btn btn-primary"><a href="../api_hapus.php?id_drama=<?= $data['id_drama'] ?>">Hapus</button></a>
                                <ion-icon name="">
                                </ion-icon>

                                <span></span>
                                </button>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </section>
        </article>
    </main>
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
                    &copy; 2023 <a href="#">codebydramaindonesia</a>. All Rights
                    Reserved
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