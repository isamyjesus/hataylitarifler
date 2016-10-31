<!DOCTYPE html>
<html>
	<head>
    <title>Hataylý Tarifler</title>
    <meta charset="charset=iso-8859-9" />
    <meta charset="windows-1254" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script>
    	$(function () {
      
			});
    </script>
    <style type="text/css">
			body{}
			.ekle_form{width:30%; border:1px solid #cfd5da; background:#eef5f7; border-radius:3px; padding:8px; margin: 10px auto; border-bottom-color: #ccd1d6; -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); color:#979797; font-family:Georgia, "Times New Roman", Times, serif;}
			.ekle_form input, .ekle_form textarea, .ekle_form select {padding:4px 4px 4px 7px; border: solid 1px #c2e1f5; transition: box-shadow 0.3s, border 0.3s; border-radius:2px; margin-bottom:8px;}
      	.ekle_form input:focus, .ekle_form textarea:focus, .ekle_form select:focus {border: solid 1px #88b7d5; box-shadow: 0 0 5px 1px #88b7d5;}
      .ekle_form textarea {width:70%; height:80px;}
      .ekle_form input[type="submit"] {background-color:#88b7d5; color:#fff;}
			.inputlar{}
			.sifirla{clear:both; height:1px; width:1px;}
		</style>
	</head>
	<body>
		<?php 
			if(isset($_POST["tarif_ekle"])){
				$dbhost = '127.0.0.1';
				$dbuser = 'htytrfuser';
				$dbpass = '3106hatayankara';
				$dbschema = 'tarifdbvthty';
				try {
					$conn = new PDO("mysql:host=$dbhost;dbname=$dbschema", $dbuser, $dbpass);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = $conn->prepare("INSERT INTO tarifler (eklenme_tarihi, ekleyen_id, ad, kategori, alt_kategori, tarif, kac_kisilik, sure, pisirme_sekli, extra, malzemeler) VALUES ('16.02.2016', 0, :ad, :kategori, :alt_kategori, :tarif, :kac_kisilik, :sure, :pisirme_sekli, :extra, :malzemeler)");
					$stmt->bindParam(':ad', $_POST["ad"]);
					$stmt->bindParam(':kategori', $_POST["kategori"]);
					$stmt->bindParam(':alt_kategori', $_POST["alt_kategori"]);
					$stmt->bindParam(':tarif', $_POST["tarif"]);
					$stmt->bindParam(':kac_kisilik', $_POST["kac_kisilik"]);
					$stmt->bindParam(':sure', $_POST["sure"]);
					$stmt->bindParam(':pisirme_sekli', $_POST["pisirme"]);
					$stmt->bindParam(':extra', $_POST["extra"]);
					$stmt->bindParam(':malzemeler', $_POST["malzemeler"]);
					// insert a row
					$stmt->execute();
					echo "New records created successfully";
				}
				catch(PDOException $e)
				{
					echo "Connection failed: " . $e->getMessage();
				}
				$conn = null;
			}
		?>
		<div class="ekle_form">
    	
      <form action="tarif-ekle.php" method="post" id="ekle_form" autocomplete="off">
      	<p>Yeni Tarif Ekle</p>
        <div class="inputlar">
	        <span>Ekleyen</span><br />
          <select name="ekleyen" id="ekleyen" tabindex="1">
            <option value="0" selected>Site Yöneticisi</option>
            <option value="1">Yazar 1</option>
            <option value="2">Yazar 2</option>
          </select><br />
          <span>Tarif Adý</span><br />
          <input name="ad" type="text" autofocus id="ad" tabindex="2"><br />
          <span>Kategori</span><br />
          <select name="kategori" id="kategori" tabindex="3">
            <option value="yemek">Yemek</option>
            <option value="corba">Çorba</option>
            <option value="hamur">Hamur Ýþleri</option>
            <option value="hamur">Salata</option>
            <option value="hamur">Meze</option>
            <option value="hamur">Kurabiye</option>
            <option value="hamur">Tatlý</option>
            <option value="hamur">Ýçecek</option>
            <option value="hamur">Kahvaltýlýk</option>
          </select><br />
          <span>Alt Kategori</span><br />
          <select name="alt_kategori" id="alt_kategori" tabindex="4">
            <option value="yemek">Yemek</option>
            <option value="corba">Çorba</option>
            <option value="hamur">Hamur Ýþleri</option>
            <option value="hamur">Salata</option>
            <option value="hamur">Meze</option>
            <option value="hamur">Kurabiye</option>
            <option value="hamur">Tatlý</option>
            <option value="hamur">Ýçecek</option>
            <option value="hamur">Kahvaltýlýk</option>
          </select><br />
          <span>Malzemeler</span><br />
          <textarea name="malzemeler" id="malzemeler" placeholder="Noktalývirgül(;) ile ayýrýnýz" tabindex="5"></textarea><br />
          <span>Yapýlýþý</span><br />
          <textarea name="tarif" id="tarif" tabindex="6"></textarea><br />
          <span>Kaç Kiþilik</span><br />
          <input name="kac_kisilik" type="number" id="kac_kisilik" tabindex="7"><br />
          <span>Piþirme Süresi</span><br />
          <input name="sure" type="text" id="sure" tabindex="8"><br />
          <span>Piþirme Þekli</span><br />
          <select name="pisirme" id="pisirme" tabindex="9">
          	<option value="firinda" selected>Fýrýnda</option>
            <option value="kizartma">Yaðda Kýzartma</option>
            <option value="haslama">Haþlama</option>
            <option value="diger">Diðer</option>
          </select><br />
          <span>Extra</span><br />
          <select name="extra" id="extra" tabindex="10">
          <option value="yok" selected>Yok</option>
            <option value="serbet">Þerbet</option>
            <option value="ic">Ýç</option>
            <option value="susleme">Süsleme</option>
          </select><br />
          <input name="tarif_ekle" type="submit" id="tarif_ekle" tabindex="11" value="Ekle">
        </div>
        <div class="sifirla"></div>
      </form>
    	
	</div>
    <?php
			
		?>
	</body>
</html>