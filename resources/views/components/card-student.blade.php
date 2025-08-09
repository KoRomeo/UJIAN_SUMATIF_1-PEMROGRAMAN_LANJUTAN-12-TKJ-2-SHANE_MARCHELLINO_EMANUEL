@php
    $baseGap = 16; // px
    $goldenGap = intval($baseGap * 1.618); // ≈26px
@endphp

<div class="border border-gray-300 dark:border-[#1a237e] rounded-lg p-6 w-full max-w-md bg-white dark:bg-[#102040] hover:bg-gray-100 dark:hover:bg-[#162a4d] transition duration-300 ease-in-out cursor-pointer">

    <div class="flex items-center mb-[{{ $goldenGap }}px]">
        <img src="{{ $foto }}" alt="Foto {{ $nama }}" class="bg-gray-300 dark:bg-[#1a237e] w-14 h-14 rounded-full mr-[{{ $baseGap }}px] object-cover">
        <div>
            <h3 class="m-0 text-lg font-semibold text-gray-900 dark:text-white">{{ $nama }}</h3>
            <small class="text-gray-500 dark:text-[#90a4d4] block mt-1">{{ '@' . $username }}</small>
        </div>
    </div>

    <p class="text-sm m-0 leading-relaxed text-gray-800 dark:text-[#b3c6f7]">{{ $deskripsi }}</p>
</div>