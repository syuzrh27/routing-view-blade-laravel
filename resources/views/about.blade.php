<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <title>About Us</title>
</head>
<body class="bg-gray-100">

    <header class="bg-gray-300 py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-semibold">About Us</h1>
            <p class="mt-2 text-gray-700">Learn more about our company and team.</p>
        </div>
    </header>

    <section class="py-10">
        <div class="container mx-auto">
            <h2 class="text-xl font-semibold mb-4">Our Story</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis lorem at mi vulputate, eget cursus neque condimentum.</p>
        </div>
    </section>

    <section class="bg-gray-200 py-10">
        <div class="container mx-auto">
            <h2 class="text-xl font-semibold mb-4">Meet the Team</h2>
            <div class="grid grid-cols-3 gap-8">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-semibold">{{$name1}}</h3>
                <p class="text-gray-700">{{$position1}}</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-semibold">{{$name2}}</h3>
                <p class="text-gray-700">{{$position2}}</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-semibold"><?=$name3?></h3>
                <p class="text-gray-700"><?=$position3?></p>
            </div>
        </div>
    </section>

    <footer class="bg-gray-300 py-4 mt-10">
        <div class="container mx-auto text-center">
            <p class="text-gray-700">&copy; 2023 {{$company}}. All rights reserved.</p>
        </div>
    </footer>

    <script src='js/script.js'></script>
</body>
</html>
