<!DOCTYPE html>
<html>
<head>
	<title>TUGAS B</title>
	<style>
		.judul{ 
			font-size: 32px;
			text-align: center;
			}
		body {
			 margin: 0;
			 font-family: sans-serif;
			 color: solid black;  
			 background-color: grey;
			 } 
		article {
			margin-left: 560px;
		} 
	</style>
</head>
<body>
    <?php
    $nama = "Aditya Galang Pradana";
	$nim  = 192520036;
    $alamat = "Kliwonan I, Kutoarjo, Purworejo";
    $email = "adityagalangpradana@gmail.com";
    $minat = "Desain Grafis";
    ?>

		<h1 class="judul">BIODATA DIRI</h1>
		<img src="IMG_0020.jpg" style = "margin-left: 590px; width: 180px;">
		<article>
		<p>Nama	  : <?php echo $nama ?></p>
		<p>Nim    : <?php echo $nim ?></p>
		<p>Alamat : <?php echo $alamat ?></p>
		<p>Email  : <?php echo $email ?></p>
        <p>Minat  : <?php echo $minat ?></p>
		</article>
</body>
</html>