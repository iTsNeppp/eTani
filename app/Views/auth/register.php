<!DOCTYPE html>
<html>
<head><title>Register e-Tani</title></head>
<body>
    <h2>Register</h2>
    <form action="/auth/registerProcess" method="post">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="/auth/login">Login</a></p>
</body>
</html>
