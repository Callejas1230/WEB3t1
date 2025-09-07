<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #000000, #0a0a0a, #101010);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #d0eaff;
        }

        .container-login {
            width: 950px;
            max-width: 100%;
            display: flex;
            background: #0d0d0d;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0, 191, 255, 0.25);
        }

        .info-section {
            flex: 1;
            background: #121212;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #80dfff;
            text-shadow: 0 0 10px rgba(128, 223, 255, 0.5);
        }

        .info-section h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .info-section p {
            font-size: 15px;
            color: #a0a0a0;
        }

        .login-section {
            flex: 1;
            background: url('./img/u1.jpg') no-repeat center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            position: relative;
        }

        .login-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.75);
        }

        .login-section form {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 300px;
        }

        .login-section h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: bold;
            color: #80dfff;
            text-shadow: 0 0 10px rgba(128, 223, 255, 0.6);
        }

        .input-box {
            position: relative;
            margin-bottom: 25px;
        }

        .input-box input {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: none;
            border-bottom: 2px solid #80dfff;
            background: transparent;
            outline: none;
            font-size: 16px;
            color: #d0eaff;
        }

        .input-box input:focus {
            border-bottom: 2px solid #80dfff;
            box-shadow: 0 0 8px rgba(128, 223, 255, 0.5);
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #888;
            font-size: 14px;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            top: -8px;
            font-size: 12px;
            color: #80dfff;
            text-shadow: 0 0 6px rgba(128, 223, 255, 0.7);
        }

        .input-box .icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #80dfff;
            font-size: 18px;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #80dfff;
            color: #0d0d0d;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(128, 223, 255, 0.7);
        }

        .btn-login:hover {
            background: #00bcd4;
            box-shadow: 0 0 15px rgba(128, 223, 255, 0.9);
        }

        .extra-links {
            text-align: center;
            margin-top: 15px;
        }

        .extra-links a {
            color: #80dfff;
            text-decoration: none;
            font-size: 14px;
        }

        .extra-links a:hover {
            text-decoration: underline;
            text-shadow: 0 0 6px rgba(128, 223, 255, 0.7);
        }
    </style>
</head>
<body>
    <div class="container-login">
        <div class="info-section">
            <h2>Bienvenido</h2>
            <p>Ingresa tus credenciales para acceder al sistema.</p>
        </div>
        <div class="login-section">
            <form action="validarlogin.php" method="POST">
                <h2>Iniciar Sesión</h2>
                <div class="input-box">
                    <input type="text" name="Usuario" required>
                    <label>Usuario</label>
                    <span class="icon"><i class='bx bxs-user'></i></span>
                </div>
                <div class="input-box">
                    <input type="password" name="Clave" required>
                    <label>Clave</label>
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                </div>
                <button type="submit" class="btn-login">Ingresar</button>
                <div class="extra-links">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
