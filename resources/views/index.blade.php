<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/main.css">
  <!-- font awesome -->
  <script src="js/all.js"></script>
  <title>Grand Deal Auto</title>
  <style>
  </style>
</head>
<body>
  <!-- preloader -->
  <div class="preloader d-flex justify-content-center align-items-center">
    <img src="img/preloader.gif" alt="preloader">
  </div>
  <!-- end of preloader -->

  <!-- nav element -->
  <nav x-data="{ open: false }" class="navbar navbar-expand-lg bg-white border-b border-gray-100 px-3" id="navbar">
      <a href="#" class="navbar-brand">
          <img src="img/gearLogo.png" alt="company logo" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
          <span class="navbar-icon">
              <i class="fas fa-bars"></i>
          </span>
      </button>
      <!-- nav links-->
      <div class="collapse navbar-collapse" id="myNav">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                  <a href="#header" class="nav-link">home</a>
              </li>
              <li class="nav-item">
                  <a href="#skills" class="nav-link">skills</a>
              </li>
              <li class="nav-item">
                  <a href="#inventory" class="nav-link">inventory</a>
              </li>
              <li class="nav-item">
                  <a href="#featured" class="nav-link">featured</a>
              </li>
              <!-- Dropdown for User -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('profile.edit') }}">
                          {{ __('Profile') }}
                      </a>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </a>
                      </form>
                  </div>
              </li>
          </ul>
      </div>
      <!-- social icons -->
      <div class="nav-icons d-none d-lg-block">
          <a href="https://www.facebook.com/share/PFhpdZMCpMFwpFPJ/?mibextid=qi2Omg" class="nav-icon mr-2">
              <i class="fab fa-facebook"></i>
          </a>
          <a href="https://x.com/InfoHonda" class="nav-icon mr-2">
              <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.instagram.com/deinamotor?igsh=Ym13aWZta2lzMjc5" class="nav-icon mr-2">
              <i class="fab fa-instagram"></i>
          </a>
      </div>
  </nav>
  <!-- end of nav element -->



  <!-- header -->
  <header class="header" id="header">
      <div class="container-fluid">
      @forelse ($dtHeader as $header)
        <div class="row height-max align-items-center" style="background-image: url('{{ asset('img/'.$header->gambar) }}');">
              <div class="col col-md-9 ml-auto text-right pr-5">
                      <h6 class="title-heading d-inline-block p-2 text-uppercase">{{ $header->slogan }}</h6>
                      <h2 class="text-uppercase my-2 title">{{ $header->judulmobil }}</h2>
                      <h3 class="text-uppercase">{{ $header->model }}</h3>
                      <h6 class="text-capitalize">starts from</h6>
                      <h2>Rp.{{ $header->harga }}
                          <a href="#" class="title-icon d-inline-block mx-2">
                              <i class="fas fa-play"></i>
                          </a>
                      </h2>
                  @empty
                      <h6 class="title-heading d-inline-block p-2 text-uppercase">the all new</h6>
                      <h2 class="text-uppercase my-2 title">2018 mercedes-benz</h2>
                      <h3 class="text-uppercase">model name</h3>
                      <h6 class="text-capitalize">starts from</h6>
                      <h2>$60,000
                          <a href="#" class="title-icon d-inline-block mx-2">
                              <i class="fas fa-play"></i>
                          </a>
                      </h2>
                  @endforelse
              </div>
          </div>
      </div>
  </header>
  <!-- end of header -->

  <!-- skills section -->
  <section class="skills py-5" id="#skills">
    <div class="container">
      <!-- section title -->
      <div class="row mb-5">
        <div class="col d-flex flex-wrap text-uppercase justify-content-center">
          <h1 class="font-weight-bold align-self-center mx-1">why choose</h1>
          <h1 class="section-title--special mx-1">car dealer</h1>
        </div>
      </div>
      <!-- end of section title -->
      <div class="row">
        <!-- single skill -->
        <div class="col-sm-6 col-lg-3 text-center my-3">
          <a href="#skills" class="skills-icon p-2 rounded-circle">
            <i class="fas fa-car fa-fw"></i>
          </a>
          <h6 class="text-uppercase font-weight-bold my-3">
            all brands
          </h6>
          <div class="skills-underline"></div>
          <p class="w-75 mx-auto text-muted">
            Explore a wide selection of all major car brands.
          </p>
        </div>
        <!-- end of single skill -->
        <!-- single skill -->
        <div class="col-sm-6 col-lg-3 text-center my-3">
          <a href="#skills" class="skills-icon p-2 rounded-circle">
            <i class="fas fa-comments fa-fw"></i>
          </a>
          <h6 class="text-uppercase font-weight-bold my-3">
            free support
          </h6>
          <div class="skills-underline"></div>
          <p class="w-75 mx-auto text-muted">
            Enjoy free and helpful customer support services.
          </p>
        </div>
        <!-- end of single skill -->
        <!-- single skill -->
        <div class="col-sm-6 col-lg-3 text-center my-3">
          <a href="#skills" class="skills-icon p-2 rounded-circle">
            <i class="fas fa-people-carry fa-fw"></i>
          </a>
          <h6 class="text-uppercase font-weight-bold my-3">
            caring
          </h6>
          <div class="skills-underline"></div>
          <p class="w-75 mx-auto text-muted">
            Experience our caring and dedicated service approach.
          </p>
        </div>
        <!-- end of single skill -->
        <!-- single skill -->
        <div class="col-sm-6 col-lg-3 text-center my-3">
          <a href="#skills" class="skills-icon p-2 rounded-circle">
            <i class="fas fa-wallet fa-fw"></i>
          </a>
          <h6 class="text-uppercase font-weight-bold my-3">
            affordable
          </h6>
          <div class="skills-underline"></div>
          <p class="w-75 mx-auto text-muted">
            Find affordable pricing options that fit your budget.
          </p>
        </div>
        <!-- end of single skill -->
      </div>
    </div>
  </section>
  <!-- end of skills section -->


  <!-- inventory section -->
  <section id="inventory" class="inventory py-5">
    <div class="container">
      <!-- section title -->
      <div class="row mb-5">
        <div class="col d-flex flex-wrap text-uppercase justify-content-center">
          <h1 class="font-weight-bold align-self-center mx-1">our</h1>
          <h1 class="section-title--special mx-1">inventory</h1>
        </div>
      </div>
      <!-- end of section title -->
      <div class="row mb-5">
        <div class="col-10 mx-auto col-md-12 d-flex justify-content-end">
          <form action="{{ route('index') }}" method="GET" class="form-inline">
              <button type="submit" name="type" value="Sedan" class="btn btn-outline-secondary text-uppercase mx-1">Sedan</button>
              <button type="submit" name="type" value="Jeep" class="btn btn-outline-secondary text-uppercase mx-1">Jeep</button>
              <button type="submit" name="type" value="SUV" class="btn btn-outline-secondary text-uppercase mx-1">SUV</button>
              <button type="submit" name="type" value="Truck" class="btn btn-outline-secondary text-uppercase mx-1">Truck</button>
              <button type="submit" name="type" value="Van" class="btn btn-outline-secondary text-uppercase mx-1">Van</button>
              <button type="submit" name="type" value="" class="btn btn-outline-secondary text-uppercase mx-1">All</button>
              <input type="hidden" name="search" value="{{ request()->input('search') }}">
          </form>
        </div>
      </div>
      <!-- cars -->
    <div class="row">
      @foreach ($dtJualan as $jualan)
      <!-- single car -->
      <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
        <div class="card car-card">
          <img src="{{ asset('img/'.$jualan->gambar) }}" alt="car" class="card-img-top img-fluid car-img">
          <!-- card body -->
          <div class="card-body">
            <div class="car-info d-flex justify-content-between">
              <!-- first flex child -->
              <div class="car-text text-uppercase">
                <h6 class="font-weight-bold">{{ $jualan->merk }}</h6>
                <h6>{{ $jualan->namamobil }}</h6>
              </div>
              <!-- second flex child -->
              <div class="car-value align-self-center py-2 px-3">
                <a href="{{ route('komentar.form', [
                  'gambar' => $jualan->gambar,
                  'harga' => $jualan->harga,
                  'images' => json_encode($jualan->images)
                ]) }}" class="btn btn-link">
                  <h5>Rp <span class="car-price">{{ number_format($jualan->harga, 0, ',', '.') }}</span></h5>
                </a>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex text-capitalize justify-content-between">
            <p><span><i class="fas fa-car"></i></span> {{ $jualan->type }}</p>
            <p><span><i class="fas fa-cogs"></i></span> {{ $jualan->transmission }}</p>
            <p><span><i class="fas fa-gas-pump"></i></span> {{ $jualan->bensin }}</p>
          </div>
        </div>
      </div>
      <!-- end of single car -->
      @endforeach
    </div>
      <!-- end of cars -->
    </div>
  </section>
  <!-- end of inventory section -->


    <!-- other sections (e.g., team section) -->
    <!-- Example section -->
    <section id="our-team">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- Your existing team section code here -->
          </div>
        </div>
      </div>
    </section>
    <!-- End of other sections -->

   

  <!-- question section -->
  <section id="question" class="question py-5">
    <div class="container">
      <div class="row">
        <!-- single question first -->
        <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-grey p-4">
          <!-- first flexbox child -->
          <a href="#" class="question-icon mr-3">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- second flexbox child -->
          <div class="question-text w-75">
            <h4 class="question-title text-capitalize font-weight-bold">are you looking for a car?</h4>
            <p class="question-info">
              Discover our wide selection of cars and find the perfect one for you.
            </p>
          </div>
        </div>
        <!-- single question second -->
        <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-yellow p-4">
          <!-- first flexbox child -->
          <a href="#" class="question-icon mr-3">
            <i class="fas fa-dollar-sign fa-fw"></i>
          </a>
          <!-- second flexbox child -->
          <div class="question-text w-75">
            <h4 class="question-title text-capitalize font-weight-bold">do you want to sell a car?</h4>
            <p class="question-info">
              Sell your car hassle-free with our expert assistance and reach potential buyers.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of question section -->

