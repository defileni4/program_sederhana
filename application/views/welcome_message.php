<h2>Form Data Mahasiswa</h2>
<form method="POST" action="<?php echo site_url('Welcome/simpan') ?>">
 <input type="text" name="nama" placeholder="Nama">
 <br>
 <input type="text" name="nim" placeholder="NIM">
 <br>
 <input type="text" name="prodi" placeholder="Prodi" >
 <br>
 <input type="text" name="angkatan" placeholder="Angkatan">
 <br><br>
 <button type="submit">Simpan Data</button>
 &nbsp;
 <a href="<?php echo site_url('Welcome/tampil') ?>">Cetak Data</a>
</form>