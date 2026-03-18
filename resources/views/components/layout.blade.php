@props([
'title' => 'Angger Page'
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        nav>a {
            color: blue;
        }

        .max-w-400 {
            max-width: 400px;
            margin: auto;
        }

        .card {
            background-color: #e3e3e3;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <main>
        {{ $slot }}
    </main>
</body>

</html>