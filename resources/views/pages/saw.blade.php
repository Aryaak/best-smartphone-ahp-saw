@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h6 class="card-title">SAW - Simple Additive Weighting</h6>

        <ul class="nav nav-tabs" id="sawTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#decisionMatrix">Matriks Keputusan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#finalCalculation">Perhitungan Akhir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#ranking">Ranking</a>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <!-- Tab 1: Matriks Keputusan & Normalisasi -->
            <div class="tab-pane fade show active" id="decisionMatrix">
                <h6>Matriks Keputusan</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                @foreach($criterias as $c)
                                    <th>{{ $c->code }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alternatives as $alt)
                            <tr>
                                <td>{{ $alt['code'] }}</td>
                                <td>{{ $alt['name'] }}</td>
                                @foreach($criterias as $c)
                                    <td>{{ $alt['values'][$c->code] ?? 0 }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <h6 class="mt-4">Normalisasi Matriks</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                @foreach($criterias as $c)
                                    <th>{{ $c->code }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($normalized as $alt)
                            <tr>
                                <td>{{ $alt['code'] }}</td>
                                <td>{{ $alt['name'] }}</td>
                                @foreach($criterias as $c)
                                    <td>{{ $alt['values'][$c->code] ?? 0 }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab 2: Perhitungan Weighted Sum -->
            <div class="tab-pane fade" id="finalCalculation">
                <h6>Perhitungan Weighted Sum</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                @foreach($criterias as $c)
                                    <th>{{ $c->code }}</th>
                                @endforeach
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($weightedSum as $alt)
                            <tr>
                                <td>{{ $alt['code'] }}</td>
                                <td>{{ $alt['name'] }}</td>
                                @foreach($criterias as $c)
                                    <td>{{ $alt['weighted'][$c->code] ?? 0 }}</td>
                                @endforeach
                                <td>{{ $alt['total'] ?? 0 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab 3: Ranking -->
            <div class="tab-pane fade" id="ranking">
                <h6>Ranking Alternatif</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ranking as $index => $alt)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $alt['code'] }}</td>
                                <td>{{ $alt['name'] }}</td>
                                <td>{{ $alt['total'] ?? 0 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
