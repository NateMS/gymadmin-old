<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'firstname'     => 'Nadim',
            'lastname' => 'Salloum',
            'address' => 'Mattenstrasse 7',
            'zip' => '5507',
            'city' => 'Mellingen',
            'js_number' => '32423344',
            'stv_number' => '12341234',
            'iban' => 'CH10 1234 1234 12',
            'email'    => 'nadim@salloum.ch',
            'password' => bcrypt('secret')
        ]);

        $user->teams()->attach(1, ['role' => 'owner']);
        $user->assign('coach');
        $user->assign('coach-admin');

        auth()->login($user);

        factory(User::class, 50)
            ->create()
            ->each(function ($u) {
                $u->teams()->attach(1, ['role' => 'user']);
                $u->assign('coach');
            });;
    }
}
