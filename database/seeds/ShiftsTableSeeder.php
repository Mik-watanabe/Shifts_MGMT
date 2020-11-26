<?php

use Illuminate\Database\Seeder;
use App\Models\Shift;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $firstday = Carbon::now()->firstOfMonth();
        
        $dataSet = [
           
            [
                'user_id' => 2,
                'shift_date' => $firstday->copy()->addDays(10),
                'shift_start' => $firstday->copy()->addDays(10)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(10)->setHour(13)
            ],

            [
                'user_id' => 2,
                'shift_date' => $firstday->copy()->addDays(2),
                'shift_start' => $firstday->copy()->addDays(2)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(2)->setHour(13)
            ],
            [
                'user_id' => 2,
                'shift_date' => $firstday->copy()->addDays(5),
                'shift_start' => $firstday->copy()->addDays(5)->setHour(10),
                'shift_end' => $firstday->copy()->addDays(5)->setHour(15)
            ],
            [
                'user_id' => 2,
                'shift_date' => $firstday->copy()->addDays(18),
                'shift_start' => $firstday->copy()->addDays(18)->setHour(9),
                'shift_end' => $firstday->copy()->addDays(18)->setHour(17)
            ],
            [
                'user_id' => 2,
                'shift_date' => $firstday->copy()->addDays(20),
                'shift_start' => $firstday->copy()->addDays(20)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(20)->setHour(13)
            ],
            [
                'user_id' => 3,
                'shift_date' => $firstday->copy()->addDays(19),
                'shift_start' => $firstday->copy()->addDays(19)->setHour(9),
                'shift_end' => $firstday->copy()->addDays(19)->setHour(15)
            ],
            [
                'user_id' => 3,
                'shift_date' => $firstday->copy()->addDays(3),
                'shift_start' => $firstday->copy()->addDays(3)->setHour(13),
                'shift_end' => $firstday->copy()->addDays(3)->setHour(19)
            ],
            [
                'user_id' => 3,
                'shift_date' => $firstday->copy()->addDays(10),
                'shift_start' => $firstday->copy()->addDays(10)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(10)->setHour(13)
            ],
            [
                'user_id' => 3,
                'shift_date' => $firstday->copy()->addDays(11),
                'shift_start' => $firstday->copy()->addDays(11)->setHour(15),
                'shift_end' => $firstday->copy()->addDays(11)->setHour(21)
            ],
            [
                'user_id' => 3,
                'shift_date' => $firstday->copy()->addDays(13),
                'shift_start' => $firstday->copy()->addDays(13)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(13)->setHour(13)
            ],
            [
                'user_id' => 4,
                'shift_date' => $firstday->copy()->addDays(19),
                'shift_start' => $firstday->copy()->addDays(13)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(13)->setHour(13)
            ],
            [
                'user_id' => 4,
                'shift_date' => $firstday->copy()->addDays(5),
                'shift_start' => $firstday->copy()->addDays(5)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(5)->setHour(13)
            ],
            [
                'user_id' => 4,
                'shift_date' => $firstday->copy()->addDays(20),
                'shift_start' => $firstday->copy()->addDays(20)->setHour(7),
                'shift_end' => $firstday->copy()->addDays(20)->setHour(13)
            ],
            
        ];

        foreach ($dataSet as $data) {
           Shift::create($data);
        }
    }
}

