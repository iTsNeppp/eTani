<!DOCTYPE html>
<html>
<head><title>Login e-Tani</title></head>
<body>
    <h2>Login</h2>
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form action="/auth/loginProcess" method="post">
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="/auth/register">Register</a></p>
</body>
</html>
