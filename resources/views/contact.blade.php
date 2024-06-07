<h1>contact user dengan nama : {{ $name }}</h1>

@if($name == 'daflah')
    <h2>Halaman admin</h2>
    @else
    <h2>Halaman user</h2>
@endif