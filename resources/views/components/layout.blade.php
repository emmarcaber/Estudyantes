<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center">STUDENTS</h1>
    </div>

    {{ $slot }}

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
