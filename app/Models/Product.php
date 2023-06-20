<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'slug',
        'summary',
        'text',
        'price',
        'quantity'
    ];

    public function getCalculTVA($priceHT) {

        return [
            'TVA' =>  $priceHT * .2,
            'priceTTC' => $priceHT * 1.20
            ];
    }


}
