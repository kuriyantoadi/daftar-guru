<?php include('header.php') ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Cari Peserta Calon Peserta Didik :</label>
      <div class="col-sm-3">
        <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
      </div>
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
        </tr>
      </thead>
      <tbody>
        <?php
      include 'koneksi.php';
      // $halperpage = 500;
      // $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      // $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;
      // $result = mysqli_query($koneksi, "SELECT no_p,tgl_pendaftaran,nisn,nama_siswa,kompetensi_keahlian,asal_sekolah,kondisi,id
      //    FROM f_siswa_mesin");
      // $total = mysqli_num_rows($result);
      // $pages = ceil($total/$halperpage);
      //
      // $data = mysqli_query($koneksi, "SELECT no_p,tgl_pendaftaran,nisn,nama_siswa,kompetensi_keahlian,asal_sekolah,kondisi,id
      //   from f_siswa_mesin where kompetensi_keahlian in ('Teknik Pemesinan') LIMIT $mulai, $halperpage ");
      // $no = $mulai+1;
      $data = mysqli_query($koneksi, "SELECT no_p,nisn,nama_siswa,kompetensi_keahlian,asal_sekolah,kondisi,id,tgl_pendaftaran
        from f_siswa_akl LIMIT $mulai, $halperpage ");


      while ($d = mysqli_fetch_array($data)) {
          ?>

        <tr>
          <td>
            <center><?php echo $no++ ?>
          </td>
          <td>
            <center><?php echo $d['no_p']; ?>
          </td>
          <td>
            <center><?php echo $d['tgl_pendaftaran']; ?>
          </td>
          <td>
            <center><?php echo $d['nisn']; ?>
          </td>
          <td>
            <center><?php echo $d['nama_siswa']; ?>
          </td>
          <td>
            <center><?php echo $d['asal_sekolah']; ?>
          </td>
          <!-- Data di buka bos :) -->
          <!-- <td>
            <center><?php echo $d['kondisi']; ?>
          </td> -->
        </tr>

        <?php
      } ?>
      </tbody>
    </table>
    <div>
      <?php for ($i=1; $i<=$pages ; $i++) {
          ?>
      <a class="btn btn-info btn-md" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php
      } // database

  ?>
    </div>
  </div>

  <?php include('footer.php') ?>
