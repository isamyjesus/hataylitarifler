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
      <form action="giris.php" method="post" id="ekle_form" autocomplete="off">
      	<p>Yönetici Giriþi</p>
        <div class="inputlar">
          <span>Kullanýcý Adý</span><br />
          <input name="ad" type="text" autofocus id="ad" tabindex="1"><br />
          <span>Þifre</span><br />
          <input name="ad" type="password" autofocus id="ad" tabindex="1"><br />
          <input name="tarif_ekle" type="submit" id="tarif_ekle" tabindex="11" value="Ekle">
        </div>
        <div class="sifirla"></div>
      </form>
	</div>
	</body>
</html>