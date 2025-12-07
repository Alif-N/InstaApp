<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InstaApp - Register</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        :root {
            --bg-body: #f5f5f4;
            --bg-card: #ffffff;
            --border-soft: #e5e5e0;
            --text-main: #111827;
            --text-muted: #6b7280;
            --accent: #f97316;
            --accent-soft: #fef3c7;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top left, #fefce8, #f5f5f4);
            font-family: "Instrument Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: var(--text-main);
        }

        .auth-container {
            width: 100%;
            max-width: 380px;
            padding: 1.5rem;
        }

        .card {
            background: var(--bg-card);
            border-radius: 1.25rem;
            border: 1px solid var(--border-soft);
            padding: 1.75rem 1.5rem;
            box-shadow:
                0 18px 45px rgba(15, 23, 42, 0.10),
                0 0 0 1px rgba(148, 163, 184, 0.10);
        }

        .app-name {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            font-size: 0.8rem;
            padding: 0.25rem 0.6rem;
            border-radius: 999px;
            background: var(--accent-soft);
            color: #92400e;
            margin-bottom: 0.9rem;
        }

        .app-dot {
            width: 0.55rem;
            height: 0.55rem;
            border-radius: 999px;
            background: var(--accent);
        }

        .title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0 0 0.25rem;
        }

        .subtitle {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 1.4rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 0.9rem;
        }

        .field-group {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
        }

        label {
            font-size: 0.8rem;
            font-weight: 500;
            color: #4b5563;
        }

        input {
            width: 100%;
            padding: 0.6rem 0.75rem;
            border-radius: 0.7rem;
            border: 1px solid #d4d4d8;
            font-size: 0.9rem;
            outline: none;
            background: #f9fafb;
            transition: border-color 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
        }

        input::placeholder {
            color: #9ca3af;
        }

        input:focus {
            border-color: var(--accent);
            background: #ffffff;
            box-shadow: 0 0 0 1px rgba(249, 115, 22, 0.15);
        }

        .btn-primary {
            margin-top: 0.4rem;
            width: 100%;
            border: none;
            border-radius: 999px;
            padding: 0.65rem 1rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: #ffffff;
            background: linear-gradient(to right, #f97316, #fb923c);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            transition: transform 0.12s ease, box-shadow 0.12s ease, opacity 0.12s ease;
            box-shadow: 0 10px 20px rgba(249, 115, 22, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 16px 32px rgba(249, 115, 22, 0.25);
        }

        .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 8px 18px rgba(249, 115, 22, 0.28);
            opacity: 0.96;
        }

        .btn-icon {
            font-size: 1rem;
        }

        .bottom-text {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .bottom-text a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
        }

        .bottom-text a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .card {
                padding: 1.5rem 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="card">
            <div class="app-name">
                <span class="app-dot"></span>
                <span>InstaApp</span>
            </div>

            <h1 class="title">Create A New Account</h1>
            <p class="subtitle">Start sharing your best moments today.</p>

            <form method="POST" action="">
                @csrf
                {{-- TODO: isi action dengan route('register') setelah route dibuat --}}

                <div class="field-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="username"
                        required
                    >
                </div>

                <div class="field-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="email@example.com"
                        required
                    >
                </div>

                <div class="field-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Minimum 8 characters"
                        required
                    >
                </div>

                <div class="field-group">
                    <label for="password_confirmation">Confirmed password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Repeat password"
                        required
                    >
                </div>

                <button type="submit" class="btn-primary">
                    <span>Register</span>
                    <span class="btn-icon">➜</span>
                </button>
            </form>

            <p class="bottom-text">
                Already have an account?
                <a href="{{ route('login') }}">
                    Login Here
                </a>
            </p>
        </div>
    </div>
</body>
</html>
