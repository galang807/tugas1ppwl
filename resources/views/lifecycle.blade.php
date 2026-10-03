<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Request Lifecycle</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .box {
            border: 2px solid #333;
            padding: 15px;
            margin: 10px auto;
            max-width: 500px;
            text-align: center;
            border-radius: 8px;
        }

        .arrow {
            text-align: center;
            font-size: 25px;
        }
    </style>
</head>
<body>

    <h1>Request Lifecycle</h1>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a> |
        <a href="{{ route('program.studi') }}">Program Studi</a> |
        <a href="{{ route('kontak') }}">Kontak</a> |
        <a href="{{ route('architecture') }}">Architecture</a> |
        <a href="{{ route('lifecycle') }}">Lifecycle</a> |
        <a href="{{ route('environment') }}">Environment</a>
    </nav>

    <hr>

    <h2>GET /program-studi</h2>

    <div class="box">
        Browser
        <br>
        GET /program-studi
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        Route
        <br>
        routes/web.php
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        ProgramStudiController
        <br>
        method index()
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        Data Array
        <br>
        $programStudi
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        Blade View
        <br>
        program-studi.blade.php
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        Response HTML
        <br>
        dikirim kembali ke Browser
    </div>

</body>
</html>