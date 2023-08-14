<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    
    <title>servis</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-nav">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <h1 class="nav-link-custom" href="">Room Detail Kamar</h1>

                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/category')}}">List Kamar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>
    {{--close navbar  --}}



    {{-- open image content --}}
    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
              <img src="{{ asset('public/gambar_kamar/' . $datakamar->gambar_kamar)}}" alt="" width="100%">
            </div>
        </div>
    </div><br><br>

    <div class="container"><br><br>
        <div class="row">
            <div class="col-12 text-end text-bold">
                @if($datakamar->diskon != null)
                <p><del>RP.{{number_format($datakamar->harga)}}</del> ({{$datakamar->diskon}} %) / Night <br>RP. {{number_format($hasil_harga)}}/Night<br> </p>
                @else
                <p> RP.{{$datakamar->harga}} / Night</p>
                @endif
            </div>
        </div>
    </div><br><br><br>


 {{-- <div class="container"> 
</div>  

<div class="container wight-left mb-5">
    <div style="width: 500px; margin: 0px auto">
        <div class="justify-content-between d-md-flex">
            <div> 
                <p>Bathroom <br>-Designer toiletries <br> -Eco-friendly toiletries <br> -Hairdryer <br> -Private bathroom <br> -Shower <br> -Towels</p>
        </div>
        <div> 
            <p class="text-left">Bedroom <br>-Alarm clock<br>-Bed sheets<br>-Blackout curtains<br>-Climate-controlled air conditioning<br>-Free cots/infant beds<br>-Rollaway/extra beds (surcharge)</p>
        </div>
        <div> 
            <p class="text-left">fasilitas <br>-wifi<br>-Ac<br>-Climate-controlled air conditioning<br>-Free cots/infant beds<br>-Rollaway/extra beds (surcharge)</p>
        </div>
    </div>
    </div>
 </div> --}}
    

  
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h5 class="text-center">Deskripsi Kamar</h5><br>
            <p>{{$datakamar->Deskripsi_kamar}}</p><br><br><br><br><br> 
        </div>
    </div>
  </div>
              
  <hr style="border:35px solid #77750c";><br><br>
            

   
     
  <!-- Footer -->
   
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
                        <p class="text-uppercase mb-4">
                            INFORMATION
                        </p>
                        <p>
                            <p href="#!" class="text-reset " >Home</p>
                        </p>
                        <p>
                            <p href="#!" class="text-reset">List Kamar</p>
                        </p>
                    </div>

                
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <p class="text-uppercase mb-4">
                            ABOUT US
                        </p>
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
                
                <!-- Grid row -->
            
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