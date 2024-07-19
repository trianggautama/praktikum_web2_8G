<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web 2</title>
</head>
<body>
    <h2>Halaman Login</h2>
    <br>
    <form action="{{Route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <button type="submit"> Sign In</button>
    </form>
</body>
</html>