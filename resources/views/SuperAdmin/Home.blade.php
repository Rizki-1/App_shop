<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home admin</title>
</head>
<body>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">logout</button>
    </form>
    <h1>
        ini adalah home super admin
    </h1>
</body>
</html>
