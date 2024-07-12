@extends('app')
@section('content')
    <div class="card">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->nama_kriteria }}</th>
                        @endforeach
                    </tr>
                </thead>
                @foreach ($nilais as $key => $val)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $alternatifs[$key]->nama_alternatif }}</td>
                        @foreach ($val as $k => $v)
                            <td>{{ $v }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection