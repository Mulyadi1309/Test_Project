<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel App</title>
</head>
<body>
    <h2>Masuk ke Akun</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required value="{{ old('email') }}">
        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror

        <br><br>

        <button type="submit">Masuk</button>
    </form>

    <br>
    <a href="{{ route('register') }}">Belum punya akun? Daftar disini</a>
</body>
</html>
