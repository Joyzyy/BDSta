<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $table = "order";

    protected $fillable = [
        'product_id',
        'user_id',
        'nume',
        'prenume',
        'numar_telefon',
        'judet',
        'oras',
        'adresa',
        'pret_final',
        'order_id'
    ];
}
