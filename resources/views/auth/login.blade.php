<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/login.css">
    <!-- font awesome -->
    <script src="js/all.js"></script>
    <title>Car Dealer</title>
</head>
<body>
<x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <div class="login-register">
            <form method="POST" action="{{ route('login') }}" class="login-form" >
            @csrf
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="email" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-field">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password"
                    required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <input type="submit" value="login" class="btn">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
            </form>
            <form method="POST" action="{{ route('register') }}" class="regis-form">
            @csrf
                <h2 class="title">Register</h2>
                <div class="input-field">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Username" name="name" :value="old('name')" required autofocus autocomplete="name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="input-field">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" placeholder="Email" name="email" :value="old('email')" required autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-field">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password"
                    required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="input-field">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Confirm Password"  name="password_confirmation" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <input type="submit" value="Sign Up" class="btn">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#" class="social-icon">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>  
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Udah Punya Akun Mas Bro?</h3>
                    <p>Nah gitu dong baru gacor</p>
                    <button class="btn" id="login-btn">Login</button>
                </div>
                <img src="img/repairmobil.svg" alt="repair mobil" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Belum Buat Akun Mas Bro?</h3>
                    <p>Belum punya Mobil? Wanita mana mau sini Join ke Grand Deal Auto</p>
                    <button class="btn" id="regis-btn">Sign Up</button>
                </div>
                <img src="img/electriccar.svg" alt="mobil elektrik" class="image">
            </div>
        </div>
    </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/login.js"></script>
</body>
</html>