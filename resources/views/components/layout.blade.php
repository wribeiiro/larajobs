<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://sujanbyanjankar.com.np/wp-content/uploads/2020/05/1200px-Laravel.svg_.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Larajobs | Find Laravel Jobs & Projects</title>
</head>

<body>
    <div class="container-fluid py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="{{route('/')}}">
                    <img class="" src="https://sujanbyanjankar.com.np/wp-content/uploads/2020/05/1200px-Laravel.svg_.png" alt="" class="d-flex align-items-center text-dark text-decoration-none" width="50" />
                </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    @auth
                        <a href="{{route('/')}}" class="me-3 py-2 text-dark text-decoration-none">
                            <i class="fa-solid fa-newspaper"></i> Available Jobs
                        </a>
                        <a href="{{route('listings.manage')}}" class="me-3 py-2 text-dark text-decoration-none">
                            <i class="fa-solid fa-gear"></i> Manage Jobs
                        </a>
                        <form class="inline" method="POST" action="{{route('users.logout')}}">
                            @csrf
                            <button class="btn btn-danger" type="submit">
                                <i class="fa-solid fa-door-closed"></i> Logout
                            </button>
                        </form>
                    @else
                        <a href="{{route('users.register')}}" class="me-3 py-2 text-dark text-decoration-none">
                            <i class="fa-solid fa-user-plus"></i> Register
                        </a>
                        <a href="{{route('users.login')}}" class="me-3 py-2 text-dark text-decoration-none">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                        </a>
                    @endauth
                </nav>
            </div>
        </header>

        <main>
            <div class="container">
                <x-flash-message />
            </div>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
