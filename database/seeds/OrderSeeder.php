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
        Order::create([
          'customer_name'=>'mohamed sherif',
          'total_price'=>'6500.55',
          'paid'=>'6000.55'
        ]);
        
        Order::create([
            'customer_name'=>'mahmoud saeed',
            'total_price'=>'84200',
            'paid'=>'84000'
          ]);
          
        Order::create([
            'customer_name'=>'mohamed magdy',
            'total_price'=>'4001.55',
            'paid'=>'3000.55'
          ]);
    }
}
