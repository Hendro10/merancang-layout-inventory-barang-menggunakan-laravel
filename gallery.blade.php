<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link href="/css/bootstrap.min.css" rel="stylesheet">
                        <title>Nama Barang</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/barang">Nama Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/databarang">Data Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/gallery">Gallery</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container text-center mt-3 p-4 bg-white">
            <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="/img/gambar1.jpg"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/gambar2.jpg"
                class="img-thumbnail img-fluid">
                </div>
            <div class="col-4">
                <img src="/img/gambar3.jpg"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/img/gambar4.jpg"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/img/gambar5.jpg"
                class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/F8t2VGnI47I/350x250"
                class="img-thumbnail img-fluid">
            </div>
        </div>
        </div>
        <footer class="bg-dark py-4 text-white mt-4">
            <div class="container">
                Sistem Informasi Barang | Copyright © {{ date("d-m-Y") }} Dunia Inventory
            </div>
        </footer>
    </body>
</html>