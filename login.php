<?php
require 'backend.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('tema.jpg'); /* Ganti 'tema.jpg' dengan lokasi dan nama file gambar Anda */
            background-size: cover; /* Menyesuaikan gambar agar terisi seluruh area */
            background-repeat: no-repeat; /* Mencegah gambar diulang */
        }
        .login-form {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang form dengan opasitas */
            padding: 20px; /* Padding untuk meningkatkan ruang di dalam form */
            border-radius: 10px; /* Mengatur sudut border-radius */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); /* Menambahkan bayangan untuk efek 3D */
        }
        .btn-primary {
            background-color: #725E42; /* Ubah warna latar belakang tombol */
            border-color:  #3A2B2D; /* Ubah warna border tombol jika diperlukan */
        }
        .btn-primary:hover {
            background-color:   #3A2B2D; /* Ubah warna latar belakang tombol saat dihover */
            border-color:   #FFF7A9; 
        }
    </style>
</head>
<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 login-form"> <!-- Tambahkan kelas 'login-form' di sini -->
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form method="post">

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputUsername" name="username" type="text" placeholder="username" required />
                                            <label for="inpuUsername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" type="text" placeholder="password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                           <button type="submit" name="login" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
