Kelompok Grand Deal Auto
- Daflah Tsany Gusra_535220177
- Ravelino Radissey_535220181
- Kenneth Marlon Tan_535220183
- Wenly Rusli_535220258

Untuk Memakai website kami ada beberapa hal dulu yang perlu diperhatikan seperti instalasi php extension dan sebagainya.
dari website kami, kami memakai sweetalert untuk pesan notif pemberitahuan serta breeze untuk login dan register user

Step Instal Sweetalert
1. Buka Terminal pada visual studio code
2. tulislah program ini "composer require realrashid/sweet-alert" lalu tekan enter
3. Tunggu sampai instalasi berakhir
4. Kalau sudah extension dari sweetalert bisa dipakai dengan code seperti ini "return redirect()->route('data-pegawai')->with('toast_success', 'Data Berhasil Disimpan!');"
5. Cara memakainya pada bagian ini "->with('toast_success', 'Data Berhasil Disimpan!');"

Step Install Breeze
1. Buka Terminal pada visual studio code
2. tulislah program ini berurutan
   - composer require laravel/breeze
   - php artisan breeze:install, lalu pilih blade, setelah itu untuk dark mode pilih no, dan selanjutnya pilih PHPunit dengan angka 0
   - setelah ke install pada postcss.config.js ada sedikit error. Ini kami berikan codenya. Diganti ya dengan code dibawah ini
    module.exports = {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
        },
    };
   - lalu jalankan npm run build
   - Jika pada bagian app/Http/Providers/RouteServiceProvider belom diganti pada bagian ini
   - Pastikan bagian ini  "public const HOME = '/home';" sama menggunakan /home
   - biasanya setelah install breeze, web.php akan ter restart berdasarkan pengalaman kelompok kami dalam mengcoding web ini. Jadi kami sediakan copyan web.php kami pada bagian dibawah untuk digunakan 
   - lalu pada migration 2014_10_12_000000_create_users_table.php tambahkan "$table->string('usertype')->default('user');"
   untuk user dan admin login
   - lalu daftarkan dua akun terlebih dahulu, yang satu untuk admin dan satu lagi untuk user
   - kalau sudah bukalah pgAdmin dan buka data user tablenya lalu pada usertype kita klik dua kali untuk akun yang ingin dijadikan admin
   - kalau sudah nanti ada field untuk edit silahkan apus user dan gantikan admin pada usertype
   - lalu tekan save untuk menyimpan
   - sekarang web kami sudah bisa dipakai

Step jika ingin cek mail
1. buka file .env
2. lalu scroll sampai ketemu bagian mail dan ubah seperti ini
  - MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=featurete@gmail.com
    MAIL_PASSWORD=gttvrhnuatjphpcg
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS="featurete@gmail.com"
    MAIL_FROM_NAME="${APP_NAME}"
3. Kalau sudah tinggal di save dan jalankan

Ketika sudah php artisan serve
- Login User
1. Tekan Tombol login pada atas kanan halaman welcome kami
2. lalu isi akun user yang sudah dibuat sebelumnya
3. Jika akun benar maka anda akan masuk ke dalam page user

- Login Admin
1. Tekan Tombol login pada atas kanan halaman welcome kami
2. lalu isi akun admin yang sudah dibuat sebelumnya
3. Jika akun benar maka anda akan masuk ke dalam admin page kami

- Jika belum mempunyai akun diharapkan untuk register terlebih dahulu dengan cara
1. Tekan tombol login pada atas kanan
2. Setelah diantarkan ke halaman login ada button untuk sign up, tekan button tersebut
3. Lalu ada animasi dan akan berubah menjadi page register


-------------------------------------------------------------- web.php ---------------------------------------------------------------------
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JualanController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UnggulanMobilController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PembelianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// -------------------------------------- Bagian Pegawai --------------------------------------
Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai');
Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');
Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai');
Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');
Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');
// -------------------------------------- Bagian Pegawai --------------------------------------



// -------------------------------------- Bagian Galeri --------------------------------------
Route::get('/data-galeri', [GaleriController::class, 'index'])->name('data-galeri');
Route::get('/create-galeri', [GaleriController::class, 'create'])->name('create-galeri');
Route::post('/simpan-galeri', [GaleriController::class, 'store'])->name('simpan-galeri');
Route::get('/edit-galeri/{id}', [GaleriController::class, 'edit'])->name('edit-galeri');
Route::post('/update-galeri/{id}', [GaleriController::class, 'update'])->name('update-galeri');
Route::get('/delete-galeri/{id}', [GaleriController::class, 'destroy'])->name('delete-galeri');
// -------------------------------------- Bagian Galeri --------------------------------------



// -------------------------------------- Bagian Header --------------------------------------
Route::get('/data-header', [HeaderController::class, 'index'])->name('data-header');
Route::get('/create-header', [HeaderController::class, 'create'])->name('create-header');
Route::post('/simpan-header', [HeaderController::class, 'store'])->name('simpan-header');
Route::get('/edit-header/{id}', [HeaderController::class, 'edit'])->name('edit-header');
Route::post('/update-header/{id}', [HeaderController::class, 'update'])->name('update-header');
Route::get('/delete-header/{id}', [HeaderController::class, 'destroy'])->name('delete-header');
// -------------------------------------- Bagian Header --------------------------------------



