<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header text-center">
                    <h4 class="mb-0">Registrasi Akun</h4>
                </div>
                <div class="card-body p-4">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                            <label for="name">Nama Lengkap</label>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" required>
                            <label for="email">Email</label>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="phone_number" class="form-control" id="phone" placeholder="Nomor HP" value="{{ old('phone_number') }}" required>
                            <label for="phone">Nomor HP</label>
                            @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2">Daftar</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>Sudah punya akun? <a href="{{ route('login') }}">Login disini</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
