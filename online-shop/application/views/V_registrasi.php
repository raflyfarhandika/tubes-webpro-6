<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .color-btn{
            background-color: #16bd5c;
        }
    </style>

</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="<?=base_url()?>assets/img-coffee/bg-coffee-removebg.png" class="img-fluid mx-auto d-block" alt="image">
            </div>
            <div class="col-md-6">
                <div class="signup-form">
                    <form class="mt-5 mb-5 border p-4 bg-light shadow rounded" action="<?=site_url('registrasi/daftar_baru')?>" method="post" id="form">
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3>Daftar Akun</h3>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>No HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>No KTP</label>
                                <input type="text" class="form-control" name="no_ktp" id="no_ktp">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>Asal Kota</label>
                                <input type="text" class="form-control" name="asal_kota" id="asal_kota">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
            
                            <div class="mb-3 col-md-12">
                                <button class="btn btn-success color-btn" type="submit" value="registrasi" name="registrasi" id="registrasi">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>