<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>Welcome to Mina Wisata</title>

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/logo/lowgo.png') }}">

    <!-- Importing Assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>



  <body>
        <!-- ngide -->
        <div class="image-container">
            <div class="tempatfoto">
                <img src="/img/hero/h2_hero.png" alt="" class="custom-image">
            </div>
        </div>


    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
        <a class="navbar-brand" href="welcome">
          <img src="img/logo/logo mina ver2.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="get-week5">Week 5 <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="get-week1">Week 1</a>
            <a class="nav-link" href="get-week2">Week 2</a>
            <a class="nav-link" href="get-week3">Week 3</a>
            <a class="btn btn-primary tombol" href="get-week4">Week 4</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h3 class="display-4">Umrah bersama <br> kami di Mina Wisata</h3>
        <br>
        <a href="welcome" class="btn btn-primary tombol">Informasi Paket Umrah</a>
      </div>
    </div>
    <!-- End of Jumbotron -->

    <br>
    <br>
    <!-- Start of Container -->
    <div class="container">


    <!-- fasilitas Start -->
    <div class="generating-area ">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Apa Saja Fasilitas yang Disediakan?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex mb-30">
                        <div class="generating-icon">
                          <span class="material-symbols-outlined"></span>
                        </div>
                        <div class="generating-cap">
                            <h4>Sudah Termasuk Handling Perlangkapan</h4>
                            <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                se ultrices gravida. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex mb-30">
                        <div class="generating-icon">
                          <span class="material-symbols-outlined"></span>
                        </div>
                        <div class="generating-cap">
                            <h4>Terbang Langsung Tanpa Transit</h4>
                            <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                se ultrices gravida. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex mb-30">
                        <div class="generating-icon">
                          <span class="material-symbols-outlined"></span>
                        </div>
                        <div class="generating-cap">
                            <h4>Free Executive Airport Lounge</h4>
                            <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                se ultrices gravida. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-generating d-flex mb-30">
                        <div class="generating-icon">
                          <span class="material-symbols-outlined"></span>
                        </div>
                        <div class="generating-cap">
                            <h4>Tour Leader dan Muthowif Bersertifikat</h4>
                            <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                se ultrices gravida. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fasilitas End -->





    </div>

    <!-- End of Container -->


    <!-- footer-bottom aera -->
    <br>
    <br>
          <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;
                                    2023 All rights reserved |
                                    by Andika Insan Patria</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Footer End-->








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
