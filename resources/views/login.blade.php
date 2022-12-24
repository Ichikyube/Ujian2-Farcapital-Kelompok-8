<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any()){
        <h1 style="color: red">
            {{ $errors->first() }}
        </h1>
    }
    @endif
    <form method="post">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Masukan Email">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Masukan password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
