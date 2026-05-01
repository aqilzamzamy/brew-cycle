@extends('layouts.forms')

@section('content')

<section id="section-intro" class="bg-white pt-16 pb-8 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-20">
        <a href="{{ route('home') }}" class="absolute left-6 lg:left-20 top-16 p-2 hover:bg-gray-100 rounded-full transition-colors hidden md:block">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                <path d="M5.29167 14.7221L15.2917 24.7221L13.3333 26.6667L0 13.3333L13.3333 0L15.2917 1.94458L5.29167 11.9446H26.6667V14.7221H5.29167Z" fill="#1C1B1F"/>
            </svg>
        </a>

        <div class="flex flex-col items-center text-center max-w-2xl mx-auto">
            <div class="bg-[#e7e7e7] text-[#432108] px-8 py-1.5 rounded-full text-sm font-medium mb-6">
                Become a Partner
            </div>
            <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-black mb-4 leading-tight">
                Jenis Kemitraan BrewCycle
            </h1>
            <p class="text-[#727272] text-base md:text-lg max-w-xl">
                Pilih jenis kemitraan yang sesuai dengan bisnis Anda dan bergabunglah dalam gerakan ekonomi sirkular
            </p>
        </div>
    </div>
</section>

<section id="section-partnership-types" class="bg-white py-8">
    <div class="max-w-[1142px] mx-auto px-6 lg:px-8 flex flex-col gap-4">
        
        <div class="border border-black rounded-[18px] overflow-hidden hover:shadow-lg transition-all bg-white group">
            <div onclick="toggleAccordion('partnership-1')" class="p-6 md:p-8 flex items-center justify-between cursor-pointer hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-6 md:gap-8">
                    <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="71" viewBox="0 0 72 71" fill="none">
                            <path d="M54 29.5833H58.5C60.4891 29.5833 62.3968 30.3625 63.8033 31.7495C65.2098 33.1365 66 35.0177 66 36.9792C66 38.9407 65.2098 40.8218 63.8033 42.2088C62.3968 43.5958 60.4891 44.375 58.5 44.375H54M54 29.5833C54 28.0154 52.92 26.625 51.231 26.625H14.769C14.4054 26.625 14.0453 26.6956 13.7093 26.8328C13.3734 26.9701 13.0681 27.1712 12.811 27.4248C12.5539 27.6783 12.3499 27.9793 12.2108 28.3106C12.0716 28.6419 12 28.997 12 29.3555V50.2917C12 53.4301 13.2643 56.4399 15.5147 58.6591C17.7652 60.8783 20.8174 62.125 24 62.125H42C45.1826 62.125 48.2348 60.8783 50.4853 58.6591C52.7357 56.4399 54 53.4301 54 50.2917V44.375M54 29.5833V44.375M48 8.875L42 17.75M39 8.875L33 17.75M30 8.875L24 17.75" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xl md:text-2xl font-semibold text-black">Coffee Grounds Supplier</h3>
                        <p class="text-[#484848] text-sm md:text-base">Kedai kopi, cafe, atau bisnis yang menghasilkan ampas kopi setiap hari.</p>
                    </div>
                </div>
                <svg id="icon-partnership-1" class="w-6 h-6 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            <div id="partnership-1" class="hidden border-t border-gray-200 bg-gray-50">
                <div class="px-8 py-8">
                    <div class="grid md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Peran</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Menyediakan ampas kopi
                                </li>
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Mendukung pengolahan limbah yang bertanggung jawab
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Manfaat</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Mengurangi limbah organik ke TPA
                                </li>
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Berkontribusi pada penghijauan berkelanjutan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-black rounded-[18px] overflow-hidden hover:shadow-lg transition-all bg-white group">
            <div onclick="toggleAccordion('partnership-2')" class="p-6 md:p-8 flex items-center justify-between cursor-pointer hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-6 md:gap-8">
                    <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="68" height="67" viewBox="0 0 68 67" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7032 3.48959C18.4337 3.48959 16.8782 3.48959 15.4899 3.86089C14.053 4.24943 12.7151 4.93141 11.5631 5.86253C10.4112 6.79364 9.47082 7.95308 8.80319 9.26555C8.16003 10.5274 7.85686 12.0321 7.41202 14.2263L5.65536 22.8749C5.34425 24.391 5.37431 25.9559 5.74341 27.4593C6.11252 28.9628 6.81169 30.3682 7.79169 31.5765V39.2397C7.79169 44.3708 7.79169 48.4354 8.22519 51.6151C8.67286 54.887 9.61352 57.5363 11.7329 59.6272C13.8522 61.7154 16.541 62.6422 19.8645 63.0833C23.0917 63.5104 27.217 63.5104 32.4219 63.5104H35.5754C40.783 63.5104 44.9084 63.5104 48.1355 63.0833C51.4562 62.6422 54.145 61.7154 56.2672 59.6272C58.3865 57.5363 59.3272 54.887 59.7749 51.6151C60.2084 48.4326 60.2084 44.3708 60.2084 39.2397V31.5793C61.1883 30.3704 61.8872 28.9644 62.2558 27.4605C62.6244 25.9566 62.6538 24.3913 62.3419 22.8749L60.5852 14.2263C60.1432 12.0321 59.8372 10.5274 59.1969 9.26555C58.5289 7.95279 57.5881 6.79317 56.4357 5.86204C55.2832 4.9309 53.9447 4.24909 52.5074 3.86089C51.1219 3.48959 49.5664 3.48959 47.294 3.48959H20.7032ZM51.7594 35.5938C53.2014 35.5963 54.6294 35.3134 55.9584 34.7618V39.0833C55.9584 44.4071 55.9527 48.1898 55.5617 51.0596C55.1792 53.8652 54.4595 55.4844 53.261 56.6653C52.0625 57.8461 50.4192 58.5552 47.566 58.9321C46.1195 59.1071 44.6653 59.2133 43.2084 59.2503V51.5565C43.2084 50.3282 43.2084 49.2673 43.129 48.4019C43.044 47.4807 42.857 46.5706 42.3527 45.7136C41.7938 44.7584 40.9896 43.9651 40.0209 43.4132C39.151 42.9191 38.2274 42.7348 37.2924 42.6511C36.414 42.5729 35.3374 42.5729 34.0907 42.5729H33.9065C32.6599 42.5729 31.586 42.5729 30.7049 42.6511C29.7699 42.7348 28.849 42.9191 27.9792 43.4132C27.0094 43.9647 26.2042 44.7581 25.6445 45.7136C25.143 46.5706 24.956 47.4807 24.871 48.3991C24.7917 49.2701 24.7917 50.3282 24.7917 51.5537V59.2503C23.3329 59.2135 21.8768 59.1073 20.4284 58.9321C17.5809 58.5552 15.9375 57.8461 14.739 56.6653C13.5405 55.4844 12.8209 53.8652 12.4384 51.0568C12.0445 48.1898 12.0417 44.4071 12.0417 39.0833V34.7618C14.3061 35.7028 16.8285 35.8543 19.1921 35.1914C21.5557 34.5285 23.6191 33.0908 25.041 31.1159C26.069 32.5067 27.4169 33.6376 28.9742 34.416C30.5315 35.1943 32.2538 35.5979 34 35.5938C35.7462 35.5979 37.4685 35.1943 39.0258 34.416C40.5831 33.6376 41.931 32.5067 42.959 31.1159C43.955 32.5018 45.2742 33.6319 46.8056 34.4111C48.337 35.1903 50.0358 35.5959 51.7594 35.5938ZM29.0417 59.3173C30.141 59.3211 31.3216 59.3229 32.5834 59.3229H35.4167C36.6785 59.3229 37.859 59.3211 38.9584 59.3173V51.6458C38.9584 50.3031 38.9555 49.4348 38.896 48.7788C38.8394 48.1507 38.7402 47.9218 38.6722 47.8073C38.4859 47.4897 38.2182 47.2259 37.8959 47.0424C37.7797 46.9754 37.5474 46.8805 36.9099 46.8218C35.9411 46.7636 34.9704 46.7431 34 46.7604C32.6372 46.7604 31.756 46.7604 31.0902 46.8218C30.4499 46.8777 30.2204 46.9754 30.1042 47.0424C29.7808 47.2256 29.5121 47.4894 29.325 47.8073C29.2599 47.919 29.1607 48.1507 29.104 48.7788C29.0445 49.4348 29.0417 50.3031 29.0417 51.6458V59.3173ZM24.565 7.67709H21.0177C18.3147 7.67709 17.3769 7.69663 16.6175 7.90043C15.7556 8.13337 14.9529 8.5423 14.2618 9.10067C13.5706 9.65904 13.0063 10.3544 12.6055 11.1416C12.2514 11.8367 12.0502 12.7356 11.5204 15.3486L9.82602 23.6957C9.64545 24.5545 9.64458 25.4406 9.82347 26.2998C10.0024 27.159 10.3572 27.9732 10.8664 28.6926C11.3756 29.412 12.0284 30.0215 12.7848 30.4839C13.5413 30.9462 14.3855 31.2517 15.2659 31.3815C16.1462 31.5114 17.0442 31.4629 17.9049 31.2392C18.7656 31.0154 19.5709 30.6209 20.2716 30.08C20.9723 29.5391 21.5537 28.863 21.9801 28.0931C22.4065 27.3232 22.6691 26.4757 22.7517 25.6024L22.9472 23.6873L22.9585 23.5701L24.565 7.67709ZM27.1745 24.0781L28.8405 7.67709H39.1595L40.8142 23.986C40.9069 24.9192 40.8012 25.8612 40.5039 26.7518C40.2065 27.6425 39.724 28.4624 39.0872 29.1591C38.4503 29.8558 37.6731 30.4141 36.805 30.7983C35.937 31.1826 34.9972 31.3843 34.0456 31.3908C33.0939 31.3972 32.1514 31.2081 31.2781 30.8357C30.4048 30.4632 29.6199 29.9154 28.9734 29.2274C28.3269 28.5394 27.833 27.7261 27.5233 26.8395C27.2136 25.9529 27.0948 25.0125 27.1745 24.0781ZM51.3825 7.90043C50.6232 7.69663 49.6854 7.67709 46.9824 7.67709H43.4294L45.2512 25.5996C45.3365 26.4704 45.6008 27.3149 46.028 28.0818C46.4552 28.8487 47.0364 29.5219 47.7361 30.0604C48.4359 30.5989 49.2395 30.9914 50.0982 31.214C50.9568 31.4367 51.8525 31.4848 52.7306 31.3554C53.6087 31.226 54.4509 30.9219 55.2059 30.4615C55.9609 30.0012 56.6129 29.3942 57.1221 28.6776C57.6314 27.961 57.9873 27.1497 58.1681 26.2932C58.349 25.4367 58.351 24.5529 58.174 23.6957L56.4825 15.3486C55.9499 12.7356 55.7487 11.8367 55.3974 11.1416C54.9963 10.3541 54.4316 9.65857 53.7399 9.10018C53.0482 8.54179 52.245 8.13302 51.3825 7.90043Z" fill="black"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xl md:text-2xl font-semibold text-black">Reseller / Distributor</h3>
                        <p class="text-[#484848] text-sm md:text-base">Individu atau badan usaha yang ingin menjual kembali produk briket BrewCycle.</p>
                    </div>
                </div>
                <svg id="icon-partnership-2" class="w-6 h-6 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            <div id="partnership-2" class="hidden border-t border-gray-200 bg-gray-50">
                <div class="px-8 py-8">
                    <div class="grid md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Peran</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700"><span>✓</span> Membeli produk dalam jumlah tertentu.</li>
                                <li class="flex gap-3 text-gray-700"><span>✓</span> Menyalurkan produk ke pasar lokal atau jaringan distribusi Anda.</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Manfaat</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700"><span>✓</span> Harga khusus volume tertentu</li>
                                <li class="flex gap-3 text-gray-700"><span>✓</span> Peluang berkembang bersama brand tahap awal.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-black rounded-[18px] overflow-hidden hover:shadow-lg transition-all bg-white group">
            <div onclick="toggleAccordion('partnership-3')" class="p-6 md:p-8 flex items-center justify-between cursor-pointer hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-6 md:gap-8">
                    <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
                          <path d="M43.9478 20.768L45.8921 18.8238M35.8051 55.5335L55.8746 35.464C56.8921 34.4465 57.4696 33.0715 57.4888 31.636L57.7501 11.0413C57.7556 10.6732 57.6872 10.3077 57.5489 9.96655C57.4106 9.62538 57.2052 9.31546 56.9449 9.05515C56.6846 8.79484 56.3747 8.58945 56.0335 8.45115C55.6924 8.31284 55.3269 8.24444 54.9588 8.25001L34.3641 8.51126C32.9261 8.5282 31.5519 9.10767 30.5361 10.1255L10.4666 30.195C8.61306 32.0458 7.18856 35.5823 9.30056 37.6943L28.3031 56.6968C30.4178 58.8115 33.9543 57.3843 35.8051 55.5335Z" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xl md:text-2xl font-semibold text-black">OEM / Private Label</h3>
                        <p class="text-[#484848] text-sm md:text-base">Perusahaan atau brand yang ingin menjual briket dengan merek sendiri.</p>
                    </div>
                </div>
                <svg id="icon-partnership-3" class="w-6 h-6 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            <div id="partnership-3" class="hidden border-t border-gray-200 bg-gray-50">
                <div class="px-8 py-8">
                    <div class="grid md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Peran</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Memesan produk dengan skema OEM/private label</li>
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Mengelola branding dan pemasaran mandiri</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Manfaat</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Produk berkelanjutan siap jual</li>
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Cepat masuk pasar eco-friendly</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-black rounded-[18px] overflow-hidden hover:shadow-lg transition-all bg-white group">
            <div onclick="toggleAccordion('partnership-4')" class="p-6 md:p-8 flex items-center justify-between cursor-pointer hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-6 md:gap-8">
                    <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81" viewBox="0 0 80 81" fill="none">
                          <path d="M28.4366 11.8125C26.7033 11.8125 25.5033 11.8125 24.3766 12.1365C23.3839 12.4237 22.4525 12.8952 21.63 13.527C20.6966 14.2459 19.9766 15.2145 18.9366 16.6219L14.0433 23.2301C13.3366 24.1819 12.85 24.84 12.4966 25.5758C12.1848 26.2286 11.9573 26.9194 11.82 27.6311C11.6666 28.4344 11.6666 29.2579 11.6666 30.4459V56.7709C11.6666 58.6001 11.6666 60.0784 11.7633 61.2697C11.8633 62.5016 12.0733 63.5816 12.5766 64.5773C13.3748 66.1652 14.649 67.4565 16.2166 68.2661C17.2033 68.7757 18.27 68.9884 19.4833 69.0896C20.6666 69.1875 22.1233 69.1875 23.93 69.1875H56.07C57.8766 69.1875 59.3366 69.1875 60.5133 69.0896C61.73 68.9884 62.7966 68.7757 63.7833 68.2661C65.3504 67.4574 66.6245 66.1673 67.4233 64.5806C67.9266 63.5816 68.1366 62.5016 68.2366 61.2731C68.3333 60.075 68.3333 58.6001 68.3333 56.7709V30.4459C68.3333 29.2579 68.3333 28.4344 68.18 27.6311C68.0426 26.9194 67.8151 26.2286 67.5033 25.5758C67.15 24.84 66.6633 24.1819 65.96 23.2301L61.06 16.6219C60.0233 15.2179 59.3033 14.2459 58.37 13.527C57.5474 12.8952 56.616 12.4237 55.6233 12.1365C54.4966 11.8125 53.2966 11.8125 51.5633 11.8125H28.4366ZM25.2933 15.3833C25.9133 15.201 26.6133 15.1875 28.6666 15.1875H34.78L33.53 25.3125H16.6666L21.4666 18.8325C22.7 17.1686 23.1333 16.6117 23.6433 16.2169C24.1375 15.8378 24.697 15.5551 25.2933 15.3833ZM46.47 25.3125L45.22 15.1875H51.3333C53.3866 15.1875 54.0866 15.201 54.7066 15.3833C55.3033 15.552 55.8633 15.8389 56.3566 16.2169C56.87 16.6117 57.3033 17.1686 58.5333 18.8325L63.3333 25.3125H46.47ZM41.8633 15.1875L43.1133 25.3125H36.8866L38.1366 15.1875H41.8633ZM43.3333 28.6875V42.1875C43.3333 42.6351 43.1577 43.0643 42.8451 43.3807C42.5326 43.6972 42.1087 43.875 41.6666 43.875H38.3333C37.8913 43.875 37.4673 43.6972 37.1548 43.3807C36.8422 43.0643 36.6666 42.6351 36.6666 42.1875V28.6875H43.3333ZM33.3333 42.1875C33.3333 43.5302 33.8601 44.8178 34.7978 45.7672C35.7354 46.7166 37.0072 47.25 38.3333 47.25H41.6666C42.9927 47.25 44.2645 46.7166 45.2022 45.7672C46.1398 44.8178 46.6666 43.5302 46.6666 42.1875V28.6875H64.9633C64.9966 29.0689 65 29.5988 65 30.6011V56.7C65 58.617 65 59.9535 64.9133 60.9964C64.8333 62.0156 64.68 62.6029 64.4566 63.0484C63.9771 64.0018 63.2116 64.7769 62.27 65.2624C61.83 65.4885 61.25 65.6438 60.2433 65.7248C59.2166 65.8125 57.8933 65.8125 56 65.8125H24C22.1066 65.8125 20.7866 65.8125 19.7566 65.7248C18.75 65.6438 18.17 65.4885 17.73 65.2624C16.7896 64.7763 16.0253 64.0013 15.5466 63.0484C15.32 62.6029 15.1666 62.0156 15.0866 60.9964C15 59.9535 15 58.617 15 56.7V30.6011C15 29.5988 15.0033 29.0689 15.0366 28.6875H33.3333V42.1875Z" fill="black"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xl md:text-2xl font-semibold text-black">Bulk Buyer</h3>
                        <p class="text-[#484848] text-sm md:text-base">Pelaku usaha, komunitas, atau organisasi yang membutuhkan briket dalam jumlah besar dan berulang.</p>
                    </div>
                </div>
                <svg id="icon-partnership-4" class="w-6 h-6 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            <div id="partnership-4" class="hidden border-t border-gray-200 bg-gray-50">
                <div class="px-8 py-8">
                    <div class="grid md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Peran</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Membeli briket dalam volume besar</li>
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Untuk operasional atau distribusi internal</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Manfaat</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Harga lebih kompetitif</li>
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Pasokan terjamin</li>
                                <li class="flex gap-3 text-gray-700"><span class="text-[#5B744B]">✓</span> Produk berbasis limbah berkelanjutan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-black rounded-[18px] overflow-hidden hover:shadow-lg transition-all bg-white group">
            <div onclick="toggleAccordion('partnership-5')" class="p-6 md:p-8 flex items-center justify-between cursor-pointer hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-6 md:gap-8">
                    <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="91" height="91" viewBox="0 0 91 91" fill="none">
                          <path d="M25.9312 60.2496C24.958 59.701 24.1845 58.9553 23.6107 58.0125C23.0369 57.0671 22.75 56.008 22.75 54.8351V40.1348L16.7137 36.7867C16.1626 36.4581 15.7531 36.0689 15.4852 35.6189C15.2172 35.169 15.0858 34.671 15.0908 34.125C15.0959 33.579 15.2299 33.081 15.4928 32.6311C15.7556 32.1811 16.1639 31.7919 16.7175 31.4632L42.5766 17.3582C43.0367 17.1029 43.5056 16.9209 43.9833 16.8122C44.4611 16.7035 44.9666 16.6479 45.5 16.6454C46.0334 16.6429 46.5402 16.6985 47.0205 16.8122C47.5007 16.926 47.9709 17.1067 48.431 17.3544L77.7064 33.2302C78.2423 33.5461 78.6468 33.9417 78.9198 34.4169C79.1953 34.8947 79.3331 35.4104 79.3331 35.9639V56.4389C79.3331 56.9748 79.151 57.4248 78.787 57.7888C78.423 58.1528 77.9731 58.3348 77.4372 58.3348C76.9013 58.3348 76.4501 58.1528 76.0836 57.7888C75.7171 57.4248 75.5363 56.9748 75.5414 56.4389V36.2559L68.25 40.1348V54.8351C68.25 56.008 67.9631 57.0671 67.3893 58.0125C66.8155 58.9579 66.0433 59.7036 65.0726 60.2496L48.4461 69.251C47.976 69.5164 47.5007 69.7047 47.0205 69.8159C46.5402 69.9272 46.0334 69.9815 45.5 69.979C44.9666 69.9765 44.4598 69.9221 43.9795 69.8159C43.4993 69.7098 43.024 69.5202 42.5539 69.2472L25.9312 60.2496ZM44.6241 47.7181C44.9654 47.9102 45.2687 48.0063 45.5341 48.0063C45.8021 48.0063 46.1067 47.9102 46.4479 47.7181L71.3971 34.125L46.4479 20.6077C46.1092 20.4131 45.8059 20.3157 45.5379 20.3157C45.27 20.3157 44.9666 20.4131 44.6279 20.6077L19.6029 34.125L44.6241 47.7181ZM44.5521 66.0394C44.8933 66.2341 45.2093 66.3314 45.5 66.3314C45.7907 66.3314 46.1067 66.2341 46.4479 66.0394L63.3663 56.8977C63.7556 56.6551 64.0337 56.3758 64.2005 56.0598C64.3673 55.7438 64.4533 55.3419 64.4583 54.854V42.2202L48.4689 50.9486C47.9962 51.214 47.5159 51.4024 47.028 51.5136C46.5452 51.6223 46.0359 51.6766 45.5 51.6766C44.9641 51.6766 44.4535 51.6223 43.9682 51.5136C43.4828 51.4049 43.0038 51.2153 42.5311 50.9448L26.5417 42.224V54.8578C26.5417 55.2471 26.6264 55.625 26.7957 55.9915C26.9651 56.3555 27.2444 56.6589 27.6337 56.9015L44.5521 66.0394Z" fill="black"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xl md:text-2xl font-semibold text-black">Institution / Educational Collaboration</h3>
                        <p class="text-[#484848] text-sm md:text-base">Sekolah, universitas, lembaga pendidikan, atau institusi.</p>
                    </div>
                </div>
                <svg id="icon-partnership-5" class="w-6 h-6 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            <div id="partnership-5" class="hidden border-t border-gray-200 bg-gray-50">
                <div class="px-8 py-8">
                    <div class="grid md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Peran</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Kolaborasi riset, edukasi, program lingkungan, atau kegiatan akademis lainnya
                                </li>
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Pilot project pengelolaan limbah & energi
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Manfaat</h4>
                            <ul class="space-y-3">
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Media pembelajaran ekonomi sirkular
                                </li>
                                <li class="flex gap-3 text-gray-700">
                                    <span class="text-[#5B744B]">✓</span> Kontribusi program keberlanjutan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-cta" class="bg-white py-16 pb-32">
  <div class="max-w-3xl mx-auto px-6 text-center flex flex-col items-center">
    <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
      Tertarik Bermitra?
    </h2>
    <p class="text-[#727272] text-base md:text-lg mb-8 max-w-2xl">
      Pilih jenis kemitraan yang sesuai dan isi formulir kemitraan kami. Tim
      kami akan menghubungi Anda untuk diskusi lebih lanjut.
    </p>
    <button
      class="bg-[#654229] hover:bg-[#503420] text-white px-8 py-3.5 rounded-[43px] flex items-center gap-3 transition-colors font-medium text-sm md:text-base shadow-sm hover:shadow-md"
    >
      <a href="{{ route('partner.form') }}">
          Ajukan Permintaan
      </a>
    </button>
  </div>
</section>

<script>
function toggleAccordion(id) {
    const content = document.getElementById(id);
    const icon = document.getElementById('icon-' + id);
    
    // 1. Ambil semua accordion dan sembunyikan (agar hanya satu yang terbuka)
    document.querySelectorAll('[id^="partnership-"]').forEach(el => {
        if (el.id !== id) {
            el.classList.add('hidden');
            const otherIcon = document.getElementById('icon-' + el.id);
            if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
        }
    });

    // 2. Toggle item yang diklik
    const isHidden = content.classList.contains('hidden');
    if (isHidden) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>

@endsection