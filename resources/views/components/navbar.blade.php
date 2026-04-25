<nav class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
    <div class="container mx-auto px-6 md:px-12 lg:px-24 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 hover:opacity-80 transition">
                <div class="w-10 h-10 bg-[#432108] rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">B</span>
                </div>
                <span class="font-bold text-xl text-[#432108]">BrewCycle</span>
            </a>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-gray-600 hover:text-[#432108] font-medium transition">Beranda</a>
                <a href="/#about" class="text-gray-600 hover:text-[#432108] font-medium transition">Tentang</a>
                <a href="/#product" class="text-gray-600 hover:text-[#432108] font-medium transition">Produk</a>
                <a href="/partnership" class="text-gray-600 hover:text-[#432108] font-medium transition">Partner</a>
                <a href="/#contact" class="text-gray-600 hover:text-[#432108] font-medium transition">Kontak</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="/partnership" class="px-6 py-2 bg-[#5B744B] text-white font-medium rounded-full hover:bg-[#4a5f3d] transition">
                    Jadilah Mitra
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden" id="mobile-menu-btn">
                <svg class="w-6 h-6 text-[#432108]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
            <a href="/" class="block py-2 text-gray-600 hover:text-[#432108] font-medium">Beranda</a>
            <a href="/#about" class="block py-2 text-gray-600 hover:text-[#432108] font-medium">Tentang</a>
            <a href="/#product" class="block py-2 text-gray-600 hover:text-[#432108] font-medium">Produk</a>
            <a href="/partnership" class="block py-2 text-gray-600 hover:text-[#432108] font-medium">Partner</a>
            <a href="/#contact" class="block py-2 text-gray-600 hover:text-[#432108] font-medium">Kontak</a>
            <a href="/partnership" class="block mt-4 px-6 py-2 bg-[#5B744B] text-white font-medium rounded-full hover:bg-[#4a5f3d] transition text-center">
                Jadilah Mitra
            </a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>