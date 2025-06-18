<h2>Edit Hasil Panen</h2>
<form action="/admin/panen/update/<?= $panen['id'] ?>" method="post">
    Petani:
    <select name="petani_id">
        <?php foreach ($petani as $p): ?>
            <option value="<?= $p['id'] ?>" <?= $p['id'] == $panen['petani_id'] ? 'selected' : '' ?>>
                <?= $p['nama'] ?>
            </option>
        <?php endforeach ?>
    </select><br>

    Jenis Tanaman: <input type="text" name="jenis_tanaman" value="<?= $panen['jenis_tanaman'] ?>"><br>
    Jumlah (kg): <input type="number" step="0.01" name="jumlah_kg" value="<?= $panen['jumlah_kg'] ?>"><br>
    Tanggal Panen: <input type="date" name="tanggal_panen" value="<?= $panen['tanggal_panen'] ?>"><br>

    <button type="submit">Update</button>
</form>
