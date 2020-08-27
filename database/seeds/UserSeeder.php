<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@root.com',
            'password' => Hash::make('rootadmin'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()

        ]);
    }
}
