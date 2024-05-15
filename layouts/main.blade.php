<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-light py-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{ $key == 'home' ? 'active' : ' ' }}" id="home-tab" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $key == 'daftar' ? 'active' : ' ' }}" id="profile-tab" href="/daftar">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $key == 'contact' ? 'active' : ' ' }}" id="contact-tab" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 vh-100">
                 <div class="card mt-4">
                    <div class="card-header" style="background-color: #EDE4E0">
                    <h1 style="text-align: center ; color :#32012F" ><span>&#128133;&#127996;</span> Lilly Nails </h1>
                    </div> 
                    <div class="card-body">
                        @yield('artikel')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
