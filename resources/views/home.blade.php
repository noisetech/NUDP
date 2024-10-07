@extends('layouts.fe')

@section('content')
    <!-- Header -->
    <section class="header pt-lg-60 pb-50">
        <div class="container-xxl container-fluid">
            <div class="row gap-lg-0 gap-5">
                <div class="col-lg-6 col-12 my-auto">
                    <p class="text-support text-lg color-palette-2">
                        Selamat datang di SIM NUDP,
                    </p>
                    <h1 class="header-title color-palette-1 fw-bold">
                        Transform Your MIS NUDP Reporting with AI:
                        <span class="d-sm-inline d-none"></span><span class="d-sm-none d-inline"> </span>
                    </h1>
                    <p class="mt-30 mb-40 text-lg color-palette-1">
                        Fast, Accurate, and Effortless
                    </p>
                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none">
                    <div class="d-flex justify-content-lg-end justify-content-center me-lg-5">
                        <div class="position-relative" data-aos="zoom-in">
                            <img src="{{ asset('fe/assets/img/about_ai 1.png') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 Column - Feature -->
    <section id="feature" class="feature pt-50 pb-50">
        <div class="container-fluid">
            <h2 class="text-4xl fw-bold color-palette-1 text-center mb-40">
                Silahkan check <br />
                <span> Laporan Dibawah</span>
            </h2>
            <div class="row gap-lg-0 gap-4" data-aos="fade-up">


                <div class="col-lg-6">
                    <div class="card feature-card border-0">
                        <svg class="mb-30" width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0-icon1" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="80"
                                height="80">
                                <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                            </mask>
                            <g mask="url(#mask0-icon1)">
                                <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                                <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="-12" y="23"
                                    width="67" height="73">
                                    <path d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z" fill="#4D17E2" />
                                </mask>
                                <g mask="url(#mask1)">
                                    <path d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z" fill="#695DE9" />
                                    <path d="M37 55H-4" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M23 64L-4 64" stroke="#B7B0F4" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <rect x="23" y="13" width="52" height="34" rx="13" fill="#5C52C7" />
                                </g>
                                <rect x="27" y="16" width="41" height="27" rx="13" fill="#2B2467" />
                                <circle cx="47.5" cy="29.5" r="5.5" stroke="white" stroke-width="4" />
                            </g>
                        </svg>
                        <p class="fw-semibold text-2xl mb-2 color-palette-1">PDO</p>
                        <p class="text-lg color-palette-1 mb-4">
                            perencanaan dan pengalokasian mengembangkan proyek dari konsep
                            awal hingga menjadi final project
                        </p>

                        <div class="d-md-block d-flex flex-column w-100">
                            <a class="btn text-white text-sm " href="{{ route('pdo') }}" role="button"
                                style="background-color: #5E63B6 !important;">Lihat Laporan</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card feature-card border-0">
                        <svg class="mb-30" width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0-icon1" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="80"
                                height="80">
                                <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                            </mask>
                            <g mask="url(#mask0-icon1)">
                                <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                                <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="-12" y="23"
                                    width="67" height="73">
                                    <path d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z" fill="#4D17E2" />
                                </mask>
                                <g mask="url(#mask1)">
                                    <path d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z" fill="#695DE9" />
                                    <path d="M37 55H-4" stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M23 64L-4 64" stroke="#B7B0F4" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <rect x="23" y="13" width="52" height="34" rx="13" fill="#5C52C7" />
                                </g>
                                <rect x="27" y="16" width="41" height="27" rx="13" fill="#2B2467" />
                                <circle cx="47.5" cy="29.5" r="5.5" stroke="white" stroke-width="4" />
                            </g>
                        </svg>
                        <p class="fw-semibold text-2xl mb-2 color-palette-1">Intermediate Result Indikator</p>
                        <p class="text-lg color-palette-1 mb-4">
                            Membangun dasar utk pengukuran, analisis & evaluasi kinerja organisasi/unit kerja
                        </p>

                        <div class="d-md-block d-flex flex-column w-100">
                            <a class="btn text-white text-sm " href="#" role="button"
                                style="background-color: #5E63B6 !important;">Lihat Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Story -->
    <section class="story pt-50 pb-50">
        <div class="container-xxl container-fluid">
            <div class="row align-items-center px-lg-5 mx-auto gap-lg-0 gap-4">
                <div class="col-lg-7 col-12 d-lg-flex d-none justify-content-lg-end pe-lg-60" data-aos="zoom-in">
                    <img src="{{ asset('fe/assets/img/logo-tentang-kami.png') }}" width="612" height="452"
                        class="img-fluid" alt="" />
                </div>
                <div class="col-lg-5 col-12 ps-lg-60">
                    <div class="">
                        <h2 class="text-4xl fw-bold color-palette-1 mb-30">
                            Tentang Kami
                        </h2>
                        <p class="text-lg color-palette-1 mb-30">
                            Kami menghadirkan solusi cerdas berbasis AI yang dirancang
                            khusus untuk menyederhanakan proses pengelolaan dan penyusunan
                            reporting summary. Kini, Anda bisa menghasilkan laporan yang
                            cepat, akurat, dan mudah dianalisis hanya dengan beberapa klik!
                        </p>
                        <div class="d-md-block d-flex flex-column w-100">
                            <a class="btn btn-read text-lg rounded-pill" href="#" role="button">Read Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
