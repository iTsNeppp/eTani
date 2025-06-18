<h2>Data Petani</h2>
<a href="/admin/petani/tambah">Tambah Petani</a>
<table border="1">
<tr><th>Nama</th><th>Alamat</th><th>No HP</th><th>Aksi</th></tr>
<?php foreach ($petani as $p): ?>
<tr>
    <td><?= esc($p['nama']) ?></td>
    <td><?= esc($p['tanggal_lahir']) ?></td>
    <td><?= esc($p['umur']) ?></td>
    <td><?= esc($p['alamat']) ?></td>
    <td><?= esc($p['no_hp']) ?></td>
    <td><?= esc($p['email']) ?></td>
    <td>
        <a href="/admin/petani/edit/<?= $p['id'] ?>">Edit</a> |
        <a href="/admin/petani/hapus/<?= $p['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php endforeach ?>
</table>