// -------------------------------------- Bagian Jualan --------------------------------------
Route::get('/data-jualan', [JualanController::class, 'index'])->name('data-jualan');
Route::get('/create-jualan', [JualanController::class, 'create'])->name('create-jualan');
Route::post('/simpan-jualan', [JualanController::class, 'store'])->name('simpan-jualan');
Route::get('/edit-jualan/{id}', [JualanController::class, 'edit'])->name('edit-jualan');
Route::post('/update-jualan/{id}', [JualanController::class, 'update'])->name('update-jualan');
Route::get('/delete-jualan/{id}', [JualanController::class, 'destroy'])->name('delete-jualan');
Route::get('/jualan', [JualanController::class, 'index'])->name('jualan.index'); //ravel tambah buat tes search sort
// -------------------------------------- Bagian Jualan --------------------------------------



// -------------------------------------- Bagian Komentar --------------------------------------
Route::get('/data-komentar', [KomentarController::class, 'index'])->name('data-komentar');
Route::get('/create-komentar', [KomentarController::class, 'create'])->name('create-komentar');
Route::post('/simpan-komentar', [KomentarController::class, 'store'])->name('simpan-komentar');
Route::get('/edit-komentar/{id}', [KomentarController::class, 'edit'])->name('edit-komentar');
Route::post('/update-komentar/{id}', [KomentarController::class, 'update'])->name('update-komentar');
Route::get('/delete-komentar/{id}', [KomentarController::class, 'destroy'])->name('delete-komentar');
// -------------------------------------- Bagian Komentar --------------------------------------



// -------------------------------------- Bagian Unggulan Mobil --------------------------------------
Route::get('/data-unggulan', [UnggulanMobilController::class, 'index'])->name('data-unggulan');
Route::get('/create-unggulan', [UnggulanMobilController::class, 'create'])->name('create-unggulan');
Route::post('/simpan-unggulan', [UnggulanMobilController::class, 'store'])->name('simpan-unggulan');
Route::get('/edit-unggulan/{id}', [UnggulanMobilController::class, 'edit'])->name('edit-unggulan');
Route::post('/update-unggulan/{id}', [UnggulanMobilController::class, 'update'])->name('update-unggulan');
Route::get('/delete-unggulan/{id}', [UnggulanMobilController::class, 'destroy'])->name('delete-unggulan');
// -------------------------------------- Bagian Unggulan Mobil --------------------------------------



// -------------------------------------- Bagian Pembelian --------------------------------------
// Route for Komentar Form
Route::get('/komentar/form', [KomentarController::class, 'form'])->name('komentar.form');

Route::resource('pembelian', PembelianController::class);
Route::get('/data-pembelian', [PembelianController::class, 'index'])->name('data-pembelian');
Route::get('/create-pembelian', [PembelianController::class, 'create'])->name('create-pembelian');
Route::post('/simpan-pembelian', [PembelianController::class, 'store'])->name('simpan-pembelian');
Route::get('/edit-pembelian/{id}', [PembelianController::class, 'edit'])->name('edit-pembelian');
Route::post('/update-pembelian/{id}', [PembelianController::class, 'update'])->name('update-pembelian');
Route::get('/delete-pembelian/{id}', [PembelianController::class, 'destroy'])->name('delete-pembelian');
// -------------------------------------- Bagian Pembelian --------------------------------------



// -------------------------------------- Bagian Index Route --------------------------------------
Route::get('/index', [IndexController::class, 'index'])->name('index');
// -------------------------------------- Bagian Index Route --------------------------------------



// -------------------------------------- Bagian Authentication Routes --------------------------------------
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// -------------------------------------- Bagian Authentication Routes --------------------------------------



// -------------------------------------- Bagian Admin Beranda --------------------------------------
Route::get('/admin-beranda', function () {
    return view('admin.admin-beranda'); // Sesuaikan nama view dengan nama file blade yang benar
})->name('admin-beranda');
// -------------------------------------- Bagian Admin Beranda --------------------------------------



// -------------------------------------- Bagian Home Route --------------------------------------
Route::get('/home', function () {
    if (Auth::check()) {
        $usertype = Auth::user()->usertype;

        if ($usertype == 'admin') {
            return redirect('/admin-beranda');
        } else if ($usertype == 'user') {
            return redirect('/index');
        }
    }

    // Jika tidak login, bisa redirect ke halaman login atau ke halaman lainnya
    return redirect('/login');
})->name('home');
// -------------------------------------- Bagian Home Route --------------------------------------



// -------------------------------------- Bagian Welcome Route --------------------------------------
Route::get('/', function () {
    return view('welcome');
});
// -------------------------------------- Bagian Welcome Route --------------------------------------



// -------------------------------------- Bagian Dashboard Route --------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// -------------------------------------- Bagian Dashboard Route --------------------------------------



// -------------------------------------- Bagian Profile Routes --------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// -------------------------------------- Bagian Profile Routes --------------------------------------


Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/roadside', function() {
    return view('roadside');
})->name('roadside');


// Auth Routes
require __DIR__.'/auth.php';

-------------------------------------------------------------- web.php ---------------------------------------------------------------------

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
