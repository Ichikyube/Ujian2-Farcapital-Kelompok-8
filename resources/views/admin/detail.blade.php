<x-app-layout>
    @csrf
    <div class="w-[1250px] mx-auto shadow-lg mt-10 p-6">
        <div class="mx-auto">
            <h1 class="text-[70px] font-bold text-center">{{ $aspirasi['topik'] }}</h1>
            <div class="flex justify-center">
                <img src="http://localhost:9000/{{ $aspirasi['foto'] }}" class="w-[600px]">
            </div>
            <div class="mt-4">
                <p class="text-[18px] text-slate-900">{{ $aspirasi['cerita'] }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
