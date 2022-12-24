<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    @csrf
    <div class="w-[1250px] mx-auto shadow-lg mt-10 p-6">
        <div class="mx-auto">
            <h1 class="text-[70px] font-bold text-center">Judul</h1>
            <div class="flex justify-center">
                <img src="http://localhost:9000/{{ $aspirasi['foto'] }}" class="w-[600px]">
            </div>
            <div class="mt-4">
                <p class="text-[18px] text-slate-900">{{ $aspirasi['cerita'] }}</p>
            </div>
        </div>
    </div>
</body>
</html>