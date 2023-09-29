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
        <div class="card" style="width: 44rem;">
            <div class="d-flex card-body">
                <img class="rounded-circle border-success border border-4 card-img-center align-self-center justify-content-center" src="https://img.freepik.com/premium-photo/illustration-kitty-cat-kitten-big-eyes-sad-look-princess-beard-graying-hair-profile-crossed_938522-3255.jpg" alt="kucheng" style="width: 10rem; height: 10rem;">
                <div class="align-self-center border-end" style="height: 18rem; margin-right: 20px; margin-left: 15px;"></div>
                <div style="width: 29rem;">
                    <h1><strong>{{$nama}}</strong></h1>
                    <p>Seorang Mahasiswa Informatika UAJY</p>
                    <p><strong>Alamat : </strong>{{$alamat}}</p>
                    <p><strong>Email : </strong>{{$email}}</p>
                    <p><Strong>Telepon : </Strong>{{$telepon}}</p>
                    <p><strong>Hobi : </strong>{{$hobi}}</p>
                    <a href="/form"><button class="btn btn-primary">Form Data Mahasiswa</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>