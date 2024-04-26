<!DOCTYPE html>
<html lang="en">

<head>
    <title>lorem ipsum</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col">
        <div>
            @include('layouts.admin.topbar')
        </div>
        <div class="bg-gray-700">
            @yield('content_page')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>
