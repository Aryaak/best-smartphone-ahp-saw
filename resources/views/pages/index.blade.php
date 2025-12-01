@extends('layouts.app')

@section('content')
<div class="row">

    <!-- Total Satuan -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Total Satuan</h6>
                <div class="d-flex align-items-center mb-3">
                    <div>
                        <div class="avatar">
                            <span class="avatar-title bg-warning-bright text-warning rounded-pill">
                                <i data-feather="tag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="font-weight-bold ml-3 font-size-30">{{$totalUnit}}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Kriteria -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Total Kriteria</h6>
                <div class="d-flex align-items-center mb-3">
                    <div>
                        <div class="avatar">
                            <span class="avatar-title bg-primary-bright text-primary rounded-pill">
                                <i data-feather="sliders"></i>
                            </span>
                        </div>
                    </div>
                    <div class="font-weight-bold ml-3 font-size-30">{{$totalCriteria}}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Alternatif -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Total Alternatif</h6>
                <div class="d-flex align-items-center mb-3">
                    <div>
                        <div class="avatar">
                            <span class="avatar-title bg-info-bright text-info rounded-pill">
                                <i data-feather="layers"></i>
                            </span>
                        </div>
                    </div>
                    <div class="font-weight-bold ml-3 font-size-30">{{$totalAlternative}}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Akurasi -->
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Total Akurasi</h6>
                <div class="d-flex align-items-center mb-3">
                    <div>
                        <div class="avatar">
                            <span class="avatar-title bg-success-bright text-success rounded-pill">
                                <i data-feather="check-circle"></i>
                            </span>
                        </div>
                    </div>
                    <div class="font-weight-bold ml-3 font-size-30">100%</div>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- Tabel Satuan Terbaru --}}
<div class="card mt-3">
    <div class="card-body">
        <h6 class="card-title">Satuan Terbaru</h6>
        <div class="table-responsive">
            <table class="table table-datatable">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Dibuat Pada</th>
                        <th>Diubah Pada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latestUnits as $unit)
                    <tr>
                        <td>{{ $unit->name }}</td>
                        <td>{{ $unit->created_at }}</td>
                        <td>{{ $unit->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Tabel Kriteria Terbaru --}}
<div class="card mt-3">
    <div class="card-body">
        <h6 class="card-title">Kriteria Terbaru</h6>
        <div class="table-responsive">
            <table class="table table-datatable">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Satuan</th>
                        <th>Dibuat Pada</th>
                        <th>Diubah Pada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latestCriterias as $criteria)
                    <tr>
                        <td>{{ $criteria->code }}</td>
                        <td>{{ $criteria->name }}</td>
                        <td>{{ ucfirst($criteria->type) }}</td>
                        <td>{{ $criteria->unit->name }}</td>
                        <td>{{ $criteria->created_at }}</td>
                        <td>{{ $criteria->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Tabel Alternatif Terbaru --}}
<div class="card mt-3">
    <div class="card-body">
        <h6 class="card-title">Alternatif Terbaru</h6>
        <div class="table-responsive">
            <table class="table table-datatable">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Dibuat Pada</th>
                        <th>Diubah Pada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latestAlternatives as $alternative)
                    <tr>
                        <td>
                            @if($alternative->image)
                                <img width="40" src="{{ asset('storage/'.$alternative->image) }}" class="rounded mr-3" alt="{{ $alternative->name }}">
                            @endif
                        </td>
                        <td>{{ $alternative->name }}</td>
                        <td>{{ $alternative->created_at }}</td>
                        <td>{{ $alternative->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
