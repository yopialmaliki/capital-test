<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $member_statis = [
            [
                "name" => 'John Doe One',
                "username" => '081234567891',
                "email" => 'john1@doe.com',
                'address' => fake('id_ID')->address(),
            ],
            [
                "name" => 'John Doe Two',
                "username" => '081234567892',
                "email" => 'john2@doe.com',
                'address' => fake('id_ID')->address(),
            ],
            [
                "name" => 'John Doe Three',
                "username" => '081234567893',
                "email" => 'john3@doe.com',
                'address' => fake('id_ID')->address(),
            ],
        ];

        foreach($member_statis as $idx => $member) {
            $code = strtoupper(substr(md5(time().rand(1,100).$idx), 0, 6));
            $gender = fake()->randomElement(['male', 'female']);

            $member_statis[$idx]['code'] = $code;
            $randomNumber = '';

            for ($i = 1; $i < 16; $i++) {
                $randomNumber .= mt_rand(0, 9);
            }

            $user = User::create([
                'username' => $member['username'],
                'name'  => $member['name'],
                'email'  => $member['email'],
                'password' => bcrypt('secret'),
                "phone_verified_at" => now(),
            ]);

            $members = Member::create([
                'user_id' => $user->id,
                'name'  => $member['name'],
                'gender'  => $gender,
                'identity_number'  => $randomNumber,
                'phone_number'     => $member['username'],
                'email' => fake('id_ID')->email(),
                'city' => fake('id_ID')->city(),
                'refferal_code' => $member_statis[$idx]['code']
            ]);
        }
    }
}
