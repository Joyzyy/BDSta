<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => '1',
                'name' => 'Tricou Nike',
                'price' => '200',
                'category' => 'barbati',
                'description' => 'Un tricou nike foarte misto',
                'gallery' => 'https://i.ibb.co/XjbB25F/nike-tricou-sportswear-tineri-tricouri-negru-ar5088-010.webp'
            ],

            [
                'id' => '2',
                'name' => 'Tricou Adidas',
                'price' => '150',
                'category' => 'barbati',
                'description' => 'Un tricou adidas foarte misto',
                'gallery' => 'https://i.ibb.co/1fc21gp/GQ8921-APP-photo-front-white-850x700.jpg'
            ],

            [
                'id' => '3',
                'name' => 'Hanorac Adidas',
                'price' => '350',
                'category' => 'barbati',
                'description' => 'Un hanorac adidas foarte misto',
                'gallery' => 'https://i.ibb.co/P6fydBW/hanorac-barbati-adidas-originals-trefoil-hoody-cx1900-17848-1.jpg'
            ],

            [
                'id' => '4',
                'name' => 'Hanorac Nike',
                'price' => '450',
                'category' => 'barbati',
                'description' => 'Un hanorac nike foarte misto',
                'gallery' => 'https://i.ibb.co/jg7tBpM/res-c9492fc5afccc43aff89d10dbaa0d765.jpg'
            ],

            [
                'id' => '5',
                'name' => 'Pantaloni Nike',
                'price' => '150',
                'category' => 'barbati',
                'description' => 'Un pantalon nike foarte misto',
                'gallery' => 'https://i.ibb.co/NxJ4HJy/res-96f73cb056f94bb345db22d2b3406e24.webp'
            ],

            
            [
                'id' => '6',
                'name' => 'Pantaloni Nike',
                'price' => '350',
                'category' => 'femei',
                'description' => 'Un pantalon nike foarte misto',
                'gallery' => 'https://i.ibb.co/bHHsTdM/pantaloni-nike-u-nsw-fleece-po-bottom-zero.jpg'
            ],
        ]);
    }
}
