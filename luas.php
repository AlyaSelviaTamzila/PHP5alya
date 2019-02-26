<h3>Menghitung Luas Segitiga</h3>
 
<form action="luas.php" method="post">
	Alas   = <input type="text" name="Alas"><?php echo " cm" ?> <br>
    <br>
    Tinggi = <input type="text" name="Tinggi"><?php echo " cm" ?> <br>
    <br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$tinggi = $_POST['Tinggi'];
        $alas = $_POST['Alas'];
		
		$luas = ($alas * $tinggi) / 2; 
		
		echo "<b>Segitiga  memiliki  Alas: $alas cm, Tinggi: $tinggi cm <b><br>";
		echo "<b>Maka Luas Segitigas: $luas cm<b><br>";
	}
?>