<div class="modal hidden fixed inset-0 bg-black/40 flex justify-center items-center">
    <div class="w-auto m-10 bg-white px-6 py-4 rounded-sm">
        <div class="mb-5 title flex justify-between items-center font-semibold text-2xl">
            {{ $title }}
            <button
                class="tutup text-2xl font-semibold bg-gray-100 text-gray-400 rounded-full w-8 h-auto hover:text-primary transition-all ease-in-out duration-100">&times;</button>
        </div>

        <div class="body">
            {{ $slot }}
        </div>

    </div>

</div>
