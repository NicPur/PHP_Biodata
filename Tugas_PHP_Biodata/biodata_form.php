<form method="POST" action="">
    <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    
    <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
    </div>
    
    <div class="form-group">
        <label for="prodi">Program Studi:</label>
        <select id="prodi" name="prodi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <div class="radio-group">
            <div class="radio-item">
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>
            </div>
            <div class="radio-item">
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label>Hobi:</label>
        <div class="checkbox-group">
            <div class="checkbox-item">
                <input type="checkbox" id="hobi1" name="hobi[]" value="Membaca">
                <label for="hobi1">Membaca</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="hobi2" name="hobi[]" value="Olahraga">
                <label for="hobi2">Olahraga</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="hobi3" name="hobi[]" value="Musik">
                <label for="hobi3">Musik</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="hobi4" name="hobi[]" value="Traveling">
                <label for="hobi4">Traveling</label>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea>
    </div>
    
    <button type="submit">Kirim Data</button>
</form>