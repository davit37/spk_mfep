<div class='card ' style="width: 50rem;">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-lg-10">
        <div class='card-body'>

          <form class="form-horizontal" action="action/faktor_action.php" method="POST">
            <input type="hidden" value="tambah" name="aksi">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Faktor</label>
              <div class="col-sm-8">
                <input type="text" class="form-control"  name="nama_faktor" required placeholder="nama faktor">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Bobot</label>
              <div class="col-sm-8">
                <input type="number" step="0.01" class="form-control" required  name="bobot"placeholder="bobot">
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