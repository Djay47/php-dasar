<?php

	// 1. Membuat array numeric
	$days = ["Senin", "Selasa", "Rabu"];

	// 2. menampilkan array menggunakan var_dump
	var_dump($days);

	echo "<br>-----------------------------------------<br>";

	// 3. menampilkan elemen array
	echo $days[0] . "<br>";
	echo $days[2] . "<br>";

	echo "-----------------------------------------<br>";
	// 4. menampilkan elemen array numeric menggunakan foreach
	foreach($days as $day)
	{
		echo "$day <br>";
	}

	echo "-----------------------------------------<br>";

	foreach($days as $key => $days)
	{
		echo "$key => $days <br>" ;
	}

	echo "-----------------------------------------<br>";

	// 5. membuat array asosiatif
	$students = ["Nama" => "Adi Jaya", "NIS" => "10188", "Jurusan" => "Rekayasa Perangkat Lunak"];

	var_dump($students);

	echo "<br>-----------------------------------------<br>";

	// 6. menampilkan elemen dari array asosiatif menggunakan foreach
	foreach($students as $student)
	{
		echo "$student <br>";
	}

	echo "-----------------------------------------<br>";

	foreach($students as $key => $student)
	{
		echo "$key : $student <br>";
	}

	echo "-----------------------------------------<br>";

	// 7. menampilkan key dari array asosiatif $students

	echo "Sebelum: <br>";
	var_dump($students);

	echo "<br>";

	echo "<br><br>";

	echo "Sesudah: <br>";

	$studentsKey = array_keys($students);

	var_dump($studentsKey);

	// echo "<br>";

	// echo "$studentsKey[0]";

	

?>