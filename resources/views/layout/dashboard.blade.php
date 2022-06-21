@extends('main')
@section('judul','Dashboard')
@section('isi')
<div class="row">
    <div class="col-md-3 stretch-card grid-margin" style="height: 150px">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Total Barang <i class="mdi mdi-chart-line mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">$ 15,0000</h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin" style="height: 150px">
      <div class="card bg-gradient-secondary card-img-holder text-white">
        <div class="card-body">
          <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Peminjam <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">45,6334</h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin" style="height: 150px">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Pengembalian <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">45,6334</h2>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin" style="height: 150px">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Operator <i class="mdi mdi-diamond mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">95,5741</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Chart Diagram</h4>
            <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
          </div>
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sarpras History</h4>
          <ul class="list-unstyled list-unstyled-border">
            {{--@foreach ($namapeminjam as $item)--}}
            <li class="media">
                <img class="mr-3 rounded-circle" width="50"
                    src="{{ asset('template') }}/assets/img/avatar/avatar-1.png" alt="avatar">
                <div class="media-body">
                    <div class="float-right text-primary">{{--{{ $item -> created_at -> diffForHumans() }}--}}</div>
                    <div class="media-title">{{--{{ $item -> nama_peminjam }}--}}</div>
                    <span class="text-small text-muted">{{--{{ $item -> barang -> nama_barang }}--}}
                        {{--{{ $item -> status }} Oleh {{ $item -> nama_peminjam }}. Keterangan : {{  $item -> keterangan }}--}}</span>
                </div>
            </li>
            {{--@endforeach--}}
        </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection