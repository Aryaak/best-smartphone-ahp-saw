@extends('layouts.app')

@section('content')
<div class="row">

    <!-- Total Kriteria -->
    <div class="col-md-4">
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
    <div class="col-md-4">
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
    <div class="col-md-4">
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
            <table id="recent-orders" class="table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Dibuat Pada</th>
                        <th>Diubah Pada</th>
                        <th class="text-right">Aksi</th>
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
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-primary" title="Edit">
                                <i data-feather="edit-2"></i>
                            </a>

                            <a href="#" class="btn btn-sm btn-danger ml-1" title="Delete">
                                <i data-feather="trash-2"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
