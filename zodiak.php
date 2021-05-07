<!DOCTYPE html>
<html>
<head>
	<title>Zodiak</title>
</head>
<body>
	
	<h1> Tugas Zodiak </h1>
	<br>
<h3>
	Aquarius     	( 20 jan - 18 feb ) <br>     
   	Pisces        	( 19 feb - 20 mar ) <br>      
   	Aries         	( 21 mar - 20 apr ) <br>      
   	Taurus        	( 21 apr - 20 mei ) <br>    
   	Gemini        	( 21 mei - 20 jun ) <br>
   	Cancer        	( 21 jun - 20 jul ) <br>
   	Leo           	( 21 jul - 21 agu ) <br>
   	Libra         	( 23 sep - 22 okt ) <br>  
   	Virgo         	( 22 agu - 22 sep ) <br> 
   	Scorpio       	( 23 okt - 22 nov ) <br>
   	Sagitarius	 	( 23 nov - 20 des ) <br>
   	Capicorn      	( 21 des - 19 jan ) <br>
</h3>


	

	<?php  
	
/* 
   Aquarius     ( 20 jan - 18 feb )      Januari   (1)
   Pisces       ( 19 feb - 20 mar )      Februari  (2)
   Aries        ( 21 mar - 20 apr )      Maret     (3)
   Taurus       ( 21 apr - 20 mei )      April     (4)
   Gemini       ( 21 mei - 20 jun )      Mei       (5)
   Cancer       ( 21 jun - 20 jul )      Juni      (6)
   Leo          ( 21 jul - 21 agu )      Juli      (7)
   Virgo        ( 22 agu - 22 sep )      Agustus   (8)
   Libra        ( 23 sep - 22 okt )      September (9)
   Scorpio      ( 23 okt - 22 nov )      Oktober   (10)
   Sagitarius	( 23 nov - 20 des )      November  (11)
   Capicorn     ( 21 des - 19 jan )      Desember  (12)

*/












   	$tanggal     = 20;
	$bulan       = 1;
	$tanggal     = 18;
	$bulan       = 2;


	 if ($bulan === 1 && $tanggal >= 20 || $bulan === 2 && $tanggal <=18 ) {
		echo "1 Benar itu Zodiak Aquarius";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 19;
	$bulan       = 2;
	$tanggal     = 20;
	$bulan       = 3;

	 if ($bulan === 2 && $tanggal >= 19 || $bulan === 3 && $tanggal <=20 ) {
		echo "2 Benar itu Zodiak Pisces";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 21;
	$bulan       = 3;
	$tanggal     = 20;
	$bulan       = 4;

	 if ($bulan === 3 && $tanggal >= 21 || $bulan === 4 && $tanggal <=20 ) {
		echo "3 Benar itu Zodiak Aries";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 21;
	$bulan       = 4;
	$tanggal     = 20;
	$bulan       = 5;

	 if ($bulan === 4 && $tanggal >= 21 || $bulan === 5 && $tanggal <=20 ) {
		echo "4 Benar itu Zodiak Taurus";
	}else{
		echo "Salah";
	}

echo  "<br>";

	$tanggal     = 21;
	$bulan       = 5;
	$tanggal     = 20;
	$bulan       = 6;

	 if ($bulan === 5 && $tanggal >= 21 || $bulan === 6 && $tanggal <=20 ) {
		echo "5 Benar itu Zodiak Gemini";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 21;
	$bulan       = 6;
	$tanggal     = 20;
	$bulan       = 7;

	 if ($bulan === 6 && $tanggal >= 21 || $bulan === 7 && $tanggal <=20 ) {
		echo "6 Benar itu Zodiak Cancer";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 21;
	$bulan       = 7;
	$tanggal     = 21;
	$bulan       = 8;

	 if ($bulan === 7 && $tanggal >= 21 || $bulan === 8 && $tanggal <=21 ) {
		echo "7 Benar itu Zodiak Leo";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 22;
	$bulan       = 8;
	$tanggal     = 22;
	$bulan       = 9;

	 if ($bulan === 8 && $tanggal >= 22 || $bulan === 9 && $tanggal <=22 ) {
		echo "8 Benar itu Zodiak Virgo";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 23;
	$bulan       = 9;
	$tanggal     = 12;
	$bulan       = 10;

	 if ($bulan === 9 && $tanggal >= 23 || $bulan === 10 && $tanggal <=12 ) {
		echo "9 Benar itu Zodiak Libra";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 23;
	$bulan       = 10;
	$tanggal     = 22;
	$bulan       = 11;

	 if ($bulan === 10 && $tanggal >= 23 || $bulan === 11 && $tanggal <=22 ) {
		echo "10 Benar itu Zodiak Scorpio";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 23;
	$bulan       = 11;
	$tanggal     = 20;
	$bulan       = 12;

	 if ($bulan === 11 && $tanggal >= 23 || $bulan === 12 && $tanggal <=20 ) {
		echo "11 Benar itu Zodiak Sagitarius";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal     = 21;
	$bulan       = 12;
	$tanggal     = 19;
	$bulan       = 1 ;

	 if ($bulan === 12 && $tanggal >= 21 || $bulan === 1 && $tanggal <=19 ) {
		echo "12 Benar itu Zodiak Sagitarius";
	}else{
		echo "Salah";
	}

?>

</body>
</html>