<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<style>

    button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #0623ff;
    color: rgb(255, 255, 255);
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.rectangle {
    width: 500px; /* Lebar rectangle */
    height: 100px; /* Tinggi rectangle */
    background-color: #f2f2f2; /* Warna background rectangle */
    margin: 0 auto; /* Posisi rectangle di tengah tengah */
    padding: 20px; /* Jarak antara konten dan border rectangle */
    border: 1px solid #ccc; /* Garis border rectangle */
    border-radius: 30px; /* Radius corner rectangle */
    box-shadow: 0 0 5px black;
}
h1 {
    margin-top: 100px;
    margin-bottom: 10px;
}

</style>

</head>
<body>
<form action="handler_register.php" method="post">
    <h1 align= "center";> Pendaftaran Pengguna </h1>
    <br>
    <br>
    <div class= "rectangle">
    <div class= "nama">
        <label for="">Nama</label>
        <input type="text" name="nama">
    </div>
    <br>
    <div>
        <label for="">Email</label>
        <input type="email" name="email">
    </div>
    <br>
    <div>
        <label for="">Password</label>
        <input type="password" name="password">
    </div>
    <br>
    <br>
    <br>
    <button type="submit">Register</button>
    </div>
</form>
</body>
</html>