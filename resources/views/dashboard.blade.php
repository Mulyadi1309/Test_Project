@extends('layouts.template')

@section('content')
        <div class="mb-4">
            <div class="fw-bold fs-5 text-white">Profil Akun</div>
        </div>

    <!-- Info Cards -->
    <div class="row g-4">
        <!-- Card Akun -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <h5 class="mb-2 text-primary">ppdb.sma.ac.id</h5>
                            <small class="text-success">Aktif</small>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between text-secondary">
                        <div>
                            <p class="mb-1 fw-semibold">Tanggal Berakhir</p>
                            <p class="mb-1">2024 - 10 - 10</p>
                            <a href="#" class="text-decoration-none text-primary" data-bs-toggle="modal"
                                data-bs-target="#perpanjangModal">Perpanjang</a>
                        </div>
                        <div>
                            <p class="mb-1 fw-semibold">Domain</p>
                            <p class="mb-0">1 domain</p>
                        </div>
                        <div>
                            <p class="mb-1 fw-semibold">Akun Email</p>
                            <p class="mb-0">1 akun aktif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Detail Akun -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="text-secondary mb-0">Tautan Akses</p>
                    <a href="http://ppdb.sma.ac.id"
                        class="text-primary text-decoration-none d-block mb-2">http://ppdb.sma.ac.id</a>

                    <p class="text-secondary mb-0">Username</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-semibold">PPDBSMA123</span>
                        <button class="btn btn-sm btn-outline-secondary" title="Salin">
                            <i class="fa fa-copy"></i>
                        </button>
                    </div>

                    <p class="text-secondary mb-0">Password</p>
                    <a href="#" class="text-primary text-decoration-none">Ubah Password</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Perpanjang Paket -->
    <div class="modal fade" id="perpanjangModal" tabindex="-1" aria-labelledby="perpanjangModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-semibold text-dark" id="perpanjangModalLabel">Perpanjang Paket Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <p class="mb-1 text-secondary">ID Pembayaran</p>
                            <p class="fw-semibold mb-0">EDU01-241029-001</p>
                        </div>
                        <div class="text-end">
                            <p class="mb-1 text-secondary">Invoice</p>
                            <p class="fw-semibold text-success mb-0">EDU01-240103-001</p>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="fw-bold mb-2">Langganan Paket Basic - Bulanan</h6>
                            <p class="text-secondary mb-3">Berakhir tanggal <strong>10 Oktober 2024</strong> • 10 hari lagi
                            </p>
                            <div class="d-flex justify-content-between">
                                <span>Biaya Langganan</span>
                                <span>Rp150.000</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Biaya Layanan</span>
                                <span>Rp20.000</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-semibold">
                                <span>Total Pembayaran</span>
                                <span>Rp170.000</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-secondary small bg-light p-3 rounded">
                        Dengan melakukan pembayaran, Anda dianggap setuju dengan syarat dan ketentuan yang berlaku.
                        Pembatalan biaya perpanjangan langganan dapat dilakukan kapan saja.
                    </p>
                </div>
                <div class="modal-footer border-0 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Perpanjang</button>
                </div>
            </div>
        </div>
    </div>
@endsection
