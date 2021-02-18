<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'user_id' => 'PRATIK',
                'address' => 'address 1 pratik',
                'cuser' => 'BACKEND-USER',
                'uuser' => 'BACKEND-USER',
            ],
            [
                'user_id' => 'SONALI-FERM',
                'address' => 'address 1 Sonali',
                'cuser' => 'BACKEND-USER',
                'uuser' => 'BACKEND-USER',
            ],
            [
                'user_id' => 'SONALI-FERM',
                'address' => 'address 2 Sonali',
                'cuser' => 'BACKEND-USER',
                'uuser' => 'BACKEND-USER',
            ],
            [
                'user_id' => 'PRATIK',
                'address' => 'address 2 pratik',
                'cuser' => 'BACKEND-USER',
                'uuser' => 'BACKEND-USER',
            ],
            [
                'user_id' => 'SONALI-FERM',
                'address' => 'address 3 Sonali',
                'cuser' => 'BACKEND-USER',
                'uuser' => 'BACKEND-USER',
            ],
            [
                'user_id' => 'PRATIK',
                'address' => 'address 3 pratik',
                'cuser' => 'BACKEND-USER',
                'uuser' => 'BACKEND-USER',
            ]
            );
        foreach($users as $user){
            address::create($user);
        }
    }
}
