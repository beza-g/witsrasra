<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>CareerHub | Find Jobs & Projects</title>
    <style>
        .bg-laravel {
            background-color: #004ea7;
        }

        .hover-text-laravel:hover {
            color: #004ea7;
        }

        .bg-overlay {
            background-image: url('images/laravel.png');
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.1;
        }

        body,
        html {
            height: 100%;
            margin: 0;
        }

        .content-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <div class="content">
            @yield('content')
        </div>
        <footer class="bg-laravel text-white text-center py-4 mt-5">
            <div class="container position-relative">
                <p class="mb-0">Copyright &copy; 2024, All Rights Reserved</p>
                <a href="{{ route('list-job') }}" class="btn btn-dark position-absolute end-0 translate-middle-y"
                    style="top: 50%;">Post Job</a>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>

</html>