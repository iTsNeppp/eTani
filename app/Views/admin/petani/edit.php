<h2>Edit Petani</h2>
<form action="/admin/petani/update/<?= $petani['id'] ?>" method="post">
    Nama: <input type="text" name="nama" value="<?= $petani['nama'] ?>"><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir" value="<?= $petani['tanggal_lahir'] ?>"><br>
    Umur: <input type="number" name="umur" value="<?= $petani['umur'] ?>"><br>
    Alamat: <textarea name="alamat"><?= $petani['alamat'] ?></textarea><br>
    No HP: <input type="text" name="no_hp" value="<?= $petani['no_hp'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $petani['email'] ?>"><br>
    <button type="submit">Update</button>
</form>