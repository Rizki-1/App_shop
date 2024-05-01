<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 col-xl-6">
              <div class="col-lg-12">
                <div class="card" style="background-color: cyan" >
                  <form action="{{ route('LoginStore') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="email">email</label>
                          <input type="email" class="form-control" name="email" id="email">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-gorup">
                          <label for="password">password</label>
                          <input type="password" class="form-control" name="password" id="Password">
                          <input type="checkbox" class="form-check-input" onclick="ShowPassword()">
                        </div>
                      </div>
                      <div class="col-lg-12" style="text-align: center">
                          <button type="button" class="btn btn-primary" onclick="check()" id="button">login</button>
                      </div>
                    </div>
                  </form>
                  <p>
                    tidak punya akun? <a href="{{ route('daftar') }}"> daftar di sini </a>
                  </p>
                </div>
              </div>
          </div>
        </div>

    </div>
  <script>
    function ShowPassword() {
      var x = document.getElementById("Password");
      if (x.type == "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }

    function check() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("Password").value;
      var button = document.getElementById("button");
      if (email == "" || password == "") {
        alert('email atau password belum di isi');
      } else {
        button.type = 'submit';
        button.click();
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
