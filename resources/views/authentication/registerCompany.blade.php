@extends('layout.master')

@section('title', 'Register')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
@endsection

@section('content')
    @include('layout.guestNavbar')

    <div class="main-wrapper">
        <div class="login-container">
            <h2>Register</h2>
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="username">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="username">Company Description</label>
                <input type="text" id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" id="register">Register</button>
            <div class="register-link">
                <p>Already have an account? <a href={{ route('login') }}>Login here</a></p>
            </div>
        </div>
        <div class="register-link">
            Register an Account as User?
            <br>
            <a href={{ route('auth.registerUserPage') }}>
                Register here
            </a>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        $(document).ready(function() {
            $('#register').click(function(e) {
                e.preventDefault();

                const dataRegister = {
                    _token: '{{ csrf_token() }}',
                    name: document.getElementById('username').value,
                    address: document.getElementById('address').value,
                    description: document.getElementById('description').value,
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value
                }

                $.ajax({
                    url: '{{ route('auth.register-company') }}',
                    type: 'POST',
                    data: dataRegister,
                    success: function(response, status, xhr) {
                        window.location.href = '{{ route('login') }}';
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
