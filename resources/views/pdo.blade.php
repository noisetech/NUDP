@extends('layouts.fe')


@section('content')
    <section id="feature" class="feature pt-50 pb-50">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Formulation of Project Development Objectives</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-end mb-4">
                <a href="" class="btn btn-sm text-white" style="background-color: #5E63B6 !important;">
                    Pinta Summary AI
                </a>
            </div>

            <div id="contetn-utama">
                <div class="row gap-lg-0 gap-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <div class="card feature-card border-0">
                            <img src="{{ asset('fe/assets/img/Icon.png') }}" alt="" width="50"
                                class="img-fluid my-2">
                            <p class="color-palette text-small mb-2 color-palette-1">Informasi dan dokumen tentang rencana
                                tata
                                ruang jangka panjang yang mencerminkan pendekatan SDF dan dioperasionalkan melalui satu atau
                                beberapa hal</p>
                            <p class="fw-semibold text-small mb-4 color-palette-1">
                                Sumber : Pemkot, Pemda
                            </p>

                            <div class="d-md-block d-flex flex-column w-100">
                                <a id="pdo_1_1" class="btn btn-sm text-white text-small" href="{{ route('detail_pdo') }}"
                                    role="button" style="background-color: #5E63B6 !important;">Detail</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card feature-card border-0">
                            <img src="{{ asset('fe/assets/img/Icon.png') }}" alt="" width="50"
                                class="img-fluid my-2">
                            <p class="color-palette text-small mb-2 color-palette-1">Informasi dan dokumen tentang rencana
                                tata
                                ruang jangka panjang yang mencerminkan pendekatan SDF dan dioperasionalkan melalui satu atau
                                beberapa hal</p>
                            <p class="fw-semibold text-small mb-4 color-palette-1">
                                Sumber : Pemkot, Pemda
                            </p>

                            <div class="d-md-block d-flex flex-column w-100">
                                <a class="btn btn-sm text-white text-small" href="{{ route('pdo') }}" role="button"
                                    style="background-color: #5E63B6 !important;">Detail</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card feature-card border-0">
                            <img src="{{ asset('fe/assets/img/Icon.png') }}" alt="" width="50"
                                class="img-fluid my-2">
                            <p class="color-palette text-small mb-2 color-palette-1">Informasi dan dokumen tentang rencana
                                tata
                                ruang jangka panjang yang mencerminkan pendekatan SDF dan dioperasionalkan melalui satu atau
                                beberapa hal</p>
                            <p class="fw-semibold text-small mb-4 color-palette-1">
                                Sumber : Pemkot, Pemda
                            </p>

                            <div class="d-md-block d-flex flex-column w-100">
                                <a class="btn btn-sm text-white text-small" href="{{ route('pdo') }}" role="button"
                                    style="background-color: #5E63B6 !important;">Detail</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection


@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </script>
    <script>
        $(document).ready(function() {
            console.log(1);

        });
    </script>
@endpush