<!-- featured section -->
<section id="featured" class="featured py-5">
    <div class="container">
        <!-- section title -->
        <div class="row mb-5">
            <div class="col d-flex flex-wrap text-uppercase justify-content-center">
                <h1 class="font-weight-bold align-self-center mx-1">featured</h1>
                <h1 class="section-title--special mx-1">cars</h1>
            </div>
        </div>
        <!-- end of section title -->

        <div class="row">
            <!-- featured info -->
            <div class="col-10 mx-auto col-lg-6 featured-info my-3">
                @forelse ($dtUnggulan as $mobil)
                <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap" onclick="changeImage('{{ asset('img/mobil/'.$mobil->gambarmobil) }}')">
                    <span class="featured-icon mr-2">
                        <i class="fas fa-car"></i>
                    </span>
                    <h5 class="font-weight-bold mx-1">{{ $mobil->nama }}</h5>
                    <h5 class="mx-1">new model</h5>
                </div>
                @empty
                <p>Tidak ada data mobil unggulan.</p>
                @endforelse
            </div>
            <!-- featured image -->
            <div class="col-10 mx-auto col-lg-6 featured-img align-self-center my-3">
                <!-- image container -->
                <div class="img-container">
                    <img src="{{ asset('img/carbmwm5.jpeg') }}" alt="featured photo" class="img-fluid featured-photo" id="featured-photo">
                    <a href="#" class="featured-link">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of featured section -->

