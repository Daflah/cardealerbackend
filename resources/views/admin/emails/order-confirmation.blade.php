<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order. Here are the details:</p>
    <ul>
        <li>Email: {{ $data['email_address'] }}</li>
        <li>Card Holder Name: {{ $data['card_holder_name'] }}</li>
        <li>Expiration Date: {{ $data['expiration_date'] }}</li>
        <li>Country: {{ $data['country'] }}</li>
        <li>Zip Code: {{ $data['zip_code'] }}</li>
    </ul>
    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>Rp <span id="car-price">{{ number_format(request()->get('harga'), 0, ',', '.') }}</span></p>
</body>
</html>
