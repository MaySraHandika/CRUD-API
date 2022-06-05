<?php

include 'connection.php';

$query = "UPDATE `buku` SET `judul` = 'Kartini', `jumlah halaman` = 120, 
`abstrak` = 'habis gelap terbitlah terang' WHERE isbn = 12346 ";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();

$output = ['Updated'];


header('Content-Type: application/json');
echo json_encode($output);