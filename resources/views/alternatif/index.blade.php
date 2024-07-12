@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('alternatif.create') }}" class="btn btn-success btn-sm">Tambah Alternatif</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alternatifs as $alternatif)
                        <tr>
                            <td>{{ $alternatif->id_alternatif }}</td>
                            <td>{{ $alternatif->nama_alternatif }}</td>
                            <td>
                                <a href="{{ route('alternatif.edit', $alternatif->id_alternatif) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('alternatif.destroy', $alternatif->id_alternatif) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus alternatif ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
