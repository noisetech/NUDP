@extends('layouts.fe')


@section('content')
    <section id="feature" class="feature pt-50 pb-50">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Detail Formulation (PDO)</li>
                </ol>
            </nav>


            <div id="contetn-utama" class="mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>Tercerminkan Rencana Spasial Jangka Panjang Pada Pendekatan SDF (Spatial Development
                                Framework)</h4>
                            <br>
                            <p class="text-small text-center text-dark">
                                Pelaksana Komponen: ICP - PUPR
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-7 mb-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="fw-semibold text-small mb-4 color-palette-1">KODE INDIKATOR: DOI 1.1</p>
                                <span class="fw-semibold text-small color-palette-1">
                                    Perumusan Indikator Operasional
                                    <br>
                                    Perkotaan dengan rencana tata ruang jangka panjang yang mencerminkan pendekatan SDF dan
                                    dioperasionalkan melalui satu atau beberapa hal berikut:

                                </span>

                                <ol start="1" class="mt-3">
                                    <li class="text-xs">Revisi penuh RTRW berdasarkan pendekatan </li>
                                    <li class="text-xs">Revisi penuh RTRW berdasarkan pendekatan </li>
                                    <li class="text-xs">Revisi penuh RTRW berdasarkan pendekatan </li>
                                    <li class="text-xs">Revisi penuh RTRW berdasarkan pendekatan </li>
                                    <li class="text-xs">Revisi penuh RTRW berdasarkan pendekatan </li>
                                </ol>

                                <p class="fw-semibold text-small m-0 color-palette-1">
                                    Metodologi
                                </p>

                                <p class="color-palette text-xs mb-2 text-dark">Informasi dan dokumen tentang
                                    Evaluasi Kualitas RTRW</p>


                                <p class="fw-semibold text-small m-0 color-palette-1">
                                    Sumber
                                </p>

                                <p class="color-palette text-xs mb-2 text-dark">Informasi dan dokumen tentang
                                    Pemeritah Kota, Pemerintah Daerah</p>

                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start mb-3">
                                            <p class="fw-semibold text-small m-0 color-palette-1">
                                                Rincian Progress
                                            </p>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="width: 100%; font-size: 12px;">
                                                <thead>
                                                    <tr>
                                                        <th>Uraian</th>
                                                        <th>Status</th>
                                                        <th>Remark</th>
                                                        <th>Periode Progress</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Semarang</td>
                                                        <td>Mengevaluasi</td>
                                                        <td>Dalam Tahapan Integrasi</td>
                                                        <td>2024</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Bandung</td>
                                                        <td>Mengevaluasi</td>
                                                        <td>Dalam Tahapan Koordinasi TKPPN</td>
                                                        <td>2024</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-start">
                                    <p class="fw-semibold text-small m-0 color-palette-1">
                                        Progres
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <canvas id="progressChart" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>




                        {{-- <div class="row mt-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <p class="fw-semibold text-small m-0 color-palette-1">
                                        Report DOI
                                    </p>

                                    <p class="text-sm">
                                        Unduh Halaman ini untuk data terkini
                                    </p>

                                    <div class="d-flex justify-content-center">
                                        <a id="pdo_1_1" class="btn btn-sm text-white text-small" href="#"
                                            style="background-color: #5E63B6 !important;">Generate Document</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="row mt-4">

                    <div class="col-md-6 mb-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-start">
                                    <p class="fw-semibold text-small m-0 color-palette-1">
                                        Capaian DOI
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <canvas id="barChart" width="600" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="fw-semibold text-small m-0 color-palette-1">
                                    Report DOI
                                </p>

                                <p class="text-sm mt-3">
                                    Unduh Halaman ini untuk data terkini
                                </p>


                                <div class="d-flex justify-content-center my-4">
                                    <a class="btn text-white text-sm " href="#" role="button" id="pop-up-generate-ai"
                                        style="background-color: #5E63B6 !important;">Generate Document</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4" style="margin-bottom: 120px;` !important;">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">

                                <div class="d-flex justify-content-between">
                                    <p style="font-size: 14px; color: #0C145A !important; font-weight: 600 !important;">
                                        Sumber Pendukung
                                    </p>


                                    <p class="text-sm"
                                        style="font-size: 12px; color: #0C145A !important; font-weight: 600 !important;">
                                        Percentage of Cities with Long-term Spatial Planning Incorporating SDF
                                    </p>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered" style="width: 100%; font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th>City Name</th>
                                                <th>Percentage of SDF Operationalization</th>
                                                <th>SDF Operationalization
                                                    Method(s) Used</th>
                                                <th>Plan
                                                    Status</th>
                                                <th>Date
                                                    Started</th>
                                                <th>Expected
                                                    Completion Date</th>
                                                <th>Actual
                                                    Completion Date</th>
                                                <th>Responsible Department</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Semarang</td>
                                                <td>80%</td>
                                                <td>(1) Full revision of RTRW, (2) SDF as input for statutory RTRW technical
                                                    document, (5) RDTRs identified based on SDF approach</td>
                                                <td>In Progress</td>
                                                <td>
                                                    2023-01-15
                                                </td>
                                                <td>2023-12-31</td>
                                                <td></td>
                                                <td>
                                                    City Planning Dept.
                                                </td>
                                                <td>
                                                    On schedule
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Semarang</td>
                                                <td>80%</td>
                                                <td>(1) Full revision of RTRW, (2) SDF as input for statutory RTRW technical
                                                    document, (5) RDTRs identified based on SDF approach</td>
                                                <td>In Progress</td>
                                                <td>
                                                    2023-01-15
                                                </td>
                                                <td>2023-12-31</td>
                                                <td></td>
                                                <td>
                                                    City Planning Dept.
                                                </td>
                                                <td>
                                                    On schedule
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Semarang</td>
                                                <td>80%</td>
                                                <td>(1) Full revision of RTRW, (2) SDF as input for statutory RTRW technical
                                                    document, (5) RDTRs identified based on SDF approach</td>
                                                <td>In Progress</td>
                                                <td>
                                                    2023-01-15
                                                </td>
                                                <td>2023-12-31</td>
                                                <td></td>
                                                <td>
                                                    City Planning Dept.
                                                </td>
                                                <td>
                                                    On schedule
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Semarang</td>
                                                <td>80%</td>
                                                <td>(1) Full revision of RTRW, (2) SDF as input for statutory RTRW technical
                                                    document, (5) RDTRs identified based on SDF approach</td>
                                                <td>In Progress</td>
                                                <td>
                                                    2023-01-15
                                                </td>
                                                <td>2023-12-31</td>
                                                <td></td>
                                                <td>
                                                    City Planning Dept.
                                                </td>
                                                <td>
                                                    On schedule
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Semarang</td>
                                                <td>80%</td>
                                                <td>(1) Full revision of RTRW, (2) SDF as input for statutory RTRW technical
                                                    document, (5) RDTRs identified based on SDF approach</td>
                                                <td>In Progress</td>
                                                <td>
                                                    2023-01-15
                                                </td>
                                                <td>2023-12-31</td>
                                                <td></td>
                                                <td>
                                                    City Planning Dept.
                                                </td>
                                                <td>
                                                    On schedule
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Semarang</td>
                                                <td>80%</td>
                                                <td>(1) Full revision of RTRW, (2) SDF as input for statutory RTRW technical
                                                    document, (5) RDTRs identified based on SDF approach</td>
                                                <td>In Progress</td>
                                                <td>
                                                    2023-01-15
                                                </td>
                                                <td>2023-12-31</td>
                                                <td></td>
                                                <td>
                                                    City Planning Dept.
                                                </td>
                                                <td>
                                                    On schedule
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center mt-5 mb-3 sticky-footer">
                    <div class="col-md-8">
                        <div class="card shadow">
                            <div class="card-body">
                                <p style="font-size: 12px;">
                                    <img src="{{ asset('fe/assets/img/bot1.png') }}" alt=""
                                        class="img-fluid mx-2 mb-2" width="60">


                                    <textarea placeholder="Masukan pertanyaan kepada AI" name="pertanyaan_to_ai" id="chatInput"
                                        class="form-control chat-input" rows="1"></textarea>
                                </p>
                                <a href="#" id="generate-ai" class="btn btn-sm mx-1" style="font-size: 12px">
                                    <img src="{{ asset('fe/assets/img/upload.png') }}" alt="" class="img-fluid"
                                        width="40"> Generate AI
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="modal fade" id="modalGenerateAI" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hasil Generate AI</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span>Silahkan tekan tombol close untuk download hasil generate AI</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm text-white" data-bs-dismiss="modal"
                            style="background-color: red"><i class="fas fa-sm fa-times mx-1"></i>Close</button>
                        <button type="button" class="btn btn-sm text-white" data-bs-dismiss="modal"
                            style="background-color: #5E63B6"><i class="fas fa-sm fa-download mx-1"></i>Download</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="modalGenerateReport" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Upload Generate Report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">File:</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm text-white" data-bs-dismiss="modal"
                            style="background-color: red"><i class="fas fa-sm fa-times mx-1"></i>Close</button>
                        <button type="button" class="btn btn-sm text-white" data-bs-dismiss="modal"
                            style="background-color: #5E63B6"><i class="fas fa-sm fa-download mx-1"></i>Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('style')
    <style>
        .sticky-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            margin: 0;
        }

        textarea.chat-input {
            font-size: 12px;
            /* Ukuran font minimal 16px */
            resize: none;
            height: auto;
            min-height: 40px;
            max-height: 120px;
            overflow-y: auto;
            padding: 10px;
            border-radius: 15px;
        }

        footer {
            padding-top: 20px;


            padding-bottom: 80px;
        }
    </style>
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        window.addEventListener('scroll', function() {
            var footer = document.querySelector('footer');
            var sticky = document.querySelector('.sticky-footer');
            var footerRect = footer.getBoundingClientRect();
            var stickyRect = sticky.getBoundingClientRect();

            if (footerRect.top <= window.innerHeight) {

                sticky.style.bottom = (window.innerHeight - footerRect.top) + 'px';
            } else {
                sticky.style.bottom = '0';
            }
        });
    </script>

    <script>
        const ctx = document.getElementById('progressChart').getContext('2d');


        const progress = 75;
        const remaining = 100 - progress;

        const progressChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Progress', 'Remaining'],
                datasets: [{
                    label: 'Progress',
                    data: [progress, remaining],
                    backgroundColor: ['#7E60BF', '#E4B1F0'],
                    borderColor: ['#ffffff', '#ffffff'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const label = tooltipItem.label;
                                const value = tooltipItem.raw;
                                return `${label}: ${value}%`;
                            }
                        }
                    }
                }
            }
        });
    </script>


    <script>
        const ctx2 = document.getElementById('barChart').getContext('2d');

        // Data untuk 5 opsi
        const labels = ['Option 1', 'Option 2', 'Option 3', 'Option 4', 'Option 5'];
        const dataValues = [12, 19, 3, 5, 8]; // Nilai data untuk masing-masing opsi

        const barChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Dataset for 5 Options',
                    data: dataValues,
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)', // Warna untuk tiap opsi
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Memastikan nilai y mulai dari 0
                    }
                },
                responsive: true,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `${tooltipItem.label}: ${tooltipItem.raw}`;
                            }
                        }
                    }
                }
            }
        });


        $(document).on('click', '#pop-up-generate-ai', function() {
            $('#modalGenerateReport').modal('show');
        });


        $(document).on('click', '#generate-ai', function() {
            $('#modalGenerateAI').modal('show');
        });
    </script>
@endpush
