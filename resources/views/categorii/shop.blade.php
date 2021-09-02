@extends('layout.app')

@section('content')
    @if (Route::currentRouteName() == 'barbati')
    @endif

    <h1 class="mb-5 text-5xl font-bold text-center">
      Sectiunea - {{ Route::currentRouteName() }}
    </h1> 

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-1 sm:grid-cols-4 p-8 md:gap-4">
            @foreach ($produs as $produse)
            @if ($produse->category == Route::currentRouteName())
        <div class="container mx-auto py-12">
          <div class="card flex flex-col justify-center p-10 bg-neutral rounded-lg shadow-2xl transition transform-gpu duration-500 ease-in-out shadow-lg hover:shadow-xl hover:scale-105 hover:-translate-y-4">
            <div class="prod-title">
              <p class="text-2xl uppercase text-white-900 font-bold">{{ $produse->name }}</p>
              <p class="uppercase text-sm text-white-400">
                {{ $produse->description }}
              </p>
            </div>
            <div class="prod-img">
              <a href="{{ route('produs', ['name' => $produse->name]) }}"><img src="{{ $produse->gallery }}"
                   class="w-full object-cover object-center" style="max-width: 100%; max-height: 100%; height: 350px; width:350px;"/></a>
            </div>
            <div class="prod-info grid gap-10 py-4">
              <div class="flex flex-col md:flex-row justify-between items-center text-gray-400">
                <p class="font-bold text-xl">{{ $produse->price }} LEI</p>
                <form action="{{ route('adauga_in_cos') }}" method="post">
                  @csrf
                  <input type="hidden" name="product_id" value={{ $produse->id }}>
                  <button
                  class="px-6 py-2 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none" type="submit">Adauga in cos</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
@endsection