<?php
include 'koneksi.php';

$id      = $_POST['id']; 
$nama    = $_POST['nama']; 
$nim     = $_POST['nim']; 
$email   = $_POST['email'];
$nomor   = $_POST['nomor']; 
$jurusan = $_POST['jurusan']; 

$sql = "UPDATE mahasiswa 
        SET nama='$nama', nim='$nim', email='$email', nomor='$nomor', jurusan='$jurusan' 
        WHERE id=$id";

if ($conn->query($sql) === TRUE) { 
    header("Location: index.php"); 
    exit;
} else { 
    echo "Error: " . $conn->error;
}

$conn->close(); 
?>
