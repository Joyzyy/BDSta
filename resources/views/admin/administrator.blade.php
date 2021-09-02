@extends('layout.app')

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
                        @foreach ($produse as $prd)
                        <?php $k = 0;?>
                        <tr class="bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img src="{{ $prd->gallery }}" alt="" class="rounded-full h-12 w-12 object-cover">
                                    <div class="ml-3">
                                        <div>{{ $prd->name }}</div>
                                        <div class="text-gray-500">id:</div>
                                    </div>
                                </div>
                            </td>

                            <td class="p-3">
                                <?php 
                                    $xd = DB::table('order')->select('nume', 'prenume', 'adresa', 'oras', 'judet', 'order_id', 'pret_final')->where('product_id', $prd->id)->get();
                                    echo $xd[$k]->nume ?? null;
                                    echo ' '.$xd[$k]->prenume ?? null;
                                ?>
                            </td>

                            <td class="p-3 font-bold">
                                Jud. {{$xd[$k]->judet}}, Oras {{$xd[$k]->oras}}, {{ $xd[$k]->adresa }}
                            </td>
                            <td class="p-3">
                                {{$xd[$k]->order_id}}
                            </td>
                            <td class="p-3">
                                {{$xd[$k]->pret_final}} LEI
                            </td>
                            <td class="p-3">
                                
                            </td>
                        </tr>
                        <?php $k++ ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .table { border-spacing: 0 25px; }
        i { font-size: 1rem !important; }
        .table tr { border-radius: 25px; }
        tr td:nth-child(n+6), tr th:nth-child(n+6) { border-radius: 0 .625rem .625rem 0; }
        tr td:nth-child(1), tr th:nth-child(1) { border-radius: .625rem 0 0 .625rem; }
    </style>
@endsection