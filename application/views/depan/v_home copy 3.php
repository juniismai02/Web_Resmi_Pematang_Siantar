<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Resmi Kota Pematangsiantar</title>
    <meta name="title" content="Website Resmi Kota Pematangsiantar">
    <meta name="description" content="Website Resmi Kota Pematangsiantar - Menyajikan Seputar Informasi Kota Pematangsiantar">
    <meta name="keywords" content="Pematangsiantar, Kota Pematangsiantar, pemerintah Kota Pematangsiantar, berita dan topik, informasi, sosialisasi, agenda, direktori kota">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="<?php echo base_url().'theme/depan/assets/img/logo.svg'?>">

    <!-- Meta -->
    <meta itemprop="name" content="Website Resmi Kota Pematangsiantar">
    <meta itemprop="articleSection" content="<?php echo site_url('');?>">
    <meta name="google-site-verification" content="dl7_dxHbryDGPD1ZJpaNztEcbAEV7K8fVzc5wD1Malo">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="Website Resmi Kota Pematangsiantar">
    <meta http-equiv="content-language" content="In-Id">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <link rel="canonical" href="<?php echo site_url('');?>">

    <!-- Open Graph META -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="<?php echo site_url('');?>">
    <meta property="og:title" content="Website Resmi Kota Pematangsiantar">
    <meta property="og:url" content="<?php echo site_url('');?>">
    <meta property="og:description" content="Website Resmi Kota Pematangsiantar - Menyajikan Seputar Informasi Kota Pematangsiantar">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website Resmi Kota Pematangsiantar">
    <meta name="twitter:description" content="Website Resmi Kota Pematangsiantar - Menyajikan Seputar Informasi Kota Pematangsiantar">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/depan/assets/css/datatable.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/depan/assets/css/app.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/depan/assets/css/add.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/depan/assets/plugins/slick/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/depan/assets/plugins/slick/css/slick-theme.css'?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-215056084-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-215056084-1');
    </script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <style>
      /* Add your custom styles here */
    </style>
</head>
<body>
    <h1 style="display: none">Website Resmi Kota Pematangsiantar</h1>

    <div class="slidelax">
      <div class="sliderfixed">
        <div class="homeslide" id="story">
          <div class="slick-home">
            <?php $counter = 0; ?>
            <?php foreach ($all_galeri->result() as $galeri): ?>
              <?php if ($galeri->album_nama == 'Header Beranda' && $counter < 10): ?>
                <div class="slickwrap">
                  <div class="homeimg">
                    <img class="d-only" src="<?php echo base_url('assets/images/' . $galeri->galeri_gambar); ?>" alt="<?php echo $galeri->galeri_judul; ?>">
                    <img class="m-only" src="<?php echo base_url('assets/images/' . $galeri->galeri_gambar); ?>" alt="<?php echo $galeri->galeri_judul; ?>">
                  </div>
                  <div class="hometext">
                    <div class="wrapper">
                      <div class="hometext__inner">
                      </div>
                    </div>
                  </div>
                </div>
                <?php $counter++; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="popup">
      <div class="popup-overlay"></div>
      <div class="popup-wrap">
        <div class="popup-content">
          <div class="popup-close">&times;</div>
          <div class="popsosial">
            <div class="popsosial-img">
              <img src="<?php echo base_url().'theme/depan/assets/img/main-banner.html'?>" alt="img">
            </div>
            <div class="popsosial-title"></div>
            <div class="popsosial-summary"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="bdgcontent">
      <div class="floatmenu">
        <div class="floatmenu__wrap">
          <ul>
            <li>
              <a href="https://www.lapor.go.id/instansi/pemerintah-kota-pematang-siantar" target="_blank">
                <img src="<?php echo base_url().'theme/depan/assets/img/floatmenu/lapor-float.png'?>" alt="img">
                <span>LAPOR</span>
              </a>
            </li>
            <li>
              <a href="tel:119" rel="nofollow" target="_blank">
                <img src="<?php echo base_url().'theme/depan/assets/img/floatmenu/2.png'?>" alt="img">
                <span>PSC 119</span>
              </a>
            </li>
            <li>
              <a href="https://cctv.pematangsiantar.go.id/">
                <img src="<?php echo base_url().'theme/depan/assets/img/floatmenu/3.png'?>" alt="img">
                <span>CCTV</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="sticky-trigger"></div>
      <div class="mainmenu-spacer"></div>
      <header class="mainmenu">
        <div class="wrapper">
          <nav class="menu">
            <div class="burger"><span></span></div>
            <div class="mobile-menutitle">
              <div class="mobile-menutitle-inner">
                <img src="<?php echo base_url().'theme/depan/assets/img/logo.png'?>" alt="img">
                <span>Pematangsiantar</span>
              </div>
            </div>

            <div class="menu__outer">
              <div class="menu__wrap">
                <div class="menu__left">
                  <div class="menu__utama">
                    <ul>
                      <li class="active">
                        <a class="smuroll" href="<?php echo site_url('');?>">
                          <i class="fas fa-home"></i> Beranda
                        </a>
                      </li>
                      <li class="has-dropdown">
                        <a href="<?php echo site_url('about');?>">Tentang</a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('blog');?>">Berita</a>
                      </li>
                      <li class="has-dropdown">
                        <a href="#">Download</a>
                        <i class="idrop fas fa-caret-down"></i>
                        <ul>
                          <li><a href="<?php echo site_url('video');?>">Video</a></li>
                          <li><a href="<?php echo site_url('anggaran');?>">Dokumen Anggaran</a></li>
                          <li><a href="<?php echo site_url('perencanaan');?>">Dokumen Perencanaan</a></li>
                          <li><a href="<?php echo site_url('pendapatan_daerah');?>">Pendapatan Daerah</a></li>
                          <li><a href="<?php echo site_url('lra_kota');?>">LRA Kota Pematangsiantar 2023 per SKPD</a></li>
                          <li><a href="<?php echo site_url('rakor_pusat');?>">Rakor Pusat dan Daerah</a></li>
                          <li><a href="<?php echo site_url('apbd');?>">APBD Kota Pematangsiantar</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="menu__right">
                  <div class="menu__utility">
                    <ul>
                      <li class="search-icon"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="search-form">
              <form action="<?php echo site_url('search');?>" method="post">
                <input type="text" name="search" placeholder="Cari...">
              </form>
            </div>
          </nav>
        </div>
      </header>
      <div class="wrapper"></div>
    </div>
</body>
</html>
