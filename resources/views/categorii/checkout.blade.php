@extends('layout.app')

<?php
  $valoare_totala = 0;
  
  for ($index = 0; $index < count($produse); $index++) {
    $valoare_totala += $produse[$index]->price;
  }
?>

@section('content')
<div class="container mx-auto py-4">
    <div class="bg-neutral rounded-lg">
        <form method="POST" action="{{ route('after-checkout') }}">
            @csrf
        <h1 class="text-2xl px-4 py-4 font-semibold border-b">Checkout</h1>
        <h2 class="text-xxl px-8 py-4 font-semibold border-b"><i class="fas fa-user"></i> Date personale</h1>
        <div class="grid grid-cols-2 gap-4 px-8 py-8">
            <!-- 1 -->
                <div class="flex flex-col">
                    <label for="nume_utilizator" class="label">
                        <span class="label-text">
                            Nume
                        </span>
                    </label>

                    <input type="text" name="nume_utilizator" id="nume_utilizator" placeholder="Vasile" class="input input-bordered text-white">

                    @error ('nume_utilizator')
                    {{ $message }}
                    @enderror

                    <label for="nr_telefon" class="label">
                        <span class="label-text">
                            Numar de telefon
                        </span>
                    </label>

                    @error ('nr_telefon')
                    {{ $message }}
                    @enderror

                    <input type="text" name="nr_telefon" id="nr_telefon" placeholder="0700000000" class="input input-bordered text-white">

                    <label for="oras" class="label">
                        <span class="label-text">
                            Oras
                        </span>
                    </label>

                    @error ('oras')
                    {{ $message }}
                    @enderror

                    <input type="text" name="oras" id="oras" placeholder="0700000000" class="input input-bordered text-white">
                </div>

                <!-- 2 -->
                <div class="flex flex-col">
                    <label for="prenume_utilizator" class="label">
                        <span class="label-text">
                            Prenume
                        </span>
                    </label>

                    
                    <input type="text" name="prenume_utilizator" id="prenume_utilizator" placeholder="Iliescu" class="input input-bordered text-white">
                    
                    @error ('prenume_utilizator')
                    {{ $message }}
                    @enderror

                    <label for="judet" class="label">
                        <span class="label-text">
                            Judet
                        </span>
                    </label>

                    @error ('judet')
                    {{ $message }}
                    @enderror

                    <select class="select select-bordered w-full" name="judet" id="judet">
                        <option disabled="disabled" selected="selected">Alege judetul</option> 
                        <option>Alba</option> 
                        <option>Arad</option> 
                        <option>Arges</option>
                        <option>Bacau</option>
                        <option>Bihor</option>
                        <option>Bistrita-Nasaud</option>
                        <option>Botosani</option>
                        <option>Brasov</option>
                        <option>Braila</option>
                        <option>Bucuresti</option>
                        <option>Buzau</option>
                        <option>Caras-Severin</option>
                        <option>Calarasi</option>
                        <option>Cluj</option>
                        <option>Constanta</option>
                        <option>Covasna</option>
                        <option>Dambovita</option>
                        <option>Dolj</option>
                        <option>Galati</option>
                        <option>Giurgiu</option>
                        <option>Gorj</option>
                        <option>Harghita</option>
                        <option>Hunedoara</option>
                        <option>Ialomita</option>
                        <option>Iasi</option>
                        <option>Ilfov</option>
                        <option>Maramures</option>
                        <option>Mehedinti</option>
                        <option>Mures</option>
                        <option>Neamt</option>
                        <option>Olt</option>
                        <option>Prahova</option>
                        <option>Stau Mare</option>
                        <option>Salaj</option>
                        <option>Sibiu</option>
                        <option>Suceava</option>
                        <option>Teleorman</option>
                        <option>Timis</option>
                        <option>Tulcea</option>
                        <option>Vaslui</option>
                        <option>Valcea</option>
                        <option>Vrancea</option>
                    </select>

                    <label for="adresa_livrare" class="label">
                        <span class="label-text">
                            Adresa de livrare
                        </span>
                    </label>

                    @error ('adresa_livrare')
                    {{ $message }}
                    @enderror

                    <input type="text" name="adresa_livrare" id="adresa_livrare" placeholder="0700000000" class="input input-bordered text-white">
                </div>
        </div>
        <h2 class="text-xxl px-8 py-4 font-semibold border-b"><i class="fas fa-truck-moving"></i> Detalii livrare</h2>
        <div class="flex flex-col px-8 py-8">
            <div class="alert">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#2196f3" class="w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                  </svg> 
                  <label>Livrarea prin metoda "oficiu postal" este indisponibila. Multumim</label>
                </div>
            </div>
            <div class="form-control">
                <label class="cursor-pointer label">
                  <span class="label-text font-semibold"><i class="fas fa-truck-moving"></i>  Livrare standard</span> 
                  <input type="radio" name="curier" checked="checked" class="radio" value="">
                </label>
            </div>
            <div class="form-control">
                <label class="cursor-pointer label">
                  <span class="label-text font-semibold text-red-500"><i class="fas fa-warehouse"></i>  Oficiu postal</span> 
                  <input type="radio" name="oficiu_postal" checked="checked" disabled="disabled" class="radio" value="">
                </label>
            </div>
        </div>
        <h2 class="text-xxl px-8 py-4 font-semibold border-b"><i class="fas fa-money-check-alt"></i> Metoda de plata</h2>
        <div class="flex flex-col px-8 py-8">
            <div class="alert">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#2196f3" class="w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                  </svg> 
                  <label>Metoda de plata cu "cardul" va fi adaugata in viitor.</label>
                </div>
            </div>
            <div class="form-control">
                <label class="cursor-pointer label">
                  <span class="label-text font-semibold"><i class="fas fa-money-bill-wave"></i>  Ramburs la curier</span> 
                  <input type="radio" name="ramburs_la_curier" checked="checked" class="radio" value="">
                </label>
            </div>
            <div class="form-control">
                <label class="cursor-pointer label">
                  <span class="label-text font-semibold text-red-500"><i class="fas fa-money-check"></i> Card</span> 
                  <input type="radio" name="card" checked="checked" disabled="disabled" class="radio" value="">
                </label>
            </div>
        </div>
        <h2 class="text-xxl px-8 py-4 font-semibold border-b"><i class="fas fa-address-card"></i> Rezumat comanda</h2>
        @foreach ($produse as $produs)
        <div class="grid grid-cols-2 sm:grid-cols-8 gap-4 px-8 py-8">
            <div class="avatar">
                <div class="mb-8 rounded-box w-24 h-24 ring ring-primary ring-offset-base-100 ring-offset-2">
                  <img src="{{ $produs->gallery }}">
                </div>
            </div>
            <p>{{ $produs->name }}</p>
            <p>1</p>
            <p>{{ $produs->price }} Lei</p>
        </div>
        @endforeach
        <div class="flex flex-row-reverse px-4 gap-4">
            <input type="text" name="pret_total" id="pret_total" hidden="true"/>
            @error ('pret_total')
            {{ $message }}
            @enderror
            <p class="text-red-500 font-semibold text-2xl">{{ $valoare_totala }} Lei</p>
            <p class="font-semibold text-2xl">Total:</p>
        </div>
        <h2 class="text-xxl px-8 py-4 font-semibold border-b"><i class="fas fa-thumbs-up"></i> Finalizare</h2>
        <div class="flex justify-center py-8 px-8">
            <button class="btn btn-success" type="submit">Trimite comanda</button>
        </div>
        </form>
    </div>
</div>
@endsection