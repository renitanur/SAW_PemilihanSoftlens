@extends('app')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            Data Nilai
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->nama_kriteria }}({{ $kriteria->atribut }}:
                                {{ $kriteria->bobot }})</th>
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
                <tr>
                    <td colspan="2">Min</td>
                    @foreach ($minmax as $key => $val)
                        <td>{{ $val['min'] }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td colspan="2">Max</td>
                    @foreach ($minmax as $key => $val)
                        <td>{{ $val['max'] }}</td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            Normalisasi
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->id_kriteria }}</th>
                        @endforeach
                    </tr>
                </thead>
                @foreach ($normal as $key => $val)
                    <tr>
                        <td>{{ $key }}</td>
                        @foreach ($val as $k => $v)
                            <td>{{ round($v, 4) }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

   

    <div class="card mb-3">
        <div class="card-header">
            Perangkingan
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach ($rank as $key => $val)
                    <tr>
                        <td>{{ $val }}</td>
                        <td>{{ $key }}</td>
                        <td>{{ $alternatifs[$key]->nama_alternatif }}</td>
                        <td>{{ round($total[$key], 4) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection