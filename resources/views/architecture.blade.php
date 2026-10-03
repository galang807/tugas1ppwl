<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Architecture Dashboard</title>
</head>
<body>

    <h1>CampusInfo - Architecture Dashboard</h1>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a> |
        <a href="{{ route('program.studi') }}">Program Studi</a> |
        <a href="{{ route('kontak') }}">Kontak</a> |
        <a href="{{ route('architecture') }}">Architecture</a> |
        <a href="{{ route('lifecycle') }}">Lifecycle</a> |
        <a href="{{ route('environment') }}">Environment</a>
    </nav>

    <hr>

    <h2>Struktur Laravel</h2>

    @foreach ($struktur as $item)
        <h3>{{ $item['nama'] }}</h3>
        <p>{{ $item['fungsi'] }}</p>
    @endforeach

</body>
</html>