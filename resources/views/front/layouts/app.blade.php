<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'ShilpFab') }}</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('public/front/images/logo.png') }}" type="image/x-icon">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('css')

    <!-- Styles -->
    @include('front.layouts.headerscript')
</head>

<body>
    @yield('content')
</body>

@include('front.layouts.footerscript')
@yield('scripts')
<script>
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function(response) {
                alert('Message sent successfully!');
                $('#contact-form')[0].reset();
            },
            error: function(xhr) {
                alert('Something went wrong!');
            }
        });
    });
</script>

</html>
