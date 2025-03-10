@extends('layouts.base-admin')

@section('title')
    <title>Dashboard Dosen | MBKM Poliwangi</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="card card-custom rounded ">
                    <div class="card-body">
                        <h3 class="card-title">Dashboard
                            @auth
                                @role('wadir')
                                    Wadir 1
                                @endrole

                                @role('kaprodi')
                                    Kaprodi
                                @endrole

                                @role('dosen')
                                    Dosen
                                @endrole

                                @role('dosen-wali')
                                    Dosen Wali
                                @endrole

                                @role('dosen-pembimbing')
                                    Dosen Pembimbing
                                @endrole
                            @endauth
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card rounded">
                    <img src="{{ asset('assets/images/4905784.jpg') }}">
                    <div class="card-body">
                    </div>
                </div>
            </div>

            {{-- content --}}
            <div class="row py-2">
                @role('kaprodi')
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('kaprodi.daftar.transkrip.index') }}">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Daftar Transkrip Nilai</h4>
                                    </div>
                                    <div class="card-body">
                                        {{-- {{ $daftar_transkrip_nilai_count }} --}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Laporan Akhir</h4>
                                </div>
                                <div class="card-body">
                                    47
                                </div>
                            </div>
                        </div>
                    </div>
                @endrole

                @role('dosen-wali')
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-check-to-slot"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Kelayakan Mahasiswa</h4>
                                </div>
                                <div class="card-body">
                                    1,201
                                </div>
                            </div>
                        </div>
                    </div>
                @endrole

                {{-- card dosen pendamping (blm ada) --}}
                {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Laporan Harian</h4>
                            </div>
                            <div class="card-body">
                                47
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Laporan Mingguan</h4>
                            </div>
                            <div class="card-body">
                                47
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
