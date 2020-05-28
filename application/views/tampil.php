<h2>Tampil Data Mahasiswa</h2>
<table border="1" width="80%">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Angkatan</th>
    </tr>
    <?php foreach ($data->result_array() as $d) { ?>
    <tr>
        <td align="center"><?php echo $d['nama'] ?></td>
        <td align="center"><?php echo $d['nim'] ?></td>
        <td align="center"><?php echo $d['prodi'] ?></td>
        <td align="center"><?php echo $d['angkatan'] ?></td>
    </tr>
    <?php } ?>
</table>