<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Computer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::factory(5)->create();
        Computer::factory(20)->create();
        Order::factory(20)->create()->each(function($order){
            $id=range(1, 20);
            shuffle($id);
            $slice=array_slice($id, 1, 10);
            $order->computers()->attach($slice);
        });
    }
}
