<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'test',
            'description' => 'Testing Category',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()

        ]);
    }
}
