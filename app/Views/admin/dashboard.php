<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - eTani</title>
</head>
<body>
    <h1>Dashboard Admin</h1>

    <p>Halo, <?= session()->get('user_name') ?> (<?= session()->get('user_role') ?>)</p>
    
    <nav>
        <ul>
            <li><a href="/admin/petani">Manajemen Data Petani</a></li>
            <li><a href="/admin/panen">Manajemen Hasil Panen</a></li>
            <li><a href="/admin/logs">Log Aktivitas</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </nav>

    <section>
        <h3>Ringkasan</h3>
        <ul>
            <li>Total Petani: <?= $totalPetani ?></li>
            <li>Total Data Panen: <?= $totalPanen ?></li>
        </ul>
    </section>
</body>
</html>