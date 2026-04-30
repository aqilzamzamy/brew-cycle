<section id="partnership" class="w-full bg-white py-16 lg:py-24">
    <div class="max-w-[1440px] mx-auto px-6 md:px-20 lg:px-[120px]">

        {{-- Header --}}
        <div class="text-center mb-14">
            <div class="inline-block px-5 py-1.5 mb-4 bg-gray-200 rounded-full">
                <span class="text-[#432108] text-sm font-medium font-['Poppins']">Partner Kami</span>
            </div>
            <h2 class="text-black text-3xl lg:text-4xl font-bold font-['Poppins'] mb-3">
                Coffee Shop dan Supplier kami
            </h2>
            <p class="text-[#926849] text-base font-medium font-['Poppins'] max-w-2xl mx-auto leading-relaxed">
                Terimakasih kepada partner yang telah mempercayakan ampas kopi
                mereka kepada kami untuk diolah menjadi produk bernilai.
            </p>
        </div>

        {{-- Logo Partner Slider --}}
        <div class="mb-10">
            <div class="flex gap-5 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-3
                        [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">

                {{-- Tomoro Coffee --}}
                <div class="snap-start flex-shrink-0 w-[188px] h-[188px] bg-white rounded-[20px]
                            shadow-[0_10px_30px_-5px_rgba(0,0,0,0.12)]
                            flex flex-col items-center justify-center gap-3 p-5">
                    <img src="{{ asset('assets/tomoro-coffee.png') }}" alt="Tomoro Coffee"
                        class="w-[112px] h-[112px] object-contain rounded-xl">
                    <p class="text-black text-[15px] font-semibold font-['Poppins'] text-center leading-tight">Tomoro Coffee</p>
                </div>

                {{-- Kopi Soe --}}
                <div class="snap-start flex-shrink-0 w-[188px] h-[188px] bg-white rounded-[20px]
                            shadow-[0_10px_30px_-5px_rgba(0,0,0,0.12)]
                            flex flex-col items-center justify-center gap-3 p-5">
                    <img src="{{ asset('assets/kopi-soe.jpg') }}" alt="Kopi Soe"
                        class="w-[138px] h-[97px] object-contain">
                    <p class="text-black text-[15px] font-semibold font-['Poppins'] text-center leading-tight">Kopi Soe</p>
                </div>

                {{-- Point Coffee --}}
                <div class="snap-start flex-shrink-0 w-[188px] h-[188px] bg-white rounded-[20px]
                            shadow-[0_10px_30px_-5px_rgba(0,0,0,0.12)]
                            flex flex-col items-center justify-center gap-3 p-5">
                    <img src="{{ asset('assets/point-coffee.png') }}" alt="Point Coffee"
                        class="w-[111px] h-[111px] object-contain rounded-xl">
                    <p class="text-black text-[15px] font-semibold font-['Poppins'] text-center leading-tight">Point Coffee</p>
                </div>

                {{-- Fore Coffee --}}
                <div class="snap-start flex-shrink-0 w-[188px] h-[188px] bg-white rounded-[20px]
                            shadow-[0_10px_30px_-5px_rgba(0,0,0,0.12)]
                            flex flex-col items-center justify-center gap-3 p-5">
                    <img src="{{ asset('assets/fore-coffee.png') }}" alt="Fore Coffee"
                        class="w-[114px] h-[114px] object-contain rounded-xl">
                    <p class="text-black text-[15px] font-semibold font-['Poppins'] text-center leading-tight">Fore Coffee</p>
                </div>

                {{-- Janji Jiwa --}}
                <div class="snap-start flex-shrink-0 w-[188px] h-[188px] bg-white rounded-[20px]
                            shadow-[0_10px_30px_-5px_rgba(0,0,0,0.12)]
                            flex flex-col items-center justify-center gap-3 p-5">
                    <img src="{{ asset('assets/janji-jiwa.png') }}" alt="Janji Jiwa"
                        class="w-[104px] h-[104px] object-contain rounded-xl">
                    <p class="text-black text-[15px] font-semibold font-['Poppins'] text-center leading-tight">Janji Jiwa</p>
                </div>

                {{-- Kopi Tuku --}}
                <div class="snap-start flex-shrink-0 w-[188px] h-[188px] bg-white rounded-[20px]
                            shadow-[0_10px_30px_-5px_rgba(0,0,0,0.12)]
                            flex flex-col items-center justify-center gap-3 p-5">
                    <img src="{{ asset('assets/kopi-tuku.jpg') }}" alt="Kopi Tuku"
                        class="w-[114px] h-[114px] object-contain">
                    <p class="text-black text-[15px] font-semibold font-['Poppins'] text-center leading-tight">Kopi Tuku</p>
                </div>

                {{-- Kopi Kenangan --}}
                <div class="snap-start flex-shrink-0 w-[188px] h-[188px] bg-white rounded-[20px]
                            shadow-[0_10px_30px_-5px_rgba(0,0,0,0.12)]
                            flex flex-col items-center justify-center gap-3 p-5">
                    <img src="{{ asset('assets/kopi-kenangan.png') }}" alt="Kopi Kenangan"
                        class="w-[114px] h-[114px] object-contain">
                    <p class="text-black text-[15px] font-semibold font-['Poppins'] text-center leading-tight">Kopi Kenangan</p>
                </div>

            </div>
        </div>

        {{-- CTA Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-[1200px] mx-auto">

            {{-- Coffeeshop (filled green) --}}
            <div class="bg-[#4c6444] rounded-[33px] px-12 py-8 flex flex-col items-center justify-center text-center min-h-[195px]">
                <h3 class="text-white text-2xl font-bold font-['Poppins'] mb-3">Coffeeshop</h3>
                <p class="text-white text-lg font-medium font-['Poppins'] leading-relaxed max-w-md">
                    Tidak perlu pusing membuang ampas kopi. Akan kami jemput dan
                    anda akan berkontribusi pada lingkungan
                </p>
            </div>

            {{-- Supplier (outlined green) --}}
            <div class="bg-white border-2 border-[#4c6444] rounded-[33px] px-12 py-8 flex flex-col items-center justify-center text-center min-h-[195px]">
                <h3 class="text-[#4c6444] text-2xl font-bold font-['Poppins'] mb-3">Supplier</h3>
                <p class="text-[#4c6444] text-lg font-medium font-['Poppins'] leading-relaxed max-w-md">
                    Punya ampas kopi dalam jumlah besar? Mari berkontribusi pada
                    lingkungan untuk keberlanjutan bersama!
                </p>
            </div>

        </div>

    </div>
</section>