<script>
    function changeImage(imageUrl) {
        document.getElementById('featured-photo').src = imageUrl;
    }
</script>




  <!-- gallery section -->
  <section class="gallery py-5" id="gallery">
    <div class="container">
      <!-- section title -->
      <div class="row mb-5">
        <div class="col d-flex flex-wrap text-uppercase justify-content-center">
          <h1 class="font-weight-bold align-self-center mx-1">our</h1>
          <h1 class="section-title--special mx-1">gallery</h1>
        </div>
      </div>
      <!-- end of section title -->
        <div class="gallery-img">
    <div class="content-slide">
        @foreach ($dtGaleri as $index => $galeri)
            <div class="imgslide">
                <div class="numberslide">{{ $index + 1 }}/{{ count($dtGaleri) }}</div>
                <img src="{{ asset('img/'.$galeri->gambar) }}" alt="{{ $galeri->judul }}">
                <div class="text-slide">{{ $galeri['judul'] }}</div>
                <a class="prev" onclick="nextSlide(-1)">&#10094;</a>
                <a class="next" onclick="nextSlide(1)">&#10095;</a>
            </div>
        @endforeach
    </div>

    <div class="page">
        @for ($i = 1; $i <= count($dtGaleri); $i++)
            <span class="dot" onclick="dotSlide({{ $i }})"></span>
        @endfor
    </div>
