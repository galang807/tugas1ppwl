<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CampusInfo - Program Studi</title>
</head>
<body>

    <h1>CampusInfo</h1>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a> |
        <a href="{{ route('program.studi') }}">Program Studi</a> |
        <a href="{{ route('kontak') }}">Kontak</a>
    </nav>

    <hr>

    <h2>Program Studi</h2>

    <ul>
        @foreach ($programStudi as $prodi)
            <li>
                <strong>{{ $prodi['nama'] }}</strong>
                - {{ $prodi['jenjang'] }}
            </li>
        @endforeach
    </ul>

</body>
</html>