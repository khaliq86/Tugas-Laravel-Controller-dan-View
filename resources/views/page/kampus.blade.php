<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* CSS untuk mengatur tata letak konten di tengah */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            /* background-color: aquamarine; */
        }
        .container-fluid {
            text-align: center;
            width: 600px;
        }
        img {
            width: 100%; /* Mengatur lebar gambar agar tidak terlalu besar */
            height: auto; 
        }
        .card-body{
            background-color: aquamarine;
        }
        .profile-table {
            width: 100%;
            text-align: left; /* Mengatur teks dalam tabel menjadi rata kiri */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                    <h1>Halaman Profil</h1>
                    <div class="card">
                        <div>
                            <img src="{{ asset('asset/ulm.png') }}" alt="Foto Profil" width="200px" height="200px">
                        </div>
                        <div class="card-body">
                            <table class="profile-table">
                                <tr>
                                    <td>
                                        <h5>Nama :</h5>
                                    </td>
                                    <td>
                                        <h6>{{ $univ }}</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Alamat:</h5>
                                    </td>
                                    <td>
                                        <h6>{{ $alamat }}</h6>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        <a href="/" class="btn btn-danger mt-3">Kembali</a>
        <a href="/kampus" class="btn btn-primary mt-3">Kampus</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>