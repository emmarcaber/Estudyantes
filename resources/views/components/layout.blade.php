@props(['heading'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $heading }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center">{{ $heading }}</h1>

        {{ $slot }}
    </div>



    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
