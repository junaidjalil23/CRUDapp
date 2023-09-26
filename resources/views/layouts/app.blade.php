<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <marquee behavior="" direction="">Welcome to Product CRUD APP</marquee> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <body>
    <header>
        <!-- Your header content goes here -->
        <nav>
            <ul>
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>           

                <!-- Add other navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- This is where the content of child views will be inserted -->
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Include JS scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
    <!-- <style>
    .center-table {
        margin: 0 auto;
    }
</style> -->

    <!-- <title>Laravel Product CRUD App</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('products.index') }}">Products</a></li>           //CRUD App code
        </ul>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
    
</body> -->


<!-- CMS Relation Example Laravel -->

</html>
