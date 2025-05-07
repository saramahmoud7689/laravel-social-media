<!DOCTYPE html>
<html>
<head>
    <title>Lab 2 - Posts CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lab 2 - Posts CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}">Users</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('comments.index')}}">Comments</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            © 2025 Lab 2 - Posts CRUD
        </div>
    </footer>
</body>
</html>
