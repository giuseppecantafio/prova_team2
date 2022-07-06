<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newItem = new Item();
        $newItem->title='porcoddio';
        $newItem->description='alllaahahalllah';
        $newItem->price=23.12;
        $newItem->save();
    }
}
