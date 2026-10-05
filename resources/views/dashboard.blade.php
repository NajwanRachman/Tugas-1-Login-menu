<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eaf3ff, #f8fbff);
            padding: 30px 20px;
        }

        .dashboard-container {
            max-width: 700px;
            margin: 40px auto;
        }

        .dashboard-card {
            background: white;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5edf7;
            overflow: hidden;
        }

        .dashboard-header {
            background: #1a57a0;
            color: white;
            padding: 22px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .dashboard-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .dashboard-header p {
            margin: 5px 0 0;
            font-size: 13px;
            opacity: 0.85;
        }

        .logout-button {
            width: auto;
            padding: 9px 16px;
            background: white;
            color: #1a57a0;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .logout-button:hover {
            background: #eef5ff;
            transform: translateY(-1px);
        }

        .dashboard-content {
            padding: 30px;
        }

        .welcome-box {
            background: #f0f6ff;
            border-left: 4px solid #1a57a0;
            padding: 18px;
            border-radius: 6px;
            margin-bottom: 25px;
        }

        .welcome-box h2 {
            margin: 0 0 7px;
            color: #1f2937;
            font-size: 20px;
        }

        .welcome-box p {
            margin: 0;
            color: #6b7280;
        }

        .info-box {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 18px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #6b7280;
        }

        .info-value {
            color: #1f2937;
            font-weight: bold;
        }

        .security-note {
            margin-top: 20px;
            padding: 12px;
            background: #f8fafc;
            border-radius: 6px;
            color: #64748b;
            font-size: 13px;
        }

        @media (max-width: 500px) {
            .dashboard-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .logout-button {
                width: 100%;
            }

            .dashboard-content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard-container">

        <div class="dashboard-card">

            <div class="dashboard-header">

                <div>
                    <h1>Dashboard</h1>

                    <p>
                        Halaman utama pengguna
                    </p>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout-button">
                        Logout
                    </button>
                </form>

            </div>

            <div class="dashboard-content">

                <div class="welcome-box">

                    <h2>
                        Selamat datang,
                        {{ Auth::user()->nama_lengkap }}!
                    </h2>

                    <p>
                        Kamu berhasil login ke sistem.
                    </p>

                </div>

                <div class="info-box">

                    <div class="info-row">
                        <span class="info-label">
                            Username
                        </span>

                        <span class="info-value">
                            {{ Auth::user()->username }}
                        </span>
                    </div>

                    <div class="info-row">
                        <span class="info-label">
                            Status
                        </span>

                        <span class="info-value">
                            Aktif
                        </span>
                    </div>

                </div>

                <div class="security-note">
                     Halaman ini hanya bisa dibuka setelah login.
                </div>

            </div>

        </div>

    </div>

</body>
</html>