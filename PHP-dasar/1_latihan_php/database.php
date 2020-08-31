<?php
if (isset($_POST['submit'])){ 
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$asal_kota = $_POST['asal_kota'];
$email = $_POST['email'];
echo "
<html>
<head>
</head>
<body>
    <h1>biodatamu</h1>
    <p>nama : $nama</p>
    <p>jenis kelamin : $gender </p>
    <p>ttl : $address </p>
    <p>asal kota : $asal_kota </p>
    <p>email : $email </p>
</body>
</html>
";}
?>