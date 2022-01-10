<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Érico Rosiski Weber',
            'email' => 'ericoweber@hotmail.com',
            'occupation' => 'Student',
            'contact_number' => '+55 991344031',
            'course' => 'Engineering',
            'password' => Hash::make('ericoweber'),
            'is_admin' => true,
        ]);
        for ($i = 0; $i < 25; $i++) {
            User::create([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'occupation' => Str::random(10),
                'contact_number' => Str::random(10),
                'course' => Str::random(10),
                'password' => Hash::make(Str::random(10)),
                'is_admin' => $i / 2 == 0 ? true : false,
            ]);
        }
    }
}
