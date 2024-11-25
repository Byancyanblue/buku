<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Contoh Bootstrap</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="styles.css">
</head>  
<body>  
    <div class="container">  
        <h1>Selamat Datang di Bootstrap!</h1>  
    </div>  
    <div class="container">  
        <div class="row">  
            <div class="col-md-4">Kolom 1</div>  
            <div class="col-md-4">Kolom 2</div>  
            <div class="col-md-4">Kolom 3</div>  
        </div>  
    </div>
    <button type="button" class="btn btn-primary">Tombol Utama</button>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">  
        <a class="navbar-brand" href="#">Brand</a>  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  
            <span class="navbar-toggler-icon"></span>  
        </button>  
        <div class="collapse navbar-collapse" id="navbarNav">  
            <ul class="navbar-nav">  
                <li class="nav-item active">  
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>  
                </li>  
                <li class="nav-item">  
                    <a class="nav-link" href="#">Fitur</a>  
                </li>  
            </ul>  
        </div>  
    </nav>
    <div class="card" style="width: 18rem;">  
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">  
        <div class="card-body">  
            <h5 class="card-title">Judul Card</h5>  
            <p class="card-text">Beberapa quick example text untuk membangun konten kartu sederhana.</p>  
            <a href="#" class="btn btn-primary">Lihat Detail</a>  
        </div>  
    </div>
    <!-- Tombol untuk memicu modal -->  
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">  
        Luncurkan Modal  
    </button>  

    <!-- Struktur Modal -->  
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
        <div class="modal-dialog" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title" id="exampleModalLabel">Modal Judul</h5>  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    Konten modal di sini...  
                </div>  
                <div class="modal-footer">  
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>  
                    <button type="button" class="btn btn-primary">Simpan perubahan</button>  
                </div>  
            </div>  
        </div>  
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>