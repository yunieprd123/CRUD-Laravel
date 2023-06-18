<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue overflow-hidden shadow-xl sm:rounded-lg">
            <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>La Tailluer</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>La <em>Tailleur</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

              <li class="nav-item">

              @if (Route::has('login'))
                  @auth
                     <li> <a class="nav-link" href="{{ url('/dashboard') }}" >Dashboard</a></li>
                  @else
                     <li> <a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                      @if (Route::has('register'))
                          <li><a class="nav-link" href="{{ route('register') }}" >Register</a> </li>
                      @endif
                  @endauth
        
          @endif

        </li>



            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>LA TAILLEUR</h2>
            <h4>Home Store La Tailluer</h4>
            <h4>Pilih Model Baju Sesuka Hati</h4>
            <h4>Buka hari ini sampai pukul 20.00</h4>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Penawaran Kilat</h4>
            <h2>Dapatkan Produk Terbaik Anda</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Toko</h2>
              <a href="products.html">Lihat Produk Selengkapnya <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="https://th.bing.com/th/id/OIP.VpnKAOxoicZJ7IxAJdrHxAHaHa?w=185&h=185&c=7&r=0&o=5&pid=1.7" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Baju Kebaya Brokat</h4></a>
                <p class="pt-1 text-gray-900">Rp. 650.000</p>
                <p>Kain brokat dengan motif bunga 2 baju</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Review (24)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="https://th.bing.com/th/id/OIP.X3Gis9QsmxqCl9mOTX1KGwHaHa?pid=ImgDet&w=183&h=183&c=7" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Baju Kebaya Brokat Bunga</h4></a>
                <p class="pt-1 text-gray-900">Rp. 600.000</p>
                <p>Kain brokat dengan motif bunga 2 baju</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Review (24)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="https://th.bing.com/th/id/OIP.kAu1Yei_Kq3bVecn2IMVogHaHa?pid=ImgDet&w=183&h=183&c=7" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Baju Kebaya Brokat Motif</h4></a>
                <p class="pt-1 text-gray-900">Rp. 650.000</p>
                <p>Kain brokat dengan motif bunga 2 baju</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Review (20)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="https://www.bing.com/th?id=OIP.fze1ViVWugOYqRJI_B5_nQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Baju Kemeja Pria</h4></a>
                <p class="pt-1 text-gray-900">Rp. 700.000</p>
                <p>Model kemeja pria formal</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Review (20)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="https://www.bing.com/th?id=OIP.1sh075DHgnZnt0jiyWcfHAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Baju Kemeja Pria Model Panjang</h4></a>
                <p class="pt-1 text-gray-900">Rp. 760.000</p>
                <p>Model kemeja pria formal</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Review (50)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="https://www.bing.com/th?id=OIP.vzGcWw4YFfDvBNtC6fvh7QHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Baju Kemeja Pria</h4></a>
                <p class="pt-1 text-gray-900">Rp. 800.000</p>
                <p>Model kemeja pria formal</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Review (50)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>              
  
</x-template-layout>
