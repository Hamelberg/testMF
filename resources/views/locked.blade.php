<!DOCTYPE html>
<html>
<head>
    <title>Halaman Terkunci</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow p-4" style="min-width: 320px;">
        <h4 class="mb-3">Masukkan Password</h4>
        <form method="POST">
            @csrf
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button type="submit" class="btn btn-primary w-100">Unlock</button>
        </form>
    </div>
</body>
</html>
