<!DOCTYPE html>
<html lang="en">

<head>
    <title>Footer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@4.1.0/font/bootstrap-icons.css">
</head>
<style>
    .foot {
        width: 50%;
        height: auto;
    }
</style>

<body>
    <footer class="small bg-light">
        <div class="container py-3 py-sm-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <ul class="list-unstyled">
                        <img class="foot" src="images/logo.png" alt="logo">
                        <br>
                        Jl. Bukit Limau VIII, Bringin, Kec. Ngaliyan,
                        Kota Semarang, Jawa Tengah
                        <br>
                        <br>
                        <a href="tel:+621215763693">
                            <i class="fa fa-phone"> </i> 081215763693, 08122851775
                        </a><br>
                        <a href="mailto:info@bprnews.id">
                            <i class="fa fa-envelope"> </i> info@bprnews.id
                        </a>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Info Iklan</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Term of Use</a></li>
                        <li><a href="#">Pedoman Media Cyber</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Contack</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li><a href="{{ route('bpr.index') }}">Bpr</a></li>
                        <li><a href="{{ route('bankumum.index') }}">Bank Umum</a></li>
                        <li><a href="{{ route('lkm.index') }}">LKM</a></li>
                        <li><a href="{{ route('koperasi.index') }}">Koperasi</a></li>
                        <li><a href="{{ route('investasi.index') }}">Investasi</a></li>
                        <li><a href="{{ route('bisnis.index') }}">Bisnis</a></li>
                        <li><a href="{{ route('industri.index') }}">Industri</a></li>
                        <li><a href="{{ route('umkm.index') }}">Umkm</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>Connect With Us</h6>
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li class="mr-1"><a href="#" class="fa fa-facebook fa-lg"></a></li>
                        <li class="mr-1"><a href="#" class="fa fa-twitter fa-lg"></a></li>
                        <li class="mr-3"><a href="#" class="fa fa-instagram fa-lg"></a></li>
                        <li class="mr-3"><a href="#" class="fa fa-linkedin fa-lg"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>