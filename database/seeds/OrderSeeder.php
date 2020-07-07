<?php

use Illuminate\Database\Seeder;
use App\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i  = 0 ; $i < 10000 ; $i++){
        Order::create([
          'customer_name'=>'mahmoud',
          'total_price'=>500,
          'paid'=> 100,
          'paidBy'=>'bank'
      ]);
       }
    }
}
