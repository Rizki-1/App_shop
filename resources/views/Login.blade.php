<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <a href="{{ route('/') }}">kembali</a>
<h1>
    silakan login
</h1>
<form action="{{ route('LoginStore') }}" method="post">
    @csrf
    <label for="email"></label>
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="Password">
    <input type="checkbox" onclick="ShowPassword()"> show password
    <button type="button" onclick="check()" id="button">login</button>
</form>
<h2>
    tidak punya akun? <a href="{{ route('daftar') }}"> daftar di sini </a>
</h2>
<script>
    function ShowPassword() {
        var x = document.getElementById("Password");
        if (x.type == "password") {
            x.type = "text";
        }else{
            x.type = "password";
        }
    }
    function check(){
        var email = document.getElementById("email").value;
        var password = document.getElementById("Password").value;
        var button = document.getElementById("button");
        if (email == "" || password == "" ) {
            alert('email atau password belum di isi');
        }else{
            button.type = 'submit';
            button.click();
        }
    }
</script>
</body>
</html>
