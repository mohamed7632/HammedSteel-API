<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'category_id'=>'1',
            'item_name'=>'j7pro',
            'number '=> 10,
            'price'=>'2500.55'
        ]);
        Item::create([
            'category_id'=>'1',
            'item_name'=>'note8',
            'number '=> 23,
            'price'=>'3000'
        ]);
        Item::create([
            'category_id'=>'2',
            'item_name'=>'apple',
            'number '=> 40,
            'price'=>'75200'
        ]);
        Item::create([
            'category_id'=>'3',
            'item_name'=>'shawmi',
            'number '=> 48,
            'price'=>'9000'
        ]);
        Item::create([
            'category_id'=>'3',
            'item_name'=>'oppo',
            'number '=> 67,
            'price'=>'15000'
        ]);
    }
}
