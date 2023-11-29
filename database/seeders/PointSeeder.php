<?php

namespace Database\Seeders;

use App\Models\Point;
use App\Models\PointHistory;
use App\Models\User;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::get();
        foreach($users as $idx => $user) {
            $point = '';

            if($idx % 2 == 0){
                $out = 8;
            } else {
                $out = 7;
            }

            for ($i = 0; $i < $out; $i++) {
                $point .= mt_rand(0, 9);
            }

            $point = Point::create([
                'point'  => $point,
                'user_id' => $user['id'],
            ]);

        }
    }
}
