@extends('app')

@section('content')
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="{{ route('kriteria.create') }}" class="btn btn-sm btn-success">Tambah Kriteria</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Atribut</th>
                        <th>Bobot</th>
                        <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriterias as $kriteria)
                        <tr>
                            <td>{{ $kriteria->id_kriteria }}</td>
                            <td>{{ $kriteria->nama_kriteria }}</td>
                            <td>{{ $kriteria->atribut }}</td>
                            <td>{{ $kriteria->bobot }}</td>
                            <td>
                                <a href="{{ route('kriteria.edit', $kriteria->id_kriteria) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('kriteria.destroy', $kriteria->id_kriteria) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kriteria ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
