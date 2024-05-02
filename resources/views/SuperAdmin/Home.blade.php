<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Home admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <button type="button" class="btn btn-danger" onclick="Logout()">logout</button>
  <form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">logout</button>
  </form>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nama</th>
        <th scope="col">username</th>
        <th scope="col">email</th>
      </tr>
    </thead>
    <tbody id="userTable">
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    function Logout() {
      var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      $.ajax({
        url: '/Logout',
        type: 'POST',
        headers: {
          'X-CSRF-TOKEN': token
        },
        success: function(data) {
          window.location.href = '/';
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
        }
      });
    }
    function fetchuser() {
    fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => response.json())
    .then(data => {
        const table = document.getElementById('userTable');
        table.innerHTML = "";
        data.forEach(user => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <th scope="row">${user.id}</th>
                <th>${user.name}</th>
                <th>${user.username}</th>
                <th>${user.email}</th>
            `;
            table.appendChild(row);
        });
    })
    .catch(error => console.error('Error', error));
}
document.addEventListener('DOMContentLoaded', fetchuser);

  </script>
</body>

</html>
