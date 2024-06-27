<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/FORM.css') }}">
    <style>
        .selected-car {
            display: none;
            margin-top: 20px;
        }
        .selected-car img {
            max-width: 100px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('img/'.request()->get('gambar')) }}" class="pic rounded-circle" alt="">
                <p class="ps-2 name">User</p>
            </div>
            <div class="box-inner-1 pb-3 mb-3">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Checkout Form</p>
                    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>Rp <span id="car-price">{{ number_format(request()->get('harga'), 0, ',', '.') }}</span></p>
                </div>
                @php
                    $images = json_decode(request()->get('images'), true) ?? [];
                @endphp
                <div class="image-list mt-3">
                    @foreach ($images as $index => $jualan)
                        <img src="{{ asset('img/'.$jualan) }}" class="img-thumbnail mb-2" data-index="{{ $index }}" onclick="selectImage(this)" alt="">
                    @endforeach
                    @if (empty($images))
                        <img src="{{ asset('img/'.request()->get('gambar')) }}" class="img-thumbnail mb-2" alt="Placeholder Image">
                    @endif
                </div>
            </div>
        </div>
        <div class="card mt-5 ms-lg-5">
            <div class="card-header">
                <h3>Checkout Form</h3>
            </div>
            <div class="card-body">
                <div class="selected-car">
                    <img id="selectedCarImage" src="" alt="Selected Car">
                    <h5>Price: Rp <span id="selectedCarPrice"></span></h5>
                </div>
                <form id="checkoutForm" method="post" action="{{ route('pembelian.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label for="email_address">Email address</label>
                        <input type="email" class="form-control" id="email_address" name="email_address" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="card_number">Card Information</label>
                        <div class="inputWithIcon card-atm border rounded">
                            <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card number" required>
                            <i class="fas fa-credit-card"></i>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="card_holder_name">Card Holder Name</label>
                        <input type="text" class="form-control" id="card_holder_name" name="card_holder_name" placeholder="Name on the card" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="expiration_date">Expiration Date</label>
                            <input type="text" class="form-control" id="expiration_date" name="expiration_date" placeholder="MM/YY" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="zip_code">Zip Code</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip code" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Your JavaScript logic here
        function selectImage(element) {
            // Implement image selection logic if needed
        }
    </script>
</body>
</html>
