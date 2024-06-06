<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>
        By {{ $user->name }} <br>
        Category: {{ $product->category }} <br>
        ID: {{ $product->id }} <br>
        Price: ${{ $product->price }} <br>
        Amount in Stock: {{ $product->amount_in_stock }} <br>
        Description: {{ $product->description }} <br>
    </p>
</body>
</html>