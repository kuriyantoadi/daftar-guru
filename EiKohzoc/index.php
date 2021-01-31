<?php include('../header.php') ?>

<h3 align='center' style="margin: 30px">Daftar Guru SMK Negeri 1 Kragilan</h3>
<div class="col-sm-3">
    <p>Cari Guru :</p><input style="margin-bottom: 20px" type='text' class="form-control" id='input' onkeyup='searchTable()'>
</div>

<table class="table table-bordered table-hover" id="domainsTable">
    <thead>
        <tr>
            <th>
                <center>No
            </th>
            <th>
                <center>Nama Guru
            </th>
            <th>
                <center>Mata Pelajaran
            </th>
            <th>
                <center> Opsi
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_guru ORDER BY nama_guru ASC");
        while ($d = mysqli_fetch_array($data)) {
        ?>

            <tr>
                <td>
                    <center><?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $d['nama_guru']; ?>
                </td>
                <td>
                    <center><?php echo $d['mapel']; ?>
                </td>
                <td align='center'>
                    <a type="button" class="btn btn-danger btn-sm" href="guru_hapus.php?id_guru=<?php echo $d['id_guru']; ?>" onclick="return confirm('Anda yakin Hapus data kelas <?php echo $d['nama_guru']; ?> ?')">Hapus</a>
                    <a type="button" class="btn btn-primary btn-sm" href="view<?php echo $d['id_guru']; ?>">Edit</a>
                    <a type="button" class="btn btn-success btn-sm" href="view<?php echo $d['id_guru']; ?>">Lihat</a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>
<div>
</div>
</div>

<?php include('../footer.php') ?>