<!DOCTYPE html>
<html lang="id">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      Website Resmi Kota Pematangsiantar - Realisasi Anggaran Kota Pematangsiantar
    </title>
    <meta
      name="title"
      content="Website Resmi Kota Pematangsiantar - Direktori Kota Informasi Dinas Terkait"
    />
    <meta
      name="description"
      itemprop="description"
      content="Website Resmi Kota Pematangsiantar - Menyajikan Seputar Direktori Kota Informasi Dinas Terkait"
    />
    <meta
      name="keywords"
      content="Pematangsiantar, kota Pematangsiantar, pemerintah kota Pematangsiantar, berita dan topik, informasi, sosialisasi, agenda, direktori kota, fitur"
    />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="<?php echo base_url().'theme/depan/assets/img/logo.svg'?>" />

    <!-- Meta -->
    <meta
      itemprop="name"
      content="Website Resmi Kota Pematangsiantar - Direktori Kota Informasi Dinas Terkait"
    />
    <meta itemprop="image" content="assets/images/sharePematangsiantar.png" />
    <meta itemprop="articleSection" content="city-directory.html" />
    <meta itemprop="thumbnailUrl" content="assets/images/sharePematangsiantar.png" />
    <meta
      name="google-site-verification"
      content="dl7_dxHbryDGPD1ZJpaNztEcbAEV7K8fVzc5wD1Malo"
    />
    <meta name="robots" content="index,follow" />
    <meta content="index,follow" name="googlebot" />
    <meta content="Website Resmi Kota Pematangsiantar" name="author" />
    <meta content="In-Id" http-equiv="content-language" />
    <meta content="id" name="language" />
    <meta content="id" name="geo.country" />
    <meta content="Indonesia" name="geo.placename" />
    <link rel="canonical" href="city-directory.html" />

    <!-- facebook META -->
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="index.html" />
    <meta
      property="og:title"
      content="Website Resmi Kota Pematangsiantar - Direktori Kota Informasi Dinas Terkait"
    />
    <meta property="og:url" content="city-directory.html" />
    <meta
      property="og:description"
      content="Website Resmi Kota Pematangsiantar - Menyajikan Seputar Direktori Kota Informasi Dinas Terkait"
    />
    <meta property="og:image" content="assets/images/sharePematangsiantar.png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />

    <!--twitter cards -->
    <meta
      name="twitter:card"
      content="summary_large_image"
      data-dynamic="true"
    />
    <meta name="twitter:site" content="@humasPematangsiantar_" />
    <meta name="twitter:creator" content="@humasPematangsiantar_" />
    <meta
      name="twitter:title"
      content="Website Resmi Kota Pematangsiantar - Direktori Kota Informasi Dinas Terkait"
      data-dynamic="true"
    />
    <meta
      name="twitter:description"
      content="Website Resmi Kota Pematangsiantar - Menyajikan Seputar Direktori Kota Informasi Dinas Terkait"
      data-dynamic="true"
    />
    <meta
      name="twitter:image"
      content="https://www.Pematangsiantar.go.id/assets/images/sharePematangsiantar.png"
      data-dynamic="true"
    />
    <meta
      name="twitter:url"
      content="https://www.Pematangsiantar.go.id/city-directory"
      data-dynamic="true"
    />
    <meta
      name="twitter:domain"
      content="https://www.Pematangsiantar.go.id"
      data-dynamic="true"
    />

    <!-- css_main -->
    <link href="<?php echo base_url().'theme/depan/assets/css/datatable.css'?>" rel="stylesheet" />
    <link href="<?php echo base_url().'theme/depan/assets/css/app.css'?>" rel="stylesheet" />
    <link href="<?php echo base_url().'theme/depan/assets/css/add.css'?>" rel="stylesheet" />

    <!-- css_plugin -->
    <link href="<?php echo base_url().'theme/depan/assets/plugins/slick/css/slick.css'?>" rel="stylesheet" />
    <link href="<?php echo base_url().'theme/depan/assets/plugins/slick/css/slick-theme.css'?>" rel="stylesheet" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-215056084-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-215056084-1');
    </script>

    <!-- DISABILITAS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <style>
      .btn-container {
        margin-bottom: 10px;
        text-align: center;
      }

      .greyscaleall {
        webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
      }

      .mycheckbox {
        font-size: 12px;
        color: black;
        font-weight: 500;
      }

      .btn-color-mode-switch {
        display: inline-block;
        margin: 0px;
        position: relative;
      }

      .btn-color-mode-switch > label.btn-color-mode-switch-inner {
        margin: 0px;
        width: 170px;
        height: 26px;
        background: #e0e0e0;
        border-radius: 26px;
        overflow: hidden;
        position: relative;
        transition: all 0.3s ease;

        display: block;
      }

      .btn-color-mode-switch > label.btn-color-mode-switch-inner:before {
        content: attr(data-on);
        cursor: pointer;
        position: absolute;
        font-size: 12px;
        font-weight: bold;
        top: 5px;
        right: 25px;
        margin-bottom: 5px;
      }

      .btn-color-mode-switch > label.btn-color-mode-switch-inner:after {
        content: attr(data-off);
        cursor: pointer;
        width: 85px;
        height: 22px;
        font-size: 12px;
        background: #fff;
        border-radius: 26px;
        position: absolute;
        left: 2px;
        top: 2px;
        font-weight: bold;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0px 0px 6px -2px #111;
        padding: 2px 0px;
        margin-bottom: 10px;
      }

      .btn-color-mode-switch input[type='checkbox'] {
        cursor: pointer;
        width: 70px;
        height: 25px;
        opacity: 0;
        position: absolute;
        top: 0;
        z-index: 1;
        padding: 2px 0px;
        margin: 0px;
      }

      .btn-color-mode-switch
        input[type='checkbox']:checked
        + label.btn-color-mode-switch-inner {
        background: #e0e0e0;
        color: black;
        font-weight: bold;
        font-size: 12px;
      }

      .btn-color-mode-switch
        input[type='checkbox']:checked
        + label.btn-color-mode-switch-inner:after {
        content: attr(data-on);
        left: 83px;
        background: white;
        font-weight: bold;
        font-size: 12px;
      }

      .btn-color-mode-switch
        input[type='checkbox']:checked
        + label.btn-color-mode-switch-inner:before {
        content: attr(data-off);
        right: auto;
        left: 15px;
        color: black;
        font-weight: bold;
        font-size: 12px;
      }

      .btn-color-mode-switch input[type='checkbox']:checked ~ .alert {
        display: block;
      }

      .toolbar-disabilitas {
        position: fixed;
        top: 12%;
        left: 0;
        z-index: 999;
        height: 1px;
        width: -180px;
        text-align: center;
        background: transparent !important;
        background-color: transparent !important;
      }

      .open-toolbar {
        margin-top: 10%;
        padding-top: 8px;
        padding-right: 5px;
        padding-left: 5px;
        padding-bottom: 3px;
        height: 50px;
        border: none;
        width: 50px;
      }

      .toolbar-disabilitas .open-toolbar {
        background: #4054b2;
      }

      .toolbar-disabilitas .groupcontenttoolbar {
        transform: translateX(-180px);
        transition: transform 0.6s;
      }

      .toolbar-disabilitas.show-toolbar .groupcontenttoolbar {
        transform: translateX(0px);
      }

      .contenttoolbar_disabilitas {
        margin-top: 10%;
        padding-top: 15px;
        display: flex;
        flex-direction: column;
        height: max-content;
        border: 1px solid black;
        box-shadow: 0 10px 10px rgb(0 0 0 / 0.2);
        background-color: white;
        width: 180px;
        word-break: break-all;
        overflow: hidden;
      }

      .groupcontenttoolbar {
        display: flex;
        flex-direction: row;

        height: 1px;

        background-color: transparent !important;
      }

      .titletools {
        font-size: 13px !important;
        font-weight: bold;
        margin-bottom: 10px;
        padding-left: 5px;
        padding-right: 5px;
        color: black;
      }

      .bodytools {
        left: 0;
        height: max-content;
        width: 100%;
        margin-bottom: 10px;
      }

      .subtitletools {
        font-size: 12px !important;
        margin-bottom: 5px;
        cursor: pointer;
        left: 0;
        font-family: Arial, Helvetica, sans-serif;
        padding-left: 10px;
        text-align: left;
        color: black;
      }

      .subtitletoolsactive {
        background-color: black;
        font-size: 12px !important;
        margin-bottom: 5px;
        cursor: pointer;
        left: 0;
        padding-top: 5px;
        padding-left: 10px;
        padding-bottom: 5px;
        text-align: left;
        color: white;
        font-weight: bold;
      }

      .subtitletools:hover,
      .subtitletools:focus,
      .subtitletools:active {
        background-color: black;
        color: white;
        font-weight: bold;
        font-size: 12;
        max-width: 100%;
        padding-top: 5px;
        padding-left: 10px;
        padding-bottom: 5px;
      }

      .flexrowdata {
        display: flex;
        flex-direction: row;
        height: 100%;
        width: 100%;
      }

      .flexrowtext {
        display: flex;
        flex-direction: column;

        height: 100%;
        justify-content: center;
        align-items: center;
        width: 100%;
      }

      .datatextinfo {
        display: flex;
        flex-direction: row;
        width: 100%;
        justify-content: center;
      }

      .texttulisan {
        color: black;
        font-size: 18px;
        font-weight: bold;
      }

      @media only screen and (max-width: 900px) {
        .toolbar-disabilitas {
          top: 11%;
        }
      }
    </style>

    <span id="loadmodaldisabilitas"></span>
    <script type="text/javascript">
      localStorage.removeItem('permismobile');
      localStorage.removeItem('permisvoice');
      var arraybase64 = [];

      function speachmobile(value) {
        var voicecek = localStorage.getItem('permismobile');
        if (voicecek != null && voicecek == 'on') {
          if (responsiveVoice.voiceSupport()) {
            responsiveVoice.speak(value, 'Indonesian Female');
          }
        }
      }

      function speach(value) {
        var voicecek = localStorage.getItem('permisvoice');
        if (voicecek != null && voicecek == 'on') {
          var speechSynthesis = window.speechSynthesis;
          speechSynthesis.cancel();
          if ('speechSynthesis' in window) {
            const to_speak = new SpeechSynthesisUtterance(value || '');
            to_speak.lang = 'id-ID';
            speechSynthesis.getVoices();
            speechSynthesis.speak(to_speak);
          } else {
            alert('not supported');
          }
        }
      }

      if (!window.James) {
        James = {};
      }
      James.Selector = {};
      James.Selector.mouseup = function () {
        var userSelection;
        if (window.getSelection) {
          userSelection = window.getSelection();
        } else if (document.selection) {
          userSelection = document.selection.createRange();
        }
        var selectedText = userSelection;
        if (userSelection.text) selectedText = userSelection.text;
        if (selectedText != '') {
          var textvalue = window.getSelection().toString();
          speach(textvalue);
          speachmobile(textvalue);
        }
      };
      $(document).ready(function () {
        $(document).bind('mouseup', James.Selector.mouseup);
      });
      $(document).ready(function () {
        document.addEventListener('selectionchange', function (event) {
          var voicecek = localStorage.getItem('permismobile');
          if (voicecek != null && voicecek == 'on') {
            const selection = window.getSelection();
            if (selection.rangeCount === 0) {
              return;
            }
            const range = selection.getRangeAt(0);
            const rect = range.getBoundingClientRect();
            const text = selection.toString();
            if (!isBlank(text) || text != undefined || text != '') {
              speachmobile(text);
            }
          }
        });
      });

      function isBlank(str) {
        return !str || /^\s*$/.test(str);
      }
      var dataspeachweb = `




              <div class="subtitletools" id="webspeach">
              <div class="flexrowdata">

           <span><svg version="1.1" class='fontawesomesvg' width="1em"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448">
               <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zm2 226.3c37.1 22.4 62 63.1 62 109.7s-24.9 87.3-62 109.7c-7.6 4.6-17.4 2.1-22-5.4s-2.1-17.4 5.4-22C269.4 401.5 288 370.9 288 336s-18.6-65.5-46.5-82.3c-7.6-4.6-10-14.4-5.4-22s14.4-10 22-5.4zm-91.9 30.9c6 2.5 9.9 8.3 9.9 14.8V400c0 6.5-3.9 12.3-9.9 14.8s-12.9 1.1-17.4-3.5L113.4 376H80c-8.8 0-16-7.2-16-16V312c0-8.8 7.2-16 16-16h33.4l35.3-35.3c4.6-4.6 11.5-5.9 17.4-3.5zm51 34.9c6.6-5.9 16.7-5.3 22.6 1.3C249.8 304.6 256 319.6 256 336s-6.2 31.4-16.3 42.7c-5.9 6.6-16 7.1-22.6 1.3s-7.1-16-1.3-22.6c5.1-5.7 8.1-13.1 8.1-21.3s-3.1-15.7-8.1-21.3c-5.9-6.6-5.3-16.7 1.3-22.6z"/>
               </svg></span>
              &nbsp;&nbsp;<div id="twebspeach" class="aksestexttools">Moda Suara</div>
             </div>
             </div>
              `;

      var datamobileweb = `

  <div class="subtitletools" id="mobileapp">
  <div class="flexrowdata">

  <span><svg version="1.1" class='fontawesomesvg' width="1em"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448">
   <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zm2 226.3c37.1 22.4 62 63.1 62 109.7s-24.9 87.3-62 109.7c-7.6 4.6-17.4 2.1-22-5.4s-2.1-17.4 5.4-22C269.4 401.5 288 370.9 288 336s-18.6-65.5-46.5-82.3c-7.6-4.6-10-14.4-5.4-22s14.4-10 22-5.4zm-91.9 30.9c6 2.5 9.9 8.3 9.9 14.8V400c0 6.5-3.9 12.3-9.9 14.8s-12.9 1.1-17.4-3.5L113.4 376H80c-8.8 0-16-7.2-16-16V312c0-8.8 7.2-16 16-16h33.4l35.3-35.3c4.6-4.6 11.5-5.9 17.4-3.5zm51 34.9c6.6-5.9 16.7-5.3 22.6 1.3C249.8 304.6 256 319.6 256 336s-6.2 31.4-16.3 42.7c-5.9 6.6-16 7.1-22.6 1.3s-7.1-16-1.3-22.6c5.1-5.7 8.1-13.1 8.1-21.3s-3.1-15.7-8.1-21.3c-5.9-6.6-5.3-16.7 1.3-22.6z"/>
   </svg></span>
  &nbsp;&nbsp;<div id="twebspeach" class="aksestexttools">Moda Suara</div>
  </div>
  </div>

        `;
      var logicspeachweb = getOS() == 'Windows' ? dataspeachweb : datamobileweb;
      var toolbardisabilitas =
        `
  <div class="toolbar-disabilitas">
  <div class="groupcontenttoolbar" id="checklangmenu">
      <div class="contenttoolbar_disabilitas" id="groupcekmenu">
          <div class="titletools" id="taccessbility">
          Sarana
              </div>

              <div class="btn-container">
      <div class="mycheckbox switch btn-color-mode-switch" id="tmulticheckboxlang">
          <input type="checkbox" id="checklang" value="1">
          <label id="tmycheckbox" for="checklang" data-on="Inggris" data-off="Indonesia" class="btn-color-mode-switch-inner"></label>

  </div>
       </div>
          <div class="bodytools">
          ` +
        logicspeachweb +
        `
              <div class="subtitletools" id="increasetext">
              <div class="flexrowdata">
             <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-56v56c0 4.25-3.75 8-8 8h-16c-4.25 0-8-3.75-8-8v-56h-56c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h56v-56c0-4.25 3.75-8 8-8h16c4.25 0 8 3.75 8 8v56h56c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z" "=""></path></svg></span>
             &nbsp;&nbsp;<div id="tincreasetext" class="aksestexttools">Perbesar Teks</div>
             </div>
              </div>
              <div class="subtitletools"  id="decreasetext">
              <div class="flexrowdata">
             <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-144c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h144c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"></path></svg></span>
              &nbsp;&nbsp;<div id="tdecreasetext"  class="aksestexttools">Perkecil Teks</div>
              </div>
              </div>
              <div class="subtitletools"  id="egrayscale">
              <div class="flexrowdata">
              <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M15.75 384h-15.75v-352h15.75v352zM31.5 383.75h-8v-351.75h8v351.75zM55 383.75h-7.75v-351.75h7.75v351.75zM94.25 383.75h-7.75v-351.75h7.75v351.75zM133.5 383.75h-15.5v-351.75h15.5v351.75zM165 383.75h-7.75v-351.75h7.75v351.75zM180.75 383.75h-7.75v-351.75h7.75v351.75zM196.5 383.75h-7.75v-351.75h7.75v351.75zM235.75 383.75h-15.75v-351.75h15.75v351.75zM275 383.75h-15.75v-351.75h15.75v351.75zM306.5 383.75h-15.75v-351.75h15.75v351.75zM338 383.75h-15.75v-351.75h15.75v351.75zM361.5 383.75h-15.75v-351.75h15.75v351.75zM408.75 383.75h-23.5v-351.75h23.5v351.75zM424.5 383.75h-8v-351.75h8v351.75zM448 384h-15.75v-352h15.75v352z"></path></svg></span>
              &nbsp;&nbsp;<div id="tegrayscale"  class="aksestexttools">Skala Abu - Abu</div>
              </div>
              </div>
              <div class="subtitletools" id="hcontrash">
              <div class="flexrowdata">
              <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M192 360v-272c-75 0-136 61-136 136s61 136 136 136zM384 224c0 106-86 192-192 192s-192-86-192-192 86-192 192-192 192 86 192 192z" "=""></path></svg></span>
              &nbsp;&nbsp;<div id="thcontrash"  class="aksestexttools">Kontras Tinggi</div>
              </div>
              </div>
              <div class="subtitletools" id="ncontrash">
              <div class="flexrowdata">
              <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M416 240c-23.75-36.75-56.25-68.25-95.25-88.25 10 17 15.25 36.5 15.25 56.25 0 61.75-50.25 112-112 112s-112-50.25-112-112c0-19.75 5.25-39.25 15.25-56.25-39 20-71.5 51.5-95.25 88.25 42.75 66 111.75 112 192 112s149.25-46 192-112zM236 144c0-6.5-5.5-12-12-12-41.75 0-76 34.25-76 76 0 6.5 5.5 12 12 12s12-5.5 12-12c0-28.5 23.5-52 52-52 6.5 0 12-5.5 12-12zM448 240c0 6.25-2 12-5 17.25-46 75.75-130.25 126.75-219 126.75s-173-51.25-219-126.75c-3-5.25-5-11-5-17.25s2-12 5-17.25c46-75.5 130.25-126.75 219-126.75s173 51.25 219 126.75c3 5.25 5 11 5 17.25z"></path></svg></span>
              &nbsp;&nbsp;<div id="tncontrash"  class="aksestexttools">Latar Gelap</div>
              </div>
              </div>
              <div class="subtitletools"] id="lgcontrash">
              <div class="flexrowdata">
              <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M184 144c0 4.25-3.75 8-8 8s-8-3.75-8-8c0-17.25-26.75-24-40-24-4.25 0-8-3.75-8-8s3.75-8 8-8c23.25 0 56 12.25 56 40zM224 144c0-50-50.75-80-96-80s-96 30-96 80c0 16 6.5 32.75 17 45 4.75 5.5 10.25 10.75 15.25 16.5 17.75 21.25 32.75 46.25 35.25 74.5h57c2.5-28.25 17.5-53.25 35.25-74.5 5-5.75 10.5-11 15.25-16.5 10.5-12.25 17-29 17-45zM256 144c0 25.75-8.5 48-25.75 67s-40 45.75-42 72.5c7.25 4.25 11.75 12.25 11.75 20.5 0 6-2.25 11.75-6.25 16 4 4.25 6.25 10 6.25 16 0 8.25-4.25 15.75-11.25 20.25 2 3.5 3.25 7.75 3.25 11.75 0 16.25-12.75 24-27.25 24-6.5 14.5-21 24-36.75 24s-30.25-9.5-36.75-24c-14.5 0-27.25-7.75-27.25-24 0-4 1.25-8.25 3.25-11.75-7-4.5-11.25-12-11.25-20.25 0-6 2.25-11.75 6.25-16-4-4.25-6.25-10-6.25-16 0-8.25 4.5-16.25 11.75-20.5-2-26.75-24.75-53.5-42-72.5s-25.75-41.25-25.75-67c0-68 64.75-112 128-112s128 44 128 112z"></path></svg></span>
              &nbsp;&nbsp;<div id="tlgcontrash"  class="aksestexttools">Latar Terang</div>
              </div>
              </div>
              <div class="subtitletools" id="readablefont">
              <div class="flexrowdata">
               <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M181.25 139.75l-42.5 112.5c24.75 0.25 49.5 1 74.25 1 4.75 0 9.5-0.25 14.25-0.5-13-38-28.25-76.75-46-113zM0 416l0.5-19.75c23.5-7.25 49-2.25 59.5-29.25l59.25-154 70-181h32c1 1.75 2 3.5 2.75 5.25l51.25 120c18.75 44.25 36 89 55 133 11.25 26 20 52.75 32.5 78.25 1.75 4 5.25 11.5 8.75 14.25 8.25 6.5 31.25 8 43 12.5 0.75 4.75 1.5 9.5 1.5 14.25 0 2.25-0.25 4.25-0.25 6.5-31.75 0-63.5-4-95.25-4-32.75 0-65.5 2.75-98.25 3.75 0-6.5 0.25-13 1-19.5l32.75-7c6.75-1.5 20-3.25 20-12.5 0-9-32.25-83.25-36.25-93.5l-112.5-0.5c-6.5 14.5-31.75 80-31.75 89.5 0 19.25 36.75 20 51 22 0.25 4.75 0.25 9.5 0.25 14.5 0 2.25-0.25 4.5-0.5 6.75-29 0-58.25-5-87.25-5-3.5 0-8.5 1.5-12 2-15.75 2.75-31.25 3.5-47 3.5z"></path></svg></span>
               &nbsp;&nbsp;<div id="treadablefont"  class="aksestexttools">Tulisan Dapat Dibaca</div>
               </div>
              </div>
              <div class="subtitletools" id="linkunderline">
              <div class="flexrowdata">
               <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M364 304c0-6.5-2.5-12.5-7-17l-52-52c-4.5-4.5-10.75-7-17-7-7.25 0-13 2.75-18 8 8.25 8.25 18 15.25 18 28 0 13.25-10.75 24-24 24-12.75 0-19.75-9.75-28-18-5.25 5-8.25 10.75-8.25 18.25 0 6.25 2.5 12.5 7 17l51.5 51.75c4.5 4.5 10.75 6.75 17 6.75s12.5-2.25 17-6.5l36.75-36.5c4.5-4.5 7-10.5 7-16.75zM188.25 127.75c0-6.25-2.5-12.5-7-17l-51.5-51.75c-4.5-4.5-10.75-7-17-7s-12.5 2.5-17 6.75l-36.75 36.5c-4.5 4.5-7 10.5-7 16.75 0 6.5 2.5 12.5 7 17l52 52c4.5 4.5 10.75 6.75 17 6.75 7.25 0 13-2.5 18-7.75-8.25-8.25-18-15.25-18-28 0-13.25 10.75-24 24-24 12.75 0 19.75 9.75 28 18 5.25-5 8.25-10.75 8.25-18.25zM412 304c0 19-7.75 37.5-21.25 50.75l-36.75 36.5c-13.5 13.5-31.75 20.75-50.75 20.75-19.25 0-37.5-7.5-51-21.25l-51.5-51.75c-13.5-13.5-20.75-31.75-20.75-50.75 0-19.75 8-38.5 22-52.25l-22-22c-13.75 14-32.25 22-52 22-19 0-37.5-7.5-51-21l-52-52c-13.75-13.75-21-31.75-21-51 0-19 7.75-37.5 21.25-50.75l36.75-36.5c13.5-13.5 31.75-20.75 50.75-20.75 19.25 0 37.5 7.5 51 21.25l51.5 51.75c13.5 13.5 20.75 31.75 20.75 50.75 0 19.75-8 38.5-22 52.25l22 22c13.75-14 32.25-22 52-22 19 0 37.5 7.5 51 21l52 52c13.75 13.75 21 31.75 21 51z"></path></svg></span>
               &nbsp;&nbsp;<div id="tlinkunderline"  class="aksestexttools">Garis Bawahi Tautan</div>
               </div>
              </div>

              <div class="subtitletools" id="ratatulisan">
              <div class="flexrowdata">
              <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M384 1056v64q0 13-9.5 22.5T352 1152h-64q-13 0-22.5-9.5T256 1120v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T352 896h-64q-13 0-22.5-9.5T256 864v-64q0-13 9.5-22.5T288 768h64q13 0 22.5 9.5T384 800zm0-256v64q0 13-9.5 22.5T352 640h-64q-13 0-22.5-9.5T256 608v-64q0-13 9.5-22.5T288 512h64q13 0 22.5 9.5T384 544zm1152 512v64q0 13-9.5 22.5t-22.5 9.5H544q-13 0-22.5-9.5T512 1120v-64q0-13 9.5-22.5t22.5-9.5h960q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T1504 896H544q-13 0-22.5-9.5T512 864v-64q0-13 9.5-22.5T544 768h960q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T1504 640H544q-13 0-22.5-9.5T512 608v-64q0-13 9.5-22.5T544 512h960q13 0 22.5 9.5t9.5 22.5zm128 704V416q0-13-9.5-22.5T1632 384H160q-13 0-22.5 9.5T128 416v832q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm128-1088v1088q0 66-47 113t-113 47H160q-66 0-113-47T0 1248V160Q0 94 47 47T160 0h1472q66 0 113 47t47 113z"/></svg></span>
              &nbsp;&nbsp;<div id="tratatulisan"  class="aksestexttools">Rata Tulisan</div>
              </div>
              </div>

              <div class="subtitletools" id="resetdisabilitas">
              <div class="flexrowdata">
              <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448"><path fill="currentColor" d="M384 224c0 105.75-86.25 192-192 192-57.25 0-111.25-25.25-147.75-69.25-2.5-3.25-2.25-8 0.5-10.75l34.25-34.5c1.75-1.5 4-2.25 6.25-2.25 2.25 0.25 4.5 1.25 5.75 3 24.5 31.75 61.25 49.75 101 49.75 70.5 0 128-57.5 128-128s-57.5-128-128-128c-32.75 0-63.75 12.5-87 34.25l34.25 34.5c4.75 4.5 6 11.5 3.5 17.25-2.5 6-8.25 10-14.75 10h-112c-8.75 0-16-7.25-16-16v-112c0-6.5 4-12.25 10-14.75 5.75-2.5 12.75-1.25 17.25 3.5l32.5 32.25c35.25-33.25 83-53 132.25-53 105.75 0 192 86.25 192 192z"></path></svg></span>
              &nbsp;&nbsp;<div id="tidreset"  class="aksestexttools">Atur Ulang</div>
              </div>
              </div>


          </div>
      </div>
      <button type="button" class="open-toolbar"  onmouseout="callfunction('Open Toolbar')">
          <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" enable-background="new 0 0 100 100" viewBox="0 0 100 100" fill="currentColor" width="1em">
              <g>
                  <path fill="#FFFFFF" d="M60.4,78.9c-2.2,4.1-5.3,7.4-9.2,9.8c-4,2.4-8.3,3.6-13,3.6c-6.9,0-12.8-2.4-17.7-7.3c-4.9-4.9-7.3-10.8-7.3-17.7c0-5,1.4-9.5,4.1-13.7c2.7-4.2,6.4-7.2,10.9-9.2l-0.9-7.3c-6.3,2.3-11.4,6.2-15.3,11.8C7.9,54.4,6,60.6,6,67.3c0,5.8,1.4,11.2,4.3,16.1s6.8,8.8,11.7,11.7c4.9,2.9,10.3,4.3,16.1,4.3c7,0,13.3-2.1,18.9-6.2c5.7-4.1,9.6-9.5,11.7-16.2l-5.7-11.4C63.5,70.4,62.5,74.8,60.4,78.9z"></path>
                  <path fill="#FFFFFF" d="M93.8,71.3l-11.1,5.5L70,51.4c-0.6-1.3-1.7-2-3.2-2H41.3l-0.9-7.2h22.7v-7.2H39.6L37.5,19c2.5,0.3,4.8-0.5,6.7-2.3c1.9-1.8,2.9-4,2.9-6.6c0-2.5-0.9-4.6-2.6-6.3c-1.8-1.8-3.9-2.6-6.3-2.6c-2,0-3.8,0.6-5.4,1.8c-1.6,1.2-2.7,2.7-3.2,4.6c-0.3,1-0.4,1.8-0.3,2.3l5.4,43.5c0.1,0.9,0.5,1.6,1.2,2.3c0.7,0.6,1.5,0.9,2.4,0.9h26.4l13.4,26.7c0.6,1.3,1.7,2,3.2,2c0.6,0,1.1-0.1,1.6-0.4L97,77.7L93.8,71.3z"></path>
              </g>
          </svg>
      </button>
      </div>`;
      document.getElementById('loadmodaldisabilitas').innerHTML =
        toolbardisabilitas;

      function getOS() {
        var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
        var is_safari = navigator.userAgent.indexOf('Safari') > -1;
        var userAgent = window.navigator.userAgent,
          platform =
            window.navigator?.userAgentData?.platform ||
            window.navigator.platform,
          macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
          windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
          iosPlatforms = ['iPhone', 'iPad', 'iPod'],
          os = null;
        if (macosPlatforms.indexOf(platform) !== -1) {
          os = 'Mac OS';
        } else if (iosPlatforms.indexOf(platform) !== -1) {
          os = 'iOS';
        } else if (windowsPlatforms.indexOf(platform) !== -1) {
          os = 'Windows';
        } else if (/Android/.test(userAgent)) {
          os = 'Android';
        } else if (/Linux/.test(platform)) {
          os = 'Linux';
        }
        return os;
      }
      $('.open-toolbar').click(function (event) {
        var stickyToolbarContainer = document.querySelector(
          '.toolbar-disabilitas'
        );
        stickyToolbarContainer.classList.toggle('show-toolbar');
      });
      $('#checklang').on('change', function () {
        changelang(this);
      });

      var arrayratatulisan = [];
      var langdefault = [];

      function replacemultipletext(lang, status) {
        var dataratatulisanid = '';
        var dataratatulisanen = '';
        if (arrayratatulisan.length == 0) {
          dataratatulisanid = 'Rata Tulisan';
          dataratatulisanen = 'Average Writing';
        } else if (arrayratatulisan.length > 0) {
          if (arrayratatulisan[0] == 0) {
            dataratatulisanid = 'Rata Tulisan';
            dataratatulisanen = 'Average Writing';
          } else if (arrayratatulisan[0] == 1) {
            dataratatulisanid = 'Rata Kiri';
            dataratatulisanen = 'Align Left';
          } else if (arrayratatulisan[0] == 2) {
            dataratatulisanid = 'Rata Tengah';
            dataratatulisanen = 'Average Middle';
          } else if (arrayratatulisan[0] == 3) {
            dataratatulisanid = 'Rata Tengah';
            dataratatulisanen = 'Average Middle';
          } else if (arrayratatulisan[0] == 4) {
            dataratatulisanid = 'Rata Kanan';
            dataratatulisanen = 'Align Right';
          }
        }

        if (status == 'reset') {
          dataratatulisanid = 'Rata Tulisan';
          dataratatulisanen = 'Average Writing';
        }

        var replaceratatulisan = '';
        if (lang == undefined || lang == '') {
          replaceratatulisan = {
            ratatulisan: dataratatulisanid,
          };
        } else if (lang == 1) {
          replaceratatulisan = {
            ratatulisan: dataratatulisanid,
          };
        } else if (lang == 2) {
          replaceratatulisan = {
            ratatulisan: dataratatulisanen,
          };
        }

        return replaceratatulisan;
      }

      function ratatulisan(lang) {
        var resulttext = replacemultipletext(lang, 'noreset');
        var text_tulisan = '';
        if (lang == '') {
          text_tulisan = '';
        } else {
          text_tulisan = resulttext.ratatulisan;
        }
        $('#tratatulisan').text(text_tulisan);
      }

      function changelang(ele) {
        var groups = Array.from(document.querySelectorAll('#checklangmenu'));
        langdefault.length = 0;
        langdefault.push(2);

        var resulttext = replacemultipletext(2, 'noreset');
        if ($(ele).prop('checked') == true) {
          var toolslangEn = {
            tdataoff: 'Indonesian',
            tdataon: 'English',
            taccessbility: 'Accessibility Tools',
            tincreasetext: 'Increase Text',
            tdecreasetext: 'Decrease Text',
            tegrayscale: 'Grayscale',
            thcontrash: 'Hight Contrast',
            tncontrash: 'Negative Contrast',
            tlgcontrash: 'Light Background',
            treadablefont: 'Readable Font',
            tlinkunderline: 'Link Underline',
            twebspeach: 'Web Speech',
            tratatulisan: resulttext.ratatulisan,
            tidreset: 'Reset',
          };
          replacetext(groups, toolslangEn);
        } else if ($(ele).prop('checked') == false) {
          langdefault.length = 0;
          langdefault.push(1);

          var resulttext = replacemultipletext(1, 'noreset');
          var toolslangID = {
            tdataoff: 'Indonesia',
            tdataon: 'Inggris',
            taccessbility: 'Sarana',
            tincreasetext: 'Perbesar Teks',
            tdecreasetext: 'Perkecil Teks',
            tegrayscale: 'Skala Abu - Abu',
            thcontrash: 'Kontras Tinggi',
            tncontrash: 'Latar Gelap',
            tlgcontrash: 'Latar Terang',
            treadablefont: 'Tulisan Dapat Dibaca',
            tlinkunderline: 'Garis Bawahi Tautan',
            twebspeach: 'Moda Suara',
            tratatulisan: resulttext.ratatulisan,
            tidreset: 'Atur Ulang',
          };
          replacetext(groups, toolslangID);
        }
      }

      function callfunction(value) {
        var voicecek = localStorage.getItem('permismobile');
        if (voicecek != null && voicecek == 'on') {
          setTimeout(() => {
            speachmobile(value);
          }, 50);
        } else {
          speach(value);
        }
      }

      function replacetext(groups, arrayjs) {
        var namedatainput = '[class="contenttoolbar_disabilitas"]';
        var namedatainput2 = 'div';
        var listgroupselector = groups.map(function (group) {
          return group.querySelector(namedatainput);
        });
        var listdata = listgroupselector.map(function (group) {
          return Array.from(group.querySelectorAll(namedatainput2)).map(
            function (item) {
              return item;
            }
          );
        });
        //  console.log(mytext)
        //   var mytext = getelement.replace("indonesian", "indonesia");
        // $("#tmulticheckboxlang").text(resultvalue);
        var keysarray = Object.keys(arrayjs);
        var keysvalues = Object.values(arrayjs);
        for (let i = 0; i < listdata.length; i++) {
          for (let k = 0; k < listdata[i].length; k++) {
            for (let b = 0; b < keysarray.length; b++) {
              var idhtml = keysarray[b];
              if (
                listdata[i][k].id == idhtml &&
                idhtml != 'tdataoff' &&
                idhtml != 'tdataon'
              ) {
                // var listdatallx = listdata[i][k];
                var getelement = document.getElementById(keysarray[b]);
                var mytext = getelement.textContent.trim();
                var resultvalue = mytext.replace(mytext, keysvalues[b]);
                $('#' + idhtml).text(resultvalue);
              } else if (idhtml == 'tdataoff' || idhtml == 'tdataon') {
                if (idhtml == 'tdataon') {
                  var mytext = $('#tmycheckbox').attr('data-on');
                  $('#tmycheckbox').attr('data-on', keysvalues[b]);
                }
                if (idhtml == 'tdataoff') {
                  var mytext = $('#tmycheckbox').attr('data-off');
                  $('#tmycheckbox').attr('data-off', keysvalues[b]);
                }
                ///
              }
            }
          }
        }
      }

      $('#ratatulisan').click(function (event) {
        if (arrayratatulisan.length > 0) {
          if (arrayratatulisan[0] == 1) {
            arrayratatulisan.length = 0;
            arrayratatulisan.push(2);
            ratatulisan(langdefault[0]);
            $('*:not(".btn-color-mode-switch-inner, *")').each(function (
              i,
              item
            ) {
              $(item).cssImportant('text-align', 'left');

              if ($(item).css('flex-direction') == 'row') {
                $(item).cssImportant('justify-content', 'flex-start');
              }
            });
          }

          if (arrayratatulisan[0] == 2) {
            arrayratatulisan.length = 0;
            arrayratatulisan.push(3);

            ratatulisan(langdefault[0]);

            $('*:not(".btn-color-mode-switch-inner")').each(function (i, item) {
              $(item).cssImportant('text-align', 'center');
              if ($(item).css('flex-direction') == 'row') {
                $(item).cssImportant('justify-content', 'center');
              }
            });
          } else if (arrayratatulisan[0] == 3) {
            arrayratatulisan.length = 0;
            arrayratatulisan.push(4);
            ratatulisan(langdefault[0]);
            $('*:not(".btn-color-mode-switch-inner")').each(function (i, item) {
              $(item).cssImportant('text-align', 'right');
              if ($(item).css('flex-direction') == 'row') {
                $(item).cssImportant('justify-content', 'flex-end');
              }
            });
          } else if (arrayratatulisan[0] == 4) {
            cekclassactive(groups, 'ratatulisan');
            arrayratatulisan.length = 0;
            ratatulisan(langdefault[0]);

            $('*:not(".btn-color-mode-switch-inner")').each(function (i, item) {
              $(item).cssImportant('text-align', '');
              if ($(item).css('flex-direction') == 'row') {
                $(item).cssImportant('justify-content', '');
              }
            });
          } else if (arrayratatulisan[0] == 0) {
            cekclassactive(groups, 'ratatulisan');
            arrayratatulisan.length = 0;

            arrayratatulisan.push(1);
            ratatulisan(langdefault[0]);

            $('*:not(".btn-color-mode-switch-inner")').each(function (i, item) {
              $(item).cssImportant('text-align', 'left');
              if ($(item).css('flex-direction') == 'row') {
                $(item).cssImportant('justify-content', 'flex-start');
              }
            });
          }
        } else {
          cekclassactive(groups, 'ratatulisan');
          arrayratatulisan.length = 0;

          arrayratatulisan.push(1);
          ratatulisan(langdefault[0]);

          $('*:not(".btn-color-mode-switch-inner")').each(function (i, item) {
            $(item).cssImportant('text-align', 'left');
            if ($(item).css('flex-direction') == 'row') {
              $(item).cssImportant('justify-content', 'flex-start');
            }
          });
        }

        $('.contenttoolbar_disabilitas *,div.titletools,.open-toolbar').each(
          function (i, item) {
            $(item).cssImportant('text-align', '');
            $(item).cssImportant('justify-content', '');
          }
        );
        $('.titletools').cssImportant('text-align', 'center');
      });

      var zoomLevel = 1;
      var rootFontSize = 12;
      var groups = Array.from(document.querySelectorAll('#groupcekmenu'));
      $('#increasetext').click(function (event) {
        // tracking_fitur_disabilitas('Perbesar Text');
        var listdatagroup = cekclassactive(groups, 'increasetext');

        zoomLevel = zoomLevel + 0.1;
        rootFontSize = rootFontSize + 2;
        $(
          'div > *:not(".fa-search,.toolbar-disabilitas  *,.fa,.fa-angle-down")'
        ).css({
          // "font-weight": 400,
          'font-size': rootFontSize + 'px',
        });
      });
      $('#decreasetext').click(function (event) {
        //  tracking_fitur_disabilitas('Perkecil Text');
        $('#resetdisabilitas').removeClass('subtitletoolsactive');
        $('#resetdisabilitas').addClass('subtitletools');
        //  var listdatagroup = cekclassactive(groups, 'decreasetext');
        setTimeout(() => {
          zoomLevel = zoomLevel - 0.1;
          rootFontSize = rootFontSize - 2;
          $('#increasetext').removeClass('subtitletoolsactive');
          $('#increasetext').addClass('subtitletools');
          $(
            'div > *:not(".fa-search,.toolbar-disabilitas  *,.fa,.fa-angle-down")'
          ).css({
            //  "font-weight": 400,
            'font-size': rootFontSize + 'px',
          });
        }, 100);
      });
      $('#readablefont').on('click', function (event) {
        //  tracking_fitur_disabilitas('Tulisan Dapat Di Baca');
        var listdatagroup = cekclassactive(groups, 'readablefont');
        if (listdatagroup.getclass.classactiv == 'active') {
          $(
            '*:not(".fa-search,.toolbar-disabilitas  *,.fa,.fa-angle-down, h1 ,h2 , h3")'
          ).css({
            //"font-weight": 400,

            'font-size': '25px',
          });

          $('h1,h2,h3,h4').css({
            'font-size': '45px',
          });
        } else {
          $(
            '*:not(".fa-search,.toolbar-disabilitas  *,.fa,.fa-angle-down")'
          ).css({
            'font-family': '',
            'font-weight': '',
            'font-size': '',
            'font-family': '',
          });
        }
      });
      jQuery(document).ready(function () {
        jQuery.fn.cssImportant = function (name, value) {
          const $this = this;
          const applyStyles = (n, v) => {
            // Convert style name from camelCase to dashed-case.
            const dashedName = n.replace(
              /(.)([A-Z])(.)/g,
              (str, m1, upper, m2) => {
                return m1 + '-' + upper.toLowerCase() + m2;
              }
            );
            // Loop over each element in the selector and set the styles.
            $this.each(function () {
              this.style.setProperty(dashedName, v, 'important');
            });
          };
          // If called with the first parameter that is an object,
          // Loop over the entries in the object and apply those styles.
          if (jQuery.isPlainObject(name)) {
            for (const [n, v] of Object.entries(name)) {
              applyStyles(n, v);
            }
          } else {
            // Otherwise called with style name and value.
            applyStyles(name, value);
          }
          // This is required for making jQuery plugin calls chainable.
          return $this;
        };
      });

      $('#hcontrash').click(function (event) {
        //   tracking_fitur_disabilitas('Warna');

        var listdatagroup = cekclassactive(groups, 'hcontrash', 'on');
        if (listdatagroup.getclass.classactiv == 'active') {
          $('.navbar-inverse2').css('background-color', 'rgb(0, 0, 0)');
          $(
            '*:not(".btn-color-mode-switch-inner,.mycheckbox,.Vue-Toastification__container")'
          ).each(function (i, item) {
            var color = $(item).css('color');
            $(item).cssImportant('background-color', 'black');

            $(item).cssImportant('color', '#40C090');
            $(item).cssImportant('background', 'black');
          });

          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('border-color', 'white');
          var links = document.querySelectorAll('a,div,li a strong');
          for (var i = 0; i < links.length; i++) {
            if (!isBlank(links[i].href)) {
              links[i].style.color = '#00f3f7 !important';
            }
          }
          $('h1,h2,h3,h4,h5').each(function (i, item) {
            var color = $(item).css('color');
            $(item).cssImportant('color', 'white');

            $(item).cssImportant('background-color', 'black');
            $(item).cssImportant('color', '#40C090');
            $(item).cssImportant('background', 'black');
          });

          $('* > div').each(function (i, item) {
            var color = $(item).css('color');
          });

          $('*>button, * > p').each(function (i, item) {
            var color = $(item).css('color');

            $(item).cssImportant('background-color', 'black');
            $(item).cssImportant('color', '#40C090');
            $(item).cssImportant('background', 'black');
          });

          $('*>a').each(function (i, item) {
            var color = $(item).css('color');

            $(item).cssImportant('background-color', 'black');
            $(item).cssImportant('color', 'yellow');
            $(item).cssImportant('background', 'black');
          });
          changecolordisabilitas(groups);
          hoveractive();

          $('#groupcekmenu > *, .bodytools path').each(function (i, item) {
            $(item).cssImportant('color', '#00f3f7');
          });
        } else {
          $('*').each(function (i, item) {
            var color = $(item).css('color');
            $(item).css({
              'background-color': '',
              background: '',
              color: '',
            });
          });
          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('border-color', '');
          hovernoactive();
        }
      });

      function changecolordisabilitas(groups) {
        var namedatainput = '[class="bodytools"]';
        var namedatainput2 = '[class="aksestexttools"]';
        var listgroupselector = groups.map(function (group) {
          return group.querySelector(namedatainput);
        });
        var listdata = listgroupselector.map(function (group) {
          return Array.from(group.querySelectorAll(namedatainput2)).map(
            function (item) {
              return item;
            }
          );
        });

        var listdatall = [];
        var listdatall2 = [];
        for (let i = 0; i < listdata.length; i++) {
          for (let k = 0; k < listdata[i].length; k++) {
            var classactive = '';
            var classid = '';
            //     console.log(listdata[i][k].id);
            $('#' + listdata[i][k].id).css({
              color: '#00f3f7',
            });
            //  document.getElementById().style.color = "#0080FF";
            //  $("#thcontrash").css("color", "#0080FF");
          }
        }
      }
      $('#ncontrash').click(function (event) {
        //  tracking_fitur_disabilitas('Klise');
        var listdatagroup = cekclassactive(groups, 'ncontrash');
        if (listdatagroup.getclass.classactiv == 'active') {
          $('.navbar-inverse2').css('background-color', 'rgb(0, 0, 0)');
          $(
            '*:not(".btn-color-mode-switch-inner,.mycheckbox,.Vue-Toastification__container")'
          ).each(function (i, item) {
            var color = $(item).css('color');
            $(item).cssImportant('background-color', 'black');
            $(item).cssImportant('color', 'yellow');
            $(item).cssImportant('background', 'black');
          });
          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('border-color', 'white');
          hoveractive();
        } else {
          $('*').each(function (i, item) {
            var color = $(item).css('color');
            $(item).css({
              'background-color': '',
              background: '',
              color: '',
            });
          });
          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('border-color', '');
          hovernoactive();
        }
      });

      function hoveractive() {
        $('* > a').hover(function (e) {
          if (e.type === 'mouseenter') {
            $(this).css({
              'background-color': '#c23616',
              opacity: '0.5',
            });
          } else if (e.type === 'mouseleave') {
            $(this).css({
              'background-color': 'black',
              opacity: '',
            });
          }
        });
      }

      function hovernoactive() {
        $('* > a').hover(function (e) {
          // console.log(e.type);
          if (e.type === 'mouseenter') {
            $(this).css({
              'background-color': '',
              opacity: '',
            });
          } else if (e.type === 'mouseleave') {
            $(this).css({
              'background-color': '',
              opacity: '',
            });
          }
        });
      }
      $('#lgcontrash').click(function (event) {
        //  tracking_fitur_disabilitas('Penerangan');
        var listdatagroup = cekclassactive(groups, 'lgcontrash');
        if (listdatagroup.getclass.classactiv == 'active') {
          $('*').each(function (i, item) {
            var color = $(item).css('color');
            $(item).css({
              'background-color': '',
              background: '',
              color: '',
            });
          });

          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('background-color', 'white');
          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('color', 'black');
          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('background', 'white');
          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('border-color', 'white');
          $('*:hover').cssImportant('border-color', 'white');
          $('*:focus').cssImportant('border-color', 'white');

          hovernoactive();
        } else {
          $('*').each(function (i, item) {
            var color = $(item).css('color');
            $(item).css({
              'background-color': '',
              background: '',
              color: '',
            });
          });
          $(
            '*:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('border-color', '');
          hovernoactive();
        }
        // resetcss();
      });
      $('#linkunderline').click(function (event) {
        //    tracking_fitur_disabilitas('Garis Bawahi Tautan');
        var listdatagroup = cekclassactive(groups, 'linkunderline');
        if (listdatagroup.getclass.classactiv == 'active') {
          var links = document.querySelectorAll('a,div > a,li a, a *');
          for (var i = 0; i < links.length; i++) {
            if (!isBlank(links[i].href)) {
              $(links[i]).cssImportant('textDecoration', 'underline');

              //  links[i].style.textDecoration = "underline";
            }
          }

          $(
            'a *:not(".fa-search,.titletools,svg,.btn-color-mode-switch-inner,.Vue-Toastification__container")'
          ).cssImportant('textDecoration', 'underline');
          $('.toolbar-disabilitas  *').css({
            'text-decoration': '',
          });
        } else {
          $('*').css({
            'text-decoration': '',
          });
        }
      });
      $('#egrayscale').on('click', function (event) {
        //('Skala Abu-abu');
        var listdatagroup = cekclassactive(groups, 'egrayscale');
        // console.log("grey");
        if (listdatagroup.getclass.classactiv == 'active') {
          $('html').attr('class', 'greyscaleall');
        } else {
          $('html').removeAttr('class');
        }
      });

      $('#resetdisabilitas').click(function (event) {
        //    tracking_fitur_disabilitas('Mengatur Ulang');
        var listdatagroup = cekclassactive(groups, 'resetdisabilitas');
        if (listdatagroup.getclass.classactiv == 'active') {
          resetcss();
          localStorage.removeItem('permisvoice');
          localStorage.removeItem('permismobile');
        }
      });

      function resetcss() {
        localStorage.removeItem('permisvoice');
        localStorage.removeItem('permismobile');
        arrayratatulisan.length = 0;
        arrayratatulisan.push(0);

        $('*').each(function (i, item) {
          var color = $(item).css('color');
          $(item).css({
            'background-color': '',
            background: '',
            color: '',
            'font-size': '',
            'text-decoration': '',
            'font-weight': '',
            'font-family': '',
          });
        });
        $('a').hover(function (e) {
          //console.log(e.type);
          if (e.type === 'mouseenter') {
            $(this).css({
              'background-color': '',
              opacity: '',
            });
          } else if (e.type === 'mouseleave') {
            $(this).css({
              'background-color': '',
              opacity: '',
            });
          }
        });
        $('html').removeAttr('class');
        $('*').css({
          'text-decoration': '',
          'border-color': '',
          'text-align': '',
        });

        rootFontSize = 20;
        $('*:not(".btn-color-mode-switch-inner")').each(function (i, item) {
          $(item).cssImportant('text-align', '');
          $(item).cssImportant('justify-content', '');
        });

        var text_tulisan = '';
        var langnew = 1;

        if (langdefault.length > 0) {
          langnew = langdefault[0];
        }

        if (langdefault.length == 0) {
          replacemultipletext(langnew, 'noreset');
          var resultdata = replacemultipletext(langnew, 'reset');
          text_tulisan = resultdata.ratatulisan;
        } else {
          langnew = langdefault[0];

          replacemultipletext(langnew, 'noreset');
          var resultdata = replacemultipletext(langnew, 'reset');
          // langdefault.length = 0;
          text_tulisan = resultdata.ratatulisan;
        }

        $('#tratatulisan').text(text_tulisan);
      }

      function cekclassactive(groups, idhtml) {
        if (idhtml != 'resetdisabilitas') {
          $('#resetdisabilitas').removeClass('subtitletoolsactive');
          $('#resetdisabilitas').addClass('subtitletools');
        }
        var namedatainput = '[class="bodytools"]';
        var namedatainput2 = 'div';
        var listgroupselector = groups.map(function (group) {
          return group.querySelector(namedatainput);
        });
        var listdata = listgroupselector.map(function (group) {
          return Array.from(group.querySelectorAll(namedatainput2)).map(
            function (item) {
              return item;
            }
          );
        });
        var listdatall = [];
        var listdatall2 = [];
        for (let i = 0; i < listdata.length; i++) {
          for (let k = 0; k < listdata[i].length; k++) {
            var classactive = '';
            var classid = '';
            if (listdata[i][k].id == idhtml) {
              if (
                $('#' + idhtml).hasClass('subtitletools') &&
                idhtml != 'decreasetext'
              ) {
                classactive = 'active';
                $('#' + idhtml).addClass('subtitletoolsactive');
                $('#' + idhtml).removeClass('subtitletools');
              } else if (
                $('#' + idhtml).hasClass('subtitletoolsactive') &&
                idhtml == 'resetdisabilitas'
              ) {
                classactive = 'noactive';
                $('#' + idhtml).removeClass('subtitletoolsactive');
                $('#' + idhtml).addClass('subtitletools');
              } else {
                classactive = 'noactive';
                $('#' + idhtml).removeClass('subtitletoolsactive');
                $('#' + idhtml).addClass('subtitletools');
              }
            } else {
              if (idhtml == 'resetdisabilitas') {
                classactive = 'noactive';
                //   classid = listdata[i][k].id;
                if (
                  $('#' + listdata[i][k].id).hasClass('subtitletoolsactive')
                ) {
                  $('#' + listdata[i][k].id).removeClass('subtitletoolsactive');
                  $('#' + listdata[i][k].id).addClass('subtitletools');
                }
              } else if (
                idhtml == 'lgcontrash' ||
                idhtml == 'ncontrash' ||
                idhtml == 'hcontrash'
              ) {
                if (
                  listdata[i][k].id == 'lgcontrash' ||
                  listdata[i][k].id == 'ncontrash' ||
                  listdata[i][k].id == 'hcontrash'
                ) {
                  if (
                    $('#' + listdata[i][k].id).hasClass('subtitletoolsactive')
                  ) {
                    $('#' + listdata[i][k].id).removeClass(
                      'subtitletoolsactive'
                    );
                    $('#' + listdata[i][k].id).addClass('subtitletools');
                  }
                }
              }
            }
            //console.log(classactive);
            var loopmulti = {
              id: listdata[i][k].id,
              class: listdata[i][k].className,
              classactiv: classactive,
            };
            listdatall.push(loopmulti);
          }
        }
        var cekactiveclass = listdatall.filter(function (group) {
          return group.id == idhtml;
        });
        var returndata = {
          getclass: cekactiveclass[0],
          data: listdata,
        };
        return returndata;
      }

      $('#webspeach').click(function (event) {
        // tracking_fitur_disabilitas('Moda Suara');
        var listdatagroup = cekclassactive(groups, 'webspeach');
        if (listdatagroup.getclass.classactiv == 'active') {
          localStorage.setItem('permisvoice', 'on');
          speach('Selamat Datang Di Website Info.go.id');
          //    localStorage.setItem("setwelcome", "welcomeoff");
        } else {
          localStorage.setItem('permisvoice', 'off');
        }
      });

      $('#mobileapp').click(function (event) {
        //     tracking_fitur_disabilitas('Moda Suara Mobile Apps');
        var listdatagroup = cekclassactive(groups, 'mobileapp');
        if (listdatagroup.getclass.classactiv == 'active') {
          localStorage.setItem('permismobile', 'on');
          speachmobile('Selamat Datang Di Website Info.go.id');
          //    localStorage.setItem("setwelcome", "welcomeoff");
        } else {
          localStorage.setItem('permismobile', 'off');
        }
      });
      localStorage.removeItem('permismobile');
      localStorage.removeItem('permisvoice');

      $(document).on('mouseover', "a > *:not('.subtitletools')", function () {
        var textvalue = $(this).text().toString();
        console.log(textvalue);
        speach(textvalue);
        speachmobile(textvalue);
      });

      $(document).on('mouseover', "a:not('.subtitletools')", function () {
        var textvalue = $(this).text().toString();
        console.log(textvalue);
        speach(textvalue);
        speachmobile(textvalue);
      });

      if (getOS() == 'Windows' || getOS() == 'Mac OS') {
        var namedatainput = '[class="bodytools"]';
        var namedatainput2 = 'div';
        var listgroupselector = groups.map(function (group) {
          return group.querySelector(namedatainput);
        });
        var listdata = listgroupselector.map(function (group) {
          return Array.from(group.querySelectorAll(namedatainput2)).map(
            function (item) {
              return item;
            }
          );
        });

        var listdatall = [];

        for (let i = 0; i < listdata.length; i++) {
          for (let k = 0; k < listdata[i].length; k++) {
            var tagid = '#' + listdata[i][k].id;

            if (tagid == '#ratatulisan') {
              $(tagid).click(function () {
                var mytext = $(this).text();
                callfunction(mytext);
              });
            }
          }
        }

        $(document).on('mouseover', '.subtitletools', function () {
          var textvalue = $(this).text().toString();
          callfunction(textvalue);
        });
      } else {
        var namedatainput = '[class="bodytools"]';
        var namedatainput2 = 'div';
        var listgroupselector = groups.map(function (group) {
          return group.querySelector(namedatainput);
        });
        var listdata = listgroupselector.map(function (group) {
          return Array.from(group.querySelectorAll(namedatainput2)).map(
            function (item) {
              return item;
            }
          );
        });

        var listdatall = [];

        for (let i = 0; i < listdata.length; i++) {
          for (let k = 0; k < listdata[i].length; k++) {
            var tagid = '#' + listdata[i][k].id;
            var notagid = listdata[i][k].id;

            if (tagid != '#resetdisabilitas' && tagid != '#mobileapp') {
              $(tagid).click(function () {
                var mytext = $(this).text();
                callfunction(mytext);
              });
            }
            if (notagid == 'resetdisabilitas') {
              $(document).on('mouseover', '.subtitletools', function () {
                var textvalue = $(this).text().toString();
                callmobile(textvalue);
              });
            }
          }
        }
      }

      function callmobile(value) {
        var voicecek = localStorage.getItem('permismobile');
        if (voicecek != null && voicecek == 'on') {
          speachmobile(value);
        }
      }
    </script>

<style>
    /* CSS untuk mengatur ukuran dan posisi iframe */
    /* CSS untuk mengatur ukuran dan posisi iframe */
iframe {
  width: 100%;
  height: 600px;
  border: none;
}

/* CSS untuk mengatur tampilan judul */
h1 {
  text-align: center;
  font-size: 36px;
  margin-top: 50px;
  color: #333;
}

/* CSS untuk mengatur tampilan deskripsi */
h4 {
  text-align: center;
  font-size: 18px;
  margin-bottom: 50px;
  color: #555;
}

/* CSS untuk mengatur tampilan tombol */
.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border-radius: 5px;
  text-decoration: none;
  font-size: 18px;
  margin-bottom: 50px;
  transition: background-color 0.3s ease;

  /* Efek hover pada tombol */
  &:hover {
    background-color: #0056b3;
    color: #fff;
  }
}


