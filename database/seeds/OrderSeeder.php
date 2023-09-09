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
       $aData = [
            [
                'user_id' => '1',
                'invoice_number' => 'ORDN001',
                'total_amount' => 1500,
            ],
            [
                'user_id' => '1',
                'invoice_number' => 'ORDN002',
                'total_amount' => 500,
            ],[
                'user_id' => '2',
                'invoice_number' => 'ORDN003',
                'total_amount' => 1000,
            ],
            
        ];

        Order::truncate();
        Order::insert($aData);
    }
}
