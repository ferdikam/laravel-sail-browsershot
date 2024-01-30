<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300/50 flex flex-col overflow-x-hidden">
    <header class="mb-16">
        <div class="w-full h-40 bg-white flex flex-row justify-center items-center">
            <h1 class="text-6xl font-black">BladePDF</h1>
        </div>
    </header>
    {{$slot}}
</body>

</html>