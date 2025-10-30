<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistema Académico FICCT') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background: radial-gradient(circle at 0% 0%, rgba(162, 240, 210, 0.25), transparent 45%),
                radial-gradient(circle at 100% 0%, rgba(255, 176, 102, 0.35), transparent 40%),
                radial-gradient(circle at 80% 90%, rgba(15, 143, 99, 0.45), transparent 30%),
                #030712;
            position: relative;
            overflow: hidden;
        }

        body::before,
        body::after {
            content: '';
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.4;
        }

        body::before {
            background: #19b37b;
            top: -180px;
            right: -120px;
        }

        body::after {
            background: #ff9240;
            bottom: -200px;
            left: -160px;
        }

        .login-container {
            position: relative;
            display: grid;
            grid-template-columns: 7fr 6fr;
            width: min(1120px, 100%);
            border-radius: 26px;
            backdrop-filter: blur(22px);
            background: rgba(3, 7, 18, 0.72);
            border: 1px solid rgba(56, 244, 189, 0.15);
            box-shadow: 0 35px 90px rgba(9, 47, 40, 0.45);
            overflow: hidden;
        }

        .login-left {
            position: relative;
            padding: 3.25rem 3rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #ecfdf6;
            background: radial-gradient(circle at 20% 20%, rgba(25, 179, 123, 0.35), transparent 55%),
                radial-gradient(circle at 80% 20%, rgba(255, 146, 64, 0.28), transparent 50%),
                rgba(2, 44, 34, 0.55);
        }

        .login-left::after {
            content: '';
            position: absolute;
            inset: 18px;
            border: 1px dashed rgba(236, 253, 246, 0.18);
            border-radius: 24px;
            pointer-events: none;
        }

        .orbit-emoji {
            display: grid;
            gap: 1.25rem;
            grid-template-columns: repeat(3, minmax(0, 72px));
            justify-content: start;
        }

        .orbit-emoji span {
            display: grid;
            place-items: center;
            width: 72px;
            height: 72px;
            border-radius: 20px;
            background: rgba(3, 7, 18, 0.32);
            border: 1px solid rgba(236, 253, 246, 0.16);
            font-size: 30px;
            animation: float 6s ease-in-out infinite;
        }

        .orbit-emoji span:nth-child(2) { animation-delay: -2s; }
        .orbit-emoji span:nth-child(3) { animation-delay: -4s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .login-heading {
            margin-top: 3rem;
            max-width: 360px;
        }

        .login-heading h1 {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -0.02em;
        }

        .login-heading p {
            margin-top: 1rem;
            color: rgba(236, 253, 246, 0.78);
            font-size: 1rem;
            line-height: 1.6;
        }

        .login-stats {
            margin-top: 2.5rem;
            display: flex;
            gap: 1.25rem;
            flex-wrap: wrap;
        }

        .login-stats div {
            flex: 1 1 140px;
            border-radius: 18px;
            padding: 1.1rem 1.25rem;
            background: rgba(3, 7, 18, 0.38);
            border: 1px solid rgba(236, 253, 246, 0.12);
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
        }

        .login-stats h4 {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .login-stats span {
            font-size: 0.85rem;
            color: rgba(236, 253, 246, 0.65);
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .login-right {
            padding: 3.5rem 3rem;
            background: rgba(10, 12, 21, 0.92);
            color: #e2e8f0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            margin-bottom: 2rem;
        }

        .badge-pill {
            background: rgba(255, 146, 64, 0.2);
            border: 1px solid rgba(255, 146, 64, 0.25);
            color: #ffcf97;
        }

        .login-header h2 {
            margin-top: 1rem;
            font-size: 1.75rem;
            font-weight: 700;
            letter-spacing: -0.01em;
        }

        .login-header p {
            margin-top: 0.5rem;
            font-size: 0.95rem;
            color: #94a3b8;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: #e2e8f0;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 16px;
            border: 1px solid rgba(94, 234, 212, 0.4);
            background: rgba(248, 250, 252, 0.95);
            color: #0f172a;
            caret-color: #0f172a;
            font-size: 1rem;
            transition: border 0.3s, box-shadow 0.3s, transform 0.3s;
            box-shadow: inset 0 1px 3px rgba(2, 6, 23, 0.35);
        }

        .form-input::placeholder {
            color: rgba(51, 65, 85, 0.7);
        }

        .form-input:focus {
            outline: none;
            border-color: rgba(94, 234, 212, 0.85);
            box-shadow: 0 0 0 4px rgba(94, 234, 212, 0.2);
            transform: translateY(-1px);
            background: rgba(255, 255, 255, 0.98);
        }

        .form-error {
            color: #fca5a5;
            font-size: 0.85rem;
            margin-top: 0.35rem;
        }

        .form-checkbox {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .form-checkbox input {
            width: 1.1rem;
            height: 1.1rem;
            accent-color: #19b37b;
        }

        .form-checkbox label {
            color: #94a3b8;
            font-size: 0.9rem;
        }

        .forgot-password-link {
            color: #ffb166;
            font-size: 0.9rem;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .forgot-password-link:hover {
            color: #ffcf97;
            text-decoration: underline;
        }

        .btn-primary {
            width: 100%;
            padding: 0.95rem;
            border-radius: 18px;
            border: none;
            font-weight: 700;
            font-size: 1.05rem;
            background: linear-gradient(135deg, #19b37b 0%, #ff9240 100%);
            color: #020617;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 18px 45px rgba(25, 179, 123, 0.5);
        }

        .btn-primary:hover {
            transform: translateY(-2px) scale(1.01);
            box-shadow: 0 22px 55px rgba(255, 146, 64, 0.45);
        }

        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            box-shadow: none;
        }

        .register-section {
            margin-top: 1.5rem;
            padding-top: 1.35rem;
            border-top: 1px solid rgba(148, 163, 184, 0.2);
            text-align: center;
        }

        .register-text {
            color: #94a3b8;
            font-size: 0.95rem;
            margin-bottom: 0.85rem;
        }

        .register-link {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.75rem 1.5rem;
            border-radius: 16px;
            border: 1px solid rgba(255, 176, 102, 0.35);
            color: #ffcf97;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s, transform 0.3s;
        }

        .register-link:hover {
            background: rgba(255, 146, 64, 0.15);
            transform: translateY(-2px);
        }

        .alert {
            padding: 1rem 1.1rem;
            border-radius: 14px;
            margin-bottom: 1.25rem;
            font-size: 0.9rem;
            border: 1px solid rgba(148, 163, 184, 0.18);
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.15);
            color: #bbf7d0;
        }

        .alert-error {
            background: rgba(248, 113, 113, 0.18);
            color: #fecaca;
        }

        .alert-info {
            background: rgba(14, 165, 233, 0.2);
            color: #bae6fd;
        }

        .link-primary {
            color: #19b37b;
            font-weight: 600;
            text-decoration: none;
        }

        .link-primary:hover {
            color: #a2f0d2;
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            body {
                padding: 1rem;
            }

            .login-container {
                grid-template-columns: 1fr;
            }

            .login-left {
                padding: 2.75rem 2.25rem;
            }

            .login-right {
                padding: 2.75rem 2.25rem;
            }

            .login-heading {
                margin-top: 2.25rem;
                max-width: 100%;
            }
        }

        @media (max-width: 640px) {
            body {
                padding: 0;
                align-items: stretch;
            }

            .login-container {
                border-radius: 0;
                min-height: 100vh;
            }

            .login-left,
            .login-right {
                padding: 2.25rem 1.75rem;
            }

            .orbit-emoji {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 0.9rem;
            }

            .orbit-emoji span {
                width: 62px;
                height: 62px;
            }

            .form-checkbox {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 420px) {
            .login-left,
            .login-right {
                padding: 2rem 1.25rem;
            }

            .orbit-emoji span {
                width: 54px;
                height: 54px;
                font-size: 26px;
            }

            .btn-primary {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Lado Izquierdo - Branding -->
        <div class="login-left">
            <div class="orbit-emoji">
                <span>🧭</span>
                <span>🌿</span>
                <span>🛰️</span>
            </div>

            <div class="login-heading">
                <span class="badge-pill">Modo Aurora</span>
                <h1>Organiza tus clases con una vibra totalmente renovada.</h1>
                <p>Un panel futurista para docentes, coordinadores y autoridades académicas. Flujo, seguimiento y métricas en un mismo lugar.</p>
            </div>

            <div class="login-stats">
                <div>
                    <h4>120+</h4>
                    <span>horarios activos</span>
                </div>
                <div>
                    <h4>48</h4>
                    <span>aulas sincronizadas</span>
                </div>
                <div>
                    <h4>∞</h4>
                    <span>ideas en progreso</span>
                </div>
            </div>
        </div>

        <!-- Lado Derecho - Contenido Dinámico -->
        <div class="login-right">
            {{ $slot }}
        </div>
    </div>
</body>
</html>