<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - SisVentas</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #2e7d32, #66bb6a);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
      background: #ffffff;
      border-radius: 18px;
      padding: 2.2rem;
      box-shadow: 0 20px 45px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }

    .logo {
      width: 70px;
      margin-bottom: 10px;
    }

    .login-title {
      font-weight: 600;
      color: #2e7d32;
    }

    .login-subtitle {
      font-size: 14px;
      color: #6c757d;
      margin-bottom: 25px;
    }

    .form-label {
      font-size: 13px;
      color: #444;
      font-weight: 500;
    }

    .form-control {
      border-radius: 10px;
      padding: 10px 12px;
    }

    .form-control:focus {
      border-color: #2e7d32;
      box-shadow: 0 0 0 0.2rem rgba(46, 125, 50, 0.25);
    }

    .btn-login {
      background: #2e7d32;
      border: none;
      border-radius: 10px;
      padding: 10px;
      font-weight: 500;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #1b5e20;
    }

    .login-footer {
      font-size: 12px;
      color: #999;
      margin-top: 20px;
    }
  </style>

  <script>
    const base_url = '<?= BASE_URL; ?>';
  </script>
</head>

<body>

<div class="login-box text-center">
  <!-- Logo -->
  <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/HD_transparent_picture.png" alt="Logo" class="logo">

  <!-- Título -->
  <h4 class="login-title">SisVentas</h4>
  <div class="login-subtitle">Sistema de Gestión de Ventas</div>

  <!-- Formulario -->
  <form id="frm_login">
    <div class="mb-3 text-start">
      <label for="username" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario" required>
    </div>

    <div class="mb-3 text-start">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
    </div>

    <button type="button" class="btn btn-login w-100" onclick="iniciar_sesion();">
      Ingresar al Sistema
    </button>
  </form>

  <div class="login-footer">
    © 2025 Sistema de Ventas
  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL; ?>view/function/user.js"></script>

</body>
</html>
