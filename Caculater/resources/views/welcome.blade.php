<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caculater</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Discount Caculater</h1>
        <form action="/display-discount" method="POST">
            @csrf
            <p>
                <input type="text" name="describe" placeholder="Nhập mô tả"/>
            </p>
            <p>
                <input type="text" name="price" placeholder="Nhập giá sản phẩm"/>
            </p>
            <p>
                <input type="number" name="discount" placeholder="Nhập tỷ lệ chiết khấu"/>
            </p>
            <p>
                <input type="submit" value="Caculater"/>
            </p>
        </form>
    </body>
</html>
