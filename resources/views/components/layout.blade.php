<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'FootStats' }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>