@extends('templates/header')

@section('content')
<div class="right_col" role="main">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Paket</h3>
        </div>
            <div class="card-body mt-3">
                <button type="button" class="btn btn-success" data-toggle="modal"
                    data-target="#formInputModal">
                    Tambah Paket
                </button>
                <div>
                    @include('paket/list-all')
                </div>
            </div>
          <div style="margin-top:20px">
            @if (session('success'))
            <div class="alert alert-success" role="alert" id="success-alert">
                {{ session('success') }}
            <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>    
                    @endforeach
                </ul>
            </div>
                
            @endif    
        </div>

        
        
       <script>
           $(function(){
               //data Table
               $('tbl-paket').DataTable()

               //menghapus alert
               $("#succes-alert").fadeTo(2000, 500).slideUp(500, function(){
                   $("#succes-alert").slideUp(500);
               });
               $("#error-alert").fadeTo(2000, 500).slideUp(500, function(){
                   $("#succes-alert").slideUp(500);
               });

               $('#edit').on('show.bs.modal', function (event){
                   var button = $(event.relatedTarget)
                   var id_outlet = button.data('myid_outlet')
                   var jenis = button.data('myjenis')
                   var nama_paket = button.data('mynama_paket')
                   var harga = button.data('myharga')

                   var modal =$(this)
                   modal.find('.modal-body #outlet').val(id_outlet);
                   modal.find('.modal-body #jenis').val(jenis);
                   modal.find('.modal-body #nama_paket').val(nama_paket);
                   modal.find('.modal-body #harga').val(harga);
               })

               //delete paket
               $('.delete-paket').click(function(e){
                   e.prevenDefault()
                   let data = $(this).closest('tr').find('td:eq(1)').text()
                   swal({
                       title ="Apakah kamu yakin?",
                       text ="Data"+data+"akan dihapus?",
                       icon ="waring",
                       buttons = true,
                       dangermode = true,
                   })
                   .then((req) => {
                       if(req) $(e.target).closest('form').submit()
                       else swal.close()
                   })
               })
           })
       </script>
     
</div> 
</div>
@include('paket/form')
@endsection