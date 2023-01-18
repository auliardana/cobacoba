<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form sewa</title>
</head>
<body>
    <form action="prosesSewa.php" method="post">

        <label>judul buku</label>
        <div><input type="text" name="judul"></div>

        <label >penyewa</label>
        <div><input type="text" name="penyewa"></div>

        <label>durasi</label>
        <div><input type="text" name="durasi"></div>

        <div>
            <input type="submit" name="sewa" value="sewa buku">
        </div>
    </form>
</body>
</html>