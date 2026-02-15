<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>{{ $title }}</title>
</head>

<body>

    @include('auth.partials.navbar')

    <section class="login-body">
        <div class="login-card">
            <h3 class="logo">Sign In</h3>

            <p>Access Your Account To Manage Your Data</p>

            <form action="{{ route('loginStore') }}" method="POST">
                @csrf
                @if (session('error'))
                    <div style="color:red; margin-bottom:10px;">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p style="color:red;">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="input-group">
                    <input type="email" placeholder="Email" name="email">
                </div>

                <div class="input-group">
                    <input type="password" placeholder="Password" name="password">
                </div>

                <button type="submit">Login</button>
            </form>

            <p class="signup-text">
                Don't have an account? <a href="{{ route('auth.register') }}">Sign up</a>
            </p>

        </div>
    </section>
</body>

</html>
