<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Public user',
            'email' => 'public@test.com',
            'password' => bcrypt('holahola'),
            'role' => 2,
            'company_id' => 1,
        ]);

        \DB::table('users')->insert([
            'name' => 'Private user',
            'email' => 'private@test.com',
            'password' => bcrypt('holahola'),
            'role' => 2,
            'company_id' => 18,
        ]);

        \DB::table('users')->insert([
            'name' => 'Admin user',
            'email' => 'admin@test.com',
            'password' => bcrypt('holahola'),
            'role' => 1,
            'company_id' => 0,
        ]);

        \DB::table('users')->insert([
            'name' => 'Public 2',
            'email' => 'public2@test.com',
            'password' => bcrypt('holahola'),
            'role' => 2,
            'company_id' => 2,
        ]);
    }
}
