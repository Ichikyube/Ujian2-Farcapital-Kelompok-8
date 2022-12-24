<x-app-layout>

<form method="" action="" enctype="multipart/form-data">
    @csrf
<div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
      <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST</h1>
      <div class="space-y-4">
        <div class="pt-6 pb-6">
          <label for="title" class="text-lx font-serif">Title:</label>
          <input type="text" placeholder="title" id="title" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <div class="pt-6 pb-6">
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