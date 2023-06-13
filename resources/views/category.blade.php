<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>kategori</title>
</head>
<body>
    <header>
        <!-- Intro settings -->
        <style>
          /* Default height for small devices */
          #intro-example {
            height: 400px;
          }
      
          /* Height for devices larger than 992px */
          @media (min-width: 992px) {
            #intro-example {
              height: 600px;
            }
          }
        </style>

      
       <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <h1 class="nav-link-custom" href="Servis">Room List Kamar</h1>

                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="room-details">List Kamar</a>
                    </li>
                   

                </ul>
            </div>
        </div>
    </nav>
    {{-- close navbar --}}

      
      
        


    <!--open 1 Background image -->
    @foreach ($datakamar as $item)
        <div class="container"><br>
            <div class="row">
                <div class="col-md-12 mt-5">
                <h6 style="font-display: 'Times New Roman', Times, serif;">{{ $item->nama_kamar }}</h6>
                </div>
                <div class="mb-1">
                    <img src="{{ url('public/gambar_kamar/'.$item->gambar_kamar)}}" class="img-fluid " alt="">
                </div>
                    <div class="modal-footer" href="Servis" >
                    <a href="{{url('service/'.$item->id)}}">
                        <button type="button" style="background-color: #b49c4a;" class="btn btn-primary mt-5">Room details</button>
                    </a>
                    </div>
                </div>
        </div>
        </div><br><br><br><br>
    <hr style="border:35px solid #77750c";><br><br>
    @endforeach
    <!--close 1 Background image -->
        
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
                            <P href="#!" class="text-reset">Home</P>
                        </p>
                        <p>
                            <P href="#!" class="text-reset">List kamar</P>
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
                            <p class="text-reset">provides complete hotel room information, and we also provide very convenient facilities. Apart from that, this hotel provides car rental, taxi and shuttle services to help you go to your desired destination in Bogor.
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
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
         
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



      </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>