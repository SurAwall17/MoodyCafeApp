<footer class="w-full bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Brand -->
        <div>
            <h2 class="text-2xl font-bold text-white">MoodyCafe</h2>
            <p class="mt-3 text-sm text-gray-400">
                Di antara hangatnya kopi dan tenangnya suasana,
                kami hadir untuk menemani setiap ceritamu.
            </p>
        </div>

        <!-- Menu -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-3">Menu</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white transition">Home</a></li>
                <li><a href="#" class="hover:text-white transition">About</a></li>
                <li><a href="#" class="hover:text-white transition">Menu</a></li>
                <li><a href="#" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-3">Contact</h3>
            <p class="flex text-sm text-gray-400">
                <x-heroicon-o-map-pin class="w-5 me-1" />
                <span>Malimpung, Kab. Pinrang</span>
            </p>
            <p class="flex text-sm text-gray-400 mt-2">
                <x-heroicon-o-phone class="w-5 me-1" />
                <span>+62 823-9306-3712</span>
            </p>
            <p class="flex text-sm text-gray-400 mt-2">
                <x-heroicon-o-envelope class="w-5 me-1" />
                <span>moodycafe@email.com</span>
            </p>

            <!-- Social -->
            <div class="flex space-x-4 mt-4">
                <a href="#" class="hover:text-white transition">Instagram</a>
                <a href="#" class="hover:text-white transition">WhatsApp</a>
            </div>
        </div>

    </div>

    <!-- Bottom -->
    <div class="grid grid-rows-2 border-t border-gray-700 text-center py-4 text-sm text-gray-500">
        <span>
            © 2026 MoodyCafe. All rights reserved.
        </span>
        <span>Made by <a href="" class="font-semibold hover:underline">Surawal</a></span>
    </div>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
