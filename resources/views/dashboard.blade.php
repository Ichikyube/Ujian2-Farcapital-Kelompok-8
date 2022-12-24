<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog-C</title>
</head>
<body>
    <div class="w-[1370px] mx-auto p-2">
        <div class="w-[1250px] mx-auto">
            <nav class="flex gap-20 items-center">
                <h1 class="text-[40px] font-bold text-slate-900">ASPIRASI-<span class="text-[50px] font-bold text-yellow-600">Q</span></h1>
                <ul class="flex gap-14">
                    <li><a class="text-[20px] text-slate-900 text-bold font-sans bg-transparent p-3 text-center hover:bg-slate-800 rounded-lg hover:text-white duration-200 hover:ease-in-out "
                        href="#">Home</a>
                    </li>
                    <li><a class="text-[20px] text-slate-900 text-bold font-sans bg-transparent p-3 text-center hover:bg-slate-800 rounded-lg hover:text-white duration-200 hover:ease-in-out "
                        href="#">Daftar Aspirasi</a>
                    </li>
                    <li><a class="text-[20px] text-slate-900 text-bold font-sans bg-transparent p-3 text-center hover:bg-slate-800 rounded-lg hover:text-white duration-200 hover:ease-in-out "
                        href="#">Daftar Admin</a>
                    </li>
                </ul>
            </nav>
            @yield('content')
        </div>
    </div>
</body>
</html>
