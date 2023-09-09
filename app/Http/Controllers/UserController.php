<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('orders')->get();

        foreach ($users as $user) {
    		echo "User: {$user->name}<br>";

		    foreach ($user->orders as $order) {
		        echo "Invoice: {$order->invoice_number}, Amount: {$order->total_amount}<br>";
		    }

    		echo "<br>";
		}
    }
}
