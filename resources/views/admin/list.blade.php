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
    <div class="w-[1250px] mx-auto shadow-xl mt-12 p-4">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-gray-800 font-bold text-[50px]">List aspirasi masyarakat<span class="text-[60px] text-yellow-500 font-bold">Q</span></h1>
        </div>
        <table class="border mx-auto p-4 w-fit mt-6">
            <thead class="border bg-yellow-600">
                    <tr class="border p-4">
                        <th class="border p-2">No</th>
                        <th class="border p-2">Cerita</th>
                        <th class="border p-2">Foto bukti</th>
                        <th class="border p-2">Action</th>
                    </tr>
            </thead>
            <tbody class="border overflow-hidden text-ellipsis">
                 @foreach ($aspirasi as $a )
                    <tr class="border">
                        <td class="border p-2">{{ $loop->iteration }}</td>
                        <td class="border p-2">{{ $a['cerita'] }}</td>
                        <td class="border p-2">
                             <img src="http://localhost:9000/{{ ($a['foto']) }}" class="w-[100px]"/>
                        </td>
                        <td class="flex gap-2 p-4 item-center">
                            <div class="bg-green-800 p-2 rounded-lg w-32 text-white text-center">
                                <a href="{{ route("admin.detail", $a['id']) }}"><button>Detail</button></a>
                            </div>
                          </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
