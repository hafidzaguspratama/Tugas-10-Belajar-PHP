 <html>
<body>
<h1> BELAJAR PHP DASAR </h1>
<form method="post">
<label>Nama </label>
<input type="text" name="nama" style="border-radius: 0px  10px 0px 10px; " />
<input type="submit" value="Kirim" style="background-color:  #4CAF50; border: none; color: white; padding: 3px 10px; border-radius: 0px  10px 0px 10px;" />
</form>
</body>
</html>
<?php
echo 'selamat datang ' . $_POST['nama'];
?>

