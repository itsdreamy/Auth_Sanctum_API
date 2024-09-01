<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body style="background-image: url('img/bg.jpg'); background-repeat: no repeat; background-size: cover;">
    <div class="container" style="margin-top: 11rem">
        <div class="row justify-content-center align-item-center">
            <div class="col-3">  
                <div class="p-3 px-4 align-item-center" style="background-color: rgba(0, 0, 0, 0.311); width: 20rem; height: 25rem; border-radius: 20px;">
                    <h2 class="text-center text-white mt-4">LOGIN</h2>
                    <form action="{{ route('postlogin') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="email" class="form-label text-white">Email</label>
                          <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-4">
                          <label for="password" class="form-label text-white">Password</label>
                          <input type="password" class="form-control" name="password" required>
                        </div>
                        @if (Session::has('status'))
                        <h6 class="text-danger mb-3">{{ Session::get('status') }}</h5>
                        @endif
                        <button type="submit" class="btn btn-secondary w-100">Login</button>
                        <p class="text-center text-white mt-4">Belum memiliki akun ? <a href="{{ route('signup') }}">Buat Akun</a></p>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>