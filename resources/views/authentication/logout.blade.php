<script>
    $(document).ready(function() {
        $('#logout').click(function(e) {
            e.preventDefault();

            const dataRegister = {
                _token: '{{ csrf_token() }}',

            }

            $.ajax({
                url: '{{ route('auth.logout') }}',
                type: 'POST',
                data: dataRegister,
                success: function(response, status, xhr) {
                    window.location.href = '{{ route('home') }}';
                },
            })
        })
    })
</script>
