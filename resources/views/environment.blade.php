<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Environment Information</title>
</head>
<body>

    <h1>Environment Information</h1>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a> |
        <a href="{{ route('program.studi') }}">Program Studi</a> |
        <a href="{{ route('kontak') }}">Kontak</a> |
        <a href="{{ route('architecture') }}">Architecture</a> |
        <a href="{{ route('lifecycle') }}">Lifecycle</a> |
        <a href="{{ route('environment') }}">Environment</a>
    </nav>

    <hr>

    <p>
        <strong>Nama Aplikasi:</strong>
        {{ $environment['app_name'] }}
    </p>

    <p>
        <strong>Laravel:</strong>
        {{ $environment['laravel_version'] }}
    </p>

    <p>
        <strong>PHP:</strong>
        {{ $environment['php_version'] }}
    </p>

    <p>
        <strong>Environment:</strong>
        {{ $environment['environment'] }}
    </p>

    <p>
        Informasi rahasia seperti password, API key,
        APP_KEY, dan kredensial database tidak ditampilkan.
    </p>

</body>
</html>