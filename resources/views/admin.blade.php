<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="cssadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cssadmin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="cssadmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/transaksi">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Transaksi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-table"></i>
                    <span>BigShot Menu</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="cssadmin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            @if ($errors -> all())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Kesalahan!</strong> Pastikan anda mengisi form dengan benar!
                            </div>
                            @endif

                            @if (session('messagehapus'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('messagehapus')}}
                            </div>
                            @endif

                            @if (session('messagetambah'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('messagetambah')}}
                            </div>
                            @endif

                            @if (session('messageedit'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                                {{session('messageedit')}}
                            </div>
                            @endif

                            <a href="#" data-toggle="modal" data-target="#tambahModal">
                                <button type="submit" name="tambahdata" class="btn btn-success">
                                    Tambah Data
                                </button>
                            </a><p></p>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Produk ID</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($produk as $index => $p )

                                        <tr>
                                            <td>{{$p -> gambar}}</td>
                                            <td>{{$p -> produk_id}}</td>
                                            <td>{{$p -> nama_produk}}</td>
                                            <td>{{$p -> kategori_id}}</td>
                                            <td>{{$p -> deskripsi}}</td>
                                            <td>{{$p -> harga}}</td>
                                            <td>
                                                <center>
                                                    <a href="#" data-toggle="modal" data-target="#editModal{{$p->produk_id}}" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a>

                                                    <a href="#" data-toggle="modal" data-target="#hapusModal{{$p->produk_id}}" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>

                                        <!-- Edit Modal-->
                                        <div class="modal fade" id="editModal{{$p->produk_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formguruedit" id="formguredit" action="/produk/edit/{{$p->produk_id}} " method="get" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PUT') }}

                                                            <div class="form-group row">
                                                                <label for="nama_produk" class="col-sm-4 col-form-label">Nama Produk</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{old('nama_produk', $p->nama_produk)}}">
                                                                    @error('nama_produk')
                                                                        <span class = "invalid-feedback">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <p>
                                                            <div class="form-group row">
                                                                <label for="kategori_id" class="col-sm-4 col-form-label">Kategori ID</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" value="{{old('kategori_id', $p->kategori_id)}}">
                                                                    @error('kategori_id')
                                                                        <span class = "invalid-feedback">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <p>
                                                            <div class="form-group row">
                                                                <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{old('deskripsi', $p->deskripsi)}}">
                                                                    @error('deskripsi')
                                                                        <span class = "invalid-feedback">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <p>
                                                            <div class="form-group row">
                                                                <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{old('harga', $p->harga)}}">
                                                                    @error('harga')
                                                                        <span class = "invalid-feedback">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <p>
                                                            <div class="form-group row">
                                                                <label for="gambar" class="col-sm-4 col-form-label">Gambar</label>
                                                                <div class="col-sm-8">
                                                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{old('gambar', $p->gambar)}}">
                                                                    @error('harga')
                                                                        <span class = "invalid-feedback">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <p>
                                                            <div class="modal-footer">
                                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <a href="/produk/edit/{{$p->produk_id}}">
                                                                    <button type="submit" name="produkedit" class="btn btn-success">Edit</button>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Hapus Modal-->
                                        <div class="modal fade" id="hapusModal{{$p->produk_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Apakah ingin menghapus data?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Ketuk "Hapus" untuk menghapus data.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <a class="btn btn-danger" href="produk/hapus/{{$p->produk_id}}">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BigShot 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Modal-->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="formtambahproduk" id="formtambahproduk" action="/produk/tambah" method="GET" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="judul" class="col-sm-4 col-form-label">Nama Produk</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Masukan Nama Produk" value=" {{ old('nama_produk')}} ">
                                @error('nama_produk')
                                    <span class = "invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" placeholder="Masukan Kategori ID" value=" {{ old('kategori_id')}} ">
                                @error('kategori_id')
                                    <span class = "invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="plat" class="col-sm-4 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi" value=" {{ old('deskripsi')}} ">
                                @error('deskripsi')
                                    <span class = "invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <p>
                            <div class="form-group row">
                                <label for="plat" class="col-sm-4 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukan Harga" value=" {{ old('harga')}} ">
                                    @error('harga')
                                        <span class = "invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <p>
                                <div class="form-group row">
                                    <label for="plat" class="col-sm-4 col-form-label">Gambar</label>

                                    <div class="col-sm-8">
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" placeholder="Masukan Gambar" value=" {{ old('gambar')}} ">
                                        @error('gambar')
                                            <span class = "invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="produktambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="cssadmin/vendor/jquery/jquery.min.js"></script>
    <script src="cssadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="cssadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="cssadmin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="cssadmin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="cssadmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="cssadmin/js/demo/datatables-demo.js"></script>

</body>

</html>
