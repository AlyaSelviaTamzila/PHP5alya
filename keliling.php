<h3>Menghitung Hitung Keliling Segitiga</h3>
 
<form action="keliling.php" method="post">
	Sisi Miring : <input type="text" name="sisiMiring"> <?php echo " cm"; ?><br>
    <br>
	Tinggi : <input type="text" name="Tinggi"> <?php echo " cm"; ?><br>
    <br>
    Alas : <input type="text" name="Alas"> <?php echo " cm"; ?><br>
    <br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$simir = $_POST['sisiMiring'];
		$tinggi = $_POST['Tinggi'];
        $alas = $_POST['Alas'];
		
		$keliling = $simir + $tinggi + $alas; // Menghitung keliling
		
		echo "<b>Segitiga  memiliki Sisi Miring: $simir cm, Tinggi: $tinggi cm, Alas: $alas cm </b><br>";
		echo "<b>Maka Keliling = $keliling cm <b><br>";
	}
?>