<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CampusInfo - Beranda</title>
</head>
<body>

    <h1>CampusInfo</h1>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a> |
        <a href="{{ route('program.studi') }}">Program Studi</a> |
        <a href="{{ route('kontak') }}">Kontak</a>
    </nav>

    <hr>

    <h2>Selamat Datang di CampusInfo</h2>

    <p>
        CampusInfo merupakan aplikasi mini yang menyediakan
        informasi mengenai kampus dan program studi.
    </p>

</body>
</html>