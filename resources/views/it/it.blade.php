
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Responsive Layout</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
        }
        .center-box {
            min-height: 100vh; /* full screen */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px; /* biar ada jarak di hp kecil */
        }
        img {
            max-width: 100%;  /* biar ikut lebar device */
            height: auto;     /* biar proporsional */
        }
    </style>
</head>
<body >
    @include('partials.navbar') {{-- Navbar ditaruh di sini --}}
    @include('partials.checklist') {{-- Checklist ditaruh di sini --}}
    @include('partials.footer') {{-- Footer ditaruh di sini --}}


    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>
