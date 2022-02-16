<div class="modal fade" id="member" tabindex="-1" role="dialog" aria-labelledby="member" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="member">Tambah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="member">
          @csrf
          <div id="method"></div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control col-sm-9" id="nama" placeholder="" name="nama">
            </div>
          </div>

          <div class="card-body">
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control col-sm-9" id="alamat" placeholder="" name="alamat">
              </div>  
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="jenis_kelamin">jenis_kelamin</label>
                <input type="text" class="form-control col-sm-9" id="jenis_kelamin" placeholder="" name="jenis_kelamin">
            </div>
          </div>
      </div>
            
            <div class="card-body">
              <div class="form-group">
                <label for="telepon">No telepon</label>
                <input type="text" class="form-control col-sm-9" id="telepon" placeholder="" name="telepon">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="sumbit" class="btn btn-success" id="btn-sumbit">Tambah</button>
      </div>
    </div>
  </div>
</form>
</div>
