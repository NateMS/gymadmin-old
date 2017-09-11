<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;
use App\Course;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCoachRoles();
        $this->createCoachAdminRoles();
    }

    private function createCoachRoles()
    {
        $name = 'coach';
        Bouncer::allow($name)->to('view-coaches');
        Bouncer::allow($name)->to('view', Course::class);
        Bouncer::allow($name)->to('signup', Course::class);
    }

    private function createCoachAdminRoles()
    {
        $name = 'coach-admin';
        Bouncer::allow($name)->toManage(Course::class);
    }
}
