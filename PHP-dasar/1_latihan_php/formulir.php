<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini form</title>
</head>
<body style="background-color: black;">
    <h1 style="text-align: center; color: white;">BIODATA</h1>
    <form style="color: white;" action="database.php" method="post">
        Nama: 
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        Gender: 
        <input type="radio" name="gender" value="laki-laki"> laki-laki
        <input type="radio" name="gender" value="perempuan"> perempuan
        <br>
        <br>
        Address: 
        <input type="text" name="address" id="address">
        <br>
        <br>
        Country: 
        <select name="asal_kota" id="asal_kota">
            <option value="indonesia">indonesia</option>
            <option value="Jawa">Jawa</option>
        </select>
        <br>
        <br>
        Email:
        <input type="text" name="email" id="email">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>