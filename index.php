<?php include('header.php') ?>

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
            <center> Lihat
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
      include 'koneksi.php';
      $no=1;
      $data = mysqli_query($koneksi, "SELECT * from guru ORDER BY nama_guru ASC");
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
            <a type="button" class="btn btn-info btn-sm" href="view<?php echo $d['id_guru']; ?>">Lihat</a>
          </td>
        </tr>

        <?php } ?>
      </tbody>
    </table>
    <div>
    </div>
  </div>

  <?php include('footer.php') ?>