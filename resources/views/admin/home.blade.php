@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Data Pelanggan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pelanggan->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Data Tukang</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tukang->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-people-carry fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Data Pemesanan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pesan->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-cart-plus fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Data Pembayaran</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $bayar->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
    </div>
    <div class="card-body">
        <h4 class="small font-weight-bold">Server Migration <span
                class="float-right">20%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Sales Tracking <span
                class="float-right">40%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Customer Database <span
                class="float-right">60%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 60%"
                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Payout Details <span
                class="float-right">80%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Account Setup <span
                class="float-right">Complete!</span></h4>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>


@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush