<!DOCTYPE html>
<html >
<title>[Unlimited] Panel Liker</title>
<head>   
	
	<link rel="Shortcut Icon" type="image/x-icon" href="http://goo.gl/dZ6nLp">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

</head> 
<body>

<body>
	<div class="container">
		<div class="top">
<center>                       
<div class="login-box animated fadeInUp">
	<h3>Tips cara berhasilnya !</h3>		
	<div class="box-header">

        </div>
	<p>- Akun Tidak Di privasikan -<p>
<p>- Jika tetap ga work, coba upload foto terbaru - </p>
</div>
</center>               
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<img src="ilham.jpg" width="80px">
				<h1><a href="https://www.instagram.com/ilham.nur.hakim/?hl=id" style="color: white">@ilham.nur.hakim</a></h1>
				<a href="https://www.instagram.com/ilham.nur.hakim/?hl=id" style="color: white">Follow me</a>
					<h2>Panel Like Instagram</h2>
			</div>
	<?php
	if(!empty($_GET["link"])){
	$id = file_get_contents('https://api.instagram.com/oembed/?url='.urlencode($_GET["link"]));
	$id = json_decode($id,true);
	$id = $id["media_id"];

     $file = "history.php";
    $handle = fopen($file, 'a');	
	fwrite($handle, $_GET['link']);
    fwrite($handle, "
");
    fclose($handle);
	if($id){
		$gas = file_get_contents('http://194.58.115.48/add?id='.$id);
		header("Refresh:5"); 	
							echo ' <form method="GET"> Sukses/Gak-nya Cek Sendiri ! <br>
 <br> 
      						<label for="username">Url Photo</label>
      						<br>
							<input name="link" class="input_field">
							<br>

							<input type="submit" value="Tambah Like">

</form>'; 
	}else{
		echo '<br><a <span style="color: white">FAILED ! </span> </a> Tidak ada Foto pada link yang dimasukkan, cek kembali Url Foto. Atau akun dalam mode Private, pastikan akun dalam mode public.';
	}
}else{
	echo '<form method="GET"> 
      						<label for="username">Url Photo</label>
      						<br>
							<input name="link" class="input_field">
							<br>

							<input type="submit" value="Tambah like">
</form>';
}
?>
</div>
</div>
</body>
</html>