<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Peminjaman Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .welcome {
            width: 50%;
            margin: auto;
        }
        .menu {
            margin-top: 20px;
            width: 50%;
            margin: auto;
        }
        .menu a {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="welcome">
    <h1>Selamat Datang di Sistem Peminjaman Buku</h1><br>
    <p>Pilih tabel yang ingin Anda kelola:</p>
    </div>
    <div class="menu">
        <a href="Member.php">Kelola Member</a>
        <a href="Buku.php">Kelola Buku</a>
        <a href="Peminjaman.php">Kelola Peminjaman</a>
    </div>
</body>
</html>