  {{-- button --}}
  <button type="button" class="btn" data-toggle="modal"data-target="#edit{{ $p->id }}">
    <i class="fas fa-edit"></i>
</button>

<div class="modal fade" id="edit{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Paket</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{ url('outlet/'.$p->id) }}">
        @csrf
        @method('PUT')
        <div id="method"></div>
        <div class="card-body">
            <div class="form-group">
              <label for="id_outlet">id_outlet</label>
              <input type="text" class="form-control col-sm-9" id="id_outlet" value="{{ $p->id_outlet}}" name="id_outlet">
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="jenis">jenis</label>
              <input type="text" class="form-control col-sm-9" id="jenis" value="{{ $p->jenis}}" name="jenis">
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="nama_paket">nama_paket</label>
              <input type="text" class="form-control col-sm-9" id="nama_paket" value="{{ $p->nama_paket}}" name="nama_paket">
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="harga">harga</label>
                <input type="text" class="form-control col-sm-9" id="harga" value="{{ $p->harga}}" name="harga">
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="action">action</label>
                  <input type="text" class="form-control col-sm-9" id="action" value="{{ $p->action}}" name="action">
                </div>
          </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
      <button type="sumbit" class="btn btn-warning" id="btn-sumbit">Update</button>
    </div>
  </div>
</div>
</form>
</div>

