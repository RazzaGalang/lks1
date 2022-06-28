<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BigShot</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Pembayaran</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Keterangan Pengiriman dan Metode Pembayaran</p>
                </div>
            </div>
        </header>

        <section class="h-100" style="background-color: #fff;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Nama Penerima</label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="inputAddress" rows="3" placeholder="1234 Main St"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <textarea class="form-control" id="inputAddress2" rows="3" placeholder="Apartment, Studio, or floor"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Kota</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control" id="kodePos">
                            </div>

                            <p>
                            <hr>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Metode Pembayaran</label>
                                <select id="inputState" class="form-select" disabled>
                                    <option selected>Cash on Delivery</option>
                                </select>
                            </div>

                            <p>
                            <hr>

                            <div class="col-12">
                                <a href="/pembayaran/berhasil">
                                    <button type="submit" class="btn btn-success">Bayar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; BigShot 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
