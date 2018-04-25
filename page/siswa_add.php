<div class='card ' style="width: 50rem;">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-lg-10">
        <div class='card-body'>

          <form class="form-horizontal" action="action/siswa_action.php" method="POST">
            <input type="hidden" value="tambah" name="aksi">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Siswa</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_siswa" required placeholder="nama siswa">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Kelas</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="kelas" required placeholder="Kelas">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_siswa" required placeholder="Tanggal Lahir">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_siswa" required placeholder="Alamat">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">No telpon</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_siswa" required placeholder="No Telpon">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nilai Rapot</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_siswa" required placeholder="Nilai Rapot">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Prestasi Akademik</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_siswa" required placeholder="Prestasi Akademik">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Prestasi Non Akademik</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_siswa" required placeholder="Prestasi Non Akademik">
              </div>
            </div>
          
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>