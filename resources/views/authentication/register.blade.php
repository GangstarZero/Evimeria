<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('navbar')

    <div class="login-container">
        <h2>Register</h2>
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="username">Email</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn" id="register">Register</button>
        <div class="register-link">
            <p>Already have an account? <a href="#">Login here</a></p>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#register').click(function(e) {
            e.preventDefault();
            console.log('hi');

            const dataRegister = {
                _token: '{{ csrf_token() }}',
                name: document.getElementById('username').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value
            }

            $.ajax({
                url: '{{ route('auth.register-user') }}',
                type: 'POST',
                data: dataRegister,
                success: function(response, status, xhr) {
                    window.location.href = '{{ route('auth.login') }}';
                },
            })
        })
    })
</script>

</html>
