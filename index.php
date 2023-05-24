
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sistem Pemantauan KKN </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/login.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    
  <div class="container ">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img"
                    src="assets/brand/bappeda.png" 
                    alt="">
                <form class="form-signin" method="POST" action="cek_login.php">
                    <div class="text-center mb-4">
                        <h1 class="h3 mb-3 font-weight-normal">FORM LOGIN</h1>
                        <p>Badan Perencanaan Pembangunan Daerah Kabupaten Bantul</p>
                    </div>

                    <div class="form-label-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required
                            autofocus>
                    </div>

                    <div class="form-label-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>

                    </div>

                    <div class="my-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="level" id="inlineRadio1" value="LPPM">
                            <label class="form-check-label" for="inlineRadio1">LPPM</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="level" id="inlineRadio2"
                                value="Kelurahan">
                            <label class="form-check-label" for="inlineRadio2">Kelurahan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="level" id="inlineRadio2" value="Bappeda">
                            <label class="form-check-label" for="inlineRadio2">Bappeda</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="level" id="inlineRadio2" value="Kapanewon">
                            <label class="form-check-label" for="inlineRadio2">Kapanewon</label>
                        </div>
                    </div>

                    <div class="my-3 d-flex align-items-center">
                        <img src="captha.php" alt="gambar" />
                          <div class="form-label-group m-0">
                            <input type="text" class="form-control" name="kodecaptcha" placeholder="Captha" required autofocus>
                        </div>
                      </div>

                    <button class="btn btn-lg btn-success btn-block" type="submit" name="masuk">Sign in</button>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="lppm/registrasi.html">Belum Punya Akun LPPM</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
