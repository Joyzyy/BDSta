<!--
<div class="my-8">
    <div class="container mx-auto">
        <h2 class="mb-5 text-2xl my-2">
            Produse
            <div class="badge badge-outline">Noi</div>
        </h2>

        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            @for ($i = 0; $i < 4; $i++)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hiddeen">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                    <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </button>
                </div>

                <div class="px-5 py-3">
                    <h3 class="text-white-700 uppercase">Nume produs</h3>
                    <span class="text-white-500 mt-2">
                        99,99 Lei
                    </span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<div class="container mx-auto divider pt-12"></div> 

<div class="pt-12">
    <div class="container mx-auto">
        <h2 class="mb-5 text-2xl my-2">
            Cele mai vandute
            <div class="badge badge-outline">Best</div>
        </h2>

        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            @for ($i = 0; $i < 3; $i++)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hiddeen">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                    <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </button>
                </div>

                <div class="px-5 py-3">
                    <h3 class="text-white-700 uppercase">Nume produs</h3>
                    <span class="text-white-500 mt-2">
                        99,99 Lei
                    </span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.1/cdn.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.1/module.cjs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.1/module.esm.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

@include('helpers.produse.noi')

<div class="container mx-auto divider pt-12"></div>

@include('helpers.produse.bestsell')