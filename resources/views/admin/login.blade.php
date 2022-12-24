<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ProductQ</title>
</head>
<body>
    <div class="mx-auto w-[1000px] shadow-xl p-14 mt-20">
        <h1 class="text-[50px] font-bold text-slate-900 text-center mb-[40px]" >Login</h1>
        <div class="w-[700px] mx-auto">
            <form method="post">
                @csrf
                <div class="flex">
                    <label for="email" class="text-slate-900 font-bold mr-[50px]"> Email </label>
                    <input type="text" name="email" id="email" class="border-2 w-full" placeholder="write your title.."/>
                </div>
                <br>
                <div class="flex">
                    <label for="password" class="text-slate-900 font-bold mr-[40px]"> Password </label>
                    <input type="password" name="password" id="password" class="border-2 w-full"/>
                </div>
                <br>
                <div class="flex gap-4 mt-[40px] justify-center">
                    <div class="w-[200px] bg-cyan-600 p-2 rounded-lg text-center text-white">
                        <button type="submit" @class(['btn', 'btn-primary'])>Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
