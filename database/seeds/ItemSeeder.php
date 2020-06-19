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
            'price'=>'2500.55'
        ]);
        Item::create([
            'category_id'=>'1',
            'item_name'=>'note8',
            'price'=>'3000'
        ]);
        Item::create([
            'category_id'=>'2',
            'item_name'=>'apple',
            'price'=>'75200'
        ]);
        Item::create([
            'category_id'=>'3',
            'item_name'=>'shawmi',
            'price'=>'9000'
        ]);
        Item::create([
            'category_id'=>'3',
            'item_name'=>'oppo',
            'price'=>'15000'
        ]);
    }
}
