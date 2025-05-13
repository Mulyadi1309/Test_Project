<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Login</h4>
                    </div>
                    <div class="card-body p-4">
                        @if (session('error'))
                            <div class="alert alert-danger text-center">{{ session('error') }}</div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Email" value="{{ old('email') }}" required>
                                <label for="email">Email</label>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
