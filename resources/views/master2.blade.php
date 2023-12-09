<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('Title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <header>
            <br><br>
            <h1>Andika Insan Patria</h1>
            <h4>PWEB A - 5026221211</h4>
            <nav>
                <a href="/blog">HOME</a>
                |
                <a href="/blog/tentang">TENTANG</a>
                |
                <a href="/blog/kontak">KONTAK</a>
            </nav>
        </header>
        <hr />
        <br />
        <br />

        <!-- bagian judul halaman blog -->
        <h3> @yield('judul_halaman') </h3>


        <!-- bagian konten blog -->
        @yield('konten')


        <br />
        <br />
        @yield('bawah')
        <hr />
        <footer>
            <p>&copy; <a href="https://www.instagram.com/thesundaylens">Courtesy of Andika Insan</a> with love</p>
        </footer>
    </div>

</body>

</html>
