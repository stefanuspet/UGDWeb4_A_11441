<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #f4f4f4;">
    <nav class="navbar p-3" style="background-color: #212529;">
        <div class="container-fluid navbar-dark bg-dark">
            <a href="/" class="navbar-brand text-white">UGD4_A_11441</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark text-white navbar-link px-3">
                <a href="/" class="text-body-emphasis d-block" style="text-decoration: none;">Home</a>
                <a href="/profile" class="text-body-emphasis d-block" style="text-decoration: none;">Profile</a>
                <a href="/form" class="text-body-emphasis d-block" style="text-decoration: none;">Form</a>
            </div>
        </div>
    </nav>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card rounded" style="width: 44rem;">
            <div class="bg-primary rounded-top text-white fs-5 p-3">
                Form Data Mahasiswa
            </div>
            <form class="card-body">
                <div class="row mb-3">
                    <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputNama" value="{{$nama}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNPM" class="col-sm-4 col-form-label">NPM</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputNPM" value="{{$npm}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEmail" value="{{$email}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputFakultas" class="col-sm-4 col-form-label">Fakultas</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputFakultas" value="{{$fakultas}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputJurusan" class="col-sm-4 col-form-label">Jurusan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputJurusan" value="{{$jurusan}}">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>