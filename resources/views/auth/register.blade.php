<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>register</title>
</head>

<body>
    {{-- NAVBAR START --}}
    @include('auth.partials.navbar')
    {{-- NAVBAR END --}}

    <section class="register-body">
        <div class="register-card">
            <h3 class="logo">Sign In</h3>

            <p>Access Your Account To Manage Your Data</p>

            <form action="{{ route('registerStore') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p style="color:red;">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="input-group">
                    <input type="text" placeholder="Username" name="name">
                </div>

                <div class="input-group">
                    <input type="email" placeholder="Email" name="email">
                </div>

                <div class="input-group">
                    <input type="password" placeholder="Password" name="password">
                </div>

                <div class="input-group">
                    <input type="password" placeholder="Confirm Password" name="password_confirmation">
                </div>

                <button type="submit">Register</button>
            </form>

            <p class="signup-text">
                Have an account? <a href="{{ route('login') }}">Login</a>
            </p>

        </div>
    </section>
</body>

</html>
