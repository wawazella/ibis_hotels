<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">

    <title>Home</title>
</head>

<body>

    <!--open navbar -->
    <nav class="navbar navbar-expand-lg bg-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <h1 class="nav-link-custom" href="">Informasi Kamar Hotel</h1>

                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category">List Kamar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{--close navbar  --}}

    <!--========= open jumbotrom =========-->
    <!-- <div class="column">
    <img src="assets/img/home.jpeg" class="img-jumbotrun-home" alt="..." width="100%">
    </div> -->

    <section class="margin-web-1 container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2 text-center">
                    <img src="{{ asset('assets/img/bg-home.png') }}" class="img-fluid" alt="">
                </div>
                <h6 class="fw-bold" style="font-display: 'Times New Roman', Times, serif;">Jl. Golf Estate Bogor Raya, Sukaraja, Kec. Sukaraja, Kabupaten Bogor, Jawa Barat 16710 <br> Alamat</h6><br><br>
            </div>
        </div>
    </section><br><br><br><br><br><br>
    <!--========== close jumbotrom ==========-->


    <!--========== open content card image ==========-->
    <div class="container">
        <div class="row justify-content-center gap-5">
            <div class="card ms-1 mt-5" style="width: 18rem;">
                <img src="assets/img/img-card-1.png" class="card-img-top mt-3" alt="card1">
                <div class="card-body">
                </div>
            </div>

            <div class="card mt-5" style="width: 18rem;">
                <img src="assets/img/img-card-2.png" class="card-img-top mt-3" alt="...">
                <div class="card-body">
                </div>
            </div>

            <div class="card mt-5" style="width: 18rem;">
                <img src="assets/img/img-card-3.png" class="card-img-top mt-3" alt="...">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr style="border:35px solid #cbe909; ";>

    {{-- close card image --}}

    

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted mt-4">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                
            </div>
            <!-- Left -->

            <!-- Right -->
             
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class=" mt-4">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            INFORMATION
                        </h6>
                        <p>
                            <p href="#!" class="text-reset">Home</p>
                        </p>
                        <p>
                            <p href="#!" class="text-reset">List kamar</p>
                        </p>
                    </div>

                
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            ABOUT US
                        </h6>
                        <p>
                            <p  class="text-reset">provides complete hotel room information, and we also provide very convenient facilities. Apart from that, this hotel provides car rental, taxi and shuttle services to help you go to your desired destination in Bogor.
                                Guests can enjoy free parking at the hotel. Vacation or business trip</p>
                        </p>
                       
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">SOSIAL MEDIA</h6>
                        <div class="row ">
                            <img class=" w-25" src="{{asset('assets/img/fb 1.png')}}" alt="">
                            <img class=" w-25" src="{{asset('assets/img/wa.jpg')}}" alt="">
                            <img class=" w-25" src="{{asset('assets/img/IG1.jpg')}}" alt="">
                        </div>
                        
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(156, 147, 12, 0.05);">
         
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>