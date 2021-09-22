@extends('layout.app')

<?php

$x = DB::select('select id from users');

?>

@section('content')
    <div class="flex items-center justify-center">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible">
                <table class="table text-white border-separate space-y-12 text-sm">
                    <thead class="bg-neutral text-white">
                        <tr>
                            <th class="p-3">Produs</th>
                            <th class="p-3 text-left">Nume</th>
                            <th class="p-3 text-left">Adresa livrare</th>
                            <th class="p-3 text-left">Nr.Comanda</th>
                            <th class="p-3 text-left">Pret</th>
                            <th class="p-3 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($iIdx = count($x) - 1; $iIdx > 0; --$iIdx)
                            <?php $o = DB::table('order')->join('products', 'order.product_id', '=', 'products.id')->where('order.user_id', $x[$iIdx]->id)->select('*')->orderBy('order_id', 'desc')->get(); ?>
                            @foreach ($o as $p)
                                <tr class="bg-gray-800">
                                    <td class="p-3">
                                        <div class="flex align-items-center">
                                            <img src="{{ $p->gallery }}" alt="" class="rounded-full h-12 w-12 object-cover">
                                            <div class="ml-3">
                                                <div>{{ $p->name }}</div>
                                                <div class="text-gray-500">id:</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="p-3">
                                        {{ $p->nume }} {{ $p->prenume }}
                                    </td>

                                    <td class="p-3 font-bold">
                                        Jud. {{ $p->judet }}, Oras {{ $p->oras }}, {{$p->adresa}}, Tel: {{$p->numar_telefon}}
                                    </td>
                                    <td class="p-3">
                                        {{$p->order_id}}
                                    </td>
                                    <td class="p-3">
                                        {{$p->price}} LEI
                                    </td>
                                    <td class="p-3">
                                        <button id="buttonmodal" class="btn btn-primary show-modal">Detalii</button>
                                        <button class="btn btn-secondary">X</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="modal"
        class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-gray-800 bg-opacity-20 transform scale-0 transition-transform duration-300">
        <div class="bg-neutral w-1/2 h-1/2 p-12"> 
            <button id="closebutton" type="button" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Minus placeat maiores repudiandae, error perferendis inventore 
                aspernatur voluptatum omnis sint debitis!
            </p>
        </div>
    </div>


    <script> 
        const button = document.getElementById('buttonmodal')
        const closebutton = document.getElementById('closebutton')
        const modal = document.getElementById('modal')

        button.addEventListener('click',()=>modal.classList.add('scale-100'))
        closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))
    </script>

    <style>
        .table { border-spacing: 0 25px; }
        i { font-size: 1rem !important; }
        .table tr { border-radius: 25px; }
        tr td:nth-child(n+6), tr th:nth-child(n+6) { border-radius: 0 .625rem .625rem 0; }
        tr td:nth-child(1), tr th:nth-child(1) { border-radius: .625rem 0 0 .625rem; }
    </style>
@endsection