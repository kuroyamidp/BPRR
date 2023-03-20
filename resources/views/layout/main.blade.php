<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .navbar {
        margin: auto;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: black;
    }

    .navbar-nav .nav-link.active {
        color: red;
    }

    .navbar-nav {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding-left: 0;
        margin-bottom: 0;
    }

    .navbar-nav>li {
        margin-right: 15px;
    }


    img {
        width: 30%;
        height: auto;
    }

    .line {
        border-bottom: solid black;
    }

    .image-container {
        display: flex;
        justify-content: space-between;
        padding-right: 10px;
    }

    .linee {
        border-right: 1px solid #cccccc;
        width: 120px;
        height: 100px;
        padding: 10px;
    }

    .text {
        line-height: 1.5em;
        text-size-adjust: 1px;
        font-size: small;
        padding: 5px;
    }
    .background{
        background-color: #eeeee8 ;
    }
</style>

<body>
    <div style="display: flex; justify-content: center;">
        <img src="images/logo.png" alt="logo">
    </div>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BPR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BANK UMUN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">LKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KOPERASI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">INVESTASI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">BISNIS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">INDUSTRI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">UMKM</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                    </ul>
                </div>
            </div>
    </div>
    </nav>
    <div class="line"></div>
    @yield('container')
</body>

</html>