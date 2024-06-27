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

<!-- roadside -->
<section class="section__container price__container" id="price">
      <p class="section__subheader">BEST PACKAGES</p>
      <h2 class="section__header">Our Pricing Plans</h2>
      <p class="section__description">
        We offer a range of affordable and flexible pricing options.
      </p>
      <div class="price__grid">
        <div class="price__card">
          <h4>SILVER PACKAGE</h4>
          <h3><sup>Rp</sup>35.000,00</h3>
          <p>Routine Maintenance</p>
          <p>Diagnostic Services</p>
          <p>Wheel Alignment</p>
          <p>Brake and Suspension</p>
          <p>Air Conditioning</p>
          <p>Scheduled Maintenance</p>
          <button class="btn">Go Basic</button>
        </div>
        <div class="price__card">
          <div class="price__card__ribbon">BESTSELLER</div>
          <h4>PLATINUM PACKAGE</h4>
          <h3><sup>Rp</sup>69.000,00</h3>
          <p>Routine Maintenance</p>
          <p>Diagnostic Services</p>
          <p>Engine Tune-Ups</p>
          <p>Tire Sales and Services</p>
          <p>Exhaust System Repairs</p>
          <p>Scheduled Maintenance</p>
          <button class="btn">Go Premium</button>
        </div>
        <div class="price__card">
          <h4>GOLD PACKAGE</h4>
          <h3><sup>Rp</sup>39.000,00</h3>
          <p>Routine Maintenance</p>
          <p>Diagnostic Services</p>
          <p>Brake and Suspension</p>
          <p>Scheduled Maintenance</p>
          <p>Wheel Alignment</p>
          <p>Air Conditioning</p>
          <button class="btn">Go Standard</button>
        </div>
      </div>
    </section>

    <!-- end of roadside -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../js/script.js"></script>
</body>
</html>