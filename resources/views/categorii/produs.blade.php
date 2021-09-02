@extends('layout.app')

@section('content')
<main class="my-8">
    <div class="container mx-auto px-6">
        @foreach ($produs_specific as $prd)
        <div class="md:flex md:items-center">
            <div class="w-full h-64 md:w-1/2 lg:h-96">
                <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{ $prd->gallery }}">
            </div>
            <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                <h3 class="text-white uppercase text-lg">{{ $prd->name }}</h3>
                <span class="text-white mt-3">{{ $prd->price }} Lei</span>
                <hr class="my-3">
                <span class="text-white mt-3">{{ $prd->description }} </span>
                <div class="flex items-center mt-6">
                    <form action="{{ route('adauga_in_cos') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value={{ $prd->id }}>
                        <button class="btn btn-primary" type="submit">Comanda acum</button>
                    </form>
                    <button class="btn btn-secondary mx-8">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        @endforeach

        <div class="mt-16">
            <h3 class="text-white text-2xl font-medium">Mai multe produse</h3>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                @for ($index = rand(1, 3); $index < rand(4, count($toate_produsele)); $index++)
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <a href="{{ route('produs', ['name' => $toate_produsele[$index]->name]) }}">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{ $toate_produsele[$index]->gallery }}')">
                        <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                    </a>
                    <div class="px-5 py-3">
                        <h3 class="text-netural uppercase">{{ $toate_produsele[$index]->name }}</h3>
                        <span class="text-white mt-2">{{ $toate_produsele[$index]->price }}</span>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</main>
@endsection