<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1>
    Daftar
</h1>
<form action="{{ route('DaftarStore') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <label for="name" class="form-label">nama</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="name" class="form-label">emaii</label>
            <input type="email" class="form-control" name="email">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" name="password">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">submit</button>
</form>
<br>
<p>sudah punya akun ?
    <a href="{{ route('login') }}">
        klik di sini
    </a>
</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
