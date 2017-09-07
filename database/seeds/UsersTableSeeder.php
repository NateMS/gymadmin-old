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
            'name'     => 'Nadim Salloum',
            'email'    => 'nadim@salloum.ch',
            'password' => bcrypt('secret')
        ]);

        $user->teams()->attach(1, ['role' => 'owner']);
        factory(User::class, 50)
            ->create()
            ->each(function ($u) {
                $u->teams()->attach(1, ['role' => 'user']);
            });;
    }
}
