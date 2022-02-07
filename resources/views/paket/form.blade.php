<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="outlet">
            @csrf
            <div id="method"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="id_outlet">id_outlet</label>
                <input type="text" class="form-control col-sm-9" id="id_outlet" placeholder="" name="id_outlet">
              </div>
            </div>
  
            <div class="card-body">
                <div class="form-group">
                  <label for="jenis">jenis</label>
                  <input type="text" class="form-control col-sm-9" id="jenis" placeholder="" name="jenis">
                </div>
              </div>
  
              
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_paket">No nama_paket</label>
                  <input type="text" class="form-control col-sm-9" id="nama_paket" placeholder="" name="nama_paket">
              </div>
            </div>


            <div class="card-body">
                <div class="form-group">
                  <label for="harga">harga</label>
                  <input type="text" class="form-control col-sm-9" id="harga" placeholder="" name="harga">
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
  