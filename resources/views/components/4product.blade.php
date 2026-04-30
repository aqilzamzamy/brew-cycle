<section id="product" class="w-full bg-white py-16 lg:py-24">
    <div class="max-w-[1440px] mx-auto px-6 md:px-20 lg:px-[120px]">

        {{-- Header --}}
        <div class="text-center mb-12">
            <div class="inline-block px-5 py-1.5 mb-4 bg-gray-100 rounded-full border border-gray-200">
                <span class="text-gray-600 text-sm font-medium font-['Poppins']">Product Kami</span>
            </div>
            <h2 class="text-[#1a1a1a] text-4xl lg:text-5xl font-bold font-['Poppins']">
                Product Hasil Olahan Ampas Kopi
            </h2>
        </div>

        {{-- Slider --}}
        <div class="relative mb-10">

            <div id="product-track"
                class="flex gap-5 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-2
                       [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">

                {{-- Card: Briket --}}
                <div class="snap-start flex-shrink-0 w-[85%] sm:w-[60%] md:w-[45%] lg:w-[calc(33.333%-14px)]
                            bg-white border border-gray-100 rounded-[28px] p-5
                            shadow-[0_8px_30px_-8px_rgba(0,0,0,0.12)] hover:shadow-[0_12px_40px_-8px_rgba(0,0,0,0.18)]
                            transition-shadow duration-300 flex items-center gap-5 group">
                    <div class="w-[140px] h-[140px] flex-shrink-0 rounded-2xl overflow-hidden bg-gray-50">
                        <img src="{{ asset('assets/briket.png') }}" alt="Briket"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="flex flex-col">
                        <h3 class="text-[#1a1a1a] text-xl font-bold mb-2 font-['Poppins']">Briket</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Briket Arang yang ramah lingkungan dari ampas kopi untuk kebutuhan energi Anda.
                        </p>
                    </div>
                </div>

                {{-- Card: Pupuk --}}
                <div class="snap-start flex-shrink-0 w-[85%] sm:w-[60%] md:w-[45%] lg:w-[calc(33.333%-14px)]
                            bg-white border border-gray-100 rounded-[28px] p-5
                            shadow-[0_8px_30px_-8px_rgba(0,0,0,0.12)] hover:shadow-[0_12px_40px_-8px_rgba(0,0,0,0.18)]
                            transition-shadow duration-300 flex items-center gap-5 group">
                    <div class="w-[140px] h-[140px] flex-shrink-0 rounded-2xl overflow-hidden bg-gray-50">
                        <img src="{{ asset('assets/pupuk.png') }}" alt="Pupuk"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="flex flex-col">
                        <h3 class="text-[#1a1a1a] text-xl font-bold mb-2 font-['Poppins']">Pupuk</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Kandungan kafein dari ampas kopi sebagai penolak alami hama dan penyubur tanah.
                        </p>
                    </div>
                </div>

                {{-- Card: Coming Soon --}}
                <div class="snap-start flex-shrink-0 w-[85%] sm:w-[60%] md:w-[45%] lg:w-[calc(33.333%-14px)]
                            bg-white border border-gray-100 rounded-[28px] p-5
                            shadow-[0_8px_30px_-8px_rgba(0,0,0,0.12)]
                            flex items-center gap-5">
                    <div class="w-[140px] h-[140px] flex-shrink-0 rounded-2xl bg-gray-100 flex items-center justify-center">
                        <span class="text-5xl font-bold text-gray-300">?</span>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="text-gray-300 text-xl font-bold mb-2 font-['Poppins']">Coming Soon</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            Nantikan produk-produk terbaru kami di masa mendatang....
                        </p>
                    </div>
                </div>

            </div>

            {{-- Dot Indicators --}}
            <div id="dot-container" class="flex justify-center gap-2 mt-6"></div>

        </div>

        {{-- CTA Marketplace --}}
        <div class="text-center">
            <p class="text-[#432108] font-semibold font-['Poppins'] mb-5">
                Pesan produk-produk diatas di marketplace kami!
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#"
                    class="flex items-center gap-2.5 bg-[#2d1a0e] text-white px-7 py-3 rounded-full
                           hover:bg-[#432108] transition-colors duration-200 text-sm font-semibold font-['Poppins']">
                    <img src="{{ asset('assets/shopee-icon.svg') }}" class="w-5 h-5" alt="Shopee">
                    Shopee
                </a>
                <a href="#"
                    class="flex items-center gap-2.5 bg-[#2d1a0e] text-white px-7 py-3 rounded-full
                           hover:bg-[#432108] transition-colors duration-200 text-sm font-semibold font-['Poppins']">
                    <img src="{{ asset('assets/tokopedia-icon.png') }}" class="w-5 h-5" alt="Tokopedia">
                    Tokopedia
                </a>
            </div>
        </div>

    </div>
</section>

<script>
    const track = document.getElementById('product-track');
    const dotContainer = document.getElementById('dot-container');
    const cards = Array.from(track.querySelectorAll(':scope > div'));
    let currentIndex = 0;

    cards.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = `h-2 rounded-full transition-all duration-300 ${i === 0 ? 'w-5 bg-[#432108]' : 'w-2 bg-gray-300'}`;
        dot.addEventListener('click', () => scrollToCard(i));
        dotContainer.appendChild(dot);
    });

    function updateDots(index) {
        dotContainer.querySelectorAll('button').forEach((dot, i) => {
            const active = i === index;
            dot.className = `h-2 rounded-full transition-all duration-300 ${active ? 'w-5 bg-[#432108]' : 'w-2 bg-gray-300'}`;
        });
    }

    function scrollToCard(index) {
        currentIndex = Math.max(0, Math.min(index, cards.length - 1));
        track.scrollTo({ left: cards[currentIndex].offsetLeft - track.offsetLeft, behavior: 'smooth' });
        updateDots(currentIndex);
    }

    track.addEventListener('scroll', () => {
        let closest = 0, minDist = Infinity;
        cards.forEach((card, i) => {
            const dist = Math.abs(card.offsetLeft - track.offsetLeft - track.scrollLeft);
            if (dist < minDist) { minDist = dist; closest = i; }
        });
        if (closest !== currentIndex) {
            currentIndex = closest;
            updateDots(currentIndex);
        }
    });
</script>