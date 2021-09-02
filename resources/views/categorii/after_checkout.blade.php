@extends('layout.app')


<?php
    $get_order_table_max_id = DB::table('order')->max("id");
    $order_id_by_max_id = DB::table('order')->where('id', $get_order_table_max_id)->get();
?>

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="p-6 card bordered">
            <p class="text-xxl text-white font-semibold">Multumim pentru comanda dvs! Urmeaza sa fiti informat despre detaliile despre comanda prin SMS, pe numarul de telefon pe care l-ati introdus la pagina de checkout.</p>
            <p class="text-xxl text-red-500 font-semibold">Numar comanda: 
                {{ $order_id_by_max_id[0]->order_id }}
            </p>
        </div>
    </div>
</div>
@endsection