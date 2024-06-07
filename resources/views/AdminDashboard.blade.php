@extends('layouts.master')


@section('sidebar')
    @include('part.sidebar')
@endsection

@section('topbar')
    @include('part.topbar')
@endsection

@section('judul')
    <h1 class="text-primary">Dashboard</h1>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.12.1/date-1.1.2/fc-4.1.0/r-2.3.0/sc-2.0.7/datatables.min.css" />
@endpush


@push('scripts')
    <script src="{{ '/template/vendor/datatables/jquery.dataTables.min.js' }}"></script>
    <script src="{{ '/template/vendor/datatables/dataTables.bootstrap4.min.js' }}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endpush

@section('content')
    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-uppercase mb-1 text-light">Jumlah Buku</div>
                            <div class="text-sm text-light h5 mb-0 font-weight-bold">{{ $buku }}</div>
                            <div class="button mt-2"><a href="/buku" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-book fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-info">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm text-light font-weight-bold text-uppercase mb-1">Kategori</div>
                            <div class="text-sm text-light h5 mb-0 font-weight-bold">{{ $kategori }}</div>
                            <div class="button mt-2"><a href="/kategori" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bookmark fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm text-light font-weight-bold text-uppercase mb-1">Anggota</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-light">{{ $user }}</div>
                            <div class="button mt-2"><a href="/anggota" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-gradient-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm text-light font-weight-bold text-uppercase mb-1" style="font-size:.8`rem;">
                                Riwayat Peminjamam</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-light">{{ $jumlah_riwayat }}</div>
                            <div class="button mt-2"><a href="/peminjaman" class="text-light">Lihat</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table-->
    <h1 class="text-primary"> Riwayat Peminjaman</h1>
    <div class="col-lg-auto">
        <div class="card mb-4">
            <div class="table-responsive p-3">
                <table class="table align-items-center justify-content-center table-flush table-hover" id="dataTableHover"
                    style="font-size:.7rem">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Wajib Pengembalian</th>
                            <th scope="col">Tanggal Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($riwayat_pinjam as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->buku->judul }}</td>
                                <td>{{ $item->buku->kode_buku }}</td>
                                <td>{{ $item->tanggal_pinjam }}</td>
                                <td>{{ $item->tanggal_wajib_kembali }}</td>
                                <td>{{ $item->tanggal_pengembalian }}</td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Area Chart -->
    <div class="col-lg-auto">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                <h3 class="m-0 font-weight-bold text-primary">Grafik Riwayat Peminjaman</h3>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="chartPeminjaman"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // implement chartjs

        axios.get('http://127.0.0.1:8001/listAllPeminjaman').then(({
            data
        }) => {
            console.log(data);

            var ctx = document.getElementById("chartPeminjaman");

            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data.tanggal_pinjam,
                    datasets: [{
                        label: "Earnings",
                        lineTension: 0.3,
                        backgroundColor: "rgba(78, 115, 223, 0.5)",
                        borderColor: "rgba(78, 115, 223, 1)",
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(78, 115, 223, 1)",
                        pointBorderColor: "rgba(78, 115, 223, 1)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        fill: true,
                        data: data.peminjaman,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'date'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                maxTicksLimit: 5,
                                padding: 10,
                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    return '$' + number_format(value);
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }],
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        intersect: false,
                        mode: 'index',
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                            }
                        }
                    }
                }
            });
        })
    </script>
@endsection
