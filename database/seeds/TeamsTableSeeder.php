<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'owner_id'  => App\User::first()->id,
            'name' => 'TSV Rohrdorf KuTu',
            'slug' => 'tsvrohrdorf'
        ]);
    }
}
