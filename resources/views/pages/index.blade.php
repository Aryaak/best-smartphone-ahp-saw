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
                    <div class="font-weight-bold ml-1 font-size-30 ml-3">{{$totalUnit}}</div>
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
                    <div class="font-weight-bold ml-1 font-size-30 ml-3">{{$totalCriteria}}</div>
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
                    <div class="font-weight-bold ml-1 font-size-30 ml-3">{{$totalAlternative}}</div>
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
                    <div class="font-weight-bold ml-1 font-size-30 ml-3">100%</div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="card">
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
                    @foreach ($alternatives as $alternative)
                    <tr>
                        <td>
                            <img width="40" src="../../assets/media/image/products/product1.png" class="rounded mr-3"
                                alt="Vase">
                        </td>
                        <td>Dollie Bullock</td>
                        <td>Dollie Bullock</td>
                        <td>Dollie Bullock</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
