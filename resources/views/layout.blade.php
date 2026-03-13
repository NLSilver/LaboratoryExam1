<!DOCTYPE html>
<html>
    <head>
        <title>Characters</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <a class="navbar-brand fw-semibold fs-2 mx-2" href="#">Character Dictionary</a>
        </nav>
        <div class="container mt-5">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            @endif
            @yield('content')

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </body>
</html>