@extends('layouts.be')

@section('title', 'Manajemen Dokumen Bapernas')
@section('content')
    <style>
        .dt-paging {
            margin-top: 20px !important;
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 60px !important;
            display: inline-block !important;
        }

        .breadcrumb-item+.breadcrumb-item:before {
            content: "/" !important;
        }

        table {
            font-size: 12px !important;
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-selection__placeholder {
            font-size: 12px !important;
        }
    </style>


    <div class="container-fluid py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bappenas</li>
            </ol>
        </nav>



        <a href="{{ route('manajemen-dokumen-bapernas') }}" class="btn btn-sm btn-white" style="color: #999 !important;">
            <i class="fas fa-sm fa-arrow-left"></i> Kembali
        </a>

        <div class="card shadow">
            <div class="card-body">

                <div class="d-flex justify-content-end mb-4">



                    <a href="javascript:void(0)" class="btn btn-xs text-white" style="background-color: #5e63b6 !important;"
                        id="btnTambah">
                        <i class="fas fa-sm fa-plus text-white text-xs opacity-10 px-1"></i> Add Document Reference
                    </a>
                </div>

                <form action="#" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Indicator TKSPPN:</label>
                                <select name="" class="form-control" id="indikator-tksppn"></select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Source:</label>
                                <input type="text" placeholder="Input source" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date:</label>
                                <input type="text" placeholder="Masukan source" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 mt-4">
                            <div class="form-group d-flex align-items-center">
                                <div class="form-check form-switch">
                                    <label for=""></label>
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="file-upload-wrapper"
                                style="position: relative; border: 2px dashed #ddd; padding: 40px; border-radius: 10px;">
                                <input type="file" name="file" id="file-upload" style="display:none;"
                                    accept=".xlsx,.csv,.pdf">
                                <div class="d-flex justify-content-center">
                                    <label for="file-upload" class="file-upload-label" style="cursor: pointer;">
                                        <div class="text-center">
                                            <img src="{{ asset('be/assets/img/gambar-icon-upload-file.png') }}"
                                                alt="Upload Icon" style="width: 100px; margin-bottom: 20px;">
                                        </div>
                                        <p
                                            style="color: #5e63b6 !important; font-size: 12px !important; text-align: center;">
                                            Upload Files</p>
                                        <p
                                            style="color: #5e63b6 !important; font-size: 12px !important; text-align: center;">
                                            XLSX, CSV and PDF files are allowed</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="text" id="file-path" class="form-control mt-3" placeholder="File Path" readonly>

                    <div class="float-right mt-3">
                        <button class="btn btn-sm btn-primary" type="submit" style="background-color: #5e63b6 !important;">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <footer class="footer pt-3  ">
            {{-- <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>2024,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/" class="nav-link text-muted" target="_blank">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </footer>
    </div>



@endsection

@push('script')
    <script>
        var $jquery = jQuery.noConflict();

        $jquery(document).ready(function() {
            $jquery('#indikator-tksppn').select2({
                multiple: false,
                placeholder: '--Select Indikator--',
                allowClear: true,
            });

        });

        document.getElementById('file-upload').addEventListener('change', function() {
            var filePath = this.value.split('\\').pop();
            document.getElementById('file-path').value = filePath;
        });
    </script>
@endpush
