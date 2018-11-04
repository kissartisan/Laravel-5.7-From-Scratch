<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>@yield('title', 'Laravel 5.7 From Scratch')</title>
    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
{{--     <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Form</a></li>
    </ul> --}}

    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>
</body>
</html>
