<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Smartphone AHP & SAW - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #5066e1;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            border-radius: 20px;
            padding: 35px;
            background: #ffffff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .login-title {
            font-weight: 600;
            font-size: 1.3rem;
            text-align: center;
            margin-bottom: 25px;
        }

        .btn-custom {
            background-color: #5066e1;
            border-radius: 12px;
            padding: 10px;
            font-size: 1rem;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-title">Best Smartphone AHP & SAW</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input id="username" type="text"
                    class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autofocus
                    placeholder="Masukkan username">

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input id="password" type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password" required placeholder="Masukkan password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 btn-custom">
                MASUK
            </button>

        </form>
    </div>

</body>
</html>