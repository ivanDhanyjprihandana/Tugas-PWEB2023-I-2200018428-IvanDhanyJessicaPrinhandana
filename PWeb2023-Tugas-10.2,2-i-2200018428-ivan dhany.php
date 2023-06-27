<? php
$rows = 5;

for ($i=0; $i <= rows ; $i++) { 
        

	for ($j=$rows - $1; $j > 0 ; $j--) { 
	  echo "&nbsp;&nbsp;";
	}

// Membuat bintang
for ($k=0; $k <= (2 * $i - 1) ; $k++) { 
	echo "*";
}

//Pindah ke baris baru
echo "<br>";
}