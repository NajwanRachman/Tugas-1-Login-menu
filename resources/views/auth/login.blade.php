<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eaf3ff, #f8fbff);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5edf7;
        }

        .login-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .login-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: #1a57a0;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            font-weight: bold;
        }

        h1 {
            margin: 0 0 8px;
            color: #1f2937;
            font-size: 28px;
        }

        .description {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
        }

        .error {
            background: #fff1f2;
            color: #c0392b;
            border: 1px solid #fecdd3;
            padding: 11px 13px;
            border-radius: 7px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #374151;
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 14px;
            transition: 0.2s;
        }

        input:focus {
            outline: none;
            border-color: #1a57a0;
            box-shadow: 0 0 0 3px rgba(26, 87, 160, 0.1);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #1a57a0;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #14477f;
            transform: translateY(-1px);
        }

        .footer-text {
            text-align: center;
            margin-top: 22px;
            color: #9ca3af;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="login-header">

            <div class="login-icon">
                🔐
            </div>

            <h1>Login</h1>

            <p class="description">
                Masuk untuk membuka dashboard
            </p>

        </div>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    value="{{ old('username') }}"
                    placeholder="Masukkan username"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit">
                Masuk
            </button>
        </form>

        <div class="footer-text">
            Sistem Login Laravel 13
        </div>

    </div>

</body>
</html>