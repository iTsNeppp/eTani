<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login e-Tani</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #57ca85 0%, #3f9e5d 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-box {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
      padding: 2rem 2.5rem;
      max-width: 400px;
      width: 100%;
    }
    .login-box h2 {
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: #3f9e5d;
    }
    .form-control:focus {
      border-color: #57ca85;
      box-shadow: 0 0 0 0.2rem rgba(87, 202, 133, 0.25);
    }
    .btn-primary {
      background-color: #3f9e5d;
      border-color: #3f9e5d;
      font-weight: 600;
    }
    .btn-primary:hover {
      background-color: #57ca85;
      border-color: #57ca85;
    }
  </style>
</head>
<body>
  <div class="login-box shadow">
    <h2>Login e-Tani</h2>
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <form action="/auth/loginProcess" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required autofocus>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <div class="mt-3 text-center">
      <p>Belum punya akun? <a href="/auth/register">Register</a></p>
    </div>
  </div>
</body>
</html>