//Arrays
<br>

//arrays ade tiga type iaitu indexed arrays, associative arrays dan multidimensional arrays. Indexed arrays ialah array
yang menggunakan index nombor untuk mengakses data dalam array tersebut. Associative arrays ialah array yang menggunakan
key untuk mengakses data dalam array tersebut. Multidimensional arrays ialah array yang mengandungi satu atau lebih
array di dalamnya.
<br>

// Array digunakan untuk menyimpan banyak nilai
// dalam satu variable.

// Index array bermula daripada 0.

// Contoh:
// $names = ["Aiman", "Alia", "Abuya"];

// $names[0] digunakan untuk mendapatkan
// nilai pertama dalam array.

// Array memudahkan kita menyimpan dan mengurus
// banyak data yang berkaitan.
<br>

<?php

// indexed arrays

$peopleOne = ['shaun', 'crystal', 'ryu'];

//echo $peopleOne[1];

$peopleTwo = array('izzat', 'icad', 'zack');

//echo $peopleTwo[1];

$ages = [21, 19, 23];
//print_r($ages);

$ages[1] = 25;
//print_r($ages);

$ages[] = 31;
//print_r($ages);

array_push($ages, 70);
//print_r($ages);

//echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);

// associative arrays (key & value pairs)

$ninjasOne = ['shaun' => 'black', 'crystal' => 'orange', 'muxxy' => 'brown'];
//echo $ninjasOne['crystal'];
print_r($ninjasOne);

// comparisons booleans (true or false)

//echo true; "1"
//echo false; ""

// numbers 

//echo 5 < 10;
//echo 5 > 10;
//echo 5 == 10;
//echo 10 == 10;
echo 5 != 10;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>