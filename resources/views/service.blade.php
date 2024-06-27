<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/seroad.css">
    <!-- font awesome -->
    <script src="js/all.js"></script>
    <title>Car Dealer</title>
</head>
<body>
    <!-- nav element -->
    <nav x-data="{ open: false }" class="navbar navbar-expand-lg bg-white border-b border-gray-100 px-3" id="navbar">
        <a href="{{route('index')}}" class="navbar-brand">
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
                    <a href="{{route('index')}}" class="nav-link">home</a>
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
            <a href="#" class="nav-icon mr-2">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="nav-icon mr-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="nav-icon mr-2">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </nav>
    <!-- end of nav element -->

<!-- service -->
<section class="service" id="service">
      <div class="section__container service__container">
        <p class="section__subheader">WHY CHOOSE US</p>
        <h2 class="section__header">Great Car Service</h2>
        <p class="section__description">
          Trust us to keep your automobile running smoothly and reliably.
        </p>
        <div class="service__grid">
          <div class="service__card">
            <img src="img/service-1.jpg" alt="service" />
            <h4>Aligned Wheel</h4>
            <p>
              Experience smoother rides and extended tire life with our wheel
              alignment service.
            </p>
          </div>
          <div class="service__card">
            <img src="img/service-2.jpg" alt="service" />
            <h4>Electrical system</h4>
            <p>
              Elevate car's electrical system to peak performance with our
              specialized expertise.
            </p>
          </div>
          <div class="service__card">
            <img src="img/service-3.jpg" alt="service" />
            <h4>System Service</h4>
            <p>
              We utilize cutting-edge diagnostics and techniques to ensure
              optimal condition.
            </p>
          </div>
          <div class="service__card">
            <img src="img/service-4.jpg" alt="service" />
            <h4>Engine Diagnostics</h4>
            <p>
              Unlock the secrets of your car's performance with state-of-the-art
              diagnostic services.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="customisation">
      <div class="section__container customisation__container">
        <p class="section__subheader">OUR CUSTOMISATION</p>
        <h2 class="section__header">
          Car Serving Matched with Great Workmanship
        </h2>
        <p class="section__description">
          Our dedicated team of skilled technicians and mechanics takes pride in
          delivering top-tier servicing for your beloved vehicle.
        </p>
        <div class="customisation__grid">
          <div class="customisation__card">
            <h4>65</h4>
            <p>Total Projects</p>
          </div>
          <div class="customisation__card">
            <h4>165</h4>
            <p>Transparency</p>
          </div>
          <div class="customisation__card">
            <h4>463</h4>
            <p>Done Projects</p>
          </div>
          <div class="customisation__card">
            <h4>5063</h4>
            <p>Got Awards</p>
          </div>
        </div>
      </div>
    </section>

    <!-- end of service -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>