@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">
        <h6 class="card-title">Analytical Hierarchy Process (AHP)</h6>

        <ul class="nav nav-tabs" id="ahpTabs" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab1">Input Perbandingan</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2">Matriks Perbandingan</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab3">Normalisasi</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab4">Matriks Penjumlahan</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab5">Konsistensi</a>
            </li>

        </ul>


        <div class="tab-content mt-3">

            <div class="tab-pane fade show active" id="tab1">
                <form action="{{ route('ahp.store') }}" method="POST">
                    @csrf

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kriteria A</th>
                                <th>Nilai</th>
                                <th>Kriteria B</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($criterias as $i => $a)
                            @foreach ($criterias as $j => $b)
                            @if ($i < $j) @php $existing=$pairs ->where('criteria_a_uuid',$a->uuid)
                                ->where('criteria_b_uuid',$b->uuid)
                                ->first();
                                @endphp

                                <tr>
                                    <td>{{ $a->code }} - {{ $a->name }}</td>

                                    <td class="d-flex gap-2">

                                        <input type="hidden" name="criteria_a[]" value="{{ $a->uuid }}" class="a-field">
                                        <input type="hidden" name="criteria_b[]" value="{{ $b->uuid }}" class="b-field">

                                        <select name="value[]" class="form-control mx-2">
                                            @foreach ([1,2,3,4,5,6,7,8,9] as $n)
                                            <option value="{{ $n }}"
                                                {{ ($existing && $existing->value==$n) ? 'selected' : '' }}>
                                                {{ $n }}
                                            </option>
                                            @endforeach
                                        </select>

                                        <button type="button" class="btn btn-sm btn-warning switch-btn">
                                            ⇆
                                        </button>

                                    </td>


                                    <td>{{ $b->code }} - {{ $b->name }}</td>
                                </tr>

                                @endif
                                @endforeach
                                @endforeach

                        </tbody>
                    </table>

                    <button class="btn btn-primary">Simpan</button>
                </form>
            </div>

            <div class="tab-pane fade" id="tab2">

                <h5>Matriks Perbandingan</h5>

                <table class="table table-bordered text-center">
                    <tr>
                        <th>Kriteria</th>
                        @foreach ($criterias as $c)
                        <th>{{ $c->code }}</th>
                        @endforeach
                    </tr>

                    @foreach ($result['matrix'] as $i => $row)
                    <tr>
                        <th>{{ $criterias[$i]->code }}</th>
                        @foreach ($row as $val)
                        <td>{{ number_format($val, 2) }}</td>
                        @endforeach
                    </tr>
                    @endforeach

                    <tr>
                        <th>Jumlah</th>
                        @foreach ($result['colSum'] as $sum)
                        <th>{{ number_format($sum, 2) }}</th>
                        @endforeach
                    </tr>

                </table>
            </div>

            <div class="tab-pane fade" id="tab3">

                <h5>Normalisasi Matriks</h5>

                <table class="table table-bordered">
                    <tr>
                        <th>Kriteria</th>
                        @foreach ($criterias as $c)
                        <th>{{ $c->code }}</th>
                        @endforeach
                        <th>Jumlah</th>
                        <th>Prioritas</th>
                    </tr>

                    @foreach ($result['normalized'] as $i => $row)
                    <tr>
                        <th>{{ $criterias[$i]->code }}</th>

                        @php $rowSum = array_sum($row); @endphp

                        @foreach ($row as $val)
                        <td>{{ number_format($val, 2) }}</td>
                        @endforeach

                        <td>{{ number_format($rowSum, 2) }}</td>
                        <td>{{ number_format($result['weights'][$i], 11) }}</td>
                    </tr>
                    @endforeach
                </table>

            </div>

            <div class="tab-pane fade" id="tab4">

                <h5>Matriks Penjumlahan</h5>

                <table class="table table-bordered">
                    <tr>
                        <th>Kriteria</th>
                        @foreach ($criterias as $c)
                        <th>{{ $c->code }}</th>
                        @endforeach
                        <th>Jumlah</th>
                    </tr>

                    @foreach ($result['sumMatrix'] as $i => $row)
                    <tr>
                        <th>{{ $criterias[$i]->code }}</th>

                        @foreach ($criterias as $j => $c)
                        <td>{{ number_format($row[$j], 2) }}</td>
                        @endforeach

                        <td>{{ number_format($row['sum'], 2) }}</td>
                    </tr>
                    @endforeach
                </table>

            </div>


            <div class="tab-pane fade" id="tab5">

                <h5>Rasio Konsistensi</h5>

                <table class="table table-bordered">
                    <tr>
                        <th>Kriteria</th>
                        <th>Jumlah</th>
                        <th>Prioritas</th>
                        <th>Hasil</th>
                    </tr>

                    @foreach ($result['sumMatrix'] as $i => $row)
                    <tr>
                        <th>{{ $criterias[$i]->code }}</th>
                        <td>{{ number_format($row['sum'], 2) }}</td>
                        <td>{{ number_format($result['weights'][$i], 2) }}</td>
                        <td>{{ number_format($row['sum'] / $result['weights'][$i], 9) }}</td>
                    </tr>
                    @endforeach

                    <tr>
                        <th colspan="3">Jumlah</th>
                        <th>
                            {{ number_format(
                        array_sum(array_map(
                            fn($r) => $r['sum'] / $result['weights'][array_search($r, $result['sumMatrix'])],
                            $result['sumMatrix']
                        )),
                    8) }}
                        </th>
                    </tr>
                </table>


                <h5>Perhitungan Konsistensi</h5>
                <p>λ Max = <b>{{ number_format($result['lambdaMax'], 2) }}</b></p>
                <p>CI = <b>{{ number_format($result['CI'], 2) }}</b></p>
                <p>CR = <b>{{ number_format($result['CR'], 2) }}</b></p>

                @if ($result['CR'] > 0.1)
                <div class="alert alert-danger">
                    <b>Rasio Konsistensi > 0.1</b> — Perbandingan tidak konsisten!
                    Silakan lakukan input ulang.
                </div>
                @else
                <div class="alert alert-success">
                    <b>Perbandingan Konsisten</b> — CR ≤ 0.1
                </div>
                @endif

            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".switch-btn").forEach(btn => {
            btn.addEventListener("click", function () {

                let row = btn.closest("tr");

                // ambil field
                let aField = row.querySelector(".a-field");
                let bField = row.querySelector(".b-field");

                // swap values
                let temp = aField.value;
                aField.value = bField.value;
                bField.value = temp;

                // swap label tampilan
                let tds = row.querySelectorAll("td, th");

                let labelA = tds[0].innerHTML;
                let labelB = tds[2].innerHTML;

                tds[0].innerHTML = labelB;
                tds[2].innerHTML = labelA;

            });
        });
    });

</script>


@endsection
