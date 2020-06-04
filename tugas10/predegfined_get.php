
<html>
	<body>
		
		<h1> BELAJAR PHP DASAR </h1>
		<h2>Fungsi Predefined Get</h2>
		<form method="get">
<label>Nama </label>
<input type="text" name="nama" style="border-radius: 0px  10px 0px 10px; " />
<input type="submit" value="Kirim" style="background-color:  #4CAF50; border: none; color: white; padding: 3px 10px; border-radius: 0px  10px 0px 10px;" />
</form>
	</body>
</html>
<?php

 echo 'Hallo, Selamat Datang ' . $_GET['nama'] ;

 ?>