@extends('layout.master')

@section('title', 'Login')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
@endsection

@section('content')
    @include('layout.guestNavbar')

    <div class="main-wrapper">
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
                <p>Don't have an account? <a href={{ route('auth.registerUserPage') }}>Register here</a></p>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
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
                        window.location.href = response.redirect_url;
                    },
                    error: function(xhr, status, error) {
                        let errorMessage = 'An error occurred';

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON
                                .message;
                        }

                        swal.fire({
                            title: "Gagal",
                            text: errorMessage,
                            icon: "error",
                            button: "Close"
                        });
                    }
                })
            })
        })
    </script>
@endsection
