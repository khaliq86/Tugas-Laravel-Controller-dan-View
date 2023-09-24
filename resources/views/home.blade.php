<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Controller dan View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* CSS untuk mengatur tata letak konten di tengah */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin: 0;
            /* background-color: aquamarine; */
        }
        .container-fluid {
            text-align: center;
            width: 500px;
        }
        .card{
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                    <h1>Halaman Beranda</h1>
                    <div>
                        <a href="/profile" class="btn btn-primary">Profil</a>
                        <a href="/kampus" class="btn btn-primary">Kampus</a>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>