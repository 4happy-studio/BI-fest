<?php

// ambil data file
$namaFile = $_FILES['img']['name'];
$namaSementara = $_FILES['img']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "assets/img/produk/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("bikepriexpo.com:3306", "bikepri_user", "exploit9827", "bikepri_produk");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$id_tenant = mysqli_real_escape_string($link, $_REQUEST['id_tenant']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$desc = mysqli_real_escape_string($link, $_REQUEST['desc']);

// Attempt insert query execution
$sql = "INSERT INTO produk (`id`, `id_tenant`, `name`, `desc`, `image`) VALUES ('$id','$id_tenant', '$name', '$desc', '$dirUpload.$namaFile')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("Location: input.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>