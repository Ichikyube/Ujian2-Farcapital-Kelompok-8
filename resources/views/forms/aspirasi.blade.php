<x-app-layout>
<form method="POST" action="{{ route('form.store') }}" enctype="multipart/form-data">
    @csrf
    <!--x-input-error  :message="$message" /-->
<div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
      <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ASPIRASI ANDA</h1>
      <div class="space-y-4">
        @dd(session()->all())
        @if($errors->any())
          @foreach ($errors->all() as $e)
            <div class="bg-red-500 w-full p-2 mt-2">{{ $e }}</div>   
          @endforeach
        @endif
        @if (session()->has('success'))
          <div class="bg-green-500 w-full p-2 mt-2">
            {{ session('success') }}
          </div>
        @endif
        <div class="pt-6 pb-6">
          <label for="topik" class="text-lx font-serif">Topik:</label>
          <input name="topik" type="text" placeholder="title" id="topik" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <div class="pt-3 pb-6">
          <label for="cerita" class="block mb-2 text-lg font-serif">Cerita:</label>
          <textarea name=cerita id="cerita" cols="30" rows="10" placeholder="Tulis disini aspirasi anda.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
        </div>
        <label for="foto">
            <span class="label">Choose file</span>
        </label>
        <input class="field-file" type="file" id="foto" name="foto">
        <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">ADD POST</button>
      </div>
    </div>
  </div>
</form>
</x-app-layout>
