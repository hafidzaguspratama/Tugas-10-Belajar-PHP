<html>
<body>
<h1> BELAJAR PHP DASAR</h1>

<div style="border: 2px solid #4CAF50; padding: 20px 20px; width: 300px; border-radius: 30px 0px 30px 0px ">
<?php
$gaji = 20000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji Awal = Rp. $gaji <br>";
echo "Gaji sesudah dipotong pajak= Rp. $thp";
?>
</div>

</body>
</html>
