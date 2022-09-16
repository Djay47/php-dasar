<?php

	// 1. Menampilkan teks ke layar menggunakan echo
	echo "Hello World!";	// menampilkan huruf atau simbol menggunakan tanda kutip dua atau kutip satu
	echo "<br>";
	echo 7777;				// menampilkan angka tanpa menggunakan tanda kutip

	echo "<br>---------------------------------------------------------------------------<br>";

	// 2. membuat variable
	$myVar1 = "Hello World";	// membuat variable bertipe string	
	echo $myVar1;				// menampilkan isi variable $myVar1

	echo "<br>";

	$myVar2 = "<h1>PHP Programming Language</h1>";	// membuat variable bertipe string dengan teks heading <h1>
	echo $myVar2;									// menampilkan isi variable $myVar2

	echo "<br>---------------------------------------------------------------------------<br>";

?>

<!-- 3. menampilkan variable menggunakan gaya templating  -->

<?php echo $myVar1 ?>
<br>
<?= $myVar1 ?>	<!-- // sama dengan <?php echo $myVar ?> -->

<h1><?= $myVar1 ?></h1>

<?= "<br>---------------------------------------------------------------------------<br>"; ?>

<?php 

	// 4. concatenate atau konkatenasi menggunakan tanda titik
	echo "Hello World! " . "My name is Jay.";		// gaya penulisan pertama
	
	echo "<br>";

	echo "Hello World!" . " My name is Jay.";		// gaya penulisan kedua
	
	echo "<br>";

	echo "Hello World!" . " " . "My name is Jay.";	// gaya penulisan ketiga

	echo "<h1>" . $myVar1 . "</h1>";				// menggabung string dan variable

	echo "<br>---------------------------------------------------------------------------<br>";

	// 5. Perbedaan tanda petik 1 (' ') dan tanda petik 2 (" ")
	echo "Teks ini mengandung variable dan ditampilkan menggunakan kutip double: $myVar1";
	echo "<br>";
	echo 'Teks ini mengandung variable dan ditampilkan menggunakan kutip satu: $myVar1';

?>








