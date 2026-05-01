@extends('layouts.forms')

@section('content')

<section id="section-intro" class="bg-white pt-16 pb-8 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-20">
    <!-- Back Button -->
    <a href="{{ route('partner.index') }}"
      class="absolute left-6 lg:left-20 top-16 p-2 hover:bg-gray-100 rounded-full transition-colors hidden md:block">
      <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
        <path d="M5.29167 14.7221L15.2917 24.7221L13.3333 26.6667L0 13.3333L13.3333 0L15.2917 1.94458L5.29167 11.9446H26.6667V14.7221H5.29167Z" fill="#1C1B1F"/>
      </svg>
    </a>

    <!-- Center Content -->
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto">

      <!-- Badge -->
      <div class="bg-[#e7e7e7] text-[#432108] px-8 py-1.5 rounded-full text-sm font-medium mb-6">
        Partnership Forms
      </div>

      <!-- Title -->
      <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-black mb-4 leading-tight">
        Become our partner
      </h1>

      <!-- Subtitle -->
      <p class="text-[#727272] text-base md:text-lg max-w-xl">
        Help us turn coffee waste into sustainable value. Fill in the form below to start a partnership with BrewCycle.
      </p>

    </div>
  </div>
</section>
<div class="mt-10"></div>

  <!-- FORM -->
  <form action="#" method="POST">
    @csrf

    <div class="flex gap-20 justify-center">
      
      <!-- LEFT -->
      <div class="w-[486px] space-y-10">
        
        <!-- Business Info -->
        <div>
          <h2 class="text-2xl font-medium mb-5">Business Information</h2>

          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium mb-2">
                Business / Organization Name
              </label>
              <input type="text" name="business_name"
                placeholder="Masukkan nama bisnis"
                class="w-full border rounded-xl px-4 py-3 bg-gray-100" />
            </div>

            <div>
              <label class="block text-sm font-medium mb-2">
                Business Type
              </label>
              <select name="business_type"
                class="w-full border rounded-xl px-4 py-3 bg-gray-100">
                <option value="" disabled selected>Pilih jenis bisnis</option>
                <option value="cafe">Coffee</option>
                <option value="resto">Restaurant</option>
                <option value="company">Company</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium mb-2">
                City & Province
              </label>
              <input type="text" name="location"
                placeholder="Masukkan kota & provinsi"
                class="w-full border rounded-xl px-4 py-3 bg-gray-100" />
            </div>

            <div>
              <label class="block text-sm font-medium mb-2">
                Website / Social Media
              </label>
              <input type="text" name="website"
                placeholder="www.example.com"
                class="w-full border rounded-xl px-4 py-3 bg-gray-100" />
            </div>
          </div>
        </div>

        <!-- Contact -->
        <div>
          <h2 class="text-2xl font-medium mb-5">Contact Person</h2>

          <div class="space-y-4">
            <input type="text" name="name"
              placeholder="Full Name"
              class="w-full border rounded-xl px-4 py-3 bg-gray-100" />

            <input type="text" name="role"
              placeholder="Position / Role"
              class="w-full border rounded-xl px-4 py-3 bg-gray-100" />

            <input type="email" name="email"
              placeholder="Email Address"
              class="w-full border rounded-xl px-4 py-3 bg-gray-100" />

            <input type="text" name="phone"
              placeholder="+62..."
              class="w-full border rounded-xl px-4 py-3 bg-gray-100" />
          </div>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="w-[486px] space-y-10">

        <!-- Partner Type -->
        <div>
          <h2 class="text-2xl font-medium mb-4">Partner Type</h2>
          <p class="text-sm mb-3">Select one or more option</p>

          <div class="grid grid-cols-2 gap-3 text-sm">

          <label class="flex items-center gap-2">
            <input type="checkbox" name="partner_type[]" value="supplier"
              class="accent-[#432108]" />
            Coffee Grounds Supplier
          </label>

          <label class="flex items-center gap-2">
            <input type="checkbox" name="partner_type[]" value="oem"
              class="accent-[#432108]" />
            OEM / Private Label
          </label>

          <label class="flex items-center gap-2">
            <input type="checkbox" name="partner_type[]" value="reseller"
              class="accent-[#432108]" />
            Reseller / Distributor
          </label>

          <label class="flex items-center gap-2">
            <input type="checkbox" name="partner_type[]" value="bulk"
              class="accent-[#432108]" />
            Bulk Buyer
          </label>

          <label class="flex items-center gap-2">
            <input type="checkbox" name="partner_type[]" value="institution"
              class="accent-[#432108]" />
            Institution Collaboration
          </label>

          <label class="flex items-center gap-2">
            <input type="checkbox" name="partner_type[]" value="other"
              class="accent-[#432108]" />
            Other
          </label>

        </div>
        </div>

        <!-- Coffee Info -->
        <div>
          <h2 class="text-2xl font-medium mb-5">
            Coffee Grounds Information
          </h2>

          <div class="space-y-4">
            <div class="relative">
              <input 
                type="number" 
                name="coffee_amount"
                placeholder="Masukkan jumlah"
                class="w-full border rounded-xl px-4 py-3 pr-28 bg-gray-100"
              />

              <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 text-sm">
                kg per week
              </span>
            </div>

            <textarea name="waste_handling"
              placeholder="Current waste handling..."
              class="w-full border rounded-xl px-4 py-3 bg-gray-100"></textarea>

            <input type="text" name="pickup"
              placeholder="Pickup preference"
              class="w-full border rounded-xl px-4 py-3 bg-gray-100" />
          </div>
        </div>

        <!-- Expectation -->
        <div>
          <h2 class="text-2xl font-medium mb-5">
            Partnership Expectations
          </h2>

          <textarea name="expectation"
            placeholder="Your expectations..."
            class="w-full border rounded-xl px-4 py-3 bg-gray-100"></textarea>
        </div>

        <!-- Button -->
        <button type="button"
          onclick="window.location.href='{{ url('/') }}'"
          class="w-full bg-[#432108] text-white py-3 rounded-full font-semibold hover:bg-[#f1e5c7] hover:text-black transition">
          Submit
        </button>
      </div>
    </div>
    <div class="mt-50"></div>
  </form>
</div>

@endsection