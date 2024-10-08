<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="default-2.html" target="_blank">
            <img src="{{ asset('be/assets/img/logo-histack.jpg') }}" class="navbar-brand-img h-200" alt="main_logo" />
            <span class="ms-1 font-weight-bold">MIS PMS NUDP</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-xs">Dashboard</span>
                </a>
            </li>





            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#manajemenDokumen" class="nav-link" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-xs">Manajemen Dokumen</span>
                </a>
                <div class="collapse" id="manajemenDokumen">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a href="{{ route('manajemen-dokumen-bapernas') }}" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">Bapernas</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">Kemendagri</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">PUPR</span>
                            </a>

                        </li>





                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#manajemenProgresNudp" class="nav-link" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-xs">Manajemen Progres NUDP</span>
                </a>
                <div class="collapse" id="manajemenProgresNudp">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">Progres DPO</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">Progres Kegiatan</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#manajemenProgresNudp" class="nav-link" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-xs">Analisis Data</span>
                </a>
                <div class="collapse" id="manajemenProgresNudp">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">ICP</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">NUDS</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">CIP</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">CPS</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#manajemenProgresNudp" class="nav-link"
                    aria-controls="authExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-xs">Pengaturan</span>
                </a>
                <div class="collapse" id="manajemenProgresNudp">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a href="{{ route('permissions') }}" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-cog text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">Permission</span>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ route('role') }}" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">Role</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link">
                                <div
                                    class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                    <i class="fa fa-users text-primary text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1 text-xs">User</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>



        </ul>
    </div>
    {{-- <div class="sidenav-footer mx-3 my-3">
    <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-60 mx-auto"
            src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/illustrations/icon-documentation.svg"
            alt="sidebar_illustration" />
        <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
                <h6 class="mb-0">Need help?</h6>
                <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
            </div>
        </div>
    </div>
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard" target="_blank"
        class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
</div> --}}
</aside>
