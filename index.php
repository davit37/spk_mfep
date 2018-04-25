<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/sumoselect.min.css">
    <title>Document</title>
    <style>
        select option[data-default] {
            color: #888;
        }

        body {
            background-color: #e8e6e6
        }
    </style>
</head>

<body>

    <div class="container" style="background-color: white;padding-right: 0px;padding-left: 0px;height: 50em;width:70em;">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownfaktor" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Faktor</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownfaktor">
                            <a class="dropdown-item" href="?page=faktor_add">Tambah</a>
                            <a class="dropdown-item" href="?page=faktor_data">Data Faktor</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownsiswa" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Siswa</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownsiswa">
                            <a class="dropdown-item" href="?page=siswa_add">Tambah</a>
                            <a class="dropdown-item" href="?page=siswa_data">Data Siswa</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownPenjulana" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Evaluasi</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownPenjualan">
                            <a class="dropdown-item" href="?page=evaluasi_add">Tambah</a>
                            <a class="dropdown-item" href="?page=penjualan_data">Data Penjualan</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>

            </div>
        </nav>
        <br>
        <div class="row justify-content-md-center">

            <?php include"inc/go.php"; ?>
        </div>

    </div>



    <script src="asset/jquery/jquery.slim.min.js"></script>
    <script src="asset/popper.js/popper.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <script defer src="asset/font-awesome/js/fontawesome-all.min.js"></script>
    <script src="asset/sweetalert2.js"></script>
    <script src="asset/jquery/jquery.sumoselect.min.js"></script>
    <script src="asset/script/app.js?=8"></script>

</body>

</html>