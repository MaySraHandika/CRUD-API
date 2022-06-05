<?php

    include 'connection.php';

    $query = "INSERT INTO `buku`(`judul`, `pengarang`, 
     `jumlah halaman`, `tanggal`, `abstrak`) VALUES('rumah biru','may sra handika', 
     '33', '2021-05-05', 'buku terbaik') ";
    $statement = $connection->query($query);
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $result = $statement->fetchAll();

    $output = ['Insert '];


header('Content-Type: application/json');
echo json_encode($output);

?>