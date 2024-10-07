 <!-- Navbar -->
 <section>
     <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white pt-lg-40 pb-lg-40 pt-30 pb-50">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">
                 <img src="{{ asset('fe/assets/img/logo-pupr 4.png') }}" width="150" height="50"
                     class="d-inline-block align-top" alt="" />
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
                     <li class="nav-item my-auto">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item my-auto">
                         <a class="nav-link" href="#">Formulation (PDO)</a>
                     </li>
                     <li class="nav-item my-auto">
                         <a class="nav-link" href="#">Formulation (IR)</a>
                     </li>

                     <li class="nav-item my-auto">
                         <a class="nav-link" href="#">Tentang</a>
                     </li>


                     <li class="nav-item dropdown my-auto">
                         <button class="btn nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                             Buku Panduan
                         </button>
                         <ul class="dropdown-menu dropdown-menu">
                             <li><a class="dropdown-item" href="#">Action</a></li>
                             <li><a class="dropdown-item" href="#">Another action</a></li>
                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </section>