/* CSS untuk mengatur tampilan container */
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 50px;
  text-align: center;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  background-color: #fff;
  border-radius: 5px;
}

  </style>

    <!-- END OF DISABILITAS -->
  </head>

  <body>
    <div class="bdgcontent">
      <div class="floatmenu">
        <div class="floatmenu__wrap">
        <ul>
            <li>
              <a
                href="https://www.lapor.go.id/instansi/pemerintah-kota-pematang-siantar"
                target="_blank"
                ><img
                  src="<?php echo base_url().'theme/depan/assets/img/floatmenu/lapor-float.png'?>"
                  alt="img"
                /><span>LAPOR</span></a
              >
            </li>
            <li>
              <a href="tel:119" rel="nofollow" target="_blank"
                ><img src="<?php echo base_url().'theme/depan/assets/img/floatmenu/2.png'?>" alt="img" /><span
                  >PSC 119</span
                ></a
              >
            </li>
            <li>
              <a href="https://cctv.pematangsiantar.go.id/"
                ><img src="<?php echo base_url().'theme/depan/assets/img/floatmenu/3.png'?>" alt="img" /><span
                  >CCTV</span
                ></a
              >
            </li>
            <!-- <li>
              <a href="#" target="_blank"
                ><img src="<?php echo base_url().'theme/depan/assets/img/floatmenu/4.png'?>" alt="img" /><span
                  >CHAT</span
                ></a
              >
            </li> -->
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
                <img src="<?php echo base_url().'theme/depan/assets/img/logo.png'?>" alt="img" /><span
                  >Pematangsiantar</span
                >
              </div>
            </div>

            <div class="menu__outer">
              <div class="menu__wrap">
                <div class="menu__left">
                  <div class="menu__utama">
                    <ul>
                      <li class="active">
                        <span
                          ><a class="smuroll" href="<?php echo site_url('');?>"
                            ><i class="fas fa-home"></i> Beranda
                          </a></span
                        >
                      </li>
                      <li class="has-dropdown">
                        <span><a href="<?php echo site_url('about');?>">Tentang</a></span>
                      </li>

                      <li>
                        <span><a href="<?php echo site_url('blog');?>">Berita</a></span>
                      </li>
                      
                      <li class="has-dropdown">
                        <span
                          ><a href="#">Download</a>
                          <i class="idrop fas fa-caret-down"></i
                        ></span>
                        <ul>
                          <li><a href="<?php echo site_url('anggaran');?>">Dokumen Anggaran</a></li>
                          <li>
                            <a href="<?php echo site_url('perencanaan');?>"
                              >Dokumen Perencanaan</a
                            >
                          </li>
                          <li><a href="<?php echo site_url('foto');?>">Foto Wali Kota dan Forkopimda</a></li>
                          <li>
                            <a href="<?php echo site_url('surat');?>">Surat Edaran</a>
                          </li>
                        </ul>
                      </li>

                      <li>
                        <span><a href="https://jdih.pematangsiantar.go.id/">JDIH</a></span>
                      </li>


                      <li class="has-dropdown">
                        <span
                          ><a href="#">Direktori Kota</a>
                          <i class="idrop fas fa-caret-down"></i
                        ></span>
                        <ul>
                          <li><a href="<?php echo site_url('direktori');?>">Informasi Dinas Terkait</a></li>
                          <li>
                            <a href="<?php echo site_url('aplikasi');?>"
                              >Layanan Aplikasi</a
                            >
                          </li>
                          <li>
                            <a href="https://berita.pematangsiantar.go.id/"
                              >Layanan Berita</a
                            >
                          </li>
                          
                        </ul>
                      </li>
                      
                     
                      <!-- <li>
                        <a href="https://sisada.pematangsiantar.go.id/"
                          ><i class="fas fa-exclamation-circle"></i> Open
                          Data</a
                        >
                      </li> -->
                      <li>
                        <a href="https://opinipublik.pematangsiantar.go.id/berita/"
                          ><i class="fas fa-exclamation-circle"></i> Opini Publik</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="menu__right">
              <div class="hujanbahasa">
                <div class="hujan">21&#176;C Berawan</div>
                <div class="bahasa">
                  <a href="city-directory9bb4.html?lang=id">ID</a> |
                  <a href="city-directory9ed2.html?lang=en">EN</a>
                </div>
              </div>
              <div class="search">
                <div class="search__icon">
                  <i class="scari-icon fas fa-search"></i>
                  <i class="sclose-icon fas fa-times"></i>
                </div>
              </div>
            </div>
            <form action="https://www.Pematangsiantar.go.id/search" method="get">
              <div class="search__form-outer">
                <div class="search__form">
                  <input type="text" name="key" />
                  <button type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </nav>
        </div>
      </header>
      <!-- <div class="wrapper">
        <div class="mainwrap">
          <div class="sectionrow">
            <div class="dinasterkait">
              <div class="xsection__header">
                <h1 class="xsection__title">
LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA DAERAH (KONSOLIDASI)
TAHUN ANGGARAN 2024</h1>
              </div>
              <div class="dinasterkait__body">
                <div class="zentable-outer">
                
                 <div class="pdf-container">
                    <iframe src="https://drive.google.com/file/d/1oibaszpGz4gSPMZq_ZttY8QfztbfxNPF/preview" frameborder="0"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="wrapper">
        <div class="mainwrap">
          <div class="sectionrow">
            <div class="dinasterkait">
              <div class="xsection__header">
                <h1 class="xsection__title">LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA DAERAH (KONSOLIDASI)
TAHUN ANGGARAN 2024</h1>
              </div>
              <div class="dinasterkait__body">
                <div class="zentable-outer">
                  <table class="zentable cityd-table" id="myTable">
                    <thead>
                      <tr>
                        <td>Kode Rekening</td>
                        <td>URAIAN</td>
                        <td>ANGGARAN 2024</td>
                        <td>REALISASI 2024</td>
                        <td>% 2024 </td>
                        <td>REALISASI 2023</td>
                      </tr>
                    </thead>
                   <tbody>
                        <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5 = (4 / 3) * 100</td>
                        <td>6</td>
                        </tr>    
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>    
                        <tr>
                        <td>4</td>
                        <td>PENDAPATAN DAERAH</td>
                        <td>1.028.544.501.209</td>
                        <td>100.657.722.901,89</td>
                        <td>9,79</td>
                        <td>100.686.595.901,89</td>
                        </tr> 
                        <tr>
                        <td>4.1 </td>
                        <td>PENDAPATAN ASLI DAERAH (PAD) </td>
                        <td>190.782.774.409</td>
                        <td>24.486.376.301,89</td>
                        <td>12,83</td>
                        <td>24.515.249.301,89</td>
                        </tr>   
                        <tr>
                        <td>4.1.01</td>
                        <td>Pajak Daerah</td>
                        <td>89.500.000.000</td>
                        <td>12.360.771.574,00</td>
                        <td>13,81</td>
                        <td>12.372.644.574,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.06</td>
                        <td>Pajak Hotel </td>
                        <td>3.300.000.000</td>
                        <td>797.592.939,00</td>
                        <td>24,17</td>
                        <td>797.592.939,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.06.01</td>
                        <td>Pajak Hotel</td>
                        <td>3.300.000.000</td>
                        <td>797.592.939,00</td>
                        <td>24,17</td>
                        <td>797.592.939,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.07</td>
                        <td>Pajak Restoran</td>
                        <td>16.000.000.000</td>
                        <td>2.002.387.636,00</td>
                        <td>12,51</td>
                        <td>2.002.387.636,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.07.01 </td>
                        <td>Pajak Restoran dan Sejenisnya</td>
                        <td>16.000.000.000</td>
                        <td>2.002.387.636,00</td>
                        <td>12,51</td>
                        <td>2.002.387.636,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.08 </td>
                        <td>Pajak Hiburan</td>
                        <td>2.000.000.000</td>
                        <td>379.551.573,00</td>
                        <td>18,98</td>
                        <td>379.551.573,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.08.01</td>
                        <td>Pajak Tontonan Film</td>
                        <td>0</td>
                        <td>120.339.955,00</td>
                        <td>0,00</td>
                        <td>120.339.955,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.08.02 </td>
                        <td>Pajak Pagelaran Kesenian/Musik/Tari/ Busana</td>
                        <td>2.000.000.000</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.08.08</td>
                        <td>Pajak Pacuan Kuda, Kendaraan Bermotor, dan Permainan Ketangkasan</td>
                        <td>0</td>
                        <td>216.123.100,00</td>
                        <td>0,00</td>
                        <td>216.123.100,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.08.10 </td>
                        <td>Pajak Pertandingan Olahraga</td>
                        <td>0</td>
                        <td>43.088.518,00</td>
                        <td>0,00</td>
                        <td>43.088.518,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.09 </td>
                        <td>Pajak Reklame</td>
                        <td>3.500.000.000</td>
                        <td>378.244.000,00</td>
                        <td>10,81</td>
                        <td>378.244.000,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.09.01</td>
                        <td>Pajak Reklame Papan/Billboard/Videotron/ Megatron</td>
                        <td>3.500.000.000</td>
                        <td>378.244.000,00</td>
                        <td>10,81</td>
                        <td>378.244.000,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.10 </td>
                        <td>Pajak Penerangan Jalan</td>
                        <td>22.000.000.000</td>
                        <td>3.960.586.660,00</td>
                        <td>18,00</td>
                        <td>3.960.586.660,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.10.02</td>
                        <td>Pajak Penerangan Jalan Sumber Lain</td>
                        <td>22.000.000.000</td>
                        <td>3.960.586.660,00</td>
                        <td>18,00</td>
                        <td>3.960.586.660,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.11 </td>
                        <td>Pajak Parkir</td>
                        <td>600.000.000</td>
                        <td>107.517.250,00</td>
                        <td>17,92</td>
                        <td>107.517.250,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.11.01</td>
                        <td>Pajak Parkir</td>
                        <td>600.000.000</td>
                        <td>107.517.250,00</td>
                        <td>17,92</td>
                        <td>107.517.250,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.12</td>
                        <td>Pajak Air Tanah</td>
                        <td>600.000.000</td>
                        <td>92.021.160,00</td>
                        <td>15,34</td>
                        <td>103.894.160,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.12.01</td>
                        <td>Pajak Air Tanah</td>
                        <td>600.000.000 </td>
                        <td>92.021.160,00</td>
                        <td>15,34</td>
                        <td>103.894.160,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.15 </td>
                        <td>Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBBP2)</td>
                        <td>12.500.000.000</td>
                        <td>409.009.196,00</td>
                        <td>3,27</td>
                        <td>409.009.196,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.15.01 </td>
                        <td>PBBP2</td>
                        <td>12.500.000.000</td>
                        <td>409.009.196,00</td>
                        <td>3,27</td>
                        <td>409.009.196,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.16 </td>
                        <td>Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTB) </td>
                        <td>29.000.000.000</td>
                        <td>4.233.861.160,00</td>
                        <td>14,60</td>
                        <td>4.233.861.160,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.01.16.02</td>
                        <td>BPHTB-Pemberian Hak Baru </td>
                        <td>29.000.000.000</td>
                        <td>4.233.861.160,00</td>
                        <td>14,60</td>
                        <td>4.233.861.160,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02 </td>
                        <td>Retribusi Daerah </td>
                        <td>44.920.690.000</td>
                        <td>797.834.750,00</td>
                        <td>1,78</td>
                        <td>797.834.750,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.01 </td>
                        <td>Retribusi Jasa Umum</td>
                        <td>41.072.090.000</td>
                        <td>791.834.750,00</td>
                        <td>1,93</td>
                        <td>791.834.750,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.01.01</td>
                        <td>Retribusi Pelayanan Kesehatan</td>
                        <td>150.000.000 </td>
                        <td>0,00</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.01.02</td>
                        <td>Retribusi Pelayanan Persampahan/ Kebersihan</td>
                        <td>5.751.090.000</td>
                        <td>109.841.750,00</td>
                        <td>1,91</td>
                        <td>109.841.750,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.01.03</td>
                        <td>Retribusi Pelayanan Pemakaman dan Pengabuan Mayat </td>
                        <td>21.000.000</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.01.04</td>
                        <td>Retribusi Pelayanan Parkir di Tepi Jalan Umum </td>
                        <td>34.000.000.000</td>
                        <td>681.993.000,00</td>
                        <td>2,01</td>
                        <td>681.993.000,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.01.06</td>
                        <td>Retribusi Pengujian Kendaraan Bermotor</td>
                        <td>1.100.000.000</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.01.07</td>
                        <td>Retribusi Pemeriksaan Alat Pemadam Kebakaran</td>
                        <td>50.000.000</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        <td>0,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.02</td>
                        <td>Retribusi Jasa Usaha</td>
                        <td>2.225.000.000</td>
                        <td>6.000.000,00</td>
                        <td>0,27</td>
                        <td>6.000.000,00</td>
                        </tr>    
                        <tr>
                        <td>4.1.02.02.01</td>
                        <td>Retribusi Pemakaian Kekayaan Daerah</td>
                        <td>110.000.000</td>
                        <td>6.000.000,00</td>
                        <td>5,45</td>
                        <td>6.000.000,00</td>
                        </tr>    
                        <tr>
    <td style="text-align: right">4.1.02.02.05</td>
    <td>Retribusi Tempat Khusus Parkir</td>
    <td style="text-align: right">60.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.02.02.07</td>
    <td>Retribusi Rumah Potong Hewan</td>
    <td style="text-align: right">2.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.02.02.09</td>
    <td>Retribusi Tempat Rekreasi dan Olahraga</td>
    <td style="text-align: right">55.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.02.03</td>
    <td>Retribusi Perizinan Tertentu</td>
    <td style="text-align: right">1.623.600.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.02.03.07</td>
    <td>Retribusi Persetujuan Bangunan Gedung</td>
    <td style="text-align: right">1.623.600.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.03</td>
    <td>Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan</td>
    <td style="text-align: right">10.781.206.262</td>
    <td style="text-align: right">11.052.986.850,89</td>
    <td style="text-align: right">102,52</td>
    <td style="text-align: right">11.052.986.850,89</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.03.02</td>
    <td>
      Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas
      Penyertaan Modal pada BUMD
    </td>
    <td style="text-align: right">10.781.206.262</td>
    <td style="text-align: right">11.052.986.850,89</td>
    <td style="text-align: right">102,52</td>
    <td style="text-align: right">11.052.986.850,89</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.03.02.01</td>
    <td>
      Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas
      Penyertaan Modal pada BUMD (Lembaga<br />Keuangan)
    </td>
    <td style="text-align: right">10.281.206.262</td>
    <td style="text-align: right">11.052.986.850,89</td>
    <td style="text-align: right">107,51</td>
    <td style="text-align: right">11.052.986.850,89</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.03.02.03</td>
    <td>
      Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas
      Penyertaan Modal pada BUMD (Bidang Air<br />Minum)
    </td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04</td>
    <td>Lain-lain PAD yang Sah</td>
    <td style="text-align: right">45.580.878.147</td>
    <td style="text-align: right">274.783.127,00</td>
    <td style="text-align: right">0,60</td>
    <td style="text-align: right">291.783.127,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.01</td>
    <td>Hasil Penjualan BMD yang Tidak Dipisahkan</td>
    <td style="text-align: right">310.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.01.08</td>
    <td>Hasil Penjualan Aset Lain-Lain</td>
    <td style="text-align: right">310.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.03</td>
    <td>Hasil Pemanfaatan BMD yang Tidak Dipisahkan</td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">34.000.000,00</td>
    <td style="text-align: right">6,80</td>
    <td style="text-align: right">51.000.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.03.02</td>
    <td>Hasil Kerja Sama Pemanfaatan BMD</td>
    <td style="text-align: right">354.000.000</td>
    <td style="text-align: right">34.000.000,00</td>
    <td style="text-align: right">9,60</td>
    <td style="text-align: right">51.000.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.03.03</td>
    <td>Hasil dari Bangun Guna Serah</td>
    <td style="text-align: right">146.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.05</td>
    <td>Jasa Giro</td>
    <td style="text-align: right">5.770.878.147</td>
    <td style="text-align: right">159.487.750,00</td>
    <td style="text-align: right">2,76</td>
    <td style="text-align: right">159.487.750,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.05.01</td>
    <td>Jasa Giro pada Kas Daerah</td>
    <td style="text-align: right">5.770.878.147</td>
    <td style="text-align: right">159.487.750,00</td>
    <td style="text-align: right">2,76</td>
    <td style="text-align: right">159.487.750,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.07</td>
    <td>Pendapatan Bunga</td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.07.01</td>
    <td>Pendapatan Bunga atas Penempatan Uang Pemerintah Daerah</td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.08</td>
    <td>Penerimaan atas Tuntutan Ganti Kerugian Keuangan Daerah</td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.08.02</td>
    <td>
      Tuntutan Ganti Kerugian Daerah terhadap Pegawai Negeri Bukan Bendahara
      atau Pejabat Lain
    </td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.11</td>
    <td>Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan</td>
    <td style="text-align: right">1.500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.11.01</td>
    <td>Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan</td>
    <td style="text-align: right">1.500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12</td>
    <td>Pendapatan Denda Pajak Daerah</td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">81.295.377,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">81.295.377,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12.06</td>
    <td>Pendapatan Denda Pajak Hotel</td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">785.877,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">785.877,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12.07</td>
    <td>Pendapatan Denda Pajak Restoran</td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">10.252.985,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">10.252.985,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12.08</td>
    <td>Pendapatan Denda Pajak Hiburan</td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">1.744.486,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">1.744.486,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12.09</td>
    <td>Pendapatan Denda Pajak Reklame</td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">1.770.380,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">1.770.380,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12.11</td>
    <td>Pendapatan Denda Pajak Parkir</td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">661.573,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">661.573,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12.12</td>
    <td>Pendapatan Denda Pajak Air Tanah</td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">285.920,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">285.920,00</td>
  </tr>
  <tr>
    <td>Kode Rekening</td>
    <td>URAIAN</td>
    <td>ANGGARAN 2024</td>
    <td>REALISASI 2024</td>
    <td style="text-align: right">% 2024</td>
    <td>REALISASI 2023</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.12.15</td>
    <td>
      Pendapatan Denda Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBBP2)
    </td>
    <td style="text-align: right">0</td>
    <td style="text-align: right">65.794.156,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">65.794.156,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.15</td>
    <td>Pendapatan dari Pengembalian</td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.15.08</td>
    <td>
      Pendapatan dari Pengembalian Kelebihan Pembayaran Belanja Gaji dan
      Tunjangan ASN
    </td>
    <td style="text-align: right">500.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.16</td>
    <td>Pendapatan BLUD</td>
    <td style="text-align: right">36.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.1.04.16.02</td>
    <td>Pendapatan BLUD dari Jasa Layanan</td>
    <td style="text-align: right">36.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH PENDAPATAN ASLI DAERAH</td>
    <td style="text-align: right">190.782.774.409</td>
    <td style="text-align: right">24.486.376.301,89</td>
    <td style="text-align: right">12,83</td>
    <td style="text-align: right">24.515.249.301,89</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2</td>
    <td>PENDAPATAN TRANSFER</td>
    <td style="text-align: right">827.823.544.000</td>
    <td style="text-align: right">76.171.346.600,00</td>
    <td style="text-align: right">9,20</td>
    <td style="text-align: right">76.171.346.600,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.01</td>
    <td>Pendapatan Transfer Pemerintah Pusat</td>
    <td style="text-align: right">767.302.153.000</td>
    <td style="text-align: right">76.171.346.600,00</td>
    <td style="text-align: right">9,93</td>
    <td style="text-align: right">76.171.346.600,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.01.01</td>
    <td>Dana Perimbangan</td>
    <td style="text-align: right">760.564.168.000</td>
    <td style="text-align: right">76.171.346.600,00</td>
    <td style="text-align: right">10,02</td>
    <td style="text-align: right">76.171.346.600,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.01.01.01</td>
    <td>Dana Transfer Umum-Dana Bagi Hasil (DBH)</td>
    <td style="text-align: right">25.371.696.000</td>
    <td style="text-align: right">487.407.850,00</td>
    <td style="text-align: right">1,92</td>
    <td style="text-align: right">487.407.850,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.01.01.02</td>
    <td>Dana Transfer Umum-Dana Alokasi Umum (DAU)</td>
    <td style="text-align: right">598.236.485.000</td>
    <td style="text-align: right">75.683.938.750,00</td>
    <td style="text-align: right">12,65</td>
    <td style="text-align: right">75.683.938.750,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.01.01.03</td>
    <td>Dana Transfer Khusus-Dana Alokasi Khusus (DAK) Fisik</td>
    <td style="text-align: right">18.160.256.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.01.01.04</td>
    <td>Dana Transfer Khusus-Dana Alokasi Khusus (DAK) Non Fisik</td>
    <td style="text-align: right">118.795.731.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH PENDAPATAN TRANSFER DANA PERIMBANGAN</td>
    <td style="text-align: right">760.564.168.000</td>
    <td style="text-align: right">76.171.346.600,00</td>
    <td style="text-align: right">10,02</td>
    <td style="text-align: right">76.171.346.600,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.02</td>
    <td>Pendapatan Transfer Antar Daerah</td>
    <td style="text-align: right">60.521.391.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.02.01</td>
    <td>Pendapatan Bagi Hasil</td>
    <td style="text-align: right">60.521.391.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.2.02.01.01</td>
    <td>Pendapatan Bagi Hasil Pajak</td>
    <td style="text-align: right">60.521.391.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH PENDAPATAN TRANSFER ANTAR DAERAH</td>
    <td style="text-align: right">60.521.391.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>TOTAL PENDAPATAN TRANSFER</td>
    <td style="text-align: right">827.823.544.000</td>
    <td style="text-align: right">76.171.346.600,00</td>
    <td style="text-align: right">9,20</td>
    <td style="text-align: right">76.171.346.600,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.3</td>
    <td>LAIN-LAIN PENDAPATAN DAERAH YANG SAH</td>
    <td style="text-align: right">9.938.182.800</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.3.03</td>
    <td>
      Lain-lain Pendapatan Sesuai dengan Ketentuan Peraturan Perundang-Undangan
    </td>
    <td style="text-align: right">9.938.182.800</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.3.03.02</td>
    <td>
      Pendapatan Dana Kapitasi Jaminan Kesehatan Nasional (JKN) pada Fasilitas
      Kesehatan Tingkat Pertama (FKTP)
    </td>
    <td style="text-align: right">9.938.182.800</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">4.3.03.02.01</td>
    <td>Pendapatan Dana Kapitasi JKN pada FKTP</td>
    <td style="text-align: right">9.938.182.800</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH LAIN LAIN PENDAPATAN DAERAH YANG SAH</td>
    <td style="text-align: right">9.938.182.800</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH PENDAPATAN</td>
    <td style="text-align: right">1.028.544.501.209</td>
    <td style="text-align: right">100.657.722.901,89</td>
    <td style="text-align: right">9,79</td>
    <td style="text-align: right">100.686.595.901,89</td>
  </tr>
  <tr>
    <td style="text-align: right">5</td>
    <td>BELANJA DAERAH</td>
    <td style="text-align: right">1.268.760.505.436</td>
    <td style="text-align: right">78.915.113.763,00</td>
    <td style="text-align: right">6,22</td>
    <td style="text-align: right">89.632.086.917,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1</td>
    <td>BELANJA OPERASI</td>
    <td style="text-align: right">1.129.536.219.707</td>
    <td style="text-align: right">76.219.089.172,00</td>
    <td style="text-align: right">6,75</td>
    <td style="text-align: right">86.936.062.326,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01</td>
    <td>Belanja Pegawai</td>
    <td style="text-align: right">653.472.102.458</td>
    <td style="text-align: right">62.732.312.400,00</td>
    <td style="text-align: right">9,60</td>
    <td style="text-align: right">68.119.849.550,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01</td>
    <td>Belanja Gaji dan Tunjangan ASN</td>
    <td style="text-align: right">425.140.102.684</td>
    <td style="text-align: right">55.626.047.322,00</td>
    <td style="text-align: right">13,08</td>
    <td style="text-align: right">60.530.952.972,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.01</td>
    <td>Belanja Gaji Pokok ASN</td>
    <td style="text-align: right">313.890.066.882</td>
    <td style="text-align: right">42.352.810.630,00</td>
    <td style="text-align: right">13,49</td>
    <td style="text-align: right">46.140.536.230,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.02</td>
    <td>Belanja Tunjangan Keluarga ASN</td>
    <td style="text-align: right">30.340.898.668</td>
    <td style="text-align: right">3.727.068.646,00</td>
    <td style="text-align: right">12,28</td>
    <td style="text-align: right">4.066.712.862,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.03</td>
    <td>Belanja Tunjangan Jabatan ASN</td>
    <td style="text-align: right">11.977.266.463</td>
    <td style="text-align: right">1.209.275.000,00</td>
    <td style="text-align: right">10,10</td>
    <td style="text-align: right">1.399.085.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.04</td>
    <td>Belanja Tunjangan Fungsional ASN</td>
    <td style="text-align: right">25.360.011.614</td>
    <td style="text-align: right">3.156.857.920,00</td>
    <td style="text-align: right">12,45</td>
    <td style="text-align: right">3.311.590.920,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.05</td>
    <td>Belanja Tunjangan Fungsional Umum ASN</td>
    <td style="text-align: right">3.700.088.146</td>
    <td style="text-align: right">455.970.000,00</td>
    <td style="text-align: right">12,32</td>
    <td style="text-align: right">512.910.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.06</td>
    <td>Belanja Tunjangan Beras ASN</td>
    <td style="text-align: right">19.439.742.259</td>
    <td style="text-align: right">2.229.087.600,00</td>
    <td style="text-align: right">11,47</td>
    <td style="text-align: right">2.448.158.100,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.07</td>
    <td>Belanja Tunjangan PPh/Tunjangan Khusus ASN</td>
    <td style="text-align: right">572.374.508</td>
    <td style="text-align: right">56.477.891,00</td>
    <td style="text-align: right">9,87</td>
    <td style="text-align: right">58.778.033,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.08</td>
    <td>Belanja Pembulatan Gaji ASN</td>
    <td style="text-align: right">5.466.327</td>
    <td style="text-align: right">539.120,00</td>
    <td style="text-align: right">9,86</td>
    <td style="text-align: right">579.637,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.09</td>
    <td>Belanja Iuran Jaminan Kesehatan ASN</td>
    <td style="text-align: right">17.513.122.842</td>
    <td style="text-align: right">2.150.508.356,00</td>
    <td style="text-align: right">12,28</td>
    <td style="text-align: right">2.150.508.356,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.10</td>
    <td>Belanja Iuran Jaminan Kecelakaan Kerja ASN</td>
    <td style="text-align: right">603.149.575</td>
    <td style="text-align: right">71.863.040,00</td>
    <td style="text-align: right">11,91</td>
    <td style="text-align: right">110.523.459,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.11</td>
    <td>Belanja Iuran Jaminan Kematian ASN</td>
    <td style="text-align: right">1.733.595.400</td>
    <td style="text-align: right">215.589.119,00</td>
    <td style="text-align: right">12,44</td>
    <td style="text-align: right">331.570.375,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.01.14</td>
    <td>Belanja Tunjangan Khusus</td>
    <td style="text-align: right">4.320.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.02</td>
    <td>Belanja Tambahan Penghasilan ASN</td>
    <td style="text-align: right">155.440.840.750</td>
    <td style="text-align: right">4.759.904.530,00</td>
    <td style="text-align: right">3,06</td>
    <td style="text-align: right">5.196.596.030,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.02.01</td>
    <td>Tambahan Penghasilan berdasarkan Beban Kerja ASN</td>
    <td style="text-align: right">97.586.774.750</td>
    <td style="text-align: right">4.500.404.530,00</td>
    <td style="text-align: right">4,61</td>
    <td style="text-align: right">4.937.096.030,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.02.03</td>
    <td>Tambahan Penghasilan berdasarkan Kondisi Kerja ASN</td>
    <td style="text-align: right">2.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.02.04</td>
    <td>Tambahan Penghasilan berdasarkan Kelangkaan Profesi ASN</td>
    <td style="text-align: right">55.854.066.000</td>
    <td style="text-align: right">259.500.000,00</td>
    <td style="text-align: right">0,46</td>
    <td style="text-align: right">259.500.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.03</td>
    <td>Tambahan Penghasilan berdasarkan Pertimbangan Objektif Lainnya ASN</td>
    <td style="text-align: right">11.724.044.088</td>
    <td style="text-align: right">127.170.000,00</td>
    <td style="text-align: right">1,08</td>
    <td style="text-align: right">173.110.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.03.01</td>
    <td>Belanja Insentif bagi ASN atas Pemungutan Pajak Daerah</td>
    <td style="text-align: right">2.851.920.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.03.02</td>
    <td>Belanja bagi ASN atas Insentif Pemungutan Retribusi Daerah</td>
    <td style="text-align: right">1.331.254.088</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.03.06</td>
    <td>Belanja Jasa Pelayanan Kesehatan bagi ASN</td>
    <td style="text-align: right">9.500.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.03.07</td>
    <td>Belanja Honorarium</td>
    <td style="text-align: right">6.974.570.000</td>
    <td style="text-align: right">127.170.000,00</td>
    <td style="text-align: right">1,82</td>
    <td style="text-align: right">173.110.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.03.08</td>
    <td>Belanja Jasa Pengelolaan BMD</td>
    <td style="text-align: right">556.800.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04</td>
    <td>Belanja Gaji dan Tunjangan DPRD</td>
    <td style="text-align: right">43.230.660.936</td>
    <td style="text-align: right">2.162.545.244,00</td>
    <td style="text-align: right">5,00</td>
    <td style="text-align: right">2.162.545.244,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.01</td>
    <td>Belanja Uang Representasi DPRD</td>
    <td style="text-align: right">2.015.370.000</td>
    <td style="text-align: right">95.970.000,00</td>
    <td style="text-align: right">4,76</td>
    <td style="text-align: right">95.970.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.02</td>
    <td>Belanja Tunjangan Keluarga DPRD</td>
    <td style="text-align: right">282.151.800</td>
    <td style="text-align: right">8.051.400,00</td>
    <td style="text-align: right">2,85</td>
    <td style="text-align: right">8.051.400,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.03</td>
    <td>Belanja Tunjangan Beras DPRD</td>
    <td style="text-align: right">312.854.400</td>
    <td style="text-align: right">11.442.360,00</td>
    <td style="text-align: right">3,66</td>
    <td style="text-align: right">11.442.360,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.04</td>
    <td>Belanja Uang Paket DPRD</td>
    <td style="text-align: right">172.746.000</td>
    <td style="text-align: right">9.597.000,00</td>
    <td style="text-align: right">5,56</td>
    <td style="text-align: right">9.597.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.05</td>
    <td>Belanja Tunjangan Jabatan DPRD</td>
    <td style="text-align: right">2.922.286.500</td>
    <td style="text-align: right">139.156.500,00</td>
    <td style="text-align: right">4,76</td>
    <td style="text-align: right">139.156.500,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.06</td>
    <td>Belanja Tunjangan Alat Kelengkapan DPRD</td>
    <td style="text-align: right">297.618.300</td>
    <td style="text-align: right">13.763.400,00</td>
    <td style="text-align: right">4,62</td>
    <td style="text-align: right">13.763.400,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.07</td>
    <td>Belanja Tunjangan Alat Kelengkapan Lainnya DPRD</td>
    <td style="text-align: right">56.454.300</td>
    <td style="text-align: right">2.040.150,00</td>
    <td style="text-align: right">3,61</td>
    <td style="text-align: right">2.040.150,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.08</td>
    <td>Belanja Tunjangan Komunikasi Intensif Pimpinan dan Anggota DPRD</td>
    <td style="text-align: right">11.340.000.000</td>
    <td style="text-align: right">630.000.000,00</td>
    <td style="text-align: right">5,56</td>
    <td style="text-align: right">630.000.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.09</td>
    <td>Belanja Tunjangan Reses DPRD</td>
    <td style="text-align: right">1.890.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.10</td>
    <td>Belanja Pembebanan PPh kepada Pimpinan dan Anggota DPRD</td>
    <td style="text-align: right">1.028.850.750</td>
    <td style="text-align: right">42.003.122,00</td>
    <td style="text-align: right">4,08</td>
    <td style="text-align: right">42.003.122,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.12</td>
    <td>Belanja Tunjangan Kesejahteraan Pimpinan dan Anggota DPRD</td>
    <td style="text-align: right">9.222.923.886</td>
    <td style="text-align: right">497.721.312,00</td>
    <td style="text-align: right">5,40</td>
    <td style="text-align: right">497.721.312,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.13</td>
    <td>Belanja Tunjangan Transportasi DPRD</td>
    <td style="text-align: right">12.830.400.000</td>
    <td style="text-align: right">712.800.000,00</td>
    <td style="text-align: right">5,56</td>
    <td style="text-align: right">712.800.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.04.14</td>
    <td>Belanja Uang Jasa Pengabdian DPRD</td>
    <td style="text-align: right">859.005.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05</td>
    <td>Belanja Gaji dan Tunjangan KDH/WKDH</td>
    <td style="text-align: right">961.654.000</td>
    <td style="text-align: right">18.845.304,00</td>
    <td style="text-align: right">1,96</td>
    <td style="text-align: right">18.845.304,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.01</td>
    <td>Belanja Gaji Pokok KDH/WKDH</td>
    <td style="text-align: right">56.413.000</td>
    <td style="text-align: right">6.300.000,00</td>
    <td style="text-align: right">11,17</td>
    <td style="text-align: right">6.300.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.02</td>
    <td>Belanja Tunjangan Keluarga KDH/WKDH</td>
    <td style="text-align: right">3.024.000</td>
    <td style="text-align: right">630.000,00</td>
    <td style="text-align: right">20,83</td>
    <td style="text-align: right">630.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.03</td>
    <td>Belanja Tunjangan Jabatan KDH/WKDH</td>
    <td style="text-align: right">98.280.000</td>
    <td style="text-align: right">11.340.000,00</td>
    <td style="text-align: right">11,54</td>
    <td style="text-align: right">11.340.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.04</td>
    <td>Belanja Tunjangan Beras KDH/WKDH</td>
    <td style="text-align: right">4.055.520</td>
    <td style="text-align: right">434.520,00</td>
    <td style="text-align: right">10,71</td>
    <td style="text-align: right">434.520,00</td>
  </tr>
  <tr>
    <td>Kode Rekening</td>
    <td>URAIAN</td>
    <td>ANGGARAN 2024</td>
    <td>REALISASI 2024</td>
    <td style="text-align: right">% 2024</td>
    <td>REALISASI 2023</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.05</td>
    <td>Belanja Tunjangan PPh/Tunjangan Khusus KDH/WKDH</td>
    <td style="text-align: right">739.240</td>
    <td style="text-align: right">140.604,00</td>
    <td style="text-align: right">19,02</td>
    <td style="text-align: right">140.604,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.06</td>
    <td>Belanja Pembulatan Gaji KDH/WKDH</td>
    <td style="text-align: right">2.240</td>
    <td style="text-align: right">180,00</td>
    <td style="text-align: right">8,04</td>
    <td style="text-align: right">180,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.10</td>
    <td>Belanja Insentif bagi KDH/WKDH atas Pemungutan Pajak Daerah</td>
    <td style="text-align: right">528.990.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.05.11</td>
    <td>
      Belanja Insentif bagi KDH/WKDH atas Pemungutan Retribusi Daerah bagi
      KDH/WKDH
    </td>
    <td style="text-align: right">270.150.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.06</td>
    <td>Belanja Penerimaan Lainnya Pimpinan DPRD serta KDH/WKDH</td>
    <td style="text-align: right">954.800.000</td>
    <td style="text-align: right">37.800.000,00</td>
    <td style="text-align: right">3,96</td>
    <td style="text-align: right">37.800.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.06.01</td>
    <td>Belanja Dana Operasional Pimpinan DPRD</td>
    <td style="text-align: right">604.800.000</td>
    <td style="text-align: right">37.800.000,00</td>
    <td style="text-align: right">6,25</td>
    <td style="text-align: right">37.800.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.06.02</td>
    <td>Belanja Dana Operasional KDH/WKDH</td>
    <td style="text-align: right">350.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.99</td>
    <td>Belanja Pegawai BLUD</td>
    <td style="text-align: right">16.020.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.01.99.99</td>
    <td>Belanja Pegawai BLUD</td>
    <td style="text-align: right">16.020.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02</td>
    <td>Belanja Barang dan Jasa</td>
    <td style="text-align: right">393.500.992.249</td>
    <td style="text-align: right">11.986.776.772,00</td>
    <td style="text-align: right">3,05</td>
    <td style="text-align: right">17.316.212.776,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.01</td>
    <td>Belanja Barang</td>
    <td style="text-align: right">81.960.537.255</td>
    <td style="text-align: right">1.286.041.325,00</td>
    <td style="text-align: right">1,57</td>
    <td style="text-align: right">1.681.372.350,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.01.01</td>
    <td>Belanja Barang Pakai Habis</td>
    <td style="text-align: right">81.960.537.255</td>
    <td style="text-align: right">1.286.041.325,00</td>
    <td style="text-align: right">1,57</td>
    <td style="text-align: right">1.681.372.350,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02</td>
    <td>Belanja Jasa</td>
    <td style="text-align: right">163.788.404.324</td>
    <td style="text-align: right">8.106.079.661,00</td>
    <td style="text-align: right">4,95</td>
    <td style="text-align: right">12.398.024.359,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.01</td>
    <td>Belanja Jasa Kantor</td>
    <td style="text-align: right">115.006.891.150</td>
    <td style="text-align: right">3.949.837.653,00</td>
    <td style="text-align: right">3,43</td>
    <td style="text-align: right">7.897.314.351,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.02</td>
    <td>Belanja Iuran Jaminan/Asuransi</td>
    <td style="text-align: right">18.002.190.320</td>
    <td style="text-align: right">3.568.370.208,00</td>
    <td style="text-align: right">19,82</td>
    <td style="text-align: right">3.857.246.208,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.04</td>
    <td>Belanja Sewa Peralatan dan Mesin</td>
    <td style="text-align: right">10.697.040.000</td>
    <td style="text-align: right">260.304.300,00</td>
    <td style="text-align: right">2,43</td>
    <td style="text-align: right">315.896.300,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.05</td>
    <td>Belanja Sewa Gedung dan Bangunan</td>
    <td style="text-align: right">1.236.159.854</td>
    <td style="text-align: right">2.317.500,00</td>
    <td style="text-align: right">0,19</td>
    <td style="text-align: right">2.317.500,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.08</td>
    <td>Belanja Jasa Konsultansi Konstruksi</td>
    <td style="text-align: right">7.790.609.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.09</td>
    <td>Belanja Jasa Konsultansi Non Konstruksi</td>
    <td style="text-align: right">699.811.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.12</td>
    <td>
      Belanja Kursus/Pelatihan, Sosialisasi, Bimbingan Teknis serta Pendidikan
      dan Pelatihan
    </td>
    <td style="text-align: right">8.813.638.000</td>
    <td style="text-align: right">325.250.000,00</td>
    <td style="text-align: right">3,69</td>
    <td style="text-align: right">325.250.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.13</td>
    <td>
      Belanja Jasa Insentif bagi Pegawai Non ASN atas Pemungutan Pajak Daerah
    </td>
    <td style="text-align: right">1.111.065.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.14</td>
    <td>
      Belanja Jasa Insentif bagi Pegawai Non ASN atas Pemungutan Retribusi
      Daerah
    </td>
    <td style="text-align: right">340.200.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.02.15</td>
    <td>Belanja Sewa Aset Tidak Berwujud</td>
    <td style="text-align: right">90.800.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.03</td>
    <td>Belanja Pemeliharaan</td>
    <td style="text-align: right">18.427.649.945</td>
    <td style="text-align: right">452.372.651,00</td>
    <td style="text-align: right">2,45</td>
    <td style="text-align: right">611.679.276,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.03.01</td>
    <td>Belanja Pemeliharaan Tanah</td>
    <td style="text-align: right">12.200.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.03.02</td>
    <td>Belanja Pemeliharaan Peralatan dan Mesin</td>
    <td style="text-align: right">12.488.671.083</td>
    <td style="text-align: right">452.372.651,00</td>
    <td style="text-align: right">3,62</td>
    <td style="text-align: right">611.679.276,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.03.03</td>
    <td>Belanja Pemeliharaan Gedung dan Bangunan</td>
    <td style="text-align: right">5.726.765.410</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.03.04</td>
    <td>Belanja Pemeliharaan Jalan, Jaringan, dan Irigasi</td>
    <td style="text-align: right">200.013.452</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.04</td>
    <td>Belanja Perjalanan Dinas</td>
    <td style="text-align: right">85.623.144.168</td>
    <td style="text-align: right">2.076.586.135,00</td>
    <td style="text-align: right">2,43</td>
    <td style="text-align: right">2.486.789.791,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.04.01</td>
    <td>Belanja Perjalanan Dinas Dalam Negeri</td>
    <td style="text-align: right">85.573.640.168</td>
    <td style="text-align: right">2.076.586.135,00</td>
    <td style="text-align: right">2,43</td>
    <td style="text-align: right">2.486.789.791,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.04.02</td>
    <td>Belanja Perjalanan Dinas Luar Negeri</td>
    <td style="text-align: right">49.504.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.05</td>
    <td>
      Belanja Uang dan/atau Jasa untuk Diberikan kepada Pihak Ketiga/Pihak
      Lain/Masyarakat
    </td>
    <td style="text-align: right">10.617.040.000</td>
    <td style="text-align: right">65.697.000,00</td>
    <td style="text-align: right">0,62</td>
    <td style="text-align: right">138.347.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.05.01</td>
    <td>
      Belanja Uang yang Diberikan kepada Pihak Ketiga/Pihak Lain/Masyarakat
    </td>
    <td style="text-align: right">8.862.240.000</td>
    <td style="text-align: right">65.697.000,00</td>
    <td style="text-align: right">0,74</td>
    <td style="text-align: right">138.347.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.05.02</td>
    <td>
      Belanja Jasa yang Diberikan kepada Pihak Ketiga/Pihak Lain/Masyarakat
    </td>
    <td style="text-align: right">1.754.800.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.88</td>
    <td>Belanja Barang dan Jasa BOS</td>
    <td style="text-align: right">14.004.216.557</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.88.88</td>
    <td>Belanja Barang dan Jasa BOS</td>
    <td style="text-align: right">14.004.216.557</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.99</td>
    <td>Belanja Barang dan Jasa BLUD</td>
    <td style="text-align: right">19.080.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.02.99.99</td>
    <td>Belanja Barang dan Jasa BLUD</td>
    <td style="text-align: right">19.080.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05</td>
    <td>Belanja Hibah</td>
    <td style="text-align: right">75.683.125.000</td>
    <td style="text-align: right">1.500.000.000,00</td>
    <td style="text-align: right">1,98</td>
    <td style="text-align: right">1.500.000.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.01</td>
    <td>Belanja Hibah kepada Pemerintah Pusat</td>
    <td style="text-align: right">27.520.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.01.01</td>
    <td>Belanja Hibah Uang kepada Pemerintah Pusat</td>
    <td style="text-align: right">26.220.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.01.02</td>
    <td>Belanja Hibah Barang kepada Pemerintah Pusat</td>
    <td style="text-align: right">1.300.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.05</td>
    <td>
      Belanja Hibah kepada Badan, Lembaga, Organisasi Kemasyarakatan yang
      Berbadan Hukum Indonesia
    </td>
    <td style="text-align: right">24.755.000.000</td>
    <td style="text-align: right">1.500.000.000,00</td>
    <td style="text-align: right">6,06</td>
    <td style="text-align: right">1.500.000.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.05.01</td>
    <td>
      Belanja Hibah kepada Badan dan Lembaga yang Bersifat Nirlaba, Sukarela dan
      Sosial yang Dibentuk Berdasarkan<br />Peraturan Perundang-Undangan
    </td>
    <td style="text-align: right">2.355.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.05.02</td>
    <td>
      Belanja Hibah kepada Badan dan Lembaga Nirlaba, Sukarela dan Sosial yang
      Telah Memiliki Surat Keterangan<br />Terdaftar
    </td>
    <td style="text-align: right">17.000.000.000</td>
    <td style="text-align: right">1.500.000.000,00</td>
    <td style="text-align: right">8,82</td>
    <td style="text-align: right">1.500.000.000,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.05.03</td>
    <td>
      Belanja Hibah kepada Badan dan Lembaga Nirlaba, Sukarela Bersifat Sosial
      Kemasyarakatan
    </td>
    <td style="text-align: right">5.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.05.06</td>
    <td>
      Belanja Hibah kepada Organisasi Kemasyarakatan yang Berbadan Hukum
      Indonesia
    </td>
    <td style="text-align: right">400.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.06</td>
    <td>Belanja Hibah Dana BOS</td>
    <td style="text-align: right">21.986.600.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.06.02</td>
    <td>Belanja Hibah Uang Dana BOS yang Diterima oleh Satdikdas Swasta</td>
    <td style="text-align: right">21.986.600.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.07</td>
    <td>Belanja Hibah Bantuan Keuangan kepada Partai Politik</td>
    <td style="text-align: right">1.421.525.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.05.07.01</td>
    <td>Belanja Hibah Bantuan Keuangan kepada Partai Politik</td>
    <td style="text-align: right">1.421.525.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.06</td>
    <td>Belanja Bantuan Sosial</td>
    <td style="text-align: right">6.880.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.06.04</td>
    <td>
      Belanja Bantuan Sosial kepada Lembaga Non Pemerintahan (Bidang Pendidikan,
      Keagamaan dan Bidang Lainnya)
    </td>
    <td style="text-align: right">6.880.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.1.06.04.01</td>
    <td>
      Belanja Bantuan Sosial Uang yang direncanakan kepada Lembaga Non
      Pemerintahan (Bidang Pendidikan,<br />Keagamaan dan Bidang Lainnya)
    </td>
    <td style="text-align: right">6.880.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH BELANJA OPERASI</td>
    <td style="text-align: right">1.129.536.219.707</td>
    <td style="text-align: right">76.219.089.172,00</td>
    <td style="text-align: right">6,75</td>
    <td style="text-align: right">86.936.062.326,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2</td>
    <td>BELANJA MODAL</td>
    <td style="text-align: right">129.441.182.729</td>
    <td style="text-align: right">2.696.024.591,00</td>
    <td style="text-align: right">2,08</td>
    <td style="text-align: right">2.696.024.591,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.01</td>
    <td>Belanja Modal Tanah</td>
    <td style="text-align: right">16.232.071.917</td>
    <td style="text-align: right">2.696.024.591,00</td>
    <td style="text-align: right">16,61</td>
    <td style="text-align: right">2.696.024.591,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.01.01</td>
    <td>Belanja Modal Tanah</td>
    <td style="text-align: right">16.232.071.917</td>
    <td style="text-align: right">2.696.024.591,00</td>
    <td style="text-align: right">16,61</td>
    <td style="text-align: right">2.696.024.591,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.01.01.01</td>
    <td>Belanja Modal Tanah Persil</td>
    <td style="text-align: right">16.232.071.917</td>
    <td style="text-align: right">2.696.024.591,00</td>
    <td style="text-align: right">16,61</td>
    <td style="text-align: right">2.696.024.591,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02</td>
    <td>Belanja Modal Peralatan dan Mesin</td>
    <td style="text-align: right">31.248.295.434</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.01</td>
    <td>Belanja Modal Alat Besar</td>
    <td style="text-align: right">1.600.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.01.01</td>
    <td>Belanja Modal Alat Besar Darat</td>
    <td style="text-align: right">1.600.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.02</td>
    <td>Belanja Modal Alat Angkutan</td>
    <td style="text-align: right">624.091.736</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.02.01</td>
    <td>Belanja Modal Alat Angkutan Darat Bermotor</td>
    <td style="text-align: right">624.091.736</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.04</td>
    <td>Belanja Modal Alat Pertanian</td>
    <td style="text-align: right">1.205.677.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.04.01</td>
    <td>Belanja Modal Alat Pengolahan</td>
    <td style="text-align: right">1.205.677.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.05</td>
    <td>Belanja Modal Alat Kantor dan Rumah Tangga</td>
    <td style="text-align: right">8.349.080.798</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.05.01</td>
    <td>Belanja Modal Alat Kantor</td>
    <td style="text-align: right">5.341.666.324</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.05.02</td>
    <td>Belanja Modal Alat Rumah Tangga</td>
    <td style="text-align: right">3.007.414.474</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.06</td>
    <td>Belanja Modal Alat Studio, Komunikasi, dan Pemancar</td>
    <td style="text-align: right">209.656.784</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.06.01</td>
    <td>Belanja Modal Alat Studio</td>
    <td style="text-align: right">209.656.784</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.07</td>
    <td>Belanja Modal Alat Kedokteran dan Kesehatan</td>
    <td style="text-align: right">5.119.649.910</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.07.02</td>
    <td>Belanja Modal Alat Kesehatan Umum</td>
    <td style="text-align: right">5.119.649.910</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.08</td>
    <td>Belanja Modal Alat Laboratorium</td>
    <td style="text-align: right">3.208.298.655</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td>Kode Rekening</td>
    <td>URAIAN</td>
    <td>ANGGARAN 2024</td>
    <td>REALISASI 2024</td>
    <td style="text-align: right">% 2024</td>
    <td>REALISASI 2023</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.08.01</td>
    <td>Belanja Modal Unit Alat Laboratorium</td>
    <td style="text-align: right">2.387.025</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.08.03</td>
    <td>Belanja Modal Alat Peraga Praktek Sekolah</td>
    <td style="text-align: right">3.205.911.630</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.10</td>
    <td>Belanja Modal Komputer</td>
    <td style="text-align: right">4.170.315.344</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.10.01</td>
    <td>Belanja Modal Komputer Unit</td>
    <td style="text-align: right">2.246.079.205</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.10.02</td>
    <td>Belanja Modal Peralatan Komputer</td>
    <td style="text-align: right">1.924.236.139</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.11</td>
    <td>Belanja Modal Alat Eksplorasi</td>
    <td style="text-align: right">20.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.11.02</td>
    <td>Belanja Modal Alat Eksplorasi Geofisika</td>
    <td style="text-align: right">20.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.18</td>
    <td>Belanja Modal Rambu-Rambu</td>
    <td style="text-align: right">47.006.080</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.18.01</td>
    <td>Belanja Modal Rambu-Rambu Lalu Lintas Darat</td>
    <td style="text-align: right">47.006.080</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.88</td>
    <td>Belanja Modal Peralatan dan Mesin BOS</td>
    <td style="text-align: right">5.794.519.127</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.88.88</td>
    <td>Belanja Modal Peralatan dan Mesin BOS</td>
    <td style="text-align: right">5.794.519.127</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.99</td>
    <td>Belanja Modal Peralatan dan Mesin BLUD</td>
    <td style="text-align: right">900.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.02.99.99</td>
    <td>Belanja Modal Peralatan dan Mesin BLUD</td>
    <td style="text-align: right">900.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.03</td>
    <td>Belanja Modal Gedung dan Bangunan</td>
    <td style="text-align: right">20.363.121.580</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.03.01</td>
    <td>Belanja Modal Bangunan Gedung</td>
    <td style="text-align: right">20.319.121.580</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.03.01.01</td>
    <td>Belanja Modal Bangunan Gedung Tempat Kerja</td>
    <td style="text-align: right">19.357.427.909</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.03.01.02</td>
    <td>Belanja Modal Bangunan Gedung Tempat Tinggal</td>
    <td style="text-align: right">961.693.671</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.03.02</td>
    <td>Belanja Modal Monumen</td>
    <td style="text-align: right">44.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.03.02.01</td>
    <td>Belanja Modal Candi/Tugu Peringatan/Prasasti</td>
    <td style="text-align: right">44.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.04</td>
    <td>Belanja Modal Jalan, Jaringan, dan Irigasi</td>
    <td style="text-align: right">58.792.329.482</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.04.01</td>
    <td>Belanja Modal Jalan dan Jembatan</td>
    <td style="text-align: right">38.892.329.482</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.04.01.01</td>
    <td>Belanja Modal Jalan</td>
    <td style="text-align: right">38.772.329.482</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.04.01.02</td>
    <td>Belanja Modal Jembatan</td>
    <td style="text-align: right">120.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.04.02</td>
    <td>Belanja Modal Bangunan Air</td>
    <td style="text-align: right">19.900.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.04.02.01</td>
    <td>Belanja Modal Bangunan Air Irigasi</td>
    <td style="text-align: right">14.800.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.04.02.04</td>
    <td>
      Belanja Modal Bangunan Pengaman Sungai/Pantai dan Penanggulangan Bencana
      Alam
    </td>
    <td style="text-align: right">5.100.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05</td>
    <td>Belanja Modal Aset Tetap Lainnya</td>
    <td style="text-align: right">2.805.364.316</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05.01</td>
    <td>Belanja Modal Bahan Perpustakaan</td>
    <td style="text-align: right">44.500.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05.01.01</td>
    <td>Belanja Modal Bahan Perpustakaan Tercetak</td>
    <td style="text-align: right">44.500.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05.02</td>
    <td>Belanja Modal Barang Bercorak Kesenian/Kebudayaan/Olahraga</td>
    <td style="text-align: right">181.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05.02.01</td>
    <td>Belanja Modal Barang Bercorak Kesenian</td>
    <td style="text-align: right">56.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05.02.02</td>
    <td>Belanja Modal Alat Bercorak Kebudayaan</td>
    <td style="text-align: right">125.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05.88</td>
    <td>Belanja Modal Aset Tetap Lainnya BOS</td>
    <td style="text-align: right">2.579.864.316</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.2.05.88.88</td>
    <td>Belanja Modal Aset Tetap Lainnya BOS</td>
    <td style="text-align: right">2.579.864.316</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH BELANJA MODAL</td>
    <td style="text-align: right">129.441.182.729</td>
    <td style="text-align: right">2.696.024.591,00</td>
    <td style="text-align: right">2,08</td>
    <td style="text-align: right">2.696.024.591,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.3</td>
    <td>BELANJA TIDAK TERDUGA</td>
    <td style="text-align: right">9.783.103.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.3.01</td>
    <td>Belanja Tidak Terduga</td>
    <td style="text-align: right">9.783.103.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.3.01.01</td>
    <td>Belanja Tidak Terduga</td>
    <td style="text-align: right">9.783.103.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">5.3.01.01.01</td>
    <td>Belanja Tidak Terduga</td>
    <td style="text-align: right">9.783.103.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH BELANJA TAK TERDUGA</td>
    <td style="text-align: right">9.783.103.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH BELANJA</td>
    <td style="text-align: right">1.268.760.505.436</td>
    <td style="text-align: right">78.915.113.763,00</td>
    <td style="text-align: right">6,22</td>
    <td style="text-align: right">89.632.086.917,00</td>
  </tr>
  <tr>
    <td></td>
    <td>SURPLUS/DEFISIT</td>
    <td style="text-align: right">(240.216.004.227)</td>
    <td style="text-align: right">21.742.609.138,89</td>
    <td style="text-align: right">(9,05)</td>
    <td style="text-align: right">11.054.508.984,89</td>
  </tr>
  <tr>
    <td style="text-align: right">6</td>
    <td>PEMBIAYAAN DAERAH</td>
    <td style="text-align: right">55.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.1</td>
    <td>PENERIMAAN PEMBIAYAAN</td>
    <td style="text-align: right">65.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.1.01</td>
    <td>Sisa Lebih Perhitungan Anggaran Tahun Sebelumnya</td>
    <td style="text-align: right">65.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.1.01.07</td>
    <td>
      Sisa Dana Akibat Tidak Tercapainya Capaian Target Kinerja dan Sisa Dana
      Pengeluaran Pembiayaan
    </td>
    <td style="text-align: right">65.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.1.01.07.01</td>
    <td>Sisa Dana Akibat Tidak Tercapainya Capaian Target Kinerja</td>
    <td style="text-align: right">65.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH PENERIMAAN PEMBIAYAAN</td>
    <td style="text-align: right">65.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.2</td>
    <td>PENGELUARAN PEMBIAYAAN</td>
    <td style="text-align: right">10.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.2.02</td>
    <td>Penyertaan Modal Daerah</td>
    <td style="text-align: right">10.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.2.02.02</td>
    <td>Penyertaan Modal Daerah pada Badan Usaha Milik Daerah (BUMD)</td>
    <td style="text-align: right">10.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td style="text-align: right">6.2.02.02.01</td>
    <td>Penyertaan Modal Daerah pada BUMD</td>
    <td style="text-align: right">10.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>JUMLAH PENGELUARAN PEMBIAYAAN</td>
    <td style="text-align: right">10.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>PEMBIAYAAN NETTO</td>
    <td style="text-align: right">55.000.000.000</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
    <td style="text-align: right">0,00</td>
  </tr>
  <tr>
    <td></td>
    <td>SISA LEBIH PEMBIAYAAN ANGGARAN</td>
    <td style="text-align: right">(185.216.004.227)</td>
    <td style="text-align: right">21.742.609.138,89</td>
    <td style="text-align: right">(11,74)</td>
    <td style="text-align: right">11.054.508.984,89</td>
  </tr>
  
                   </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="bg-blue">
        <div class="wrapper">
          <div class="footer">
            <div class="footer__col">
              <div class="footlogo">
                <img src="<?php echo base_url().'theme/depan/assets/img/logo.png'?>" alt="" />
              </div>
              <div class="footalamat">
              PEMATANGSIANTAR.GO.ID<br />
              Jl. Merdeka No.10, Proklamasi, Kec. Siantar Bar., <br>
               Kota Pematangsiantar, Sumatera Utara 21135
              </div>
            </div>

            <div class="footer__col">
              <ul class="footmenu">
                <li><a href="<?php echo site_url('about');?>">Tentang Kami</a></li>
                <li><a href="<?php echo site_url('kontak');?>">Kontak</a></li>
                
                <li>
                  <a
                    target="_blank"
                    href="https://www.lapor.go.id/instansi/pemerintah-kota-pematang-siantar"
                    ><img width="110" src="<?php echo base_url().'theme/depan/assets/img/lapor-foot.png'?>" alt=""
                  /></a>
                </li>
                <li>
                  <a target="_blank" href="https://jdih.pematangsiantar.go.id/"
                    ><img width="110" src="<?php echo base_url().'theme/depan/assets/img/jdih-foot.png'?>" alt=""
                  /></a>
                </li>
                
              </ul>
            </div>

            <div class="footer__col">
              <ul class="sosmedrow">
                <li>
                  <a href="https://www.facebook.com/diskominfopematangsiantar" target="_blank"
                    ><i class="fab fa-facebook"></i>Facebook</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/diskominfopematangsiantar/"
                    target="_blank"
                    ><i class="fab fa-instagram"></i> Instagram</a
                  >
                </li>
                <li>
                  <a href="https://www.tiktok.com/@kominfopematangsiantar?_t=8gL05bIR9Os&_r=1" target="_blank"
                    ><img
                      width="20"
                      src="<?php echo base_url().'theme/depan/assets/img/tiktok.png'?>"
                      alt=""
                    />&nbsp;&nbsp; tiktok</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/@DiskominfoPematangsiantar"
                    target="_blank"
                    ><i class="fab fa-youtube"></i> youtube</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- ============================= back-to-top ============================= -->
    <a id="back-to-top" href="#" class="back-to-top" role="button">
      <span class="fa fa-arrow-up" aria-hidden="true"></span>
    </a>
    <!-- ============================= end-back-to-top ============================= -->
  </body>
  <!-- js_plugins -->
  <script src="<?php echo base_url().'theme/depan/assets/js/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/depan/assets/js/datatable.js'?>"></script>
  <script src="<?php echo base_url().'theme/depan/assets/plugins/slick/js/slick.min.js'?>"></script>
  <!-- js_main-->
  <script src="<?php echo base_url().'theme/depan/assets/js/main.js'?>"></script>
  <script src="<?php echo base_url().'theme/depan/assets/js/custom.js'?>"></script>
  <script
    type="text/javascript"
    src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"
  ></script>
</html>
