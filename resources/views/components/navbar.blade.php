@props(['active' => 'home'])

<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-3">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <span class="text-blue-500">Explore</span><span class="text-emerald-500">Nusantara</span>
            </div>

            <!-- Desktop menu -->
            <div class="hidden md:flex space-x-8">
                <x-navbar.link href="{{ route('home') }}" :active="active === 'home'">Beranda</x-navbar.link>
                <x-navbar.link href="{{ route('destinations') }}" :active="$active === 'destinations'">Destinasi</x-navbar.link>
                <x-navbar.link href="{{ route('packages') }}" :active="$active === 'packages'">Paket Wisata</x-navbar.link>
                <x-navbar.link href="{{ route('about') }}" :active="$active === 'about'">Tentang Kami</x-navbar.link>
                <x-navbar.link href="{{ route('contact') }}" :active="$active === 'contact'">Kontak</x-navbar.link>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-700 focus:outline-none" @click="isOpen = !isOpen">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div class="md:hidden bg-white" x-show="isOpen" @click.away="isOpen = false"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opocity-0 scale-95"
    x-transition:enter-end="opocity-100 scale-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opocity-100 scale-100"
    x-transition:leave-end="opocity-0 scale-95">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <x-navbar.link href="{{ route('home') }}" :active="$active === 'home'">Beranda</x-navbar.link>
        <x-navbar.link href="{{ route('destinations') }}" :active="$active === 'destinations'">Destinasi</x-navbar.link>
        <x-navbar.link href="{{ route('about') }}" :active="$active === 'about'">Tentang Kami</x-navbar.link>
        <x-navbar.link href="{{ route('contact') }}" :active="$active === 'contact'">Kontak</x-navbar.link>
      </div>
    </div>
</nav>

@push('scripts')
<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('navbar', () => ({
      isOpen: false
    }))
  });
</script>
@endpush