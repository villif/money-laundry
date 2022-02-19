<table id="tbl-outlet" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>no</th>
            <th>id_outlet</th>
            <th>jenis</th>
            <th>nama_paket</th>
            <th>harga</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($paket as $p)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $p->outlet->nama }}</td>
            <td>{{ $p->jenis }}</td>
            <td>{{ $p->nama_paket}}</td>
            <td>{{ $p->harga }}</td>
                @include('paket.edit')
                <form method="POST" action="{{ route('outlet.destroy', $p->id) }}" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn delete-paket"><i class="fas fa-trash" style="color:red"></i></button> &nbsp;
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>