<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Laravel App</title>
</head>
<body>
    <h2>Daftar Akun</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <br><br>

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

        <label for="phone_number">Nomor Telepon:</label>
        <input type="text" name="phone_number" id="phone_number" required value="{{ old('phone_number') }}">
        @error('phone_number')
            <div>{{ $message }}</div>
        @enderror

        <br><br>

        <button type="submit">Daftar</button>
    </form>

    <br>
    <a href="{{ route('login') }}">Sudah punya akun? Masuk disini</a>
</body>
</html>
