<table id="tbl-outlet" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>id_outler</th>
            <th>jenis</th>
            <th>nama_paket</th>
            <th>harga</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($outlet as $o)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $o->id_outlet }}</td>
            <td>{{ $o->jenis }}</td>
            <td>{{ $o->nama_paket}}</td>
            <td>{{ $o->harga }}</td>
                @include('outlet.edit')
                <form method="POST" action="{{ route('outlet.destroy', $o->id) }}" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn delete-outlet"><i class="fas fa-trash" style="color:red"></i></button> &nbsp;
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>