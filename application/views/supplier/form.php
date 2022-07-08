<form method="POST" action="<?= base_url() . 'Supplier/create'; ?>">
    <div class=" mb-3">
        <label for="nama" class="form-label">Nama Supplier</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
    </div>
    <div class=" mb-3">
        <label for="kota" class="form-label">Kota</label>
        <input type="text" class="form-control" name="kota" id="kota" required>
    </div>
    <div class=" mb-3">
        <label for="telepon" class="form-label">Telepon</label>
        <input type="text" class="form-control" name="telepon" id="telepon" required>
    </div>
    <div class=" mb-3">
        <label for="kontak" class="form-label">Kontak</label>
        <input type="text" class="form-control" name="kontak" id="kontak" required>
    </div>
    <div class=" mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" required>
    </div>
    <div class="">
        <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah</button>
    </div>
    </div>
    </div>
</form>