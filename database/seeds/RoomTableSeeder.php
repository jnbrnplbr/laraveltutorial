<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Room::create([
         'title'  => 'Room 101',
         'description'  => 'Economy'
      ]);
      Room::create([
         'title'  => 'Room 102',
         'description'  => 'Deluxe'
      ]);
      Room::create([
         'title'  => 'Room 103',
         'description'  => 'Superior'
      ]);            
    }
}
