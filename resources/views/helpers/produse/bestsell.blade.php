<div class="container mx-auto my-8">
    <h2 class="mb-5 text-2xl my-2">
        Cele mai vandute
        <div class="badge badge-outline">Best Sale!</div>
    </h2>
</div>

<div x-data="{swiper: null}"
  x-init="swiper = new Swiper($refs.container, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
  
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
      },
    })"
  class="relative w-10/12 mx-auto flex flex-row">
  <div class="absolute inset-y-0 left-0 z-10 flex items-center">
    <button @click="swiper.slidePrev()" 
            class="bg-gray-900 -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
    </button>
  </div>

  <div class="swiper-container" x-ref="container">
    <div class="swiper-wrapper">
      @foreach ($produs as $produse)
      <div class="swiper-slide p-4">
          <div class="flex-shrink-0">
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hiddeen">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{ $produse->gallery }}')">
                    <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </button>
                </div>

                <div class="px-5 py-3">
                    <h3 class="text-white-700 uppercase">{{ $produse->name }}</h3>
                    <span class="text-white-500 mt-2">
                        {{ $produse->price }} Lei
                    </span>
                </div>
            </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="absolute inset-y-0 right-0 z-10 flex items-center">
    <button @click="swiper.slideNext()" 
            class="bg-gray-900 -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
</div>