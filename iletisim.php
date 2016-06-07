<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
    <title>Hataylý Tarifler</title>
    <meta charset="charset=iso-8859-9" />
    <meta charset="windows-1254" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <style type="text/css">
        ::-moz-focus-inner {padding: 0; border: 0;}
        :-moz-placeholder {color: #879fa6 !important;}
        ::-webkit-input-placeholder {color: #879fa6;}
        :-ms-input-placeholder {color: #879fa6 !important;}
        .iletisimFormu {border:1px solid #cfd5da; background:#eef5f7; border-radius:3px; padding:8px; margin: 10px auto; border-bottom-color: #ccd1d6; -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);}
        .icForm {background:#fff; border-radius:2px; border:1px solid #fff; padding:10px 20px;}
        .arrow_box {position: relative; background: #eef5f7; border: 4px solid #c2e1f5; border-radius:3px; margin:10px auto;  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);}
        .arrow_box:after, .arrow_box:before {
	        top: 100%; left: 50%; border: solid transparent; content: " "; height: 0; width: 0;
	        position: absolute; pointer-events: none; border-radius:3px;
            -webkit-transform: rotate(180deg); transform: rotate(180deg); -ms-transform: rotate(180deg);}
        .arrow_box:after {border-color: rgba(136, 183, 213, 0); border-bottom-color: #fff; border-width: 20px; margin-left: -20px;}
        .arrow_box:before {border-color: rgba(255, 225, 255, 0); border-bottom-color: #c2e1f5; border-width: 26px; margin-left: -26px;}
        .icForm input, .icForm textarea {padding:4px 4px 4px 7px; border: solid 1px #c2e1f5; transition: box-shadow 0.3s, border 0.3s; border-radius:2px;}
            .icForm input:focus, .icForm textarea:focus {border: solid 1px #88b7d5; box-shadow: 0 0 5px 1px #88b7d5;}
        .icForm textarea {width:90%; height:80px;}
        .icForm input[type="submit"] {background-color:#88b7d5; color:#fff;}
        .ilBilgi {font-size:16px; margin-left:4%; margin-top:10px;}
        .ilBilgi img {width:24px; height:24px; display:inline-block; margin-right:4px;}
    </style>
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<?php include("header.php"); ?> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        
        <!-- Middle Column -->
        <div class=""> 
          <!-- ################################################################################################ -->
          <h2>Ýletiþim</h2>
          <ul class="nospace listing">
            <li class="clear"> 
              <div class="one_half first">
                  <div class="ilBilgi">
                      Hataylý Tarifler<br />
                      Hatay - Türkiye <br />
                      <p><img src="images/icon/phone.png" class="phone" alt="phone" />0326 000 00 00</p>
                      <p><img src="images/icon/email.png" class="email" alt="email" /><a href="mailto:iletisim@hataylitarifler.com">iletisim@hataylýtarifler.com</a></p>
                      <p><img src="images/icon/facebook.png" class="facebook" alt="facebook" /><a href="http://www.facebook.com/hataylitarifler">facebook.com/hataylitarifler</a></p>
                      <p><img src="images/icon/twitter.png" class="twitter" alt="twitter" /><a href="http://www.twitter.com/hataylitarifler">twitter.com/hataylitarifler</a></p>
                      <p><img src="images/icon/instagram.png" class="instagram" alt="instagram" /><a href="http://www.youtube.com/hataylitarifler">instagram.com/hataylitarifler</a></p>
                      <p><img src="images/icon/youtube.png" class="youtube" alt="youtube" /><a href="http://www.youtube.com/hataylitarifler">youtube.com/hataylitarifler</a></p>
                  </div>
              </div>
              <div class="one_half">
                  <form name="iletisimFormu" id="iletisimFormu" method="post" class="arrow_box">
                      <fieldset name="icForm" class="icForm">
                          <p class="baslik">Ýletiþim Formu</p>
                          <p class="ad">
                            <span>Ad</span>
                            <input type="text" name="ad" id="ad" placeholder="Adýnýz..." tabindex="1" autofocus />
                          </p>
                          <p class="email">
                          <span>Email</span>
                          <input type="text" name="email" id="email" placeholder="Email Adresiniz..." tabindex="2" />
                          </p>
                          <p class="mesaj">
                          <span>Mesaj</span>
                          <textarea name="mesaj" id="mesaj" placeholder="Mesajýnýz..." tabindex="3"></textarea>
                          </p>
                          <p class="gonder">
                          <input type="submit" name="gonder" id="gonder" value="Gönder" tabindex="4" />
                          </p>
                      </fieldset>
                  </form>
                  <br />
              </div>
            </li> 
          </ul>
          <p class="right"></p>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <?php include("twit.php"); ?> 
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <?php include("hizli_bul.php"); ?> 
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<?php include("footer.php"); ?> 
</body>
</html>