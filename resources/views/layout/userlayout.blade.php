<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
            padding: 1px;
        }
        button {
            padding: 4px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                 <a class="navbar-brand" href="{{-- {{route('home.index')}} --}}"> 
                    <i class="bi bi-book-half"></i> Quản lý thư viện
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{-- {{route('home.index')}} --}}">
                                <i class="bi bi-book"></i> Quản lý sách
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{-- {{route('home.index')}} --}}">
                                <i class="bi bi-people"></i> Quản lý độc giả
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('borrows.index') }}">
                                <i class="bi bi-journal-check"></i> Quản lý mượn trả
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> @yield('username')
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                            <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>