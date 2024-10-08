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

        table{
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

        <div class="card shadow">
            <div class="card-body">

                <div class="d-flex justify-content-between mb-4">

                    <span>
                        List Dokumen Ref
                    </span>


                    <a href="javascript:void(0)" class="btn btn-xs text-white" style="background-color: #5e63b6 !important;" id="btnTambah">
                        <i class="fas fa-sm fa-plus text-white text-xs opacity-10 px-1"></i> Add Document Reference
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered m-0" style="width: 100%" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>PIU Component</th>
                                <th>Title</th>
                                <th>Analys</th>
                                <th>Resource</th>
                                <th>Create Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
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


    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>

                </div>
                <div class="modal-body">
                    <form action="#" id="form-store" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Typing name">
                            <span id="name_error" class="text-danger error-text my-2 text-sm"></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="tutupModalTambah">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>

                </div>
                <div class="modal-body">
                    <form action="#" id="form-store" method="POST">
                        @csrf

                        <input type="hidden" name="id" class="form-control" id="id">

                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Typing name"
                                id="name_edit">
                            <span id="name_error_edit" class="text-danger error-text my-2 text-sm"></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="tutupModalTambah">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        new DataTable('#example', {});
    </script>
@endpush
