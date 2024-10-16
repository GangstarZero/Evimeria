<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('navbar.guestNavbar')

    <div class="login-container">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">Email</label>
            <input type="text" id="email" name="Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn" id="login">Login</button>
        <div class="register-link">
            <p>Don't have an account? <a href={{ route('auth.register') }}>Register here</a></p>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#login').click(function(e) {
            e.preventDefault();

            const dataRegister = {
                _token: '{{ csrf_token() }}',
                email: document.getElementById('email').value,
                password: document.getElementById('password').value
            }

            $.ajax({
                url: '{{ route('auth.login-user') }}',
                type: 'POST',
                data: dataRegister,
                success: function(response, status, xhr) {
                    window.location.href = '{{ route('dashboard.home') }}';
                },
                error: function(xhr, status, error) {
                    console.log('Error: ' + error); 

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        alert('Error: ' + xhr.responseJSON
                        .message); 
                    } else {
                        alert('An error occurred. Please try again later.');
                    }
                }
            })
        })
    })
</script>

</html>
