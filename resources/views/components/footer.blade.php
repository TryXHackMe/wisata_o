<footer class="bg-gray-800 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <x-logo class="text-2xl mb-4" />
        <p class="text-gray-400">Jelajahi Nusantara dan Keindahan Alam-nya</p>
      </div>
      
      <div>
        <h3 class="font-bold text-lg mb-4">Tautan cepat</h3>
        <ul class="space-y-2">
          <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white">Beranda</a></li>
          <li><a href="{{ rouet('destination') }}" class="text-gray-400 hover:text-white">Destinasi</a></li>
          <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
          <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>