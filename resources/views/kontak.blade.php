<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CampusInfo - Kontak</title>
</head>
<body>

    <h1>CampusInfo</h1>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a> |
        <a href="{{ route('program.studi') }}">Program Studi</a> |
        <a href="{{ route('kontak') }}">Kontak</a>
    </nav>

    <hr>

    <h2>Kontak Kampus</h2>

    <p><strong>Alamat:</strong> {{ $kontak['alamat'] }}</p>
    <p><strong>Email:</strong> {{ $kontak['email'] }}</p>
    <p><strong>Telepon:</strong> {{ $kontak['telepon'] }}</p>

</body>
</html>