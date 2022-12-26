<x-app-layout>
    <div class="container p-4 mx-auto mt-12 shadow-xl">
        <div class="flex items-center justify-between mb-10">
            <h1 class="text-gray-800 font-bold text-[50px]">List aspirasi masyarakat<span class="text-[60px] text-yellow-500 font-bold">Q</span></h1>
        </div>
        <table class="p-4 mx-auto mt-6 border w-fit">
            <thead class="bg-yellow-600 border">
                    <tr class="p-4 border">
                        <th class="p-2 border">No</th>
                        <th class="p-2 border">Topik</th>
                        <th class="p-2 border canHide">Jenis Laporan</th>
                        <th class="p-2 border canHide">Alamat</th>
                        <th class="p-2 border canHide">Kecamatan</th>
                        <th class="p-2 border canHide">Kabupaten</th>
                        <th class="p-2 border">Sudah Dibaca</th>
                        <th class="p-2 border canHide">Foto bukti</th>
                        <th class="p-2 border">Action</th>
                    </tr>
            </thead>
            <tbody class="overflow-hidden border text-ellipsis">
                 @foreach ($aspirasi as $a )
                    <tr class="border">
                        <td class="p-2 border">{{ $loop->iteration }}</td>
                        <td class="p-2 border">{{ $a['topik'] }}</td>
                        <td class="p-2 border canHide">{{ $a['jenis_laporan'] }}</td>
                        <td class="p-2 border canHide">{{ $a['alamat'] }}</td>
                        <td class="p-2 border canHide">{{ $a['kecamatan'] }}</td>
                        <td class="p-2 border canHide">{{ $a['kabupaten'] }}</td>
                        @if($a['status'])
                            <td class="p-2 bg-green-500 border">Sudah</td>
                        @else
                            <td class="p-2 bg-red-500 border">Belum</td>
                        @endif
                        <td class="p-2 border canHide">
                             <img src="http://localhost:9000/{{ ($a['foto']) }}" class="w-[100px]"/>
                        </td>
                        <td class="flex gap-2 p-4 item-center">
                            <div class="w-32 p-2 text-center text-white bg-green-800 rounded-lg">
                                <a href="{{ route("admin.detail", $a['id']) }}"><button>Detail</button></a>
                            </div>
                          </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            window.addEventListener("resize", function() {
            if (window.matchMedia("(min-width: 640px)").matches) {
                $( ".canHide" ).removeClass("hidden")
            } else {
                $( ".canHide" ).addClass("hidden")
            }
            })
        </script>
    @endpush
</x-app-layout>
