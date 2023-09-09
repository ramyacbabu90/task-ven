<?php

use Illuminate\Database\Seeder;
use App\User;

class Userseeder extends Seeder
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
                'name' => 'User One',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'User two',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456'),
            ]
        ];
        User::truncate();
        User::insert($aData);
    }
}
