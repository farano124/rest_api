<?php

// $mahasiswa = [
//     [
//         "nama" => "Fathir Ramadhano Noerman",
//         "nim" => "2217020153",
//         "email" => "fthrano168500@gmail.com"
//     ],
//     [
//         "nama" => "Silvani Auralia Noerman",
//         "nim" => "2617020013",
//         "email" => "silvaniauralia@gmail.com"
//     ],
//     [
//         "nama" => "Fadhila Auralia Noerman",
//         "nim" => "2917020022",
//         "email" => "fadhilaauralia@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