</div>

      </div>
    </div>
  </section>
  <!-- end of gallery section -->

  <!-- contact -->
  <section class="contact py-5" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8 mx-auto col-md-6">
          <form>
            <div class="form-group">
              <input type="email" class="form-control contact-input p-3" placeholder="Enter Email">
            </div>
            <button type="submit" class="btn btn-outline-secondary btn-block contact-btn">
              submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end of contact -->

  <!-- services section -->
  <div class="container">
    <!-- section title -->
    <div class="row my-5">
      <div class="col d-flex flex-wrap text-uppercase justify-content-center">
        <h1 class="font-weight-bold align-self-center mx-1">our</h1>
        <h1 class="section-title--special mx-1">services</h1>
      </div>
    </div>
    <!-- end of section title -->
  </div>
  <section class="services py-5 d-flex align-items-center" id="services">
    <!-- video container -->
    <div class="video-container">
      <video class="video-item" autoplay loop muted>
        <source src="video/videoBcg.mp4" type="video/mp4">Your browser does not support video tag
      </video>
    </div>
    <!-- end of video container -->
    <!-- video overlay -->
    <div class="video-overlay"></div>
    <!-- end of video overlay -->
    <!-- services content -->
    <div class="container py-5">
      <div class="row my-3">
        <!-- single column -->
        <div class="col-8 mx-auto col-sm-6 col-md-4 my-3">
          <a href="{{ route('service') }}" class="text-decoration-none">
            <div class="service py-5 pl-4">
              <span class="service-icon">
                <i class="fas fa-cogs"></i>
              </span>
              <h6 class="text-capitalize service-title">vehicle</h6>
              <h5 class="text-uppercase font-weight-bold">repair</h5>
            </div>
          </a>
        </div>
        <!-- end of single column -->

        <!-- single column -->
        <div class="col-8 mx-auto col-sm-6 col-md-4 my-3">
          <div class="service py-5 pl-4" onclick="openGoogleMaps()">
            <span class="service-icon">
              <i class="fas fa-map-marked-alt"></i> <!-- Menggunakan ikon map dari FontAwesome -->
            </span>
            <h6 class="text-capitalize service-title">google maps</h6>
            <h5 class="text-uppercase font-weight-bold">location</h5>
          </div>
        </div>

        <script>
          function openGoogleMaps() {
            window.open('https://www.google.com/maps/place/Deina+motor/@-6.2281014,106.7760226,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f1ce9856ac85:0xd22eb75bf4804824!8m2!3d-6.2281067!4d106.7785975!16s%2Fg%2F11lds42rk5?entry=ttu', '_blank');
          }
        </script>

        <!-- end of single column -->
        <!-- single column -->
        <div class="col-8 mx-auto col-sm-6 col-md-4 my-3">
            <a href="{{ route('roadside') }}" class="text-decoration-none">
                <div class="service py-5 pl-4">
                    <span class="service-icon">
                        <i class="fas fa-tags"></i> <!-- Ikon untuk Discount -->
                    </span>
                    <h6 class="text-capitalize service-title">special</h6>
                    <h5 class="text-uppercase font-weight-bold">discount</h5>
                </div>
            </a>
        </div>
        <!-- end of single column -->
      </div>
    </div>
    <!-- end of services content -->
  </section>
  <!-- end of services section -->

  <!-- quotes section -->
  <div class="content">
        <!-- quotes section -->
        <section class="quotes py-5 my-3" id="quotes">
          <div class="container">
            <!-- section title -->
            <div class="row my-5">
              <div class="col d-flex flex-wrap text-uppercase justify-content-center">
                <h1 class="font-weight-bold align-self-center mx-1">what they</h1>
                <h1 class="section-title--special mx-1">say</h1>
              </div>
            </div>
            <!-- end of section title -->

            <div class="row">
              <!-- single card -->
              @forelse ($dtKomentar as $komentar)
                <div class="col-10 mx-auto my-5 col-md-6 col-lg-4">
                  <div class="card">
                    <img src="{{ $komentar->gambarmobil ? asset('img/' . $komentar->gambarmobil) : 'img/default-car.jpg' }}" alt="car" class="img-fluid card-img-top">
                    <!-- card body -->
                    <div class="card-body text-center customer-card-body">
                      <img src="{{ $komentar->gambarprofile ? asset('img/' . $komentar->gambarprofile) : 'img/default-profile.jpg' }}" alt="customer" class="rounded-circle customer-img">
                      <div class="card-title">
                        <h5 class="customer-name text-capitalize">{{ $komentar->nama }}</h5>
                      </div>
                      <h6 class="customer-job text-capitalize">{{ $komentar->job }}</h6>
                      <p class="text-left customer-quote mx-auto">
                        {{ $komentar->komentar }}
                      </p>
                      <span class="customer-icon">
                        <i class="fas fa-quote-left"></i>
                      </span>
                    </div>
                  </div>
                </div>
              @empty
                <p class="col-12 text-center">Tidak ada data komentar.</p>
              @endforelse
              <!-- end of single card -->
            </div>
          </div>
        </section>
        <!-- end of quotes section -->

        <!-- Button section -->
        <section class="py-5 my-3 text-center">
          <a href="{{ route('create-komentar')}}" class="btn btn-primary btn-lg">Buat komenmu sendiri</a>
        </section>
        <!-- End of Button section -->


    <section id="our-team">
        <div class="wrapperrr">
            <section class="quotes py-5 my-3" id="quotes">
                <div class="container">
                    <!-- section title -->
                    <div class="row my-5">
                        <div class="col d-flex flex-wrap text-uppercase justify-content-center">
                            <h1 class="font-weight-bold align-self-center mx-1">OUR</h1>
                            <h1 class="section-title--special mx-1">ADMINS</h1>
                        </div>
                    </div>

                    <div class="wrapperrr-team">
                        @forelse ($dtPegawai as $item)
                            <div class="team-developer">
                                @if($item->gambar)
                                    <img src="{{ asset('img/'. $item->gambar) }}" alt="Gambar Pegawai" class="team-img">
                                @else
                                    <p>Tidak ada gambar</p>
                                @endif
                                <h3>{{ $item->nama }}</h3>
                                <p>{{ $item->nim }}</p>
                            </div>
                        @empty
                            <p>Tidak ada data pegawai.</p>
                        @endforelse
                    </div>
                </div>
            </section>
        </div>
    </section>
  </div>
</section>


 


    <!-- Teams section -->
 
 <!-- End of Teams section -->

  <!-- footer -->
  <footer class="footer py-5" id="footer">
    <div class="footer-icons d-flex flex-wrap justify-content-around">
      <a href="https://www.facebook.com/share/PFhpdZMCpMFwpFPJ/?mibextid=qi2Omg" class="footer-icon">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/deinamotor?igsh=Ym13aWZta2lzMjc5" class="footer-icon">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.semuabis.com/deina-motor_1q-0818-839-770" class="footer-icon">
        <i class="fab fa-google-plus"></i>
      </a>
      <a href="https://x.com/InfoHonda" class="footer-icon">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.linkedin.com/jobs/view/automotive-dealer-account-manager-at-armatus-dealer-uplift-llc-3936210466?position=1&pageNum=0&refId=DE49891PBQbSM%2BjyjDo8GQ%3D%3D&trackingId=jlEI88ZszNtmbRZqNpRKFQ%3D%3D&trk=public_jobs_jserp-result_search-card" class="footer-icon">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
  </footer>
  <!-- end of footer -->



  <!-- jquery -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- script js -->
  <script src="js/script.js"></script>
</body>

</html>