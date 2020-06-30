<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_item')->insert([
            'item_id'=>'1',
            'order_id'=>'1',
            'numberOfItems'=>'1',
             'price'=>'2000.55'
        ]);
        DB::table('order_item')->insert([
            'item_id'=>'2',
            'order_id'=>'1',
            'numberOfItems'=>'1',
             'price'=>'4000.00'
        ]);
        DB::table('order_item')->insert([
            'item_id'=>'3',
            'order_id'=>'2',
            'numberOfItems'=>'1',
             'price'=>'75000.00'
        ]);
        DB::table('order_item')->insert([
            'item_id'=>'4',
            'order_id'=>'2',
            'numberOfItems'=>'1',
             'price'=>'9000.00'
        ]);
       
        DB::table('order_item')->insert([
            'item_id'=>'1',
            'order_id'=>'3',
            'numberOfItems'=>'1',
             'price'=>'2000.55'
        ]);

        DB::table('order_item')->insert([
            'item_id'=>'1',
            'order_id'=>'1',
            'numberOfItems'=>'1',
             'price'=>'2000.55'
        ]);
    }
}
