<table id="tbl-outlet" class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>jenis_kelamin</th>
            <th>telepon</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($member as $m)
        <tr>
            <td>{{ $i =(isset($i)?++$i:$i=1) }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->alamat }}</td>
            <td>{{ $m->jenis_kelamin }}</td>
            <td>{{ $m->telepon }}</td>
            <td>
                @include('member.edit')
                <form method="POST" action="{{ route('outlet.destroy', $m->id) }}" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn delete-outlet"><i class="fas fa-trash" style="color:red"></i></button> &nbsp;
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>