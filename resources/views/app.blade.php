<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @yield('content')
    @extends('components.footer.footer')
    @extends('components.contact.contact')
    @extends('components.feature.feature')
    @extends('components.content.content')
    @extends('components.navigation.navbar')

</body>
</html>
