<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(LaratrustSeeder::class);
        $super_admin  = Role::create([
            'name'          => 'super_admin', 
            'display_name'  => 'Super Administrator',
            'description'   => 'This is role of super admin, has full permissions'
        ]);
        $admin  = Role::create([
            'name'          => 'admin', 
            'display_name'  => 'Administrator',
            'description'   => 'This is role of admin, has partially permissions'
        ]);

        $partner = Role::create([
            'name'          => 'partner', 
            'display_name'  => 'Partner',
            'description'   => 'This is role of partner, who register to post a job'
        ]);

        $applicatn = Role::create([
            'name'          => 'applicant', 
            'display_name'  => 'Aapplicant',
            'description'   => 'This is role of applicant, who register to apply a job'
        ]);
    }
}
