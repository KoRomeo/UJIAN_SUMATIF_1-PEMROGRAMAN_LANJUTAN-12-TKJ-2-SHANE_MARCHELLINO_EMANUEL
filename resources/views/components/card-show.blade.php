<div class="max-w-2xl mx-auto bg-white rounded-lg p-6 mt-10 text-center">
    <div class="flex justify-center mb-4">
        <img src="{{ $foto }}" alt="{{ $nama }}" class="w-24 h-24 rounded-full bg-gray-200 object-cover" />
    </div>

    <p class="text-gray-400 text-sm mb-1">{{'@'. $username }}</p>

    <h2 class="text-xl font-bold mb-1 flex justify-center items-center gap-2">
        {{ $nama }}
    </h2>

    <p class="text-gray-700 mb-2">{{ $kelas }} | {{ $hobi }}</p>

    <p class="text-gray-600 mb-6 px-4">{{ $deskripsi }}</p>

    <div class="flex justify-center gap-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-gray-400 transition">Edit Profile</button>
        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-gray-400 transition">Delete Account</button>
    </div>
</div>