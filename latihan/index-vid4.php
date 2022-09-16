<?php

	/*
	// 1. membuat array multidimensi
	$students = 
	[
		["Adi Jaya", "10188", "Rekayasa Perangkat Lunak"],
		["Rangga Wijaya", "10190", "Rekayasa Perangkat Lunak"],
		["Steven Sugiono", "10180", "Rekayasa PErangkat Lunak"]
	];

	// 2. mengakses elemen dari array multidimensi
		// menggunakan for
	echo "Menampilkan array menggunakan pengulangan for: <br>";

	for($row = 0; $row < count($students); ++$row)
	{
		echo '<ul>';
		
		for($col = 0; $col < count($students[$row]); ++$col)
		{
			echo '<li>' . $students[$row][$col] . '</li>';
		}
		
		echo '</ul>';
	}

		// menggunakan foreach
	echo "Menampilkan array menggunakan foreach: <br>";

	foreach($students as $student)
	{
		echo '<ul>';
		
		foreach($student as $stdn)
		{
			echo "<li>$stdn</li>";
		}
		
		echo '</ul>';
	}
	*/

	// 3. membuat array asosiatif multidimensi
	$students = 
	[
		[
			"nama" => "Adi Jaya",
			"nis" => "10188",
			"jurusan" => "Rekayasa Perangkat Lunak"
		],
		
		[
			"nama" => "Rangga Wijaya",
			"nis" => "10190", 
			"jurusan" => "Rekayasa Perangkat Lunak"
		],
		
		[
			"nama" => "Steven Sugiono",
			"nis" => "10180", 
			"jurusan" => "Rekayasa PErangkat Lunak"
		]
	];
																																													
	// 4. mengakses elemen dari array asosiatif multidimensi
		// menggunakan kombinasi for dan foreach
	echo "Menampilkan array menggunakan pengulangan for: <br>";

	for($row = 0; $row < count($students); ++$row)
	{
		echo '<ul>';
		
		foreach($students[$row] as $student)
		{
			echo '<li>' . $student . '</li>';
		}
		
		echo '</ul>';
	}

		// menggunakan foreach
	echo "Menampilkan array menggunakan foreach: <br>";

	foreach($students as $student)
	{
		echo '<ul>';
		
		foreach($student as $stdn)
		{
			echo "<li>$stdn</li>";
		}
		
		echo '</ul>';
	}
	
?>