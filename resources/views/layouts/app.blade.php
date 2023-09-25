<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <marquee behavior="" direction="">Welcome to Product CRUD APP</marquee> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<style>
    .center-table {
        margin: 0 auto;
    }
</style>

    <title>Laravel Product CRUD App</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('products.index') }}">Products</a></li>
        </ul>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>
