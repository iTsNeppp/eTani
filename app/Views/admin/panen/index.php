<h2>Data Hasil Panen</h2>
<a href="/admin/panen/tambah">Tambah Data Panen</a>
<table border="1">
<tr><th>Petani</th><th>Jenis Tanaman</th><th>Jumlah (kg)</th><th>Tanggal</th><th>Aksi</th></tr>
<?php foreach ($panen as $p): ?>
<tr>
    <td><?= esc($p['nama_petani']) ?></td>
    <td><?= esc($p['jenis_tanaman']) ?></td>
    <td><?= esc($p['jumlah_kg']) ?></td>
    <td><?= esc($p['tanggal_panen']) ?></td>
    <td>
        <a href="/admin/panen/edit/<?= $p['id'] ?>">Edit</a> |
        <a href="/admin/panen/hapus/<?= $p['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php endforeach ?>
</table>
